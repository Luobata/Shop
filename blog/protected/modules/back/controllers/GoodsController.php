<?php

/**
 * 后台商品管理控制器
 */

class GoodsController extends Controller{
    
    /**
     * 商品展示
     */
    function actionShowAll(){
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
     * 商品数据分页显示
     */
    function actionShow(){
        //获得数据模型
        $goods_model = Goods::model();
        //1.获得商品总的记录数目
        $cnt = $goods_model -> count();
        $per = 10;
        //2. 实例化分页类对象
        $page = new Pagination($cnt, $per);
        //3. 重新按照分页的样式拼装sql语句进行查询
        $sql = "select * from {{goods}} $page->limit";
        $goods_infos = $goods_model -> findAllBySql($sql);
        //4. 获得分页页面列表(需要传递到视图模板里边显示)
        $page_list = $page->fpage(array(3,4,5,6,7));
        //调用视图模板，给模板传递数据
        $this ->renderPartial('show',array('goods_infos'=>$goods_infos,'page_list'=>$page_list));
    }
    
    
    
    
    /**
     * 商品添加
     */
    function actionAdd(){
        
        $goods_model =new Goods();
        print_r($_POST);
        //判断表单是否有提交数据
      
        if(isset($_POST['Goods'])){
            //要把从表单提交过来的数据赋予$goods_model里
            //$goods_model->goods_name=$_POST['Goods']['goods_name'];
            foreach ($_POST['Goods'] as $_k=>$_v){
                $goods_model->$_k=$_v;
            }
            $goods_model->goods_create_time=time();
            if($goods_model->save()){
                //信息添加成功后实现页面重定向(商品列表页面)
                $this->redirect('./index.php?r=back/goods/show');
            }
            
            }
        
        $this->renderPartial('add',array('goods_model'=>$goods_model));
    }
    
    /**
     * 商品更新
     */
    function actionUpdate($id){
        //具体修改哪个信息，需要将信息查询出来
        //把商品的id信息通过get方式传递过来
        //根据$id查询被修改商品信息
        $goods_model=Goods::model();//除了添加数据我们都是用Goods::model()来实例化模型对象
        $goods_info=$goods_model->findByPk($id);
        //$goods_info 是一个数据模型对象
        //创建model对象  
        //new Goods(); 调用save方法的时候执行instert语句
        //Goods::model(); 调用save方法的时候执行update语句
        if(isset($_POST['Goods'])){
            foreach($_POST['Goods'] as $_k=>$_v){
                $goods_info->$_k=$_v;
            }
            if($goods_info ->save()){
                $this->redirect('./index.php?r=back/goods/show');
            }
        }
         
        //把$goods_info 传递到视图
        $this->renderPartial('update',array('goods_model'=>$goods_info));
    }
    
    /**
     * 删除商品信息
     */
    
    function actionDelete($id){
        $goods_model=Goods::model();
        $goods_info=$goods_model->findByPk($id);
        //通过Delete方法即可删除数据
        if($goods_info->delete()){
            $this->redirect('./index.php?r=back/goods/show');
        }
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
