<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vatch - Question</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/vatch.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="question-bg-div">
        <div class="question-progress-bar-div">
            <span class="small-star-span">
                <img src="img/small-star.png">
            </span>
            <span class="big-star-span">
                <img src="img/big-star.png">
            </span>
        </div>
        <div class="container splash-container">
            <div class="row">
                <div class="col-lg-12">
                   <img class="splash-logo" src="img/logo.png">
                </div>
            </div>
        </div>
    </div>
<!--     <div class="container">
        <div>
            {foreach from=$cvData.sections item='cvSection'}
                <div class="cv-section" id="cv-section-{$cvSection.name|replace:' ':''}">
                <div class="cv-section-title">{$cvSection.name}</div>
                    <div class="cv-section-body">
                    {if empty($cvSection.type)}
                        {include file="cv_section.tpl"}
                    {elseif $cvSection.type eq 'publication'}
                        {include file="cv_section_publication.tpl"}
                    {elseif $cvSection.type eq 'skill'}
                        {include file="cv_section_skill.tpl"}
                    {elseif $cvSection.type eq 'course'}
                        {include file="cv_section_course.tpl"}
                    {/if}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
 -->    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vatch_question.js"></script>
</body>
<html>