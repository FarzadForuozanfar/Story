<?php
    include "database.php";
    session_start();
    $x = $_GET['x'];
    $y = $_GET['y'] * 10;
    $z = $_GET['z'] * 100;
    $_SESSION["way"] = $x + $y + $z;
    $way = $_SESSION["way"];
    $answers =  $db->query("SELECT * FROM options WHERE q_id = $way");
    $value = 1;
    
    $question_tabel = $db->query("SELECT * FROM questions WHERE q_id = $way");
    $question = $question_tabel->fetch_assoc();
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
            <div class="row mt-5" id="row">
                    <div class="col" id="col">
                        <div class="card" id="card">
                            
                                <div class="card-body rounded-3" id="card-body">
                                        <p class="bg-light text-dark p-1 rounded" >
                                            <?php echo $question["text"]; ?>
                                        </p>
                                    <form method="post" action="procces.php">
                                    
                                        <div>
                                            
                                            <?php foreach($answers as $answer): ?>
                                                <label class="rad-label">
                                                    <input type="radio" value="<?php echo $value;?>" class="rad-input" name="answer">
                                                    <div class="rad-design"></div>
                                                    <div class="rad-text mx-3" ><?php echo $answer["text"] ?></div>
                                                </label>
                                                <?php $value++ ?>
                                                
                                            <?php endforeach; ?>

                                            
                                            
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="button-64"><span class="text">خب بقیش !!!</span></button>
                                        </div>
                                    </form>
                                        
                                
                                </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js"></script>
</body>
</html>
