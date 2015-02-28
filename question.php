<?php
    date_default_timezone_set('America/New_York');
    // NOTE: Smarty has a capital 'S'
    // require_once('Smarty-3.1.20/libs/Smarty.class.php');
    // $smarty = new Smarty();
    require_once('Smarty-3.1.20/libs/SmartyBC.class.php');
    $smarty = new SmartyBC();

    // read cv.json file
    $jsonString = file_get_contents("data/question.json");
    $jsonData = json_decode($jsonString, true);

    // render cv
    $smarty->assign('questionData', $jsonData);
    $smarty->display('templates/question.tpl');
?>