<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-18
 * Time: 15:46
 */
class TestController extends Controller
{
    public function index(){

        /*测试queryFirsyBy()成功
        $u=new UsersModel();
        $user=$u->queryFirstBy('username','admin');
        var_export($user);
        exit();
        */

        /*测试函数long2ip
        $ip='192.108.49.1';
        $iplong=long2ip(ip2long($ip));
        var_export($iplong);
        var_export(Authority::GetUser());
        */

        $a=['test1','test2'];
        $b=['test2'];
        $c=array_diff($a,$b);
        var_export($c);
    }
}