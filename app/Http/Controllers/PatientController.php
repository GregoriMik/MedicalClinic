<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(UserRepository $userRepo){

        
        
        $users= $userRepo -> getAllPatients();


        return view('patients.list',["patientsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł pacjentów"]);
    }

    public function show(UserRepository $userRepo, $id){

        $patient= $userRepo -> find($id);

        return view('patients.show',["patient"=>$patient,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
}
