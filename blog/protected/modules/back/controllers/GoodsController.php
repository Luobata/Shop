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
        //$goods_infos=$goods_model->find();   //find 每次只能查询一条商品信息
        //var_dump($goods_infos);
        //获得全部商品信息 findAll()
        $goods_infos=$goods_model->findAll();
       // var_dump($goods_ingos);
        //把获得的数据传递到视图末班里边
        //renderPartial('show',array('名字'=>‘值’,'名字'=>‘值’))
        //名字，是视图变量的名字
        //值,当前被传递变量的值
        $this->renderPartial('show',array('goods_infos'=>$goods_infos));
    }
    
    /**
     * 商品添加
     */
    function actionAdd(){
        
        $goods_model =new Goods();
        $this->renderPartial('add',array('goods_model'=>$goods_model));
    }
    
    /**
     * 商品更新
     */
    function actionUpdate(){
        $this->renderPartial('update');
    }
    /**
     * 通过model实现数据库添加
     * 测试方法
     */
    function actionAddTest(){
        //创建model
        $goods_model=new Goods();//我们需要添加数据
        //为对象丰富属性
    }
}
