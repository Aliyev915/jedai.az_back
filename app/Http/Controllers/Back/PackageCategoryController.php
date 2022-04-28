<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PackageCategoryRequest;
use App\Services\PackageCategoryService;

class PackageCategoryController extends Controller
{
    protected $service;

    public function __construct(PackageCategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getAll();
        return view('admin.packages.category_index')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageCategoryRequest $request)
    {
        $data = $request->all();
        $this->service->create($data);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Əlavə Edildi');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json($this->service->getById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageCategoryRequest $request, $id)
    {
        $data = $request->all();


        $this->service->update($data, $id);
        
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Redaktə Edildi');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);    
        toastr()->error('Əməliyyat Uğurla Yerinə Yetirildi', 'Kateqoriya Silindi');
        return redirect()->back();
    }


    public function status(Request $request){
        return $this->service->status($request->id, $request->status);
    }
}
