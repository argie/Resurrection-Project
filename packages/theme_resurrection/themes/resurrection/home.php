<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<div class="home_slideshow">
<?php  
  $a = new Area('Home Slideshow');
  $a->display($c);
?>
<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="right_content">
	<?php  
	  $a = new Area('Right');
	  $a->display($c);
  ?>
  <div class="clear"></div>
</div>

<div class="main_content">
  <?php
  	$a = new Area('Main');
  	$a->display($c);
  ?>
  <div class="clear"></div>
</div>

<?php $this->inc('elements/footer.php'); ?>