<?php
/**
 *商品控制器
  */

class GoodsController extends Controller{

	/**
	 *商品列表页面
	 */
	function actionCategory(){
		//渲染界面
		//render()带布局渲染
		//renderPartial()部分渲染
		$this->render('category');
	}

	 /**
	 *商品列表页面
	 */
	 function actionDetail(){
	 	$this->render('detail');
	 }
}