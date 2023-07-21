<?php
session_start();

// Get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$pass = $_SESSION['signup-data']['pass'] ?? null;
$pass2 = $_SESSION['signup-data']['pass2'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <main class="mainee">
        <section class="sectionee">
            <?php
            if (isset($_SESSION['signup'])) :
            ?>
            <div class="alert_message error">
                <p><?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?></p>
            </div>
            <?php endif ?>
            <form action="trait.php" enctype="multipart/form-data" method="post" class="formulus">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="firstname" value="<?= $firstname ?>" id="first_name">
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="lastname" value="<?= $lastname ?>" id="last_name">
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?= $username ?>" id="username">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?= $email ?>" id="email">
                </div>
                <div>
                    <label for="pass">Create Password</label>
                    <input type="password" name="pass" value="<?= $pass ?>" id="pass">
                </div>
                <div>
                    <label for="pass2">Confirm Password</label>
                    <input type="password" name="pass2" value="<?= $pass2 ?>" id="pass2">
                </div>
                <div>
                    <label for="picture">User Avatar</label>
                    <input type="file" name="pic" id="picture">
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="button" value="Inscription" id="register">
                </div>
            </form>
        </section>
    </main>
</body>
</html>

