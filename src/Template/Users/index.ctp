<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <?php
        $loguser = $this->request->session()->read ('Auth.User');
        $loggedRole = $loguser['role'];
        if($loggedRole == 'funcionario' || $loggedRole == 'admin') {
        ?>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
        <?php } ?>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuários') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('username') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('password') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name', ['Nome']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nasc', ['Data de Nascimento']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('role', ['Papel']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('mail') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('address') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('rg') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('cpf') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('mobile', ['Celular']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('phone') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('created', ['Criado']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', ['Modificado']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <!-- <td><?= $this->Number->format($user->id) ?></td> -->
                <!-- <td><?= h($user->username) ?></td> -->
                <!-- <td><?= h($user->password) ?></td> -->
                <!-- <td><?= h($user->mail) ?></td> -->
                <td><?= h($user->name) ?></td>
                <td><?= h($user->nasc) ?></td>
                <td><?= h($user->role) ?></td>
                <!-- <td><?= h($user->address) ?></td> -->
                <!-- <td><?= h($user->rg) ?></td> -->
                <!-- <td><?= h($user->cpf) ?></td> -->
                <td><?= h($user->mobile) ?></td>
                <!-- <td><?= h($user->phone) ?></td> -->
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                    <?php
                $loguser = $this->request->session()->read ('Auth.User');
                $loggedUser = $loguser['id'];
                if($loggedUser == $user->id) {
                ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $user->name)]) ?>
                <?php
                }
                ?>
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
