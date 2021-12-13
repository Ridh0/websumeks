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
          <div class="row">
            <div class="col-md-5 pr-md-0">
              <div class="card card-pricing text-center bg-default">
                <div class="card-header bg-transparent">
                  <h4 class="text-uppercase ls-1 shadow-lg bg-gradient-primary btn-neutral text-white py-3 mb-0">Bravo pack</h4>
                </div>
                <div class="card-body px-lg-6">
                  <div class="display-2 text-white">$49</div>
                  <span class=" text-muted">per application</span>
                  <ul class="list-unstyled my-4">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape icon-shape-primary shadow rounded-circle">
                            <i class="ni ni-folder-17 text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Complete documentation</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape icon-shape-primary shadow rounded-circle">
                            <i class="ni ni-camera-compact text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Working materials in Sketch</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape icon-shape-primary shadow rounded-circle">
                            <i class="ni ni-chart-pie-35 text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">2GB cloud storage</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <button type="button" class="btn btn-primary mb-3">Start free trial</button>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="javascript:;" class=" text-muted">Request a demo</a>
                </div>
              </div>
            </div>
            <div class="col-md-7 pl-md-0">
              <div class="card card-pricing border-0 text-center my-4">
                <div class="card-header bg-transparent">
                  <h4 class="text-uppercase shadow-lg btn-neutral ls-1 text-primary py-3 mb-lg-0">Enterprise</h4>
                </div>
                <div class="card-body px-lg-6">
                  <div class="card-description">What colors are good, before somebody tells you you shouldn’t like pink because that’s for girls, or you’d instantly become a gay two-year-old.</div>
                  <table class="table table-bordered mt-3">
                    <tbody>
                      <tr>
                        <td>24/7 Support</td>
                        <td>Design Tools</td>
                      </tr>
                      <tr>
                        <td>10K emails</td>
                        <td>Private Brand</td>
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
        </div>
      </section>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
      </div>
    </div>
 
    <br /><br />
    
  </div>

<?php $temp_sales = $this->db->get_where('tb_paket_penjualantemp', array('session' => $this->session->idp, 'id_paket' => $idpro))->row_array();
if (!empty($temp_sales)) {
    $number_cart = $temp_sales['jumlah'];
} else {
    $number_cart = 0;
} ?>

<input type="hidden" id="number-cart" value="<?= $number_cart; ?>">
<script src="<?= base_url('assets/template/js/paket.js') ?>"></script>