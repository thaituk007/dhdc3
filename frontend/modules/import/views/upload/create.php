<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\UploadFortythree */

$this->title = Yii::t('app', '{modelClass}', [
            'modelClass' => 'นำเข้าไฟล์',
        ]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายการไฟล์'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-fortythree-create">

    <div class="alert alert-block alert-danger">
        <h4>- โปรดตรวจสอบคุณภาพข้อมูลก่อนส่ง</h4>
        <h4>- ไม่ควรเปลี่ยนชื่อ zip ไฟล์ หลังส่งออกจากโปรแกรม hosxp หรือ jhcis</h4>
        <h4>- ไฟล์ zip จะต้องมี folder อยู่ด้านใน โดยต้องมีชื่อเดียวกับ zip และขนาดไม่ควรเกิน 16 MB</h4>        
        <h4>- ข้อมูลที่ซ้ำกันจะถูกแทนที่จากข้อมูลในไฟล์นี้</h4>

    </div>



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>


</div>
