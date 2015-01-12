<?php

/**
 * Application and framework constants
 */
if (!defined('PATH')) {
    define('PATH', $config['app']['path']);
}

if (!defined('APP_PATH')) {
    define('APP_PATH', PATH . '/' . $config['app']['namespace']);
}

if (!defined('URL')) {
    define('URL', $config['app']['url']);
}

if (!defined('TEMPLATE_PATH')) {
    define('TEMPLATE_PATH', PATH . '/' . $config['template']['folder'] . '/' . $config['template']['name'] . '/');
}

if (!defined('TEMPLATE_URL')) {
    define('TEMPLATE_URL', URL . '/' . $config['template']['folder'] . '/' . $config['template']['name'] . '/');
}

if (!defined('LIBRARY_PATH')) {
    define('LIBRARY_PATH', PATH . '/' . $config['libraries']['folder'] . '/');
}

if (!defined('LIBRARY_URL')) {
    define('LIBRARY_URL', URL . '/' . $config['libraries']['folder'] . '/');
}

if (!defined('MEDIA_PATH')) {
    define('MEDIA_PATH', PATH . '/' . $config['media']['folder'] . '/');
}

if (!defined('MEDIA_URL')) {
    define('MEDIA_URL', URL . '/' . $config['media']['folder'] . '/');
}
