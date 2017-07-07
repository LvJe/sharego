<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-18
 * Time: 15:46
 */

class LoginController extends Controller
{
    public function index(){
        return 'login';
    }
    public function login()
    {
        Authority::TestRefer();
        Authority::TestCSRF();
        //验证用户名密码
        $post_data=$this->input_post();
        $username = $post_data['username'];
        $password = $post_data['password'];
        $remember = $post_data['remember'];

        /*if(is_null($username) || strlen($username) == ""){
            $this->assign('error', '无效用户名');
            return $this->show();
        }*/

        $model = new UsersModel();
        $user = $model->queryFirstBy('username',$username);
        /*if(is_null($user))
        {
            //没有该用户
            $this->assign('error', '该用户不存在');
            return $this->show();
        }

        if(empty($password)){
            $this->assign('error', '无效密码');
            return $this->show();
        }*/

        if(false == Authority::Login($username, $password, $remember == "on")) {
            /*$this->assign('error', '密码错误');
            //登录失败
            return $this->show();*/
        }

        /*if(is_string($this->from_url) && trim($this->from_url)!='')
            $this->redirect(trim($this->from_url));*/
        redirect('/home');
    }
    public function logout(){
        Authority::Logout();
        redirect('/login');
    }

}