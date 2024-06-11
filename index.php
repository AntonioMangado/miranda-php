<?php
    require_once ('./setup.php');
    echo $blade->run("index", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>