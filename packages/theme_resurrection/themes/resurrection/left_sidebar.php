<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>


<div class="left_sidebar_content">
	<?php  
	  $a = new Area('Sidebar');
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