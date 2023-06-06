<h3>

    <a href="http://localhost/php-theory-practice/019/login/">Home</a>

    <?php if (isset($_SESSION['name'])) : ?>

        <a href="http://localhost/php-theory-practice/019/login/member.php">Member</a>

        <form action="http://localhost/php-theory-practice/019/login/login.php?logout" method="post">
            <button type="submit">Logout from <?= $_SESSION['name'] ?></button>
        </form>

    <?php else : ?>

        <a href="http://localhost/php-theory-practice/019/login/login.php">Login</a>

    <?php endif ?>

</h3>