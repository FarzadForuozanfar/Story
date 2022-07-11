<?php
    include "database.php";
    session_start();
    if(isset($_POST["answer"]))
        $user_choice_way = $_POST["answer"];
    else
        $user_choice_way = 0;
    if($_SESSION["way"] < 10)
    {
        $_SESSION["way"] += 10 * $user_choice_way;
        header("Location: question.php?x=1&y=$user_choice_way&z=0");
    }
    elseif($_SESSION["way"] > 10 && isset($_POST["answer"]))
    {
        
        $_SESSION["way"] += 100 * $user_choice_way;
        header("Location: final.php");
        //&& $_SESSION["way"] < 100
    }
    else
    {
        $user_choice_way = (int)($_SESSION["way"] / 10);
        header("Location: question.php?x=1&y=$user_choice_way&z=0");
    }
        
?>