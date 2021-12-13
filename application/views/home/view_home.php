<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
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
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-lg-auto">
              <div class="rounded overflow-hidden transform-perspective-left">
                <div id="carousel_example" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_example" data-slide-to="1"></li>
                    <li data-target="#carousel_example" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="img-fluid" src="<?= base_url('assets/ui/')?>img/theme/img-1-1200x1000.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="<?= base_url('assets/ui/')?>img/theme/img-2-1200x1000.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="<?= base_url('assets/ui/')?>img/theme/img-1-1200x1000.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 mb-5 mb-lg-0">
              <h1 class="font-weight-light text-white">Bootstrap carousel</h1>
              <p class="lead mt-4 text-white">Argon Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <a href="https://demos.creative-tim.com/argon-design-system/docs/components/carousel.html" class="btn btn-white mt-4">See all components</a>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section section-components pb-0" id="section-components">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3">Paket</span>
            <h3 class="display-3">Paket Iklan</h3>
          </div>
        </div>
        <div class="row justify-content-center">
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
    </div>
  
  </div>