<?php

namespace lahaina\libraries\navigation;

/**
 * Space item
 *
 * @version 1.0.3
 *
 * @author Melanie Rufer
 */
class SpaceItem extends Item {

    protected $_htmlTemplate = '<li class="{CLASS}">{TITLE}</li>';

    /**
     * Constructor
     *
     * @param string $title Title of navigation item
     * @param string $url Linked url
     * @param string $cssClass Additional CSS class(es)
     * @param array $sub Sub controllers of current item
     */
    public function __construct($title = null, $cssClass = 'space') {
        $this->_title = $title;
        $this->_cssClass = $cssClass;
    }

}
