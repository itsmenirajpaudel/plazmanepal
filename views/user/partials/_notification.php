<?php

use app\models\UserNotifications;

$user = \Yii::$app->user;
$userId = $user->id;
$notifications = UserNotifications::find()
    ->where(['user_id' => $userId])
    ->andWhere(['is_read' => 0])
    ->all();
$count = count($notifications);
?>

<li class="nav-item btn-notification ">
    <div class="btn-group  dropleft notification-button ">
        <a href="#" class="" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell-o"></i>
            <?php if ($count > 0) : ?>
                <span class="label notification-count"><?php echo $count; ?></span>
            <?php endif; ?>
        </a>

        <div class="dropdown-menu" >
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications
            </p>
           
            <?php if ($count > 0) : ?>
            <p
            class="mb-0 font-weight-normal float-right dropdown-header clear-all"
            ><a style="cursor:pointer; padding-right:5px;">Clear All</a> </p>
            <?php endif; ?>

            <ul class="menu">

                <?php if ($count > 0) {
                    foreach ($notifications as $notification) {
                ?>
                        <li class="dropdown-item">
                            <a>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-bold"> <i class="fa fa-dot-circle-o  notification-icon">
                                        </i>
                                        <?= html_entity_decode($notification->notification); ?></h6>
                                    <p class="font-weight-light small-text mb-0 text-muted notification-date">
                                        <?= $notification->created_time ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                <?php }
                }
                ?>


            </ul>
        </div>
    </div>
</li>
