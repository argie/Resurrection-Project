<?php 
	defined('C5_EXECUTE') or die("Access Denied.");

if(function_exists('classify_link') == false) {
  function classify_link($name) {
    $pagename = str_replace(" ", "_", strtolower($name));
    $pagename = str_replace("+", "_", strtolower($name));
    $pagename = str_replace("-", "_", strtolower($name));
    $pagename = str_replace("'", "",  strtolower($name));
    $pagename = str_replace("\"", "", strtolower($name));
    return $pagename;
  }
}

	$aBlocks = $controller->generateNav();
	$c = Page::getCurrentPage();

	$nh = Loader::helper('navigation');

	$isFirst = true;
  $block_links = array();
	foreach($aBlocks as $ni) {
		$_c = $ni->getCollectionObject();
		if (!$_c->getCollectionAttributeValue('exclude_nav')) {

			$target = $ni->getTarget();
			if ($target != '') {
				$target = 'target="' . $target . '"';
			}

			if ($ni->isActive($c) || strpos($c->getCollectionPath(), $_c->getCollectionPath()) === 0) {
				$navSelected='nav-selected';
			} else {
				$navSelected = '';
			}
			
			$pageLink = false;
			
			if ($_c->getCollectionAttributeValue('replace_link_with_first_in_nav')) {
				$subPage = $_c->getFirstChild();
				if ($subPage instanceof Page) {
          continue;
					$pageLink = $nh->getLinkToCollection($subPage);
				}
			}
			
			if (!$pageLink) {
				$pageLink = $ni->getURL();
			}

			if ($isFirst) $isFirstClass = 'first';
			else $isFirstClass = '';
			
			// echo '<li class="'.$navSelected.' '.$isFirstClass.'">';
			
      $cssname = classify_link($ni->getName());
			if ($c->getCollectionID() == $_c->getCollectionID()) { 
				$block_links[]= ('<a class="nav-selected '. $cssname .'" href="' . $pageLink . '"  ' . $target . '><span>' . $ni->getName() . '</span></a>');
			} else {
				$block_links[]= ('<a class="'. $cssname .'" href="' . $pageLink . '"  ' . $target . '><span>' . $ni->getName() . '</span></a>');
			}	
			
			// echo('</li>');
			$isFirst = false;			
		}
	}

  foreach($block_links as $link) {
    //echo '<div class="btn">';
    echo $link ." ";
    //echo '</div>';
  }
?>
