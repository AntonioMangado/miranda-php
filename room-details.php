<?php
    require_once ('./setup.php');
    echo $blade->run("room-details", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>