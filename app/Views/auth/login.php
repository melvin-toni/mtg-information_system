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
            <div class="row row-cols-4 justify-content-center">
                <div class="col main_bg_color form_login">
                    <form method="post" action="login/validate">
                        <?php if (esc(session()->get('not_found'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Login gagal !</strong> <?=esc(session()->getFlashdata('not_found'));?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>
                        <h1>Sistem Informasi</h1>
                        <?=csrf_field()?>
                        <div class="form-group row">
                            <label for="inputUser" class="offset-1 col-sm-1 col-form-label"><i class="fas fa-envelope"></i></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Masukkan email">
                                <small id="userHelpBlock" class="form-text help_block_font">
                                    <?=esc(\Config\Services::validation()->getError('inputUser'))?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="offset-1 col-sm-1 col-form-label"><i class="fas fa-key"></i></label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Masukkan password">
                                <small id="passHelpBlock" class="form-text help_block_font">
                                    <?=esc(\Config\Services::validation()->getError('inputPassword'))?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-11">
                                <input type="submit" class="btn btn-success" value="Login">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="row footer">
                                <p>Copyright © 2020 |</p>
                                <a href="<?=getenv('creator.linkedin');?>" class="pl-1 colorize">
                                    <?=getenv('creator.name');?>    
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="<?=esc($JQUERY)?>" crossorigin="anonymous"></script>
        <script src="<?=esc($POPPER)?>" crossorigin="anonymous"></script>
        <script src="<?=esc($TWBS_JS)?>" crossorigin="anonymous"></script>   
    </body>
</html>