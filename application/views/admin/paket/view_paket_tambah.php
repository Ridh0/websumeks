<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah Produk</h3>
            </div>

            <form action="<?= base_url('admin/tambah_paket') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="card-body">

                <input type='hidden' name='id' value=''>

               

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Paket</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='b' required>
                  </div>
                </div>

                

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Paket</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='d' required>
                  </div>
                </div>

               

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea rows="5" id="summernote" class='form-control' name='ff' required></textarea>
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button>
                    <a href='<?= base_url('admin/paket') ?>'><button type='button' class='btn btn-secondary btn-sm ml-1'>Batal</button></a>
                  </div>
                </div>

              </div>

            </form>



          </div>
        </div>
      </div>
    </div>
  </section>
</div>