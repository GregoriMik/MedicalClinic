<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class DoctorController extends Controller
{
    public function index(){

        $users=User::all();


        return view('doctors.list',["doctorsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
    public function show($id){

        $doctor=User::find($id);

        return view('doctors.show',["doctor"=>$doctor,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
    public function create(){


        User::create([
            
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
    public function edit($id){
        $doctor=User::find($id);

        $doctor->name = "Johnson Allan";

        $doctor->save();

        return redirect('doctors');
    }
}
