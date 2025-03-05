<?php 
    $CSS = AppConfig::$Settings["system_domain_name"] . AppConfig::$Settings["assets"]["css"][3];
    $Logo = AppConfig::$Settings["system_domain_name"] . AppConfig::$Settings["assets"]["img"][0];
    $VEC1 = AppConfig::$Settings["system_domain_name"] . AppConfig::$Settings["assets"]["img"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $CSS ?>">
    <title>ZSNHS Main Page</title>
</head>
<body>
    <header class="top-head-1">
        <div class="nav-wrapper">
            <div class="nav-innerwrapper">
                <ul class="nav-list">
                    <li class="nav"><a href="/about">About</a></li>
                    <li class="nav"><a href="/service">Service</a></li>
                    <li class="nav"><a href="/feature">Feature</a></li>
                    <li class="nav"><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <a href="/login">Sign in</a>
    </header>
    <header class="top-head-2">
        <div class="logo">
            <img src="<?= $Logo ?>" alt="ZSNHS main logo">
        </div>
        <div class="school-name">
            <p class="school-name-txt">
                Zamboanga del Sur National High School - Senior High School
            </p>
            <span class="school-location-txt">
                Sta. Maria District, Pagadian City
            </span>
        </div>
    </header>
    <section class="introduction-wrapper">
        <main class="introduction-innerwrapper">
            <div class="intro-lg-txt">
                <p>Your Modern Online School</p>
            </div>
            <div class="intro-sm-txt">
                <p>
                    <span>Effortless Administration</span>
                    <span>Seamless Learning</span>
                    <span>Secure & Scalable</span>
                </p>
            </div>
            <div class="intro-action-btns">
                <button type="button" class="btns">Start Today</button>
                <a href="/signup" class="btns">Registration</a>
            </div>
        </main>
    </section>
</body>
</html>