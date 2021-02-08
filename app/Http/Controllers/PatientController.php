<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; //Middleware
class PatientController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(UserRepository $userRepo){

        
        
        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $users= $userRepo -> getAllPatients();


        return view('patients.list',["patientsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł pacjentów"]);
    }

    public function show(UserRepository $userRepo, $id){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $patient= $userRepo -> find($id);

        return view('patients.show',["patient"=>$patient,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
}
