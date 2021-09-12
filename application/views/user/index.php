<div class="jumbotron"></div>

    <div class="katalog">
    <?php foreach ($produk as $val) {    # code...} {?>
            <ul>
                <?php $img = $val['gambar'];  ?>
                <li><img src="<?= base_url($img)?>" alt=""></li>
                <li><h4><?= $val['nama_produk'];?></h4></li>
                <li><h4>Rp <?= number_format($val['harga'],2,',','.');?></h4></li>
                <li><a class="viewoption" href="#sideinfo">View option</a></li>
            </ul>
    <?php } ?>
    </div>

    <div class="shope">    
        <a class="shopenow" href="">shope now</a>
    </div>