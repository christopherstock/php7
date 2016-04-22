<?php

    /***************************************************************
    *   A test class.
    ***************************************************************/
    class MyTestApp
    {
        /***************************************************************
        *   Being invoked when a new instance of MyTestApp is created.
        ***************************************************************/
        public function __construct()
        {
            echo 'MyTestApp::construct() being invoked<br><br>';
        }

        /***************************************************************
        *   A test method.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public static function myTestMethod($test1, $test2)
        {
            echo 'MyTestApp::myTestMethod() being invoked<br><br>';
        }

        /***************************************************************
        *   A static test function.
        *
        *   @param  int    $test1
        *   @param  string $test2
        *   @return string
        ***************************************************************/
        public static function myStaticTestFunction($test1, $test2)
        {
            echo 'MyTestApp::myStaticTestFunction() being invoked<br><br>';



            return 'Test';
        }
    }
