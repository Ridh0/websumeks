<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ubah Paket</h3>
            </div>

            <div class="card-body">
              <form action="<?= base_url('admin/edit_paket') ?>" method="post" enctype="multipart/form-data">

                <input type='hidden' name='id' value='<?= $rows['id_paket'] ?>'>

               

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='b' value='<?= $rows['nama_paket'] ?>' required></td>
                  </div>
                </div>

             
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Beli</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='d' value='<?= $rows['harga_paket'] ?>' required>
                  </div>
                </div>

                

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea id="summernote" rows="5" class='form-control' name='ff' required><?= $rows['keterangan'] ?></textarea>
                  </div>
                </div>

               

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type='submit' name='submit' class='btn btn-primary btn-sm'>Perbarui</button>
                    <a href='<?= base_url('admin/produk') ?>'><button type='button' class='btn btn-secondary btn-sm ml-1'>Batal</button></a>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>