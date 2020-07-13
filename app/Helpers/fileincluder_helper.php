<?php 

function env_checker() {
    $arr = [];

    switch(ENVIRONMENT) {
        case 'development':
            $arr = array(
                'JQUERY' => 'assets/js/jquery.min.js',
                'POPPER' => 'assets/js/popper.min.js',
                'TWBS_CSS' => 'assets/css/bootstrap.min.css',
                'TWBS_JS' => 'assets/js/bootstrap.min.js'
            );
            break;
        case 'testing':
        case 'production':
            $arr = array(
                'JQUERY' => 'https://code.jquery.com/jquery-3.5.1.js',
                'POPPER' => 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
                'TWBS_CSS' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',
                'TWBS_JS' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'
            );
            break;
    }

    return $arr;
}