<?php

namespace lahaina\libraries\navigation;

if (!defined('PATH'))
    exit('Kein direkter Skriptzugriff erlaubt!');

/**
 * Action item extends item class
 *
 * @version 1.0.3
 *
 * @author Jonathan Nessier
 */
class ActionItem extends Item {

    /**
     * Constructor
     *
     * @param string $title Title of navigation item
     * @param string $controllerName Name of controller
     * @param string $actionName Name of action
     * @param string $id ID of entity
     * @param string $cssClass Additional CSS class(es)
     * @param array $sub = Sub controllers of current item
     * @param string $htmlTemplate HTML template
     */
    public function __construct($title, $controllerName, $actionName = null, $id = null, $cssClass = null, $activeCssClass = 'current', $sub = array(), $htmlTemplate = null) {
        $this->_title = $title;
        $this->_url = URL . '/' . strtolower($controllerName) . ($actionName ? '/' . $actionName . ($id ? '/' . $id : '') : '');
        $this->_actionName = $actionName;

        $this->_controllerName = strtolower($controllerName);

        $this->_cssClass = $cssClass;
        $this->_activeCssClass = $activeCssClass;
        $this->_sub = $sub;
        if ($htmlTemplate) {
            $this->setHtmlTemplate($htmlTemplate);
        }
    }

}
