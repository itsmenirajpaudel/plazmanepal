<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

?>

<div class="container-fluid">
    <div class="row">
     
    <?= Html::a('Sign out',['/user/logout'],['data-method' => 'post', 'class' => 'btn btn-default btn-flat']); ?>

        <?php echo $this->render('partials/_sidebar.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <div class="row">
                <?php 
                
                echo $this->render('partials/_user_info.php',['res'=>$res]); 
                echo $this->render('partials/_main_content.php',['request_list'=>$res['request_log']]);

                ?>
            </div>
        </main>
    </div>

    
</div>