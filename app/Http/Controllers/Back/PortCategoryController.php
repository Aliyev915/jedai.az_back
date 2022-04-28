<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PortCategoryRequest;
use App\Models\PortCategory;
use App\Services\PortCategoryService;
use Illuminate\Support\Str;

class PortCategoryController extends Controller
{

    protected $service;

    public function __construct(PortCategoryService $service)
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
        $categories = $this->service->getAll();
        return view('admin.portfolio.category_index')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortCategoryRequest $request)
    {
        $data = $request->all();
        // $this->service->create($data);
        PortCategory::create(
            [
                'title' => json_decode($data['title_lang'])->az,
                'lang' => 0,
                'slug' => Str::slug(json_decode($data['title_lang'])->az),
                'sort' => $data['sort']
            ]
        );
        PortCategory::create(
            [
                'title' => json_decode($data['title_lang'])->en,
                'lang' => 1,
                'slug' => Str::slug(json_decode($data['title_lang'])->en),
                'sort' => $data['sort']
            ]
        );
        PortCategory::create(
            [
                'title' => json_decode($data['title_lang'])->ru,
                'lang' => 2,
                'slug' => Str::slug(json_decode($data['title_lang'])->ru),
                'sort' => $data['sort']
            ]
        );
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
    public function update(PortCategoryRequest $request, $id)
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


    public function status(Request $request)
    {
        return $this->service->status($request->id, $request->status);
    }
}
