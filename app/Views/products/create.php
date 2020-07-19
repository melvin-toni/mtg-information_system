<div class="col-10">
    <h2><?=esc($title)?></h2>
    <hr />
    <?php if (esc(session()->get('input_failed'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?=esc(session()->getFlashdata('input_failed'));?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <form method="post" action="add">
        <?= csrf_field() ?>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="inputName">
                <small id="userHelpBlock" class="form-text help_block_font">
                    <?=esc(\Config\Services::validation()->getError('inputName'))?>
                </small>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputDescription" name="inputDescription"></textarea>
                <small id="userHelpBlock" class="form-text help_block_font">
                    <?=esc(\Config\Services::validation()->getError('inputDescription'))?>
                </small>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-2 col-11">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </div>
    </form>
</div>