<?php
    require_once ('./setup.php');
    echo $blade->run("rooms", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>