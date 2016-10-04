<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Paciente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <!-- <th><?= $this->Paginator->sort('endereco') ?></th> -->
                <!-- <th><?= $this->Paginator->sort('rg') ?></th> -->
                <!-- <th><?= $this->Paginator->sort('cpf') ?></th> -->
                <th><?= $this->Paginator->sort('email') ?></th>
                <!-- <th><?= $this->Paginator->sort('nasc') ?></th> -->
                <th><?= $this->Paginator->sort('fone1') ?></th>
                <!-- <th><?= $this->Paginator->sort('fone2') ?></th> -->
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->name) ?></td>
                <!-- <td><?= h($paciente->endereco) ?></td> -->
                <!-- <td><?= $this->Number->format($paciente->rg) ?></td> -->
                <!-- <td><?= h($paciente->cpf) ?></td> -->
                <td><?= h($paciente->email) ?></td>
                <!-- <td><?= h($paciente->nasc) ?></td> -->
                <td><?= h($paciente->fone1) ?></td>
                <!-- <td><?= h($paciente->fone2) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $paciente->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paciente->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $paciente->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $paciente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
