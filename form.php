<?php
if ($_POST['name']) {
    $name = strip_tags($_POST['name']);
}

if (strtolower($name) === 'james'){
    echo "Bond, James Bond";
}else {
    echo $name;
}