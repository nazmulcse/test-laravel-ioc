<?php
namespace Nazmulhasan\Testioc\Auth;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function  Register(){
        echo "Great!!! User has been registered successfully !!";
    }

    public function Authenticate(){
        echo "Congrats!!! You are authenticated successfully.";
    }

    public function Logout(){
        echo "You are successfully logout.";
    }
}