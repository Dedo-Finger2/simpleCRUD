<h1>Show</h1>
<hr>
<?php echo file_get_contents(__DIR__."/component/navbar.html")  ?>
<hr>
<ul>
    <li>ID: <?= $user->id // @codingStandardsIgnoreLine ?></li>
    <li>Name: <?= $user->name // @codingStandardsIgnoreLine ?></li>
    <li>Email: <?= $user->email // @codingStandardsIgnoreLine ?></li>
</ul>
