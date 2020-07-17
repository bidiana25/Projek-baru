<div class="card">
  <div class="card-header">
    <h5>Daftar Akun</h5>
  </div>
  <div class="card-block">
    <!-- Menampilkan notif !-->
    <?= $this->session->flashdata('notif') ?>
    <!-- Tombol untuk menambah data akun !-->
    <button data-toggle="modal" data-target="#addModal" class="btn btn-success waves-effect waves-light">Tambah Akun</button>

    <div class="table-responsive dt-responsive">
      <table id="dom-jqry" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Akun</th>
            <th>Kode Akun</th>
            <th>Tipe Akun</th>
            <th>Kategori Akun</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($C_Akun as $key => $value) {
          ?>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value->nama_akun2; ?></td>
            <td><?php echo $value->kode_akun2; ?></td>
            <td><?php echo $value->nama_akun1; ?></td>
            <td><?php echo $value->kategori_akun1; ?></td>
            <td><?php echo $value->ket; ?></td>
            <td>
              <!--Edit-->
              <a href="#" data-id_akun2="<?= $value->id_akun2; ?>" data-nama_akun2="<?= $value->nama_akun2; ?>" data-kode_akun2="<?= $value->kode_akun2; ?>" data-ket="<?= $value->ket; ?>" data-rid_akun1="<?= $value->rid_akun1; ?>" data-toggle="modal" data-target="#Modal_Edit" class="btn-edit">

                <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                </button></a>

              <!--Hapus-->
              <a href="<?php echo site_url('C_Akun/delete/' . $value->id_akun2) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"> <i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
            </td>


            </tr>
          <?php } ?>


          </tfoot>
      </table>

    </div>
  </div>
</div>




<!-- MODAL TAMBAH AKUN! !-->
<form action="<?php echo base_url('C_Akun/tambah') ?>" method="post">
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Akun</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <h5>Tambah Daftar Akun</h5>

          <div class="form-group">
            <label>Nama Akun</label>
            <input type="text" class="form-control" name="nama_akun2" placeholder="Nama Akun">
          </div>

          <div class="form-group">
            <label>Kode Akun</label>
            <input type="text" class="form-control" name="kode_akun2" placeholder="Kode Akun">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="ket" placeholder="Keterangan">
          </div>

          <div class="form-group">
            <label>Tipe Akun</label>
            <select name="rid_akun1" class="form-control">
              <?php
              $rid_akun1 = $this->db->get('t_m_akun1');
              foreach ($rid_akun1->result() as $row) {

              ?>
                <option value="<?php echo $row->id_akun1; ?>"><?php echo $row->kode_akun1 . ' ' . '-' . ' ' . $row->nama_akun1; ?></option>
              <?php } ?>
            </select>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- MODAL TAMBAH AKUN! SELESAI !-->

<!-- MODAL EDIT AKUN! !-->
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content" id="edit">
      <div class="modal-header">
        <h4 class="modal-title">Edit Akun</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <h5>Edit Daftar Akun</h5>

        <div class="form-group">
          <label>Nama Akun</label>
          <input type="text" class="form-control" name="nama_akun2" value="nama_akun2">
        </div>

        <div class="form-group">
          <label>Kode Akun</label>
          <input type="text" class="form-control" name="kode_akun2" value="kode_akun2">
        </div>

        <div class="form-group">
          <label>Keterangan</label>
          <input type="text" class="form-control" name="ket" value="ket">
        </div>

        <div class="form-group">
          <label>Tipe Akun</label>
          <select name="rid_akun1" class="form-control" value="rid_akun1">
            <option value="" selected>Pilih Tipe</option>
            <?php
            $rid_akun1 = $this->db->get('t_m_akun1');
            foreach ($rid_akun1->result() as $row) {

            ?>
              <option value="<?php echo $row->id_akun1; ?>"><?php echo $row->kode_akun1 . ' ' . '-' . ' ' . $row->nama_akun1; ?></option>
            <?php } ?>
          </select>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
      </div>
    </form>
  </div>
</div>
<!-- MODAL EDIT AKUN! SELESAI !-->

<script>
  const formEdit = document.querySelector('form#edit');
  let editUser = document.querySelectorAll(".btn-edit");
  [...editUser].forEach(edit => {
    edit.addEventListener("click", function(e) {
      formEdit.querySelector("input[name='nama_akun2']").value = this.dataset.nama_akun2;
      formEdit.querySelector("input[name='kode_akun2']").value = this.dataset.kode_akun2;
      formEdit.querySelector("input[name='ket']").value = this.dataset.ket;
      let select = formEdit.querySelector("select[name='rid_akun1']");
      [...select.querySelectorAll('option')].forEach(opt => {
        opt.removeAttribute("selected");
        if (opt.getAttribute("value") == this.dataset.rid_akun1) {
          opt.setAttribute("selected", "selected");
        }
      })
    })
  })
</script>