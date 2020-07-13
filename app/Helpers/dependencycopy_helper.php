<?php 

function copier() {
    $res = [];

    array_push($res, copyBootstrapCssFiles());
    array_push($res, copyBootstrapJsFiles());
    array_push($res, copyJqueryFiles());
        
    return $res;
}

function copyBootstrapCssFiles() {
    $source = '../vendor/twbs/bootstrap/dist/css/bootstrap.min.css';
    $destination = '../public/assets/css/bootstrap.min.css';

    if (file_exists($source)) {
        if (copy($source, $destination)) { 
            return "CSS Bootstrap file successfully copied"; 
        } else {
            return "CSS Bootstrap file copy failed"; 
        }
    } else {
        return "Bootstrap source file doesn't exist, please install bootstrap using composer"; 
    }
}

function copyBootstrapJsFiles() {
    $source = '../vendor/twbs/bootstrap/dist/js/bootstrap.min.js';
    $destination = '../public/assets/js/bootstrap.min.js';

    if (file_exists($source)) {
        if (copy($source, $destination)) { 
            return "JS Bootstrap file successfully copied"; 
        } else {
            return "JS Bootstrap file copy failed"; 
        }
    } else {
        return "Bootstrap source file doesn't exist, please install bootstrap using composer"; 
    }
}

function copyJqueryFiles() {
    $source = '../vendor/components/jquery/jquery.min.js';
    $destination = '../public/assets/js/jquery.min.js';

    if (file_exists($source)) {
        if (copy($source, $destination)) { 
            return "Jquery file successfully copied"; 
        } else {
            return "Jquery file copy failed"; 
        }
    } else {
        return "Jquery source file doesn't exist, please install jquery using composer"; 
    }
}