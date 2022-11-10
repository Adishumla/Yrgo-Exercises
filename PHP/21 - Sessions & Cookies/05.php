<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
            min-width: 200px;
        }

        form {
            margin-bottom: 20px;
        }

        .display-none {
            display: none;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION['message'])) : ?>
        <p><?php echo $_SESSION['message']; ?></p>
    <?php endif; ?>
    <!--login form-->
    <form class="login" action="login.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="hendriks@piedpiper.io">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Login</button>
    </form>
    <!--logout-->
    <form class="logout display-none" action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
    <script>
        const form = document.querySelector('.login');
        const logout = document.querySelector('.logout');
        if (<?= $_SESSION['authenticated'] === true ?>) {
            form.classList.add('display-none');
            logout.classList.remove('display-none');
        }
    </script>
</body>

</html>