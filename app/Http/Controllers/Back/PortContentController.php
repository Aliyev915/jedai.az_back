<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortContentRequest;
use App\Services\PortContentService;
use App\Models\PortCatToContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortContentController extends Controller
{
    protected $service;

    public function __construct(PortContentService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $portfolio = $this->service->getPaginate();
        return view('admin.portfolio.port_index')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->service->getAllCategory();
        return view('admin.portfolio.port_create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortContentRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image')){
            $imageName = Str::slug($request->title).'-'.date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/portfolio/'),$imageName);
            $data['image'] = '/images/portfolio/'.$imageName;
        }

        if($request->hasFile('image_mob')){
            $imageName2 = Str::slug($request->title).'-mob-'.date('ymdis').'.'.$request->image_mob->getClientOriginalExtension();
            $request->image_mob->move(public_path('/images/portfolio/'),$imageName2);
            $data['image_mob'] = '/images/portfolio/'.$imageName2;
        }
        
        $this->service->create($data) ;
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Əlavə Edildi');
        return redirect()->route('content.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $portfolio = $this->service->getById($id);
        $categories = $this->service->getAllCategory();
        $cat_id = PortCatToContent::where('port_content_id', $id)->pluck('port_category_id');
        return view('admin.portfolio.port_update', compact('portfolio', 'categories','cat_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortContentRequest $request, $id)
    {
        $data = $request->all();
        if($request->hasFile('image')){
            $imageName = Str::slug($request->title).'-'.date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/portfolio/'),$imageName);
            $data['image'] = '/images/portfolio/'.$imageName;
        }
        
        if($request->hasFile('image_mob')){
            $imageName2 = Str::slug($request->title).'-mob-'.date('ymdis').'.'.$request->image_mob->getClientOriginalExtension();
            $request->image_mob->move(public_path('/images/portfolio/'),$imageName2);
            $data['image_mob'] = '/images/portfolio/'.$imageName2;
        }

        $this->service->update($data, $id);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Redaktə Edildi');
        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->getById($id)->delete();
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Zibil Qutusuna Atıldı');
        return redirect()->back();
    }

    public function status(Request $request)
    {
        $data = $this->service->getById($request->id);
        $data->status = $request->status=="true" ? 1:0;
        return $data->save();
    }

    public function trashedIndex()
    {
        $data = $this->service->getTrashed();
        return view('admin.portfolio.port_trashed')->with('data', $data);
    }

    public function hardDelete($id)
    {
        $this->service->hardDelete($id);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Silindi');
        return redirect()->back();
    }

    public function recover($id)
    {
        $this->service->recover($id);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Zibil Qutusundan Geri Qaytarıldı');
        return redirect()->back(); 
    }

}
