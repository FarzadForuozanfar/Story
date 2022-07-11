<?php
    include "database.php";
    session_start();
    $way = $_SESSION["way"];
    $finals_tabels = $db->query("SELECT * FROM finals WHERE q_id = $way");
    $finals = $finals_tabels->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Story">
    <link rel="stylesheet" href="CSS/bootstrap.rtl.css">
    <meta name="keywords" content="Story, online story, storyteller site, storyteller">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="aithor" content="farzad foroozanfar">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
</head>
<body>
<div class="container-fluied">


    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" width="45px"> داستانک</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
                </li>
                
            </ul>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-light " type="submit"><i class="bi bi-search"></i></button>
                <input class="form-control mx-2" type="search" placeholder="جستجو" aria-label="Search">
                
            </form>
            
            </div>
        </div>
    </nav>
    <div class="container">
            <div class="row my-5" id="row">

                    <div class="col p-5 rounded-3"id="card-body" >
                    <div class="card-header mb-5" id="card-header">
                                <h1>پایان</h1> 
                            </div>
                        <div >
                            <?php echo $finals["text"]; ?>
                        </div>
                        <div class="d-flex justify-content-center mt-5" >
                            <a id="link"  href="index.php">
                                <button class="button-64" role="button">
                                    <span class="text">برگشت به خانه</span>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
    </div>
    </div>
    <div class="bg-secondary mt-5 container-fluied d-flex justify-content-center">
        <div>
            
            <ul class="wrapper">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="bi bi-facebook"></i></span>
                </li>
                <li class="icon twitter">
                    <span class="tooltip">Telegram</span>
                    <a href="https://t.me/farzad_foroozanfar"><i class="bi bi-telegram"></i></a>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <a href="https://instagram.com/farzad__foroozanfar"><i class="bi bi-instagram"></i></a>
                </li>
                <li class="icon github">
                    <span class="tooltip">Github</span>
                    <a href="https://github.com/farzadForoozanfar"><i class="bi bi-github"></i></a>
                </li>
                <li class="icon youtube">
                    <span class="tooltip">Linkedin</span>
                    <a href="https://linkedin.com/in/farzad-foruozanfar-a1773b225"><i class="bi bi-linkedin"></i></a>
                </li>
            </ul>
        </div>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js"></script>
</body>
</html>
