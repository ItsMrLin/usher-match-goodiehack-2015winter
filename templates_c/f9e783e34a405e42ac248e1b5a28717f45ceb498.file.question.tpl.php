<?php /* Smarty version Smarty-3.1.20, created on 2015-02-28 14:28:08
         compiled from "templates/question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131880986454f20e28f2b3a5-67454214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e783e34a405e42ac248e1b5a28717f45ceb498' => 
    array (
      0 => 'templates/question.tpl',
      1 => 1425151663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131880986454f20e28f2b3a5-67454214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54f20e290284b9_63515715',
  'variables' => 
  array (
    'cvData' => 0,
    'cvSection' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f20e290284b9_63515715')) {function content_54f20e290284b9_63515715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/itsmrlin/Sites/usher-match-goodiehack-2015winter/Smarty-3.1.20/libs/plugins/modifier.replace.php';
?><!DOCTYPE html>
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
            <?php  $_smarty_tpl->tpl_vars['cvSection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cvSection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cvData']->value['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cvSection']->key => $_smarty_tpl->tpl_vars['cvSection']->value) {
$_smarty_tpl->tpl_vars['cvSection']->_loop = true;
?>
                <div class="cv-section" id="cv-section-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cvSection']->value['name'],' ','');?>
">
                <div class="cv-section-title"><?php echo $_smarty_tpl->tpl_vars['cvSection']->value['name'];?>
</div>
                    <div class="cv-section-body">
                    <?php if (empty($_smarty_tpl->tpl_vars['cvSection']->value['type'])) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("cv_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cvSection']->value['type']=='publication') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("cv_section_publication.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cvSection']->value['type']=='skill') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("cv_section_skill.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cvSection']->value['type']=='course') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("cv_section_course.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
 -->    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vatch_question.js"></script>
</body>
<html><?php }} ?>
