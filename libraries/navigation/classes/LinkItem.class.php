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
     * @param string $htmlTemplate HTML template
     */
    public function __construct($title, $url, $cssClass = null, $activeCssClass = 'current', $sub = array(), $htmlTemplate = null) {
        $this->_title = $title;
        $this->_url = $url;
        $this->_cssClass = $cssClass;
        $this->_activeCssClass = $activeCssClass;
        $this->_sub = $sub;
        if ($htmlTemplate) {
            $this->setHtmlTemplate($htmlTemplate);
        }
    }

}
