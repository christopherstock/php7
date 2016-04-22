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
            Debug::out( DebugColor::GREEN, 'MyTestApp::construct() being invoked' );
        }

        /***************************************************************
        *   A test method.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public static function myTestMethod( int $test1, string $test2)
        {
            Debug::out( DebugColor::GREEN, 'MyTestApp::myTestMethod() being invoked [' . $test1 . '][' . $test2 . ']' );
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
            Debug::out( DebugColor::BLUE, 'MyTestApp::myStaticTestFunction() being invoked [' . $test1 . '][' . $test2 . ']' );

            return array( 1, 2, 3, );
        }
    }
