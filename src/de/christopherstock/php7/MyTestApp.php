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
        public static function myTestMethod( int $test1, string $test2)
        {
            echo 'MyTestApp::myTestMethod() being invoked [' . $test1 . '][' . $test2 . ']<br><br>';
        }

        /***************************************************************
        *   A static test function.
        *
        *   @param  int    $test1
        *   @param  string $test2
        *   @return array
        ***************************************************************/
        public static function myStaticTestFunction( int $test1, string $test2 ) : array
        {
            echo 'MyTestApp::myStaticTestFunction() being invoked [' . $test1 . '][' . $test2 . ']<br><br>';



            return array( 1, 2, 3, );
        }
    }
