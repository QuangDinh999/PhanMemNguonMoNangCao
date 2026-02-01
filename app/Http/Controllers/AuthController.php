<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'trungfuong' && $password === '4123') {
            return 'ok';
        } else {
            return 'fail';
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmPassword = $request->input('password_confirmation');

        if ($password == $confirmPassword) {
            return "OK: Username - $username, Password - $password";
        }
        return "Mật khẩu không đúng, vui lòng nhập lại";
    }

    public function loginSV_action(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmPassword = $request->input('password_confirmation');
        $mssv = $request->input('mssv');
        $class = $request->input('class');
        $gender = $request->input('gender');

        if ($password != $confirmPassword) {
            return "Đăng ký thất bại!";
        }

        if ($username === "Quang" && $mssv === "025320" && $class === "LT20IT" && $gender === "Nam"){
            return "Đăng ký thành công!";
        } else {
            return "Đăng ký thất bại!";
        }
    }
}
