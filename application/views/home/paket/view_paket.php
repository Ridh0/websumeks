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
        <div class="container  shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">Paket</h1>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
      </div>
    </div>
    <div class="">
      <div class="row justify-content-center">
          <div class="col-lg-10">
          <div class="pricing card-group flex-column flex-md-row mt-5 md-3">
            <?php
              $no = 1;
              foreach ($record->result_array() as $row) {
                  ?>
            
                <div class="col-md-4">

                <div class="card card-pricing card-lift--hover border-0   shadow-lg  border-0 text-center mb-4">
                    <div class="card-header bg-gradient-primary bg-transparent">
                        <h4 class="text-uppercase ls-1 text-white py-3 mb-0"><?= $row['nama_paket']; ?></h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class=" btn btn-primary "><span>Rp</span><?= rupiah($row['harga_paket']) ?></div>
                        <ul class="list-unstyled my-4">
                          <hr>
                          <?php if ($row['keterangan'] == '1') { ?>
                          <li>
                            <div class="d-flex align-items-center">
                              <div>
                              <div class="badge badge-circle badge-success">
                                  <i class="ni ni-check-bold text-white"></i>
                                </div>
                              </div>
                              <div>
                                <span class=" pl-2 ">Kata-kata</span>
                              </div>
                            </div>
                          </li>
                          <hr>
                          <li>
                            <div class="d-flex align-items-center">
                              <div>
                              <div class="badge badge-circle badge-danger">
                                  <i class="fas fa-times text-white"></i>
                                </div>  
                              </div>
                              <div>
                                <span class="pl-2 ">Gambar</span>
                              </div>
                            </div>
                          </li>
                          <hr>
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
                                <span class=" pl-2 ">Kata-kata</span>
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
                                <span class="pl-2 ">Gambar</span>
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
                                <span class=" pl-2 ">Kata-kata</span>
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
                                <span class="pl-2 ">Gambar</span>
                              </div>
                            </div>
                          </li>
                          <hr>
                          <?php } ?>
                        </ul>
                        <a href="<?= base_url('paket/detail/') . $row['username_paket']; ?>">
                        <button type="button" class="btn btn-primary mb-3">Buy</button></a>
                    </div>
                    <div class="card-footer">
                        <a href="#!" class="text-light">Contact sales</a>
                    </div>
                </div>
                </div>
            <?php }?>
          </div>
          </div>
      </div>
      <div class="d-flex justify-content-lg-center px-3 mt-5">
          <div>
              <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
              </div>
          </div>
          <div class="col-lg-6">
              <p class="text-white"><strong>Paket Iklan</strong> Berikut merupakan daftar iklan yang ada di kami silahkan di pesan dan selamat berbelanja</p>
          </div>
      </div>
      <div class="row row-grid justify-content-center">
          <div class="col-lg-10">
              <div class="table-responsive">
                  <table class="table text-white mt-5">
                      <thead>
                          <tr>
                              <th class="px-0 bg-transparent" scope="col">
                                  <span class="text-light font-weight-700">Features</span>
                              </th>
                              <th class="text-center bg-transparent" scope="col"> Pack 1 </th>
                              <th class="text-center bg-transparent" scope="col">Pack 2</th>
                              <th class="text-center bg-transparent" scope="col">Pack 3</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="px-0">Menampilkan kata-kata</td>
                              <td class="text-center"><i class="fas fa-times text-warning"></i>
                              </td>
                              <td class="text-center"><i class="fas fa-check text-success"></i>
                              </td>
                              <td class="text-center"><i class="fas fa-check text-success"></i>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-0">Menampilkan gambar</td>
                              <td class="text-center"><i class="fas fa-check text-success"></i>
                              </td>
                              <td class="text-center"><i class="fas fa-times text-warning"></i>
                              </td>
                              <td class="text-center"><i class="fas fa-check text-success"></i>
                              </td>
                          </tr>
                        
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
    <br /><br />
    
  </div>