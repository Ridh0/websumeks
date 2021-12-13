<div class="wrapper">
  <section class="section">

  
<div class="block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 d-flex">
        <div class="account-nav flex-grow-1">
        <?php include 'sidebar_profile.php'; ?>

        </div>
      </div>
      <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="card">
          <div class="card-header">
            <h5>Riwayat Belanja</h5>
          </div>
          <div class="card-divider"></div>
          <div class="card-body">
            <table id='table1' class='table table-sm table-borderless' style="width: 100%">
              <thead>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 25%">No Invoice</th>
                  <th >Total Belanja</th>
                  <th>Status</th>
                  <th>Waktu Transaksi</th>
                  <th style="width: 25%">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($record as $row) {
                  if ($row['proses'] == '0') {
                    $proses = '<i class="text-danger">Pending</i>';
                  } elseif ($row['proses'] == '1') {
                    $proses = '<i class="text-warning">Konfirmasi</i>';
                  } elseif ($row['proses'] == '2') {
                    $proses = '<i class="text-primary">Proses</i>';
                  } elseif ($row['proses'] == '3') {
                    $proses = '<i class="text-success">Dikirim </i>';
                  }
                  $total = $this->db->query("SELECT a.kode_transaksi,  a.proses, sum((b.harga_paket*b.jumlah)-(0*b.jumlah)) as total, sum(0*b.jumlah) as total_berat FROM `tb_paket_penjualan` a JOIN tb_paket_penjualandetail b ON a.id_penjualan=b.id_penjualan JOIN tb_paket c ON b.id_paket=c.id_paket where a.kode_transaksi='$row[kode_transaksi]'")->row_array();
                  echo "<tr><td>$no</td>
                              <td><a href='" . base_url() . "konfirmasi/tracking/$row[kode_transaksi]'>$row[kode_transaksi]</a></td>
                              <td style='color:red;'>Rp " . rupiah($total['total'] + 0) . "</td>
                              <td>$proses</td>
                              <td>" . cek_terakhir($row['waktu_transaksi']) . " lalu</td>
                              <td>
                                <a class='btn btn-primary btn-sm' title='Download' href='" . base_url() . "page/download/$row[kode_transaksi]' target='_BLANK'><small><b>Download</small></a>
                                <a class='btn btn-info btn-sm' title='Rincian data pesanan' href='" . base_url() . "page/tracking_status/$row[kode_transaksi]' target='_BLANK'><small><b>Rincian</small></a>
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
</div>
</section>
</div>