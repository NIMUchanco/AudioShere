<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio sphere</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/upload-form.css">
    <link rel="stylesheet" href="../css/search.css"> 
    <link rel="stylesheet" href="../css/audio-list.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2f6fae777f.js" crossorigin="anonymous"></script>

    <!-- slick slider css cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />

</head>

<body>
    <main>
        <header class="hero_header">
            <figure>
                <a href="../index.php"><img id="logo" src="../assets/images/audioSphere_logo_light_mode.png" alt="logo"></a>
            </figure>
            <div class="buttons">
                <?php if (isset($_SESSION['userID'])) { ?>
                    <a href="../views/logout.php" class="btn logout-btn">log out</a>
                <?php } else { ?>
                    <a href="../views/login.php" class="btn">log in</a>
                    <a href="../views/signup.php" class="btn">sign up</a>
                <?php } ?>
            </div>
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