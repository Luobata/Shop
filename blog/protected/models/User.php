<?php

/**
 * 用户模型model
 */

class User extends CActiveRecord{
    /**
     * 获得数据模型
     * @param type $className
     * @return type
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    /**
     * 定义数据表名字
     */
    public function tableName() {
     return "{{user}}";
    }
    
    /**
     * 设置字段对应
     */
    public function attributeLabels() {
        return array(
            'username'=>'用户名',
            'password'=>'密  码',
            'user_email'=>'邮  箱',
            'user_tel'=>'电  话',
            'user_qq'=>'Q  Q',
            'user_hobby'=>'爱  好',
            'user_sex'=>'性  别',
            'user_xueli'=>'学  历',
            'user_introduce'=>'简  历'
            );
    }
    
    public function rules() {
        return array(
          array('username','required','message'=>'用户名必填'),
          array('password','required','message'=>'密码必须填写')
        );
    }
    
}

