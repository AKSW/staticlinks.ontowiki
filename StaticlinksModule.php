<?php

/**
 * OntoWiki module – Navigation
 *
 * this is the main navigation module
 *
 * @category   OntoWiki
 * @package    extensions_modules_navigation
 * @author     Konrad Abicht <hello@inspirito.de>
 * @copyright  Copyright (c) 2012, {@link http://aksw.org AKSW}
 * @license    http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */
class StaticlinksModule extends OntoWiki_Module
{
    protected $session = null;

    public function init() {
        $this->session = $this->_owApp->session;
	}

    public function getTitle() {
        return "Links";
    }
    
    public function shouldShow(){
		return true;
    }

    /**
     * Returns the content
     */
    public function getContents() {

		$this->view->basePath = $this->_config->staticUrlBase . "extensions/cubeviz/";
				
        return $this->render('static/templates/StaticLinksModule');
    }

    public function layoutType(){
        return "inline";
    }
    
}


