<?php

/**
 *
 *用户控制器
 */

class UserController extends Controller{

	function actionLogin(){

		//echo'I want to loginSystem';
		//renderPartial()方法调用视图
		//$this->renderPartial('login');
		$this->render('login');
	}

	function actionRegister(){

		//$this->renderPartial('register');
		$this->render('register');
	}

}