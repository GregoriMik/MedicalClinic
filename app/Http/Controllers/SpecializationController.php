<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\SpecializationRepository;

class SpecializationController extends Controller
{
    public function index(SpecializationRepository $specializationRepo){

        $specializations= $specializationRepo -> getAll();


        return view('specializations.list',["specializationsList"=>$specializations,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł specializacji"]);
    }
}
