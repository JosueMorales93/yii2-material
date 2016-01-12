<?php
use yii\widgets\Breadcrumbs;
use lavrentiev\widgets\toastr\NotificationFlash;

?>
<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <?= $this->render(
            'header.php'
        ) ?>
    </div>
        
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <?php Breadcrumbs::widget(
                [
                    'encodeLabels'=>false,
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
                ) ?>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                            <?= NotificationFlash::widget([
                                'options' => [
                                "closeButton" => true,
                                "debug" => false,
                                "newestOnTop" => false,
                                "progressBar" => true,
                                "positionClass" => "toast-top-full-width",
                                "preventDuplicates" => false,
                                "onclick" => null,
                                "showDuration" => "3000",
                                "hideDuration" => "1000",
                                "timeOut" => "5000",
                                "extendedTimeOut" => "1000",
                                "showEasing" => "swing",
                                "hideEasing" => "linear",
                                "showMethod" => "fadeIn",
                                "hideMethod" => "fadeOut"
                                ]
                            ]) ?>
                            <?= $content ?>
                        </div>
                </div>
        </div>
        <div class="footer">
                   <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; <?= date('Y') ?></strong> reserved.
        </div>
    </div>
</div>