

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <main class="mainee">
        <section class="sectionee">
            <?php if (isset($_SESSION['signin'])) : ?>
                <div class="alert_message error">
                    <p><?= $_SESSION['signin'] ?></p>
                </div>
                <?php unset($_SESSION['signin']); ?>
            <?php endif; ?>

            <form action="traitsignin.php" method="post" class="formulus">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="usernamee" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="passwordd" required>
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="button" value="Login" id="login">
                </div>
            </form>
        </section>
    </main>
</body>
</html>
