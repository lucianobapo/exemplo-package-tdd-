<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 23/04/16
 * Time: 03:36
 */

namespace ErpNET\App;


class Application extends \Illuminate\Foundation\Application
{

//    /**
//     * Application constructor.
//     * @param string $realpath
//     */
//    public function __construct($realpath)
//    {
//
//
//    }

    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'src';
    }
}