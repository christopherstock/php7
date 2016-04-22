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
            Debug::out( DebugColor::GREEN, 'NewFeatures::construct() being invoked' );
        }

        /***************************************************************
        *   Tests the new spaceship operator.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public static function testSpaceshipOperator( int $test1, string $test2)
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures::testSpaceshipOperator() being invoked [' . $test1 . '][' . $test2 . ']' );

            $test3 = ( 1 <=> 3 );

            $time1 = new DateTime( '2016-04-01 23:11:23' );
            $time2 = new DateTime( '2016/04/02 23:11:23' );

            $test3 = ( $time1 <=> $time2 );

            Debug::out( DebugColor::BLUE, 'Spaceship operation results to [' . $test3 . ']' );
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

            Debug::out( DebugColor::BLUE, 'Coalescing operation results to [' . $test4 . ']' );

            return array( 1, 2, 3, );
        }
    }
