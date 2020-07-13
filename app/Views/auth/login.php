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
            <div class="row">
                <div class="col-5">
                    <form method="post" action="login/validate">
                        <?=csrf_field()?>
                        <div class="form-group row">
                            <label for="inputUser" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <?=esc(session()->getFlashdata('not_found'));?>
                                <input type="text" class="form-control" id="inputUser" name="inputUser" value="admin@gmail.com">
                                <?=esc(\Config\Services::validation()->getError('inputUser'))?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                                <?=esc(\Config\Services::validation()->getError('inputPassword'))?>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
            </div>
        </div>

        <script src="<?=esc($JQUERY)?>" crossorigin="anonymous"></script>
        <script src="<?=esc($POPPER)?>" crossorigin="anonymous"></script>
        <script src="<?=esc($TWBS_JS)?>" crossorigin="anonymous"></script>   
    </body>
</html>