<?php
    require_once ('./setup.php');
    echo $blade->run("offers", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>