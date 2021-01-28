<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;

use App\Repositories\SpecializationRepository;

class SpecializationController extends Controller
{
    public function index(SpecializationRepository $specializationRepo){

        $specializations= $specializationRepo -> getAll();


        return view('specializations.list',["specializationsList"=>$specializations,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł specializacji"]);
    }

    public function create(){

        return view('specializations.create',["footerYear"=>date("Y")]);
    }

    public function store(Request $request){
        $specialization = new Specialization;
        $specialization ->name = $request->input('name');
        $specialization ->save();

        return redirect()->action('SpecializationController@index');
    }

}
