<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Hash;
use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
class RegisterController extends Controller
{
   

    use RegistersUsers;


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }



    protected function create(array $data)
    {   
      
        //Get file name with extension
        $fileNameWithExt =  Input::file('image')->getClientOriginalName();

        //Get file name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        
        //Get file extension
        $extension = Input::file('image')->getClientOriginalExtension();

        //Create new file name 

        $fileNameToStore = $fileName.'_'.time().'.'.$extension;   
        
        //Store to public path
        $imagePath = Input::file('image')->move(base_path().'/public/storage/users/', $fileNameToStore);
        
        // $age = RegisterController::calculateAge($data['birthdate']);
        
        return User::create([
            'name'=> $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'blood_type' => $data['blood_type'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'avatar' =>  "users/".$fileNameToStore,
            'img' =>  $fileNameToStore
        ]);
    
       
    }
    
}
