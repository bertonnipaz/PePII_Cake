<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Sistema de Cadastro';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- <style>
        .login {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .login:hover {
            background-color: #449d44;
            border-color: #255625;
        }
        .logout {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .logout:hover {
            background-color: #c9302c;
            border-color: #761c19;
        }
    </style> -->
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li class="right"><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li> -->
                <!-- <li class="right"><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li> -->
                <?php
                // Formato 24 horas (de 1 a 24)
                $hora = date('G');
                if (($hora >= 6) AND ($hora < 12)) {
                    $mensagem = "Bom dia";
                } else if (($hora >= 12) AND ($hora < 18)) {
                    $mensagem = "Boa tarde";
                } else {
                    $mensagem = "Boa noite";
                }
                // echo $mensagem;
                $loguser = $this->request->session()->read ('Auth.User');
                if($loguser) {
                    $user = $loguser['username'];
                    ?>
                    <li class="logout right"><a class="logout" href="/users/logout">Sair</a></li>
                    <li class="left"><a href="#"><?= $mensagem ?>, <b><?= $user ?></b>!!</a></li>
                    <?php
                } else {
                    ?>
                    <li class="login right"><a class="login" href="/users/login">Entrar</a></li>

                    <?php
                }
                ?>
                <li class="right"><a href="/users/indexfuncionarios">Funcionários</a></li>
                <li class="right"><a href="/users/indexpacientes">Pacientes</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
