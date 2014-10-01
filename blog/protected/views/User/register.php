
            <!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <?php  $form =$this->beginWidget('CActiveForm');?>
                                
                            <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;">
                                            <?php  echo $form->label($user_model,'username');?>
                                        </td>

                                        <td style="width:87%;">
                                                             
                                            <?php echo $form->textField($user_model,'username',array('class'=>'inputBg','id'=>'User_username'));?>
                                             <!--表单验证失败显示错误信息-->
                                            <?php echo $form ->error($user_model,'username'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                             <?php  echo $form->label($user_model,'password');?>
                                        </td>

                                        <td>
                                            <?php echo $form->passwordField($user_model,'password',array('class'=>'inputBg','id'=>'User_password')); ?>         
                                             <?php echo $form ->error($user_model,'password'); ?>
                                        </td>
                                    </tr>
<!--                                    <tr>
                                        <td align="right"><label for="User_password2">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="User[password2]" id="User_password2" type="password" />
                                        </td>

                                    </tr>-->
                                    <tr>
                                        <td align="right">
                                           <?php  echo $form->label($user_model,'user_email');?>
                                        </td>
                                        <td>
                                            <?php echo $form->textField($user_model,'user_email',array('class'=>'inputBg','id'=>'User_user_email')); ?>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><?php  echo $form->label($user_model,'user_qq');?></td>
                                        <td>
                                             <?php echo $form->textField($user_model,'user_qq',array('class'=>'inputBg','id'=>'User_user_qq')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><?php  echo $form->label($user_model,'user_tel');?></td>
                                        <td>
                                            <?php echo $form->textField($user_model,'user_tel',array('class'=>'inputBg','id'=>'User_user_tel')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><?php  echo $form->label($user_model,'user_sex');?></td>
                                        <td>
                                           <?php echo $form->radioButtonList($user_model,'user_sex',$sex,array('separator'=>'&nbsp;')); ?>                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><?php  echo $form->label($user_model,'user_xueli');?></td>
                                        <td>
                                            <?php echo $form -> dropDownList($user_model,'user_xueli',$xueli); ?>
                                            <div class="errorMessage" id="User_user_xueli_em_" style="display:none"></div>                            </td>
                                    </tr>
                                    <tr>
                                        <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><?php  echo $form->label($user_model,'user_hobby');?></td>

                                        <td>
                                            <?php echo $form -> checkBoxList($user_model,'user_hobby',$hobby,array('separator'=>'&nbsp;')); ?>                               
                                        </td>
                                    </tr>
                                    <tr>

                                        <!--textArea($model,$attribute,$htmlOptions=array())-->
                                        <td align="right"><?php  echo $form->label($user_model,'user_introduce');?></td>
                                        <td>
<!--                                            <textarea cols="50" rows="5" name="User[user_introduce]" id="User_user_introduce"></textarea>-->
                                            <?php echo $form ->textArea($user_model,'user_introduce',array('cols'=>50,'rows'=>5,'id'=>'User_user_introduce')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        <?php  $this->endWidget();?>       
                    </div>
                </div>
            </div>
            <!--放入view具体内容-->

       

        