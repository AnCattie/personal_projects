<?php


?>

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo ($page === "index") ? "active" : "" ?>" href="index.php">Read</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($page === "new") ? "active" : "" ?>"  href="new.php">New</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($page === "update") ? "active" : "" ?>" href="update.php">Update</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($page === "delete") ? "active" : "" ?>" href="delete.php">Delete</a>
    </li>
</ul>