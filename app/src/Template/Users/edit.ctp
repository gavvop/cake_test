<h1>Modifica User</h1>

<?= $this->Form->create($user) ?>
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="name" value="<?= $user->name ?>" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" value="<?= $user->password ?>" /></td>
    </tr>
    <tr>
        <td><input type="submit" value="Aggiorna"/> </td>
    </tr>
</table>
<?= $this->Form->end(); ?>
