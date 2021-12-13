<?php
if (trim($row['gambar']) == '') {
    $foto_produk = 'no-image.png';
} else {
    $foto_produk = $row['gambar'];
}
$paket = $row['nama_paket'];

?>

  <div class="wrapper bg-default ">
    <div class="section bg-gradient-primary section-hero section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        
      </div>
      <div class="page-header ">
        <div class="container  shape-container d-flex align-items-center py-3">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">Paket</h1>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="py-3 pricing-3"  id="pricing-4">
        <div class="container">
            <form id="product-form" class="product__options">
          <div class="row">

            <div class="col-md-5 pr-md-0">
              <div class="card card-pricing text-center bg-default">
                <div class="card-header bg-transparent">
                <input type="hidden" name="id_paket" value="<?= encrypt_url($row['id_paket']) ?>">

                  <h4 class="text-uppercase ls-1 shadow-lg bg-gradient-primary btn-neutral text-white py-3 mb-0">Bravo pack</h4>
                </div>
                <div class="card-body px-lg-6">
                  <div class="btn btn-primary text-white"><span>Rp</span><?= rupiah($row['harga_paket']) ?></div>
                  <br>
                  
                 
                  <ul class="list-unstyled my-4">
                  <?php if ($row['keterangan'] == '1') { ?>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-success">
                                <i class="ni ni-check-bold text-white"></i>
                              </div>
                            </div>
                            <div>
                              <span class=" pl-2 text-white ">Menampilkan Kata-kata</span>
                            </div>
                          </div>
                        </li>
                     <br>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-danger">
                                <i class="fas fa-times text-white"></i>
                              </div>  
                            </div>
                            <div>
                              <span class="pl-2 text-white ">Menampilkan Gambar</span>
                            </div>
                          </div>
                        </li>
                       
                        <?php } elseif ($row['keterangan'] == '2') {
                          ?>
                          <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-danger">
                                <i class="fas fa-times text-white"></i>
                              </div>  
                            </div>
                            <div>
                              <span class="text-white pl-2 ">Kata-kata</span>
                            </div>
                          </div>
                        </li>
                        <hr>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-success">
                                <i class="ni ni-check-bold text-white"></i>
                              </div>
                            </div>
                            <div>
                              <span class="pl-2 text-white ">Gambar</span>
                            </div>
                          </div>
                        </li>
                        <hr>
                        <?php } else { ?>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-success">
                                <i class="ni ni-check-bold text-white"></i>
                              </div>                             
                            </div>
                            <div>
                              <span class=" pl-2 text-white ">Kata-kata</span>
                            </div>
                          </div>
                        </li>
                        <hr>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                            <div class="badge badge-circle badge-success">
                                <i class="ni ni-check-bold text-white"></i>
                              </div>
                            </div>
                            <div>
                              <span class="pl-2 text-white">Gambar</span>
                            </div>
                          </div>
                        </li>
                        <hr>
                        <?php } ?>
                  </ul>
                  <div class="input-number product__quantity ">
                    <input id="product-quantity" class="input-number__input form-control form-control-lg" type="hidden" min="1" value="1" name="jumlah">
                                <div class="input-number__add"></div>
                                <div class="input-number__sub"></div>
                            </div>
                  <a href="javascript:void(0)" class="btn btn-primary btn-lg" onclick="add2cart()">Tambah ke keranjang</a>

                </div>
                <div class="card-footer bg-transparent">
                    
                <li class="product__meta-availability">Stok: <span class="text-success" id="product-stock"><?= $row['stok'] ?></span></li>

               
                </div>
              </div>
            </div>
            <div class="col-md-7 pl-md-0">
              <div class="card card-pricing border-0 text-center my-4">
                <div class="card-header bg-transparent">
                  <h4 class="text-uppercase shadow-lg btn-neutral ls-1 text-primary py-3 mb-lg-0">Deskripsi</h4>
                </div>
                <div class="card-body px-lg-6">
                  <div class="card-description">What colors are good, before somebody tells you you shouldn’t like pink because that’s for girls, or you’d instantly become a gay two-year-old.</div>
                  <table class="table table-bordered mt-3">
                    <tbody>
                      <tr>
                        <td>24/7 Support</td>
                        <td>Design Tools</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <a href="javascript:;" class="text-primary">Create new account</a>
                </div>
              </div>
            </div>
        </div>
    </form>
        </div>
      </section>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
      </svg>
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