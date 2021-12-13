<?php
if (trim($record['foto']) == '') {
  $foto_user = 'default.jpg';
} else {
  $foto_user = $record['foto'];
}
?>

<div class="wrapper">
    
    <section class="section ">
<div class="block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 d-flex">
        <div class="account-nav flex-grow-1">
        <?php include 'sidebar_profile.php'; ?>

        </div>
      </div>
      <div class="col-4 col-lg-9 mt-4 mt-lg-0">
        <div class="dashboard">
          <div class="dashboard__profile card profile-card">
            <div class="card-body profile-card__body">


              <div class="profile-card__avatar " style="width=25%">
                <div class="foto-container" style="width=25%">
                  
                  <img src="<?= base_url('assets/images/user/') . $foto_user ?>"  class="foto-image">
                  <div class="foto-middle">
                    <a href="#" data-toggle="modal" data-target="#uploadfoto" title="Ganti foto">
                      <img src="<?= base_url('assets/images/icon/camera.png') ?>" style="width: 50px">
                    </a>
                  </div>
                </div>
              </div>

              <div class="profile-card__name"><?= $record['nama_lengkap'] ?></div>
              <div class="profile-card__email"><?= $record['email'] ?></div>
              <div class="profile-card__edit">
                <a href="<?= base_url('members/edit_profile') ?>" class="btn btn-secondary btn-sm">Ubah Profile</a>
              </div>
            </div>
          </div>
          <div class="dashboard__address card address-card address-card--featured">
          <div class="card-header">

            <div class="display-4 "><?= $record['nama_lengkap'] ?></div>
          </div>
            <div class="card-body ">
              <?php if ($rows['alamat'] == '') { ?>
                <p class="text-justify">Anda belum mengubah alamat.<br> Silahkan ubah alamat Anda.</p>
              <?php } else { ?>
                <div class="address-card__row">
                  <?= $rows['alamat'] ?><br>
                  Kec. <?= $rows['kecamatan'] ?><br>
                  <?= $rows['nama_kota'] ?>, <?= $rows['kode_pos'] ?>
                </div>
              <?php } ?>

              <table class="table mt-3">
                    <tbody>
                      <tr>
                        <td style="width: 95%">Nomor Telepon</td>
                        <td><?= $record['no_telp'] ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?= $record['email'] ?></td>
                      </tr>
                      <tr>
                        <td>Username</td>
                        <td><?= $record['username'] ?></td>
                      </tr>
                    </tbody>
                  </table>
           
              <div class="btn btn-secondary text-white"><a href="<?= base_url('members/edit_alamat') ?>">Ubah Alamat</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</section>
</div>