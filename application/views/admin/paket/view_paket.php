<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Semua Paket</h3>
              <a class='float-right btn btn-primary btn-sm' href='<?= base_url('admin/tambah_paket'); ?>'>Tambah Produk</a>
            </div>

            <div class="card-body">
              <table id="table1" class="table table-sm table-borderless" style="width:100%">
                <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 25%">Nama Paket</th>
                    <th>Harga </th>
                    <th>Keterangan</th>
                   
                    <th style="width: 10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($record as $row) {
                    // $jual = $this->model_app->jual($row['id_produk'])->row_array();
                    // $beli = $this->model_app->beli($row['id_produk'])->row_array();
                    echo "<tr><td>$no</td>
                              <td>$row[nama_paket]</td>
                              <td>Rp " . rupiah($row['harga_paket']) . "</td>
                              <td>$row[keterangan]</td>
                            
                             
                              <td>
                                <a class='btn btn-success btn-xs' title='Ubah' href='" . base_url() . "admin/edit_paket/$row[id_paket]'><i class='fas fa-edit fa-fw'></i></a>
                                <button class='btn btn-danger btn-xs' title='Hapus' data-id='$row[id_paket]' onclick=\"confirmation(event)\"><i class='fas fa-times fa-fw'></i></button>
                             </td>
                          </tr>";
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<script>
  function confirmation(ev) {
    ev.preventDefault();
    var data_id = ev.currentTarget.getAttribute('data-id');
    var currentLocation = window.location;
    Swal.fire({
      title: 'Konfirmasi Hapus Data',
      text: "Apakah Anda ingin menghapus data ini?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: site_url + 'admin/delete_paket/' + data_id,
          type: "POST",
          dataType: "JSON",
          success: function(data) {
            Swal.fire({
              title: 'Dihapus!',
              text: 'Data berhasil dihapus',
              icon: 'success',
              showConfirmButton: false,
              timer: 1500
            }).then(() => {
              location.reload();
            })
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.debug(jqXHR);
            console.debug(textStatus);
            console.debug(errorThrown);
          },
        });
      }
    })
  }
</script>