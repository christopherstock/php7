<?php

    require_once( 'src/de/christopherstock/php7/Debug.php' );
    require_once( 'src/de/christopherstock/php7/DebugColor.php' );
    require_once( 'src/de/christopherstock/php7/NewFeatures.php' );

    // render header
    echo '<head>';
    echo '<title>PHP7 Test</title>';
    echo '</head>';

    //open HTML body
    echo '<body style="background: #101010; font-family: verdana, sans-serif; color: #ff0000; margin: 25px; line-height: 125%;">';

    //output a debug message
    Debug::out( DebugColor::GREEN, 'index.php being invoked<br>' );

    //invoke a static function
    NewFeatures::testNullCoalescingOperator( 2, "test string 1" );

    //create a test class instance
    $myNewFeatureInstance = new NewFeatures();
    $myNewFeatureInstance->testSpaceshipOperator( 1, "test2" );
    $myNewFeatureInstance->testConstantArraysViaDefine( 1, "test2" );
    $myNewFeatureInstance->testAnonymousClasses();
    $myNewFeatureInstance->testUnicodeCodepointEscapeSyntax();

    $myNewFeatureInstance->testClosureCall();

    $myNewFeatureInstance->testFilteredUnserialize();






    //close HTML body
    echo '</body>';
