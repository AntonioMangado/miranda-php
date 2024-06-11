<?php
    require_once ('./setup.php');
    echo $blade->run("about", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>