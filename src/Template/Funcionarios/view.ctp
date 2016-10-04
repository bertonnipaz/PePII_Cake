<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Funcionário'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Funcionário'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($funcionario->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Nasc') ?></th>
            <td><?= h($funcionario->nasc) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuário') ?></th>
            <td><?= h($funcionario->usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
    </table>
</div>
