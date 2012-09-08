<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?> 


<div class="clear"></div>
</div> <!-- end main content -->


<div id="footer">

  <div class="godaddy_seal"></div>
  <div class="footer_navigation">
  <?php 
    $bt = BlockType::getByHandle('autonav');
    $bt->controller->displayPages = 'top';
    $bt->controller->orderBy = 'display_asc';
    $bt->controller->displaySubPages = 'all'; 
    $bt->controller->displaySubPageLevels = 'custom';
    $bt->controller->displaySubPageLevelsNum = '0';   
    $bt->render('templates/footer_navigation');
  ?>
  </div>
  <div class="copyright">
    &copy; 2012 The Resurrection Project. All rights reserved.
  </div>
</div>


</body>
</html>
