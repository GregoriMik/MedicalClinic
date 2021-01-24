<?php

namespace App\Repositories;

use App\Models\User;

use DB;

class UserRepository extends BaseRepository{

    public function __construct(User $model){

        $this->model = $model;

    }

    public function getAllDoctors(){
        return $this->model->where('type','doctor')->orderBy('name','asc')->get();
    }

    public function getDoctorsStatistics(){
        return DB::table('users')->select(DB::raw('count(*) as user_count, status'))->where('type','doctor')->groupBy('status')->get();
    }
    
}

