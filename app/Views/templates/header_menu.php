<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MTG | <?=esc($title)?></title>
        <meta name="description" content="onlinestore">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

        <link rel="stylesheet" href="<?=esc($TWBS_CSS)?>" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=esc(CSS.'/main.css')?>" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=esc(FONTAWESOMECSS.'/all.min.css')?>">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid">
            <div class="row my-1">
                <div class="col-10">
                    <a href="/">
                        <h1>Sistem Informasi</h1>
                    </a>
                </div>
                <div class="col-2">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="searchBox" class="sr-only">Ketik kata pencarian</label>
                            <input type="text" class="form-control" id="searchBox" placeholder="Ketik kata pencarian">
                        </div>
                        <button type="button" class="btn btn-light">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-2 pr-5">
                    <ul class="main_menu main_bg_color">
                        <li class="profile_badge">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?=IMG?>/example/profile1.jpg" class="profile_img_set" alt="Profile picture">
                                </div>
                                <div class="col-8">
                                    <p><?php echo session()->get('username')?></p>
                                    <a href="logout" class="btn btn-danger">
                                        Log out
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="product">
                                <i class="fas pr-2 fa-shopping-cart"></i>    
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="#">Menu 2</a>
                        </li>
                        <li>
                            <a href="#">Menu 3</a>
                        </li>
                        <li>
                            <a href="#">Menu 4</a>
                        </li>
                        <li>
                            <a href="#">Menu 5</a>
                        </li>
                        <li>
                            <a href="#">Menu 6</a>
                        </li>
                    </ul>
                </div>