<div class="container">
  <div class="row">
    <div class="col py-4 px-4">
        <h4>Tambah Matakuliah<a type="button" class="btn btn-outline-primary" href="<?php echo base_url();?>admin/damat">Kembali</a></h4>
        <div class="card">
            <form class=" px-3 py-3">
            <div class="form-group">
                <label for="exampleFormControlInput1">Matakuliah</label>
                <input type="text" class="form-control" id="matakuliah" placeholder="Judul materi" value="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Dosen</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Prodi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>    
    </div>
</div>