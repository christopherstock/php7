<?php

    /***************************************************************
    *   A test class.
    ***************************************************************/
    class NewFeatures
    {
        /***************************************************************
        *   Being invoked when a new instance of NewFeatures is created.
        ***************************************************************/
        public function __construct()
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->construct() being invoked' );
        }

        /***************************************************************
        *   Tests the new spaceship operator.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public function testSpaceshipOperator( int $test1, string $test2)
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->testSpaceshipOperator() being invoked [' . $test1 . '][' . $test2 . ']' );

            $test3 = ( 1 <=> 3 );

            $time1 = new DateTime( '2016-04-01 23:11:23' );
            $time2 = new DateTime( '2016/04/02 23:11:23' );

            $test3 = ( $time1 <=> $time2 );

            Debug::out( DebugColor::BLUE, 'Spaceship operation results to [' . $test3 . ']<br>' );
        }

        /***************************************************************
        *   Tests constant arrays via 'define' keyword.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public function testConstantArraysViaDefine( int $test1, string $test2)
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->testConstantArraysViaDefine() being invoked [' . $test1 . '][' . $test2 . ']' );

            define( 'MY_CONSTANT_ARRAY', array( 0, 1, 2, 3, 4, ) );

            Debug::out( DebugColor::BLUE, 'Constant array 2nd element is [' . MY_CONSTANT_ARRAY[ 2 ] . ']<br>' );
        }

        /***************************************************************
        *   Tests usage of anonymous classes.
        ***************************************************************/
        public function testAnonymousClasses()
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->testAnonymousClasses() being invoked' );

            /***************************************************************
            *   An anonymous inner class.
            ***************************************************************/
            $test1 = new class
            {
                /***************************************************************
                *   Returns a constant string.
                *
                *   @return string
                ***************************************************************/
                public function myTest() : string
                {
                    return 'myTest Return-String';
                }
            };

            $myTestValue = $test1->myTest();

            Debug::out( DebugColor::BLUE, 'Return value from anonymous class is [' . $myTestValue . ']<br>' );
        }

        /***************************************************************
        *   Tests usage of the unicode codepoint escape syntax.
        ***************************************************************/
        public function testUnicodeCodepointEscapeSyntax()
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->testUnicodeCodepointEscapeSyntax() being invoked' );

            $utf8 = "\u{9998}";

            Debug::out( DebugColor::BLUE, 'The Unicode codepoint escape value is [' . $utf8 . ']<br>' );
        }

        /***************************************************************
        *   Tests usage of closure calls.
        ***************************************************************/
        public function testClosureCall()
        {
            // Alex
        }

        /***************************************************************
        *   Tests usage of filtered unserialize.
        ***************************************************************/
        public function testFilteredUnserialize()
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures->testFilteredUnserialize() being invoked' );

            $myDebugObject = new Debug();

            $mySerializedDebugObject = serialize( $myDebugObject );

            Debug::out( DebugColor::BLUE, "Serialized debug object: [" . $mySerializedDebugObject . "]" );





        }












        /***************************************************************
        *   Tests the new null-coalescing operator.
        *
        *   @param  int    $test1
        *   @param  string $test2
        *   @return array
        ***************************************************************/
        public static function testNullCoalescingOperator(int $test1, string $test2 ) : array
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures::testNullCoalescingOperator() being invoked [' . $test1 . '][' . $test2 . ']' );

            $test4 = $undefinedVariable ?? 'myTest';

            Debug::out( DebugColor::BLUE, 'Coalescing operation results to [' . $test4 . ']<br>' );

            return array( 1, 2, 3, );
        }
    }
