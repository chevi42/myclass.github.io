
<div class="container">
  <div class="row">
    <div class="col"><br><br>
      <h2>Data Dosen</h2>
    </div>
  </div>
  <div class="row d-flex justify-content-between mb-3">
    <div class="col-mb"><a href="<?php echo base_url();?>admin/adddados" class="btn btn-primary">Tambah Dosen</a></div>
    <div class="col-mb">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col">
        <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama Dosen</th>
                <th>Tanggal Masuk</th>
                <th>action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>123.456.789</td>
                <td>Dosen 1</td>
                <td>08/15/2018</td>
                <td>
                  <button type="button" class="btn btn-outline-secondary" value="Edit"><a href="<?php echo base_url();?>admin/eprofil" class="bi bi-pencil"></a></button>
                  <button type="button" class="btn btn-outline-secondary" value="Delete"><a href="<?php echo base_url();?>admin/edamat" class="bi bi-trash-fill"></a></button>
                  <button type="button" class="btn btn-outline-secondary" Value=""><a href="<?php echo base_url();?>admin/profil" class="bi bi-person"></a></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>123.456.790</td>
                <td>Dosen 2</td>
                <td>08/15/2018</td>
                <td>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?> admin/eprofil" class="bi bi-pencil"></a></button>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/edamat" class="bi bi-trash-fill"></a></button>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/profil" class="bi bi-person"></a></button>
                </td>
            </tr>
            
        </table>    
    </div>
</div>