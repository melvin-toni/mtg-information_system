<div class="col-10">
    <h2><?=esc($title)?></h2>
    <?php if (esc(session()->get('input_success'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?=esc(session()->getFlashdata('input_success'));?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <?php if (! empty($products) && is_array($products)) : ?>
        <table class="col-10 table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach ($products as $p): ?>
                    <tr>
                        <td><?=$i++;?></td>
                        <td><?=esc($p['name']);?></td>
                        <td><?=esc($p['description']);?></td>
                        <td>
                            <a href="/product/view/<?=esc($p['_id'], 'url');?>">
                                <i class="fas fa-search"></i>
                            </a>
                        </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Data produk kosong</p>
    <?php endif ?>

    <a href="product/create" class="btn btn-success">Tambah data</a>
</div>