<?php

    /***************************************************************
    *   The debug class.
    ***************************************************************/
    class Debug
    {
        public $myDebugValue = 7;

        /***************************************************************
        *   Debugs out the test string in the specified color.
        *
        *   @param  string $color   The color as a HTML CSS color value.
        *   @param  string $msg     The message to debug out
        ***************************************************************/
        public static function out( string $color, string $msg)
        {
            echo '<font style="color: ' . $color . ';">' . $msg . '</font><br>';
        }
    }
