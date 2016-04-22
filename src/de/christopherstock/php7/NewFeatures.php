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
        *   A test method.
        *
        *   @param  int    $test1
        *   @param  string $test2
        ***************************************************************/
        public static function myTestMethod( int $test1, string $test2)
        {
            Debug::out( DebugColor::GREEN, 'NewFeatures::myTestMethod() being invoked [' . $test1 . '][' . $test2 . ']' );
        }

        /***************************************************************
        *   Tests the new null-coalescing-Operator.
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
