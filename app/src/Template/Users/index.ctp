<div class="row">
    <div class="col-md-12">

        <h1>Users List</h1>

        <br/>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Cancella</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($users as $user): ?>

            <tr>
                <td>
                    <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-pencil', 'aria-hidden' => "true"]), ['controller' => 'Users', 'action' => 'edit', $user->id], ['escape' => false]) ?>
                </td>
                <td>
                    <?= $user->name ?>
                </td>
                <td>
                    <?= $user->password ?>
                </td>
                <td>
                    <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-trash', 'aria-hidden' => "true"]), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => 'Procedere con la rimozione?', 'escape' => false]) ?>
                </td>
            </tr>

            </tbody>

            <?php endforeach; ?>

        </table>

    </div>
</div>