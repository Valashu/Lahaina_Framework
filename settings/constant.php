<?php

/**
 * Application and framework constants
 */
if (!defined('PATH')) {
    define('PATH', $config['app']['path']);
}

if (!defined('APP_PATH')) {
    define('APP_PATH', $config['app']['path'] . '/' . $config['app']['namespace']);
}

if (!defined('URL')) {
    define('URL', $config['app']['url']);
}

if (!defined('TEMPLATE_PATH')) {
    define('TEMPLATE_PATH', $config['app']['path'] . '/' . $config['template']['folder'] . '/' . $config['template']['name'] . '/');
}

if (!defined('TEMPLATE_URL')) {
    define('TEMPLATE_URL', $config['app']['url'] . '/' . $config['template']['folder'] . '/' . $config['template']['name'] . '/');
}

if (!defined('LIBRARY_PATH')) {
    define('LIBRARY_PATH', $config['app']['path'] . '/' . $config['libraries']['folder'] . '/');
}

if (!defined('LIBRARY_URL')) {
    define('LIBRARY_URL', $config['app']['url'] . '/' . $config['libraries']['folder'] . '/');
}

if (!defined('MEDIA_PATH')) {
    define('MEDIA_PATH', $config['app']['path'] . '/' . $config['media']['folder'] . '/');
}

if (!defined('MEDIA_URL')) {
    define('MEDIA_URL', $config['app']['url'] . '/' . $config['media']['folder'] . '/');
}
