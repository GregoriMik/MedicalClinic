<?php

namespace App\Http\Controllers;

use App\Models\Visit;

use Illuminate\Http\Request;

use App\Repositories\VisitRepository;

use App\Repositories\UserRepository;
class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo){

        $visits= $visitRepo -> getAll();


        return view('visits.list',["visits"=>$visits,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł wizyt"]);
    }
    public function create(UserRepository $userRepo){

       $doctors = $userRepo->getAllDoctors();
       
       $patients = $userRepo->getAllPatients();


        return view('visits.create',["patients"=>$patients,
                                     "doctors"=>$doctors,
                                     "footerYear"=>date("Y"),
                                     "title"=>" Moduł wizyt"]);
    }

    public function store(Request $request){
        $visit = new Visit;
        $visit ->doctor_id = $request->input('doctor');
        $visit ->patient_id = $request->input('patient');
        $visit ->date = $request->input('date');
        $visit ->save();

        return redirect()->action('VisitController@index');
    }

}
