<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $paciente->id],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $paciente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Pacientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Editar Paciente') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('endereco');
            echo $this->Form->input('rg');
            echo $this->Form->input('cpf');
            echo $this->Form->input('email');
            echo $this->Form->input('nasc');
            echo $this->Form->input('fone1');
            echo $this->Form->input('fone2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
