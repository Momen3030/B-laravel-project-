<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource as UserResource;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //get 15 users
        $users=User::paginate(15);
        //return 15 users as a Resource
        return UserResource::collection($users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $user=new User;
            $image = $request->file('img');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('users/usersimgages');
            $image->move($destinationPath, $name);
            $user->img = $name;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->blood_type = $request->blood_type;
            $user->phone = $request->phone;
            $user->city = $request->city;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
          if($user->save()){
            return new UserResource($user);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->isMethod('put')){
            $user=User::findOrFail($request->user_id);
            $user->id=$request->input('user_id');
            $user->name=$request->input('name');
            $user->username=$request->input('username');
            $user->email=$request->input('eamil');
            $user->password=$request->input('password');
            if($user->save()){
                return new UserResource($user);
             }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        if($user->delete()){
            return new UserResource($user);
        }    }
}
