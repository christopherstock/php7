<?php

    require_once( 'src/de/christopherstock/php7/MyTestApp.php' );

    echo 'index.php being invoked<br><br>';

    $test1 = new MyTestApp();

    MyTestApp::myStaticTestFunction( 2, "test string 1" );
    
    $test1->myTestMethod( 1, "test2" );





