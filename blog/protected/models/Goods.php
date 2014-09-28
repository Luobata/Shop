<?php

/*
 * 商品模型
 * 模型里边有两个关键方法，缺一不可
 * model() 创建一个模型的对象，是静态方法
 * tableName() 返回当前数据表额名字
 */


class Goods extends CActiveRecord{
    
    /**
     * 返回当前模型对象的静态方法
     */
    
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /**
     * 返回当前数据表的名字
     */
    
    public function tableName() {
        return '{{goods}}';
    }
    
//    function rules(){
//        return array(
//            array('goods_name,goods_price','safe'),
//        );
//    }
//    
    //对应标签名字
    
    function attributeLabels() {
        return array(
            'goods_name'=>'商品名称',
            'goods_weight'=>'商品重量',
            'goods_price'=>'商品价格',
            'goods_number'=>'商品数量',
            'goods_category_id'=>'商品分类',
            'goods_brand_id'=>'商品品牌',
            'goods_introduce'=>'商品简介',
        );
    }
}
