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
use Cake\Routing\Router;
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
    <?= $this->Html->script('jquery-1.12.0.min.js') ?>
    <?= $this->Html->script('jquery.maskedinput.js') ?>
    <!-- <?= $this->Html->css('meuEstilo.css') ?> -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
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
                <?php
                // Formato 24 horas (de 1 a 24)
                $hora = date('G');
                if (($hora >= 6) AND ($hora < 15)) {
                    $mensagem = "Bom dia";
                } else if (($hora >= 15) AND ($hora < 21)) {
                    $mensagem = "Boa tarde";
                } else {
                    $mensagem = "Boa noite";
                }
                $loguser = $this->request->session()->read ('Auth.User');
                if($loguser) {
                    $user = $loguser['username'];
                    ?>
                    <li class="logout right"><a class="logout" href="/logout">Sair</a></li>
                    <li class="left"><a href="#"><?= $mensagem ?>, <b><?= $user ?></b>!!</a></li>
                    <?php
                } else {
                    ?>
                    <li class="login right"><a class="login" href="/">Entrar</a></li>

                    <?php
                }
                ?>
                <li class="right"><a href="<?= Router::url(['controller' => 'Users', 'action' => 'indexBusca']) ?>">Buscar</a></li>
                <li class="right"><a href="<?= Router::url(['controller' => 'Users', 'action' => 'indexFuncionarios']) ?>">Funcionários</a></li>
                <li class="right"><a href="<?= Router::url(['controller' => 'Users', 'action' => 'indexPacientes']) ?>">Pacientes</a></li>
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
