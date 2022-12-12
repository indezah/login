<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WoodWorks</title>
</head>

<body>
    <h1>This is home page</h1>
    <?= show($_SERVER['SERVER_NAME']) ?>
    <nav>
        <ul>
            <?php if (Auth::logged_in()) : ?>
                <?php echo ("<h2> Hello " . $_SESSION['USER_DATA']->Firstname . "</h2>"); ?>
                <li><a href="<?= ROOT ?>/logout">Logout</a></li>
            <?php else : ?>
                <a href="<?= ROOT ?>/Login2">
                    <li>Login</li>
                </a>
                <a href="<?= ROOT ?>/Signup2">
                    <li>Register</li>
                </a>
            <?php endif; ?>

        </ul>
    </nav>
    <!-- <h2><?= $var ?></h2> -->
</body>

</html>