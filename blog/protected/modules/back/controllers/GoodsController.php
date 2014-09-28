<?php

/**
 * 后台商品管理控制器
 */

class GoodsController extends Controller{
    
    /**
     * 商品展示
     */
    function actionShow(){
        //通过模型model实现数据表信息查询
        //产生模型model对象
        $goods_model=Goods::model();
        //通过model模型对象调用相关方法帮我们查询数据
        $goods_infos=$goods_model->find();
        var_dump($goods_infos);
        
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
