<?php

namespace App\Services;

use App\Repositories\TeamRepository;
use App;
use Illuminate\Support\Str;
use File;

class TeamService 
{
    protected $repository;

    public function __construct(TeamRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll($orderBy = 'id', $sortBy = 'DESC')
    {
        if(App::isLocale('en')){
            $lang = 1;
        }
        elseif(App::isLocale('ru'))
        {
            $lang = 2;
        }
        else{
            $lang = 0;
        }

        return $this->repository->getAll($lang, $orderBy, $sortBy);
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function create($request)
    {
        $data = $request->all();
        
        if(App::isLocale('en')){
            $data['lang'] = 1;
        }
        elseif(App::isLocale('ru'))
        {
            $data['lang'] = 2;
        }
        else{
            $data['lang'] = 0;
        }

        if($request->hasFile('image'))
        {
            $imageName = Str::slug($request->name_surname).'-'.date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/team/'), $imageName);
            $data['image'] = '/images/team/'.$imageName;
        }

        return $this->repository->create($data);
    }

    public function update($id, $request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {            
            $unl_img = $this->repository->getById($id);
            if(File::exists(public_path($unl_img->image)))
            {
                unlink(public_path($unl_img->image));
            }
            $imageName = $request->name_surname.'-'.date('ymdis').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/team/'),$imageName);
            $data['image'] = '/images/team/'.$imageName;
        }

        if(App::isLocale('en')){
            $data['lang'] = 1;
        }
        elseif(App::isLocale('ru'))
        {
            $data['lang'] = 2;
        }
        else{
            $data['lang'] = 0;
        }

        return $this->repository->update($id, $data);
    }

}