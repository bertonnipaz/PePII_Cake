<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <?php
            $loguser = $this->request->session()->read ('Auth.User');
            $loggedUser = $loguser['id'];
            $loggedRole = $loguser['role'];
            if($loggedUser == $user->id || $loggedRole == 'funcionario') {
        ?>
        <li><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Usuário'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $user->name)]) ?> </li>
        <?php
        }
        if($user->role == 'funcionario' && $loggedRole == 'admin') {
        ?>
            <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'indexfuncionarios']) ?> </li>
            <li><?= $this->Html->link(__('Novo Funcionário'), ['action' => 'add']) ?> </li>
        <?php
        } else if($user->role == 'funcionario' && $loggedRole != 'admin') {
        ?>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'indexfuncionarios']) ?> </li>
        <?php
        } else if($user->role == 'paciente' && $loggedRole == 'admin' || $loggedRole == 'funcionario') {
        ?>
            <li><?= $this->Html->link(__('Listar Pacientes'), ['action' => 'indexpacientes']) ?> </li>
            <li><?= $this->Html->link(__('Cadastrar Paciente'), ['action' => 'add']) ?> </li>
        <?php
        } else if($loggedRole == 'admin' || $loggedRole == 'funcionario') {
        ?>
            <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?> </li>
        <?php
        } else {
        ?>
            <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>
        <?php } ?>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome de Usuário') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($user->password) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Papel') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-Mail') ?></th>
            <td><?= h($user->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RG') ?></th>
            <td><?= h($user->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($user->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Data de Nascimento') ?></th>
            <td><?= ($user->nasc->nice(null, 'pt_BR')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
