<?php
namespace KVSun;
const EXT        = '.php';
const COMPONENTS = __DIR__ . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR;
const CLASSES    = __DIR__ . DIRECTORY_SEPARATOR . 'classes';
const CONFIG     = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR;
const PAGES_DIR  = __DIR__ . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR;
if (! array_key_exists('SERVER_NAME', $_SERVER)) {
	$_SERVER['SERVER_NAME'] = 'localhost';
}
if (! array_key_exists('HTTP_HOST', $_SERVER)) {
	$_SERVER['HTTP_HOST'] = $_SERVER['SERVER_NAME'];
}
if (! array_key_exists('REQUEST_SCHEME', $_SERVER)) {
	$_SERVER['REQUEST_SCHEME'] = 'http';
}
define(__NAMESPACE__ . '\DEBUG', $_SERVER['SERVER_NAME'] === 'localhost');
define(__NAMESPACE__ . '\DOMAIN', "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/");
