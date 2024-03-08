<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AudioSphere</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/myplaylist.css">
</head>
</head>

<body>
    <main>
        <header class="hero_header" style="position: fixed;">
            <figure>
                <a href="../index.php"><img id="logo" src="../assets/images/audioSphere_logo_light_mode.png" alt="logo"></a>
            </figure>
        </header>
        <div class="home_menu">
            <div class="menu_icon">
                <a class="show-menu-icon"><i class="fa-solid fa-list-ul"></i></a>
                <a href="../index.php" class="navicon"><i class="fas fa-home"></i></a>
                <a href="../views/view-search.php"><i class="fas fa-search"></i></a>
                <a href="../views/view-myplaylist.php"><i class="fa-solid fa-user-gear"></i></a>
                <label class="switch">
                    <input type="checkbox" id="modeToggle">
                    <span class="slider"></span>
                </label>
                </div>

            <nav id="sidebar" class="menu">
                <div class="logo">
                    <a href="../index.php"><img src="../assets/images/audioSphere_logo_light_mode.png" alt="" srcset=""></a>
                </div>

                <ul>

                    <li><a href="../views/view-search.php">search</a></li>
                    <li><a href="../index.php">home</a></li>
                    <li><a href="../views/view-myplaylist.php">my playlist</a></li>

                    <div>
                        <li>featured stories</li>
                        <li>new release</li>
                        <li>discover</li>
                    </div>
                    <div>
                        <li>my library</li>
                        <li>community</li>
                    </div>
                    <div>
                        <li>FAQ</li>
                        <li>about us</li>
                        <li>create</li>
                    </div>
                </ul>
                <div class="close_icon"></div>
            </nav>
        </div>

        <section class="signup-login">
            <div class="container">
                <article class="form-wrapper">
                    <h1>Login</h1>
                    <h4>Please login to see your playlist</h4>
                    <form action="../views/view-myplaylist.php" method="POST">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" required>

                        <label for="password">Password</label>
                        <input id="pw-input" type="password" name="password" placeholder="Password" class="form-control" required>
                        
                        <section class="check-wrapper">
                            <input id="checkbox" type="checkbox">
                            <label class="check-label" for="checkbox">Show Password</label>
                        </section>

                        <input type="submit" name="login" value="Login">
                    </form>
                    <p>Do you not have an account?</p>
                    <a href="signup.php" class="arrow-btn"><i class="fa-solid fa-circle-arrow-right"></i>&nbsp;Signup</a>
                </article>
            </div>
        </section>
    </main>

<?php
    include 'view-footer.php';
?>