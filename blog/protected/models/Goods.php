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
        return 'sw_goods';
    }
}
