
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Tem certeza que deseja deletar {0}?', $user->name)]
            )
        ?></li>
        <!-- <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li> -->
        <?php
        $loguser = $this->request->session()->read ('Auth.User');
        $loggedUser = $loguser['id'];
        $loggedRole = $loguser['role'];
        if($user->role == 'funcionario' && $loggedRole == 'admin') {
        ?>
            <li><?= $this->Html->link(__('listar.funcionarios'), ['action' => 'indexFuncionarios']) ?> </li>
            <li><?= $this->Html->link(__('cadastrar.funcionario'), ['action' => 'add']) ?> </li>
        <?php
        } else if($user->role == 'funcionario' && $loggedRole != 'admin') {
        ?>
        <li><?= $this->Html->link(__('listar.funcionarios'), ['action' => 'indexFuncionarios']) ?> </li>
        <?php
        } else if($user->role == 'paciente') {
        ?>
            <li><?= $this->Html->link(__('listar.pacientes'), ['action' => 'indexPacientes']) ?> </li>
            <li><?= $this->Html->link(__('cadastrar.paciente'), ['action' => 'add']) ?> </li>
        <?php
        } else {
        ?>
            <!-- <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li> -->
            <!-- <li><?= $this->Html->link(__('Cadastrar Novo Usuário'), ['action' => 'add']) ?> </li> -->
        <?php
        }
        ?>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('editar.usuario') ?></legend>
        <?php
            $loguser = $this->request->session()->read ('Auth.User');
            $loggedRole = $loguser['role'];

            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('address', ['label' => 'Endereço']);
            echo $this->Form->input('mail', ['label' => 'E-mail']);
            echo $this->Form->input('nasc', array( 'label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 6 ));
            echo $this->Form->input('rg', ['label' => 'RG']);
            echo $this->Form->input('cpf', ['label' => 'CPF']);
            echo $this->Form->input('mobile', ['label' => 'Celular']);
            echo $this->Form->input('phone', ['label' => 'Telefone']);
            if($loggedRole == 'admin') {
                echo $this->Form->input('role', ['label' => 'Papel']);
            }
            echo $this->Form->input('username', ['label' => 'Nome de Usuário']);
            echo $this->Form->input('password', ['label' => 'Senha']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
