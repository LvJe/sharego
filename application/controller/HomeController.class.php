<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-18
 * Time: 15:46
 */
class HomeController extends Controller
{
    const PAGE_SIZE=20;
    public function index(){
        $sharesModel=new SharesModel();
        $shares= $sharesModel->listAll(0,self::PAGE_SIZE);
        $this->assign('shares',$shares);
        return 'home';
    }
}