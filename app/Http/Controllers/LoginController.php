<?php
namespace App\Http\Login;
use App\Page;
class LoginController extends Controller{
    public function login($name,$password){
       // return view('login');
        echo $name;
        echo "<br/>";
        echo $password;
    }
}