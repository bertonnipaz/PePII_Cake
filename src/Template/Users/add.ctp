<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'indexPacientes']) ?></li>
    </ul>
</nav>
<script type="text/javascript">
    jQuery(document).ready(function($){
        // $("#rg").mask("9.999.999");
        $("#cpf").mask("999.999.999-99");
        $("#mobile").mask("(99)99999-9999");
        $("#phone").mask("(99)9999-9999");
        $('#name').focus();
    });
</script>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo "<h6>Os campos com o asterisco são obrigatórios</h6>
            <br>";
            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('address', ['label' => 'Endereço']);
            echo $this->Form->input('mail', ['label' => 'E-mail']);
            echo $this->Form->input('nasc', array( 'label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 85, 'maxYear' => date('Y') - 5 ));
            echo $this->Form->input('rg', ['label' => 'RG']);
            echo $this->Form->input('cpf', ['label' => 'CPF']);
            echo $this->Form->input('mobile', ['label' => 'Celular']);
            echo $this->Form->input('phone', ['label' => 'Telefone']);
            echo $this->Form->input('role', ['label' => 'Papel', 'options' => ['paciente' => 'Paciente', 'admin' => 'Admin', 'funcionario' => 'Funcionário']]);
            echo $this->Form->input('username', ['label' => 'Nome de Usuário']);
            echo $this->Form->input('password', ['label' => 'Senha']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->button('Limpar', ['type' => 'reset']); ?>
    <?= $this->Form->end() ?>
</div>
