<?php

    namespace lahaina\framework\exception;

if (!defined('PATH'))
	exit('Kein direkter Skriptzugriff erlaubt!');

    /**
     * Libraray exception extends framework exception class
     *
     * @version 1.0.3
     *
     * @author Jonathan Nessier
     */
    class LibraryException extends FrameworkException {

	protected $_component = 1;

    }
    