<?php
/**
 * Intelligent file importer.
 *
 * @param   string  $path  A dot syntax path.
 * @param   string  $base  Search this directory for the class.
 *
 * @return  boolean  True on success.
 *
 * @since       11.1
 * @deprecated  5.0 Classes should be autoloaded. Use JLoader::registerPrefix() or JLoader::registerNamespace() to register an autoloader for your files.
 */
function jimport($path, $base = null) {}