<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Specialization;

use App\Models\Visit;

use App\Repositories\UserRepository;

use Illuminate\Support\Facades\Auth; //Middleware
class DoctorController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(UserRepository $userRepo){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $statistics = $userRepo ->getDoctorsStatistics();
        
        $users= $userRepo -> getAllDoctors();


        return view('doctors.list',["doctorsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy",
                                    "statistics"=>$statistics]);
    }


    public function listBySpecialization(UserRepository $userRepo,$id){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $statistics = $userRepo ->getDoctorsStatistics();
        
        $users= $userRepo -> getDoctorsBySpecialization($id);


        return view('doctors.list',["doctorsList"=>$users,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy",
                                    "statistics"=>$statistics]);
    }


    public function show(UserRepository $userRepo, $id){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $doctor= $userRepo -> find($id);

        return view('doctors.show',["doctor"=>$doctor,
                                    "footerYear"=>date("Y"),
                                    "title"=>" Moduł lekarzy"]);
    }
    public function create(UserRepository $userRepo){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $specializations = Specialization::all();

        return view ('doctors.create',["specializations" => $specializations,
                                        "footerYear"=>date("Y")]);
    }
    public function store(Request $request){

        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5',
            'phone'=>'required',
            'address'=>'required',
            'pesel'=>'required'
        ]);

        $doctor = new User;
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->password = bcrypt($request->input('password'));
        $doctor->phone = $request->input('phone');
        $doctor->address = $request->input('address');
        $doctor->pesel = $request->input('pesel');
        $doctor->status = $request->input('status');
        $doctor->images = $request->input('images');
        $doctor->type = 'doctor';
        $doctor->save();

        $doctor->specializations()->sync($request->input('specializations'));


        return redirect()->action('DoctorController@index');
    }
    public function edit(UserRepository $userRepo, $id){
        
        // if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
        //     return redirect()->route('login');
        // }
        // $doctor= $userRepo -> update(["name" => "Johnson Allan"], $id); //Static edit doctor
        $doctor= $userRepo -> find($id);

        $specializations = Specialization::all();

        return view ('doctors.edit',["specializations"=>$specializations,
                                     "doctor" => $doctor,
                                     "footerYear"=>date("Y")]);
    }
    public function editStore(Request $request){

        if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
            return redirect()->route('login');
        }
        $doctor = User::find($request->input('id'));
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->phone = $request->input('phone');
        $doctor->address = $request->input('address');
        $doctor->pesel = $request->input('pesel');
        $doctor->status = $request->input('status');
        // $doctor->images = $request->input('images');
        $doctor->save();

        $doctor->specializations()->sync($request->input('specializations'));


        return redirect()->action('DoctorController@index');
    }

    public function delete(UserRepository $userRepo, $id){

        if(Auth::user()->type != 'doctor' && Auth::user()->type!='admin'){
            return redirect()->route('login');
        }
        $visit = $userRepo ->delete($id);
        
        
        $doctor= $userRepo -> delete($id);

        return redirect('doctors');
    }
}
