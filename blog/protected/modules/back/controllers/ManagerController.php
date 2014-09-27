<?php

/**
 * 后台管理员控制器
 */

class ManagerController extends Controller{
    
    function  actionLogin(){
       // echo"hi";
       $this->renderPartial('login');
    }
}