<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Services\TeamService;
use File;

class TeamController extends Controller
{
    protected $service;

    public function __construct(TeamService $service)
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
        $teams = $this->service->getAll('sort','ASC');
        return view('admin.team.index')->with('teams',$teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $this->service->create($request);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetrildi', 'Əlavə Edildi' );
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
    public function update(TeamRequest $request, $id)
    {
        $this->service->update($id, $request);
        toastr()->success('Əməliyyat Uğurla Yerinə Yetrildi', 'Redaktə Edildi' );
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
        $data = $this->service->getById($id);
        if(File::exists(public_path($data->image)))
        {
            unlink(public_path($data->image));
        }
        
        $this->service->getById($id)->delete();
        toastr()->success('Əməliyyat Uğurla Yerinə Yetirildi', 'Silindi');
        return redirect()->back(); 
    }

    public function status(Request $request)
    {
        $data = $this->service->getById($request->id);
        $data->status = $request->status=="true" ? 1:0;
        return $data->save();
    }

}
