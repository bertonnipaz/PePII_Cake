<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Buscar Paciente'), ['action' => 'indexbusca']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
<h3><?= __('Buscar Paciente') ?></h3>
<?= $this->Flash->render('name') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Digite o nome do paciente que deseja encontrar') ?></legend>
        <?= $this->Form->input('name', ['label' => 'Procurar']) ?>
    </fieldset>
<?= $this->Form->button(__('Buscar')); ?>
<?= $this->Form->end() ?>
<?php if(isset($users)): ?>
    <?php foreach($users as $user): ?>
        <?=$user->name ?>
    <?php endforeach; ?>
<?php endif; ?>
</div>