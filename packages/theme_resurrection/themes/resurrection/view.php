<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<div data-ident='view'>
<?php  
print $innerContent;
?>
<br>
</div>

<?php $this->inc('elements/footer.php'); ?>