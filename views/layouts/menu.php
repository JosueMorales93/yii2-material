<?php
use yii\widgets\Menu

?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <!--ul class="nav metismenu" id="side-menu"-->
                <!--li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                         </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li-->

        <?= 
        Menu::widget([
            'encodeLabels' => false,
            'activateParents' => true, 
            'options'=>['class'=>'nav metismenu', 'id'=>'side-menu'],
            'submenuTemplate' => "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
             'items' => [
                  ['label' => 
                      '<div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="img/avatar.png" style="height: 128px; width: 128px" /></span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">César Ramírez</strong></span> 
                                    <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> 
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>'
                  ,'options'=>['class'=>'nav-header']],
                ['label' => '<i class="material-icons">home</i><span>Inicio</span>', 'url' => ['site/index']],
                ['label' => '<i class="fa fa-lock fa-1x"></i><span class="nav-label">Seguridad</span>', 
                    'url' => false, 
                    'itemsOptions'=>['class'=>'nav nav-second-level'],
                    'template' => '<a>{label}<span class="fa arrow"></span></a>',
                    'items' => [
                    ['label' => '<i class="fa fa-user-plus fa-1x"></i>Rol', 'url' => ['rol/index']],
                    ['label' => '<i class="fa fa-users fa-1x"></i>Usuarios', 'url' => ['usuario/index']],
                ]],
                 ['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],
                 ['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                 ['label' => '<i class="fa fa-file-code-o"></i><span>Test</span>', 'url' => ['site/contact']],
             ],
         ]);
    ?>
        </div>
    </nav>

