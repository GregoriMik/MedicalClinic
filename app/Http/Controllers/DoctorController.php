<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;
class DoctorController extends Controller
{
    public function index(UserRepository $userRepo){

        $statistics = $userRepo ->getDoctorsStatistics();
        
        $users= $userRepo -> getAllDoctors();


        return view('doctors.list',["doctorsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy",
                                    "statistics"=>$statistics]);
    }


    public function listBySpecialization(UserRepository $userRepo,$id){

        $statistics = $userRepo ->getDoctorsStatistics();
        
        $users= $userRepo -> getDoctorsBySpecialization($id);


        return view('doctors.list',["doctorsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy",
                                    "statistics"=>$statistics]);
    }









    public function show(UserRepository $userRepo, $id){

        $doctor= $userRepo -> find($id);

        return view('doctors.show',["doctor"=>$doctor,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
    public function create(UserRepository $userRepo){


        $userRepo->create([
            
                'name'=>'Allan Johnson',
                'email'=>'allan@johnson.com',
                'password'=>bcrypt('password'),
                'phone'=>122333444,
                'address'=>"ul.Wyspiańskiego 21, 32-700 Bochnia",
                'status'=>'Active',
                'pesel'=>'63010222333',
                'type'=>'doktor'
            ]);
        


        return redirect ('doctors');
    }
    public function edit(UserRepository $userRepo, $id){
        
        $doctor= $userRepo -> update(["name" => "Johnson Allan"], $id);

        return redirect('doctors');
    }
}
