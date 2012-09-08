<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<div class="clearfix"></div>
<div>

<article class="main">
  <?php  
    $a = new Area('Main');
    $a->display($c);
  ?>
</article>
  
  <div class="clearfix"></div>
</div>

<?php $this->inc('elements/footer.php'); ?>