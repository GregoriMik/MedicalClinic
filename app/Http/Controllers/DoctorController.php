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
}
