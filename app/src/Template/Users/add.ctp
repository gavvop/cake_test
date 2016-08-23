<h1>Aggiungi User</h1>

<?= $this->Form->create($user) ?>
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" /></td>
    </tr>
    <tr>
        <td><input type="submit" value="Salva"/> </td>
    </tr>
</table>
<?= $this->Form->end(); ?>
