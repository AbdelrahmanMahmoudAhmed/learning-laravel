<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller ;

class AdminController extends Controller
{

    public function __construct(){
        $this -> middleware('auth')->except('adminName');
    }

    public function adminName(){
        return " FROM ADMIN CONTROLLER  ";
    }
    public function passwordName(){
        return "  ADMIN PASSWORD  ";
    }

    public function double(){
        $result1 = $this->adminName();
        $result2 = $this->passwordName();

        return "Result 1: $result1, Result 2: $result2";
    }


}
