<?php

    namespace lahaina\libraries\navigation;

if (!defined('PATH'))
	exit('Kein direkter Skriptzugriff erlaubt!');

    /**
     * Link item extends item class
     *
     * @version 1.0.3
     * 
     * @author Jonathan Nessier
     */
    class LinkItem extends Item {

	/**
	 * Constructor
	 * 
	 * @param string $title Title of navigation item
	 * @param string $url Linked url
	 * @param string $cssClass Additional CSS class(es) 
	 * @param array $sub Sub controllers of current item
	 */
	public function __construct($title, $url, $cssClass = null, $sub = array()) {
	    $this->title = $title;
	    $this->url = $url;
	    $this->cssClass = $cssClass;
	    $this->sub = $sub;
	}

    }
    