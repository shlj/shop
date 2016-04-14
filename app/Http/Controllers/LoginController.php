<?php
/**
 * Created by PhpStorm.
 * User: songhang
 * Date: 16-4-14
 * Time: 下午5:52
 */

namespace App\Http\Controllers;


class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
}