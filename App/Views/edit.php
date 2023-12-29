<h1>Edit</h1>
<hr>
<?php echo file_get_contents(__DIR__."/component/navbar.html")  ?>
<hr>
<form action="/update" method="post">
    Name: <input type="text" name="name" value="<?= $user->name ?>">
    Email: <input type="email" name="email" value="<?= $user->email ?>" >
    Password: <input type="password" name="password" value="<?= $user->password ?>" >
    <input type="hidden" name="id" value="<?= $user->id ?>">

    <input type="submit" value="Edit">
</form>