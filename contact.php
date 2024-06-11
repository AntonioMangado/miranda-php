<?php
    require_once ('./setup.php');
    echo $blade->run("contact", ["name" => "Antonio"]); // it calls /views/hello.blade.php
?>