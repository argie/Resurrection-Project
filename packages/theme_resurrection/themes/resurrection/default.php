<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<div>
<article class="full">
<?php  
  $a = new Area('Main');
  $a->display($c);
?>
</article>
</div>

<?php $this->inc('elements/footer.php'); ?>