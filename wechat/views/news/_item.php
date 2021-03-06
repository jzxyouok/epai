<?php

use yii\web\View;
use yii\widgets\LinkPager;
use common\models\CommonUtil;
use yii\helpers\Url;

?>

<a href="<?= Url::to(['view','id'=>$model['newsid']])?>">
    <div class="row wish-list">
    <div class="col-xs-12">
        
        <div class="media-container">
         <div class="media ">
               
       <img class="media-object pull-left " src="<?= yii::getAlias('@photo').'/'.$model->path.'thumb/'.$model->photo?>" 
                      alt="<?= $model->title?>">
                
        <div class="media-body">
         <h4 class="media-heading"><?= $model->title?></h4>
         <p ><?=  CommonUtil::cutHtml($model->content,20)?></p>
         <div class="bottom-info pull-right">
         <span class="glyphicon glyphicon-time" > <?= CommonUtil::fomatDate($model->created_at)?></span>  
         <span class="glyphicon glyphicon-eye-open" > <?= $model->count_view?></span> 
         </div>
         <div class="clear"></div>
      </div>
        </div>    
        </div>
       
       </div>
    </div>
</a>
