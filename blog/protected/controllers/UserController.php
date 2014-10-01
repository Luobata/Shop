<?php

/**
 *
 *用户控制器
 */

class UserController extends Controller{

	function actionLogin(){
            //var_dump(Yii::app()->db);
		//echo'I want to loginSystem';
		//renderPartial()方法调用视图
		//$this->renderPartial('login');
		$this->render('login');
	}

	function actionRegister(){
                //实例化数据模型对象
                $user_model=new User();
                
		//$this->renderPartial('register');
                //性别信息
                $sex[1]='男';
                $sex[2]='女';
                $sex[3]='保密';
                //定义学历
                $xueli[1]='请选择';
                $xueli[2]='小学';
                $xueli[3]='初中';
                $xueli[4]='高中';
                $xueli[5]='大学';
                //定义爱好
                $hobby[1]='篮球';
                $hobby[2]='足球';
                $hobby[3]='排球';
                $hobby[4]='棒球';
                //如果用户有注册表单
                if(isset($_POST['User'])){
                    foreach ($_POST['User'] as $_k => $_v) {
                        $user_model->$_k=$_v;
                    }
                    //foreach 在yi中有优化，用模型属性attributes来进行优化
                    //$user_model ->attributes=$_POST;
                    
                    if($user_model->save()){
                        $this->redirect('./index.php?r=index/index');
                    }
                }
		$this->render('register',array('user_model'=>$user_model,'sex'=>$sex,'xueli'=>$xueli,'hobby'=>$hobby));
	}

}