<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('address', ['label' => 'Endereço']);
            echo $this->Form->input('mail', ['label' => 'E-mail']);
            echo $this->Form->input('nasc', array( 'label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 6 ));
            echo $this->Form->input('rg', ['label' => 'RG']);
            echo $this->Form->input('cpf', ['label' => 'CPF']);
            echo $this->Form->input('mobile', ['label' => 'Celular']);
            echo $this->Form->input('phone', ['label' => 'Telefone']);
            echo $this->Form->input('role', ['label' => 'Papel', 'options' => ['admin' => 'Admin', 'funcionario' => 'Funcionário', 'paciente' => 'Paciente']]);
            echo $this->Form->input('username', ['label' => 'Nome de Usuário']);
            echo $this->Form->input('password', ['label' => 'Senha']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
