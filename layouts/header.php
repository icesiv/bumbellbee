<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./dist/css/all.css"> <!-- Font Awsome -->
    <link rel="stylesheet" type="text/css" href="./dist/datatables.min.css" />



    <title>Bumbellbee Ltd.</title>
</head>

<body>

    <header>
        <a class="header_logo_content" href="">
            <img style="height: auto; width: 100%" src="./img/logo.png">
        </a>

        <nav class="navbar navbar-expand-lg navbar-light bg-light cas-nav">
            <p></p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto nav-list">
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?> active_castom   <?php   }  ?>"
                            href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/package.php") { ?>  active_castom   <?php   }  ?>"
                            href="../package.php">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/payment.php") { ?>  active_castom   <?php   }  ?>"
                            href="../payment.php">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/contactus.php") { ?> active_castom   <?php   }  ?>"
                            href="../contactus.php">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/aboutus.php") { ?>  active_castom   <?php   }  ?>"
                            href="../aboutus.php">About Us</a>
                    </li>
                </ul>

                <span style="font-weight: 900; font-size: larger;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt phone-icon"></i> 09 678 300700</span>
            </div>
        </nav>
    </header>