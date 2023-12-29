<h1>Create</h1>
<hr>
<?php echo file_get_contents(__DIR__."/component/navbar.html")  ?>
<hr>
<form action="/store" method="post">
    Name: <input type="text" name="name">
    Email: <input type="email" name="email">
    Password: <input type="password" name="password">

    <input type="submit" value="Create">
</form>