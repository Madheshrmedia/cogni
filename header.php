<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cogni Wellness Hub</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        * {
            font-family: "Poppins", sans-serif;
            /* overflow-x: hidden; */
        }

        #headerall {
            background: #FFFFFF !important;
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            color: #000;
        }

        .header {
            padding: 0px;
        }

        .getstart {
            color: white !important;
        }

        .topbar {
            background-color: #162F33;
        }

        .header-logo {
            width: 70px;
            height: 70px;
        }

        .header-icon {
            width: 40px;
            margin-right: 10px;
        }

        .contact-info {
            color: black;
            text-decoration: none;
        }

        .contact-info p {
            margin: 0;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 8px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 10px 25px;
            background: #162F33;
            color: white;
            margin-left: 30px;
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            margin-right: 20px;
            font-weight: 300;
        }

        .navbar-brand {
            display: none;
        }

        @media only screen and (max-width: 600px) {
            .navbar-brand {
                display: block;
            }

            .navbar {
                padding: 0px !important;
                background: #163033;
            }

            .navbar-toggler {
                border-color: white;
                margin-right: 10px;
            }

            .nav-container {
                padding: 0px;
            }

            .navbar-collapse {
                background: white;
                padding: 10px 30px;
            }

            .header-cont {
                display: block !important;
            }

            .contact-info {
                margin-bottom: 25px;
            }

            .booknow-btn {
                margin-left: 0px;
            }
        }
    </style>
</head>
<?php
include_once("./popup.php");
?>

<body>
    <header class="header header-sticky" id="headerall">
        <div class="topbar py-3 d-none d-lg-flex">
            <div class="container-fluid mx-5">
                <div class="row">
                    <div class="col-sm-3 my-auto">
                        <div class="d-none d-lg-flex align-items-center text-center">
                            <a href="./index.php"><img src="./image/cogni-logo.webp" alt="cogni logo"
                                    class="header-logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-lg-flex align-items-center text-center">
                            <a href="#"><img src="./image/header-img.webp" alt="cogni logo" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end my-auto">
                        <a href="https://www.facebook.com/profile.php?id=61563851213696" target="_blank">
                            <img src="./image/fb.webp" class="header-icon" alt="">
                        </a>
                        <a href="https://www.instagram.com/cogniwellness_tharamani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">
                            <img src="./image/ig.webp" class="header-icon" alt="">
                        </a>
                        <a href="#">
                            <img src="./image/x.webp" class="header-icon" alt="">
                        </a>
                        <a href="#">
                            <img src="./image/li.webp" class="header-icon" alt="">
                        </a>
                        <a href="#">
                            <img src="./image/yt.webp" class="header-icon" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light shadow px-5 py-3">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="#"><img src="./image/cogni-logo.webp" alt="cogni logo"
                        class="header-logo"></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span><i class="fas fa-bars" style="color:white"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blog</a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont align-items-center">
                        <a href="#" class="contact-info form-inline d-flex">
                            <i class="fas fa-phone-alt my-auto"></i>
                            <p>+91 8056121346</p>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                            Book Appointment
                        </a>


                    </div>
                </div>
            </div>
        </nav>
    </header>