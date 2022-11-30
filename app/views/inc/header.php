<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <a href="index.html"><i class='bx bx-taxi'></a></i>
            <span class="logo_name">E-Fine</span>
        </div>

        <ul class="nav-links">
            <div class="current">
                <li>
                    <a href="./dashboard.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Overview</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">overview</a></li>
                    </ul>
                </li>
            </div>

            <li>
                <a href="./ps_police_officer.php">
                    <i class='bx bx-user-plus'></i>
                    <span class="link_name">Police Officer</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Police Officer</a></li>
                </ul>
            </li>


            <li>
                <a href="./ps_driver_payment.php">
                    <i class='bx bx-notepad' style='color:#ffffff'></i>
                    <span class="link_name">Driver Payment</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Driver Payment</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="./ps_overdue_fine.php">
                        <i class='bx bxs-time-five' style='color:#ffffff'></i>

                        <span class="link_name">Overdue Fine</span>
                    </a>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="">Overdue Fine</a></li>

                </ul>
            </li>
            <li>
                <a href="./ps_request_to_rmv.php">
                    <i class='bx bx-mail-send' style='color:#ffffff'></i>
                    <span class="link_name">Request to RMV</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Request to RMV</a></li>
                </ul>
            </li>

            <li>
                <a href="./ps_report_problem.php">
                    <i class='bx bxs-help-circle' style='color:#ffffff'></i>
                    <span class="link_name">Report a Problem</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Report a Problem</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-user-pin'></i>
                    <span class="link_name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Profile</a></li>
                </ul>
            </li>

            <li class="logout">
                <a href="logout.php">
                    <i class='bx bx-log-out' style='color:#ffffff'></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="logout.php">Logout</a></li>
                </ul>

            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <div class="right-side-items">
                <i class='bx bx-bell'></i>
                <div class="profile">
                    <img src="image/1.jpg" alt="">
                </div>
            </div>
        </div>