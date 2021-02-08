<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;

use App\Repositories\SpecializationRepository;

use Illuminate\Support\Facades\Auth; //Middleware
class SpecializationController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(SpecializationRepository $specializationRepo){

        if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
            return redirect()->route('login');
        }
        $specializations= $specializationRepo -> getAll();


        return view('specializations.list',["specializationsList"=>$specializations,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł specializacji"]);
    }

    public function create(){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        return view('specializations.create',["footerYear"=>date("Y")]);
    }

    public function store(Request $request){
        
        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $specialization = new Specialization;
        $specialization ->name = $request->input('name');
        $specialization ->save();

        return redirect()->action('SpecializationController@index');
    }

}
