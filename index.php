<?php

    require_once( 'src/de/christopherstock/php7/Debug.php' );
    require_once( 'src/de/christopherstock/php7/DebugColor.php' );
    require_once( 'src/de/christopherstock/php7/MyTestApp.php' );

    // render header
    echo '<head>';
    echo '<title>PHP7 Test</title>';
    echo '</head>';

    //open HTML body
    echo '<body style="background: #101010; font-family: verdana; color: #ff0000; margin: 25px; line-height: 175%;">';

    //output a debug message
    Debug::out( DebugColor::GREEN, 'index.php being invoked' );

    //create a test class instance
    $test1 = new MyTestApp();
    MyTestApp::myStaticTestFunction( 2, "test string 1" );
    $test1->myTestMethod( 1, "test2" );

    $test1->test( 1, "test2" );

    //close HTML body
    echo '</body>';
