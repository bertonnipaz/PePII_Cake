<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Paciente'), ['action' => 'edit', $paciente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Paciente'), ['action' => 'delete', $paciente->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $paciente->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Paciente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($paciente->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereço') ?></th>
            <td><?= h($paciente->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($paciente->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($paciente->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Nasc') ?></th>
            <td><?= h($paciente->nasc) ?></td>
        </tr>
        <tr>
            <th><?= __('Fone 1') ?></th>
            <td><?= h($paciente->fone1) ?></td>
        </tr>
        <tr>
            <th><?= __('Fone 2') ?></th>
            <td><?= h($paciente->fone2) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= $this->Number->format($paciente->rg) ?></td>
        </tr>
    </table>
</div>
