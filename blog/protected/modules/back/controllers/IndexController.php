<?php

/**
 * 后台整体架构控制器
 */

class IndexController extends Controller{
    
    /**
     * 生成头部
     */
    function  actionHead(){
        $this->renderPartial('head');
    }
    
    /**
     * 生成左侧菜单
     */
    function  actionLeft(){
        $this->renderPartial('left');
    }
    
    /**
     * 生成右侧主体区域
     */
    function actionRight(){
        $this->renderPartial('right');
    }
    
    /**
     * 将head left right集成到一起
     */
    function actionIndex(){
        $this->renderPartial('index');
    }
}