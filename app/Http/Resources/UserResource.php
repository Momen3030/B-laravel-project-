<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'username'=>$this->username,
            'password'=>$this->password,
            'email'=>$this->email,

            'phone'=>$this->phone,
            'city'=>$this->city,
            'gender'=>$this->gender,
            'birthdate'=>$this->birthdate,
            
            'role'=>$this->role,
            'available'=>$this->available,
            'img'=>$this->img,
            'blood_type'=>$this->blood_type,
        ];
    }
}
