<?php

/**
 *  @class Singleton pattern / anitpattern
 */
class Singleton
{
    /**
     *  @desc Holds single instance of Singleton class
     */
    private static $instance;

    /**
     *  @desc Constructor is disabled. You can only create new object through ::getInstance() method.
     */
    private function __construct(){
        echo "New instance created. ";
        // disabled
    }

    /**
     * @return Singleton object
     * @desc check if instnace was already created:
     * if no instnace is set create one "new ClassName();" and assign it to "$instance"
     * if instance is set do not create another instance
     * returns $instance value
     */
    public static function getInstance(){
        $class = __CLASS__;
        if(!self::$instance instanceof $class){
            self::$instance = new static();
        }
        return self::$instance;
    }
}