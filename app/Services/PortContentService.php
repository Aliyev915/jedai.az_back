<?php

namespace App\Services;

use App\Repositories\PortContentRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

class PortContentService 
{
    protected $repository;

    public function __construct(PortContentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll($orderBy = 'sort', $sortBy = 'ASC')
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

    public function getPaginate($count = 10, $orderBy = 'sort', $sortBy = 'ASC')
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
        return $this->repository->getPaginate($lang, $count, $orderBy, $sortBy);
    }

    public function takeData($count = 10, $orderBy = 'sort', $sortBy = 'ASC')
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
        return $this->repository->getPaginate($lang, $count, $orderBy, $sortBy);
    }

    public function getAllCategory($orderBy = 'sort', $sortBy = 'ASC')
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
        return $this->repository->getAllCategory($lang, $orderBy, $sortBy);
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function getBySlug($id)
    {
        return $this->repository->getBySlug($id);
    }

    public function create(array $data)
    {
        $slug = Str::slug($data['title']);
        $countSlug = $this->repository->getBySlug($slug)->count();
        if($countSlug>0){
            $slug = $slug."-".date('ymdis');
        }
        $data['slug'] = $slug;

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
        
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        $slug = Str::slug($data['title']);
        $countSlug = $this->repository->getBySlug($slug)->count();
        if($countSlug>0){
            $slug = $slug."-".date('ymdis');
        }
        $data['slug'] = $slug;
        
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
        
        return $this->repository->update($data, $id);
    }

    public function getTrashed()
    {
        return $this->repository->getTrashed();
    }

    public function getTrashedById($id)
    {
        return $this->repository->getTrashedById($id);
    }

    public function hardDelete($id)
    {       
        $data = $this->repository->getTrashedById($id);
        if(File::exists(public_path($data->image)))
        {
            unlink(public_path($data->image));
        }
        if(File::exists(public_path($data->image_mob)))
        {
            unlink(public_path($data->image_mob));
        }

        return $this->repository->hardDelete($id);
    }

    public function recover($id)
    {
        return $this->repository->recover($id);
    }

}