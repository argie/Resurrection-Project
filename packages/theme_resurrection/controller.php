<?php     

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeResurrectionPackage extends Package {

	protected $pkgHandle = 'theme_resurrection';
	protected $appVersionRequired = '5.1';
	protected $pkgVersion = '1.0.0';
	
	public function getPackageDescription() {
		return t("Installs Resurrection Theme");
	}
	
	public function getPackageName() {
		return t("resurrection");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		PageTheme::add('resurrection', $pkg);		
	}




}
