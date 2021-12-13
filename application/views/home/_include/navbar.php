<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
      <div class="mr-4">

   
      <a class="navbar-brand mr-lg-2" href="<?= base_url('main') ?>">
        <?php
                                        $logo = $this->model_app->view_ordering_limit('tb_web_logo', 'id_logo', 'DESC', 0, 1);
                                        foreach ($logo->result_array() as $row) {
                                          echo "<a  href='" . base_url() . "'><img height='40px'  src='" . base_url() . "assets/images/logo/$row[gambar]'/></a>";
                                        }
                                        ?>
          
        </a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
                                        <?php
                                        $logo = $this->model_app->view_ordering_limit('tb_web_logo', 'id_logo', 'DESC', 0, 1);
                                        foreach ($logo->result_array() as $row) {
                                            echo "<a href='" . base_url() . "'><img height='40px'  src='" . base_url() . "assets/images/logo/$row[gambar]'/></a>";
                                        }
                                        ?>
          
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center">
        
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('paket') ?>">Paket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('page/tentang') ?>">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('konfirmasi') ?>">Konfirmasi Pembayaran</a>
              </li>
            
              <li class="nav-item dropdown navbar-nav-hover ">
                <a class="nav-link dropdown-toggle navbar-nav-hover" href="#" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lacak Pesanan</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
                  <a class="dropdown-item" href="<?= base_url('cek-resi') ?>">Cek Resi</a>
                  <a class="dropdown-item" href="<?= base_url('cek-status') ?>">Cek Status Pesanan</a>
                 
                </div>
              </li>
        
         </ul>
         
         
        <ul class="navbar-nav navbar-nav-hover  align-items-lg-center ml-lg-auto">
         
         
      
          
          <?php
                                                if (empty($this->session->id_pengguna)) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              <i class="ni ni-single-02"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header ">
            
                 <form class="account-menu__form" action="<?= base_url('login') ?>" method="POST">
                                                        <div class="account-menu__form-title text-dark">Masuk ke akun Anda</div>
                                                        <div class="form-group">
                                                            <label for="header-signin-email" class="sr-only">Email / Username</label>
                                                            <input name="user_email" id="header-signin-email" type="text" class="form-control form-control-sm" placeholder="Email / Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="header-signin-password" class="sr-only">Password</label>
                                                            <div class="account-menu__form-forgot">
                                                                <input name="password" id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="Password">
                                                                <a href="<?= base_url('auth/lupa_password') ?>" class="account-menu__form-forgot-link">Lupa?</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group account-menu__form-button">
                                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                                        </div>
                                                        <div class="account-menu__form-link">
                                                            <a href="<?= base_url('register') ?>">Buat akun baru</a>
                                                        </div>
                                                    </form>
                                                  </div>
                                                    <div class="account-menu__divider"></div>
              
           
            </div>
          </li>
          <?php } ?>
          <?php
                                                if (!empty($this->session->id_pengguna)) { ?>

                                                    <?php
                                                    $id = $this->session->id_pengguna;
                                                    $this->db->where("id_pengguna='$id'");
                                                    $peng = $this->db->get('tb_pengguna')->row_array();
                                                    if (empty($peng['nama_lengkap'])) {
                                                        $nama = $peng['username'];
                                                    } else {
                                                        $nama = $peng['nama_lengkap'];
                                                    }

                                                    if (empty($peng['foto'])) {
                                                        $foto = 'default.jpg';
                                                    } else {
                                                        $foto = $peng['foto'];
                                                    }
                                                    ?>
                                                    <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('assets/images/user/' . $foto) ?>">
                </span>
               
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
                 
                  <span class="mb-0 text-sm text-overflow text-dark  "><?= $nama ?></span>
              </div>
              <a href="<?= base_url('members/edit_profile') ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Profil</span>
              </a>
              <a href="<?= base_url('members/riwayat_belanja') ?>" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Riwayat Transaksi</span>
              </a>
              <a href="<?= base_url('members/edit_alamat') ?>" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Alamat</span>
              </a>
              <a href="<?= base_url('members/password') ?>" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Password</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" onclick="logout()" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>