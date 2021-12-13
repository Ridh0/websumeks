<?php
if ($record->num_rows() == '0') { ?>
  <div class='text-center mt-3 mb-5'>
    <h3>Maaf, Keranjang belanja anda saat ini masih kosong</h3><br>
    <a class='btn btn-primary' href='<?= base_url('produk') ?>'>Klik disini Untuk mulai belanja.</a>
  </div>
<?php } else {
?>



    <div class="wrapper">
    <section class="section-profile-cover bg-gradient-primary section-shaped my-0">
      <!-- Circles background -->
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section bg-secondary">
      <div class="container">
        
        <div class="card card-profile shadow mt--300">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <div class="icon icon-lg icon-shape icon-shape-success shadow mt-4 rounded-circle">
                <i class="ni ni-chart-bar-32"></i>
              </div>              
              <div class="display-4 mt-3">Keranjang</div>
             </div>
          </div>
          <hr>
        
            <div class="row card-form-horizontal">
              <div class="card-body ">
                <form method="" action="">
                  <div class="row justify-content-center">
                      <div class="col-md-4">
                      <div class="card w-100">
        <div class="card-body">
          <table class="table table-borderless">

            <?php
            $i = 1;
            $qty_product = $record->num_rows();
            foreach ($record->result_array() as $row) {
              $sub_total = (($row['harga_jual'] - $row['diskon']) * $row['jumlah']);
              if ($row['diskon'] != '0') {
                $diskon = "<del style='color:red'>" . rupiah($row['harga_jual']) . "</del>";
              } else {
                $diskon = "";
              }
              if (trim($row['gambar']) == '') {
                $foto_paket = 'no-image.png';
              } else {
                $foto_paket = $row['gambar'];
              } ?>

              <tr>
             

                <td>
                  <a href="<?= base_url('produk/detail/') . $row['produk_seo']; ?>"><?= $row['nama_paket'] ?></a> <br>
                  <form action="<?= base_url('keranjang/update2/') . encrypt_url($row['id_penjualan_detail']); ?> ?>." method="POST">
                    <input name="id_penjualan_detail" type="hidden" value="<?= $row['id_penjualan_detail']; ?>">
                    <input type="hidden" id="stock_<?= $i ?>" value="<?= $row['stok'] ?>">
                    <div class="input-number mt-1" style="width: 150px">
                      <input name="jumlah" style="height:30px;" class="form-control input-number__input" type="number" min="1" value="<?= $row['jumlah'] ?>" id="quantity_<?= $i ?>">
                      <a href="javascript:void(0)" class="input-number__add" id="plus_<?= $i ?>"></a>

                      <?php
                      if ($row['jumlah'] == 1) {
                        $display = 'none';
                      } else {
                        $display = 'block';
                      }
                      echo "<span style='display: " . $display . "'>";
                      ?>
                      <a href="javascript:void(0)" class="input-number__sub" id="minus_<?= $i ?>"></a>
                      <?php echo "</span>"; ?>


                    </div>
                    <span id="save_<?= $i ?>" style="display: none"></span>
                  </form>

                </td>

                <td style="width: 160px">

                  Rp <span class="float-right">
                    <?= rupiah($sub_total) ?>
                    <a href="<?= base_url() . "cart/delete/" . encrypt_url($row['id_penjualan_detail']);  ?>">
                      <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                        <svg width="10px" height="10px">
                          <use xlink:href="<?= base_url('assets/template/tema/') ?>images/sprite.svg#cross-10"></use>
                        </svg>
                      </button>
                    </a>
                  </span>
                </td>


              </tr>

           

          </table>
        </div>
      </div>
                     
                    </div>
                    <div class="col-md-4">
                    <div class="card w-100">
        <div class="card-body">

          <table class="cart__totals">
            <tfoot class="cart__totals-footer">
              <tr>
                <?php
                $total = $this->db->query("SELECT sum(a.jumlah) as total, sum(a.jumlah) as total_berat FROM `tb_paket_penjualantemp` a JOIN tb_paket b ON a.id_paket=b.id_paket where a.session='" . $this->session->idp . "'")->row_array();
                ?>
                <th>Total</th>
                <td>Rp <?= rupiah($row['harga_paket']); ?></td>
              </tr>
            </tfoot>
          </table><a class="btn btn-success btn-sm btn-block cart__checkout-button" href="<?= base_url('cart/checkouts') ?>">Proses checkout</a>
        </div>
      </div>
                    </div>
                   
               
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <div class="col-md-4">
                
                        </button>
                             
                    
                  </div>
                </form>
              </div>
            </div>
        
          </div>
        </div>
      </div>

  <?php $i++;
            } ?>


<?php } ?>

<input type="hidden" id="qty_product" value="<?= $qty_product ?>">
<script src="<?= base_url('assets/template/js/cart.js') ?>"></script>