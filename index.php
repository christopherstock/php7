<?php

    require_once( 'src/de/christopherstock/php7/MyTestApp.php' );

    echo 'index.php being invoked<br><br>';

    $test1 = new MyTestApp();

    MyTestApp::myStaticTestFunction( 1, "test string 1" );
    
    $test1->myTestMethod(1, "");





