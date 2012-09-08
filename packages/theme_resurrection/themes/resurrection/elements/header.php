<?php
$page = Page::getCurrentPage();
$typeHandle = $page->getCollectionTypeHandle();

$page_type_name = "pagetype_". $typeHandle;

$pagename = str_replace(" ", "",   strtolower($page->getCollectionName()));
$pagename = str_replace("+", "_",  strtolower($pagename));
$pagename = str_replace("-", "_",  strtolower($pagename));
$pagename = str_replace("'", "",   strtolower($pagename));
$pagename = str_replace("`", "",   strtolower($pagename));
$pagename = str_replace("\"", "",  strtolower($pagename));
$pagename = str_replace("__", "_", strtolower($pagename));
$pagename = "pagename_". $pagename;
define('CURRENT_PAGE_NAME', $pagename);
?>

<!DOCTYPE html>
<html>
<head>
<?php       
  Loader::element('header_required'); 
?>

<link href="<?php echo $this->getThemePath() ?>/master.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?php  echo $this->getThemePath()?>/js/modernizr-1.6.min.js"></script>
</head>

<body class="<?php echo $page_type_name ." ". $pagename ?>">

<div id="header">
  <div id="header_hero"></div>
  <div id="header_navigation">
    <?php 
      $bt = BlockType::getByHandle('autonav');
      $bt->controller->displayPages = 'top';
      $bt->controller->orderBy = 'display_asc';
      $bt->controller->displaySubPages = 'all'; 
      $bt->controller->displaySubPageLevels = 'custom';
      $bt->controller->displaySubPageLevelsNum = '0';   
      $bt->render('templates/header_navigation');
    ?>
    <div class="clear"></div>
  </div>
</div>

<div id="content_body"> <!-- begin main content -->

