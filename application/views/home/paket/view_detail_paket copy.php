<?php
if (trim($row['gambar']) == '') {
    $foto_produk = 'no-image.png';
} else {
    $foto_produk = $row['gambar'];
}
$produk = $row['nama_paket'];

?>

<div class="product product--layout--standard" data-layout="standard">
    <div class="product__content">

        <div class="product__gallery">
            <div class="product-gallery">
                <div class="product-gallery__featured"><button class="product-gallery__zoom"><svg width="24px" height="24px">
                            <use xlink:href="<?= base_url('assets/template/tema/') ?>images/sprite.svg#zoom-in-24"></use>
                        </svg></button>
                    <div class="owl-carousel" id="product-image"><a href="<?= base_url() . "assets/images/produk/" . $foto_produk ?>" target="_blank"><img src="<?= base_url() . "assets/images/produk/" . $foto_produk ?>" alt="" class="w-75 mx-auto"> </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="product__info">

            <h1 class="product__name"><?= $row['nama_paket'] ?></h1>
            <div class="product__rating">
                <div class="product__rating-stars">
                    <div class="rating">
                        <div class="rating__body">


                          


                        </div>
                    </div>
                </div>
                <?php if ($jml_rev > 0) { ?>
                    <div class="product__rating-legend"><a href="#"><?= $jml_rev ?> Ulasan</a><span></div>
                <?php } else { ?>
                    <div class="product__rating-legend"><a href="#">Belum ada ulasan</a><span></div>
                <?php } ?>
            </div>

            <div class="product__description text-justify"><?= $row['keterangan'] ?></div>

            <ul class="product__meta">
                <li class="product__meta-availability">Stok: <span class="text-success" id="product-stock"><?= $row['stok'] ?></span></li>

            </ul>
        </div>

        <div class=" product__sidebar">

            <div class="product__prices">

            Rp <?= rupiah($row['harga_paket']) ?>

            </div>
            <form id="product-form" class="product__options">

                <div class="form-group product__option">
                    <input type="hidden" name="id_paket" value="<?= encrypt_url($row['id_paket']) ?>">
                    <label class="product__option-label" for="product-quantity">Jumlah</label>
                    <div class="product__actions">
                        <div class="product__actions-item">
                            <div class="input-number product__quantity"><input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1" name="jumlah">
                                <div class="input-number__add"></div>
                                <div class="input-number__sub"></div>
                            </div>
                        </div>
                        <div class="product__actions-item product__actions-item--addtocart">
                            <a href="javascript:void(0)" class="btn btn-primary btn-lg" onclick="add2cart()">Tambah ke keranjang</a>
                        </div>
                    </div>
                </div>
            </form><!-- .product__options / end -->
        </div><!-- .product__end -->
        <div class="product__footer text-center">



        </div>

        <?php
        $this->db->where('id_identitas', '1');
        $ident = $this->db->get('tb_web_identitas');

        foreach ($ident->result() as $ids) {
            $nomer = $ids->no_telp;
        }
        ?>

        <div class="text-center border-top border-dark">
            <a href="https://api.whatsapp.com/send?phone=<?= $nomer ?>&text=Apakaha%20<?= $row['nama_paket'] ?>%20masih tersedia?" target="_blank" title="Tanyakan Stok">
                <img src="<?= base_url('assets/images/icon/wa1.png') ?>" alt="">
            </a>
        </div>

    </div>



    

</div>

<?php $temp_sales = $this->db->get_where('tb_paket_penjualantemp', array('session' => $this->session->idp, 'id_paket' => $idpro))->row_array();
if (!empty($temp_sales)) {
    $number_cart = $temp_sales['jumlah'];
} else {
    $number_cart = 0;
} ?>

<input type="hidden" id="number-cart" value="<?= $number_cart; ?>">
<script src="<?= base_url('assets/template/js/paket.js') ?>"></script>