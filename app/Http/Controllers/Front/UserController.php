<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;


    public function showName(){
        return "Abdelrahman Mahmoud";
    }
}
