<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!-- <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul> -->
</nav>
<div class="users form large-9 medium-8 columns content">
<h3><?= __('Login') ?></h3>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor, entre com o nome de usuário e senha') ?></legend>
        <?= $this->Form->input('username', ['label' => 'Usuário']) ?>
        <?= $this->Form->input('password', ['label' => 'Senha']) ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>