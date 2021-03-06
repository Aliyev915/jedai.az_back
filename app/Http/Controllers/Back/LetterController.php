<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LetterRequest;
use App\Models\Letter;
use Illuminate\Support\Facades\File;

class LetterController extends Controller
{
    protected $model;

    public function __construct(Letter $partner)
    {
        $this->model = $partner;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = $this->model->orderBy('sort', 'ASC')->paginate(10);
        return view('admin.letter.index')->with('letters', $letters);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LetterRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $imageName = date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/letters/'),$imageName);
            $data['image'] = '/images/letters/'.$imageName;
        }
        $this->model->create($data);
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
        return response()->json($this->model->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LetterRequest $request, $id)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $unl_img = $this->model->find($id);
            if(File::exists(public_path($unl_img->image)))
            {
                unlink(public_path($unl_img->image));
            }
            $imageName = date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/letters/'),$imageName);
            $data['image'] = '/images/letters/'.$imageName;
        }
        $update = $this->model->find($id);
        $update->fill($data)->save();
        toastr()->success('??m??liyyat U??urla Yerin?? Yetirildi', 'Redakt?? Edildi');
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
        $data = $this->model->find($id);
        if(File::exists(public_path($data->image)))
        {
            unlink(public_path($data->image));
        }
        $data->delete(); 
        toastr()->error('??m??liyyat U??urla Yerin?? Yetirildi', 'Partner Silindi');
        return redirect()->back();

    }

    public function status(Request $request)
    {
        $data = $this->model->findOrFail($request->id);
        $data->status = $request->status=="true" ? 1:0;
        return $data->save();
    }
}
