<?php
if ($record->num_rows() == '0') { ?>
  <div class='text-center mt-3 mb-5'>
    <h3>Maaf, Keranjang belanja anda saat ini masih kosong</h3><br>
    <a class='btn btn-primary' href='<?= base_url('produk') ?>'>Klik disini Untuk mulai belanja.</a>
  </div>
<?php } else {
?>


<div class="wrapper">
    
    <section class="section bg-secondary">
      <div class="container">
        
        <div class="card card-profile shadow ">
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
                  <div class="col-md-8">
                    <div class="card w-100">
                      <div class="card-body">
                        <table class="table table-borderless">

                          <?php
                          $i = 1;
                          $qty_product = $record->num_rows();
                          foreach ($record->result_array() as $row) {
                            $sub_total = (($row['harga_paket'] - 0) * $row['jumlah']);
                            if ($row['diskon'] != '0') {
                              $diskon = "<del style='color:red'>" . rupiah($row['harga_paket']) . "</del>";
                            } else {
                              $diskon = "";
                            }
                            if (trim($row['gambar']) == '') {
                              $foto_produk = 'no-image.png';
                            } else {
                              $foto_produk = $row['gambar'];
                            } ?>

                            <tr>
                              <td>
                                <img src="<?= base_url('assets/images/produk/') . $foto_produk; ?>" alt="" style="height:60px;">
                              </td>

                              <td>
                              <a href="<?= base_url('produk/detail/') . $row['produk_seo']; ?>"><?= $row['nama_paket'] ?></a> <br>
                                <form action="<?= base_url('keranjang/update2/') . encrypt_url($row['id_penjualan_detail']); ?> ?>." method="POST">
                                  <input name="id_penjualan_detail" type="hidden" value="<?= $row['id_penjualan_detail']; ?>">
                                  <input type="hidden" id="stock_<?= $i ?>" value="<?= $row['stok'] ?>">
                                  <div class="input-number mt-1" style="width: 150px">
                                    <input name="jumlah" style="height:30px;" class="form-control input-number__input" type="hidden" min="1" value="<?= $row['jumlah'] ?>" id="quantity_<?= $i ?>">
                                    

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

                          <?php $i++;
                          } ?>


                        </table>
                      </div>
                    </div>
                  </div>
                  
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
              <div class="col-md-8">
      <div class="card w-100">
        <div class="card-body">

          <table class="cart__totals">
            <tfoot class="cart__totals-footer">
              <tr>
                <?php
                $total = $this->db->query("SELECT sum(a.jumlah) as total, sum(a.jumlah) as total_berat FROM `tb_paket_penjualantemp` a JOIN tb_paket b ON a.id_paket=b.id_paket where a.session='" . $this->session->idp . "'")->row_array();
                $total1 = $this->db->query("SELECT sum((a.harga_paket*a.jumlah)-(0*a.jumlah)) as total, sum(0*a.jumlah) as total_berat FROM `tb_paket_penjualantemp` a JOIN tb_paket b ON a.id_paket=b.id_paket where a.session='" . $this->session->idp . "'")->row_array();

               ?>
                <th>Total</th>
                <td>Rp <?= rupiah($total1['total']) ?></td>
              </tr>
            </tfoot>
          </table><a class="btn btn-success mt-4 btn-sm btn-block cart__checkout-button" href="<?= base_url('cart/checkouts') ?>">Proses checkout</a>
        </div>
      </div>
    </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php } ?>

<input type="hidden" id="qty_product" value="<?= $qty_product ?>">
<script src="<?= base_url('assets/template/js/cart.js') ?>"></script>