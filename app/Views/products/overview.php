<div class="col-10">
    <h2><?=esc($title)?></h2>

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

    <button type="button" class="btn btn-success">Tambah data</button>
</div>