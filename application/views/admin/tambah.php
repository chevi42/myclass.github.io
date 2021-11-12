<div class="container">
  <div class="row">
    <div class="col py-4 px-4">
        <h4>Edit Materi <a type="button" class="btn btn-outline-primary" href="<?php echo base_url();?>dosen/matkul">Kembali</a></h4>
        <div class="card">
            <form class=" px-3 py-3">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Materi</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul materi" value="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Keterangan Materi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
                <label class="form-check-label" for="defaultCheck1">
                    Materi text<br>type data .doc / .pdf
                </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"><br>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
                <label class="form-check-label" for="defaultCheck1">
                    Materi video<br> type data.mp4 / .mkv
                </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                or <input type="text" id="youtube" placeholder="Youtube URL" value=""><br>
            </div>
            <div class="form-check">
                <div class="row">
                    <div class="col-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Materi AR
                    </label>
                    </div>
                    <div class="col-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Materi VR
                    </label>
                    </div>
                </div>
                3d modeling<br> type data .obj / .fbx
                <input type="file" class="form-control-file" id="exampleFormControlFile1"><br>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>    
    </div>
</div>