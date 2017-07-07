<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-18
 * Time: 15:46
 */

class RegisterController extends Controller
{
    public function index(){
        return 'register';
    }
    public function register()
    {
        Authority::TestRefer();
        Authority::TestCSRF();

        $username=$this->input_post('username');
        $password=$this->input_post('password');

        $res=Authority::EncryptPassword($password);
        $salt=$res['salt'];
        $password=$res['password'];
        $userModel=new UsersModel();
        $userModel->create_c(compact('username','salt','password'));
        redirect('/home');
    }

}