<?php

namespace lahaina\libraries\navigation;

if (!defined('PATH'))
    exit('Kein direkter Skriptzugriff erlaubt!');

use lahaina\framework\common\Lahaina;

/**
 * Navigation item
 *
 * @version 1.0.3
 *
 * @author Jonathan Nessier
 */
abstract class Item {

    protected $_title;
    protected $_url;
    protected $_htmlTemplate = '<li class="{CLASS}"><a href="{HREF}">{TITLE}</a></li>';
    protected $_activeCssClass = 'current';
    protected $_sub = array();
    protected $_controllerName = '';
    protected $_actionName = '';

    /**
     * Check navigation item whether it currently is active
     *
     * @param \lahaina\framework\common\Lahaina $lahaina Lahaina framework base
     * @return boolean
     */
    private function _isCurrent(Lahaina $lahaina) {

        if ($lahaina->hasCurrentController($this->_controllerName)) {
            if (!$this->_actionName || $lahaina->hasCurrentAction($this->_actionName)) {
                return true;
            }
        }
        if (is_array($this->_sub)) {
            foreach ($this->_sub as $controller) {
                if ($lahaina->hasCurrentController($controller)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Render navigation item
     *
     * @param lahaina\framework\common\Lahaina $lahaina Lahaina framework base
     * @param string $renderType Type or rendering (echo or type)
     * @return string
     */
    public function render($lahaina, $renderType = 'echo') {

        if ($this->_isCurrent($lahaina)) {
            $this->_cssClass .= $this->_activeCssClass;
        }

        $rendered_output = str_replace(array('{HREF}', '{TITLE}', '{CLASS}'), array($this->_url, $this->_title, $this->_cssClass), $this->_htmlTemplate);

        if ($renderType == 'echo') {
            echo $rendered_output;
        } else {
            return $rendered_output;
        }
    }

    /**
     * Set HTML template
     *
     * @param string $htmlTemplate HTML template
     */
    public function setHtmlTemplate($htmlTemplate) {
        if ($htmlTemplate) {
            $this->_htmlTemplate = $htmlTemplate;
        }
    }

}
