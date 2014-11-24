<?php

    namespace application\controllers;

if (!defined('PATH'))
	exit('Kein direkter Skriptzugriff erlaubt!');

use lahaina\framework\mvc\Controller;

    /**
     * Start controller
     *
     * @version 1.0.3
     *
     * @author Jonathan Nessier
     */
    class Start_Controller extends Controller {

	/**
	 * Index action
	 */
	public function index() {
	    $this->_view->set('start', 'Startseite');
	}

    }
    