<h1>Users List</h1>

<?= $this->Html->link('Aggiungi uno User', ['action' => 'add']) ?>

<br/>

<table>

    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
    </tr>

<?php foreach($users as $user): ?>

    <tr>
        <td>
            <?= $this->Html->link($user['id'], ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
        </td>
        <td>
            <?= $user->name ?>
        </td>
        <td>
            <?= $user->password ?>
        </td>
        <td>
            <?= $this->Html->link('Cancella User', ['action' => 'delete', $user->id], array('confirm' => 'Procedere con la rimozione?')) ?>
        </td>
    </tr>

<?php endforeach; ?>

</table>