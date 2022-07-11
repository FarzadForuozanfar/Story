<?php
    include "database.php";
    session_start();
    
    $finals = $db->query("SELECT * FROM finals");
    $_SESSION["total"] = $finals->num_rows;
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
                <a class="nav-link active" aria-current="page" href="#">خانه</a>
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
                            <div class="card-header" id="card-header">
                                <h2>به قصه گو خوش آمدید</h2> 
                            </div>
                            <div class="card-body" id="card-body">
                                <h4 class="card-title">این داستان دارای  <?php echo $_SESSION["total"]; ?> پایان متفاوت است.</h4>
                                <hr>
                                <p>
                                از اونجایی که آدم ماجراجویی هستی؛ و کار و بارهم فشار سنگینی بهت آورده، تصمیم میگیری یه مسافرت به خودت جایزه بدی. به سه نفر از دوستای صمیمت زنگ میزنی تا اون ها هم برنامشون رو باتو اوکی کنن، اما ای دل غافل که کسی نمیتونه تورو توی این سفر همراهی کنه. ولی تو انقدر خستگی اذیتت کرده که میخوای هرطور شده به این سفر بری حتی تنها!!!
                                واسه 10 روز از رئیست مرخصی میگیری، بلافاصله از محل کارت میری سمت آژانس هواپیمایی تا برای یه جای خوش آب و هوا بلیط بگیری. وسط گرمای تابستون دلت هوس دریا کرده. برای خلیج پارس بلیط میگیری و برمیگردی سمت خونه تا چمدوناتو ببندی. لباسای هاوایی، کلاه و عینک و هر وسیله دیگه ای که توی این گرما به کارت میاد برمیداری. پشت لپ تاپت میشینی تا یکی از بهترین هتل هارو رزرو کنی. حسابی قراره بهت خوش بگذره. بعد از اینکه هتل رو رزرو کردی به خواب ناز میری تا صبح اول وقت به سمت فرودگاه حرکت کنی.
                                پرواز خوبی رو سپری می کنی. وارد هتلت می شی و بعد از یه دوش آب سرد خودتو به آب پرتقال خنک دعوت می کنی. از منظره اتاقت لذت میبری؛ اما دوست داری بری و یه گشتی بیرون بزنی. از هتل میای بیرون و همینطور که داری به راهت ادامه میدی، چشمت به قایقا های موتوی میخوره که صداشون بین صدای قهقهه مردم گم شده. خیلی زود وارد صف میشی تا توهم یدونه از اون قایق ها اجاره کنی.
                                مسئول اون قایق ها ازت میپرسه : توانایی روندن قایق هارو به تنهایی داری؟ اما تو تاحالا تجربه ای مشابه این نداشتی!
                                تصمیم میگیری همراه بایک راهنما سوار قایق بشی.
                                </p>
                                <div class="d-flex justify-content-center" ><a id="link"  href="question.php?x=1&y=0&z=0"><button class="button-64" role="button"><span class="text">ادامه داستان</span></button></a></div>
                                
                                
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
