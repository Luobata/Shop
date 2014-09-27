<?php

/**
 * 后台商品管理控制器
 */

class GoodsController extends Controller{
    
    /**
     * 商品展示
     */
    function actionShow(){
        $this->renderPartial('show');
    }
    
    /**
     * 商品添加
     */
    function actionAdd(){
        $this->renderPartial('add');
    }
    
    /**
     * 商品更新
     */
    function actionUpdate(){
        $this->renderPartial('update');
    }
}
