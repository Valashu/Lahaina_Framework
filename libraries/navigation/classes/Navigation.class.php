<?php

namespace lahaina\libraries\navigation;

if (!defined('PATH'))
    exit('Kein direkter Skriptzugriff erlaubt!');

use lahaina\framework\common\Lahaina;

/**
 * Navigation
 *
 * @version 1.0.3
 *
 * @author Jonathan Nessier
 */
class Navigation {

    private $_items = array();
    private $_htmlTemplate = '<ul>{NAV_ITEMS}</ul>';

    /**
     * Constructor
     *
     * @param array $items
     */
    public function __construct($items = array()) {
        $this->_items = $items;
    }

    /**
     * Add item
     *
     * @param \lahaina\libraries\navigation\Item $item Item of navigation
     */
    public function add(Item $item) {
        $this->_items[] = $item;
    }

    /**
     * Render navigation
     *
     * @param \lahaina\framework\common\Lahaina $lahaina Lahaina framework base
     * @param string $renderType Type or rendering (echo or type)
     * @return string
     */
    public function render(Lahaina $lahaina, $renderType = 'echo') {

        if (count($this->_items) > 0) {
            $items = '';
            foreach ($this->_items as $item) {
                $items .= $item->render($lahaina, null, 'return');
            }

            $rendered_output = str_replace(array('{NAV_ITEMS}'), array($items), $this->_htmlTemplate);

            if ($renderType == 'echo') {
                echo $rendered_output;
            } else {
                return $rendered_output;
            }
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
