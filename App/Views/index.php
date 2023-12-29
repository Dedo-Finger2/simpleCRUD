<?php
    session_start();
    if (isset($_SESSION["error"])) $error = $_SESSION["error"];
    if (isset($_SESSION["success"])) $success = $_SESSION["success"];
?>

<h1>Users</h1>
<hr>
<?php echo file_get_contents(__DIR__."/component/navbar.html")  ?>
<hr>

<div>
    <p><?= isset($error) ? $error : '' ?></p>
    <?php unset($_SESSION['error']); ?>
</div>

<div>
    <p><?= isset($success) ? $success : '' ?></p>
    <?php unset($_SESSION['success']); ?>
</div>

<?php if (isset($users) && count($users) > 0) { ?>
    <ul>
        <?php foreach($users as $user) { ?>
            <li><?= $user->name ?> - <?= $user->email ?> | <a href="/user/<?= $user->id ?>/edit">Edit</a> | <a href="/user/<?= $user->id ?>/delete">Delete</a> | <a href="/user/<?= $user->id ?>/show">Show</a></li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Nenhum usuário cadastrado ainda.</p>
<?php } ?>