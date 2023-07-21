<?php
session_start();
require 'const.inc.php';

// Get signup form data if signup button was clicked
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass2 = filter_var($_POST['pass2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pic = $_FILES['pic'];

    // Validate input values
    if (!$firstname) {
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your Username";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid Email";
    } elseif (strlen($pass) < 8 || strlen($pass2) < 8) {
        $_SESSION['signup'] = "Password should be at least 8 characters";
    } elseif (!$pic['name']) {
        $_SESSION['signup'] = "Please add an avatar";
    } else {
        // Check if passwords match
        if ($pass !== $pass2) {
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            // Hash password
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            // Check if username or email already exists in the database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username=:username OR email=:email");
            $stmt->execute(['username' => $username, 'email' => $email]);

            if ($stmt->rowCount() > 0) {
                $_SESSION['signup'] = "Username or Email already exists";
            } else {
                // Work on the picture
                // Rename the picture
                $time = time(); // Make each image name unique using the current timestamp
                $pic_name = $time . $pic['name'];
                $pic_temp_name = $pic['tmp_name'];
                $pic_dest_path = 'pics/' . $pic_name;

                // Make sure the file is an image
                $allowed_extensions = ['png', 'jpg', 'jpeg'];
                $extension = pathinfo($pic_name, PATHINFO_EXTENSION);

                if (in_array($extension, $allowed_extensions)) {
                    // Make sure the image is not too large
                    if ($pic['size'] < 2000000) {
                        // Upload the avatar
                        move_uploaded_file($pic_temp_name, $pic_dest_path);
                    } else {
                        $_SESSION['signup'] = "File size is too big. It should be less than 2MB";
                    }
                } else {
                    $_SESSION['signup'] = "File should be in PNG, JPG, or JPEG format";
                }
            }
        }
    }

    // Redirect back to the signup page if there was any problem
    if (isset($_SESSION['signup'])) {
        // Pass form data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location: signup.php');
        die();
    } else {
        // Insert a new user into the users table
        $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, username, email, pass, pic, admin) VALUES (:firstname, :lastname, :username, :email, :hashed_password, :pic_name, 0)");
        $stmt->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'email' => $email,
            'hashed_password' => $hashed_password,
            'pic_name' => $pic_name
        ]);

        if ($stmt) {
            // Redirect to the login page with a success message
            $_SESSION['signup-success'] = "Registration successful. Please log in";
            header('location: signin.php');
            die();
        }
    }
} else {
    // If the button wasn't clicked, redirect back to the signup page
    header('location: home.php');
    die();
}
