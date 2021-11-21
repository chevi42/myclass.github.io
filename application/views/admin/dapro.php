
<div class="container">
  <div class="row">
    <div class="col"><br><br>
      <h2>Data Prodi</h2>
    </div>
  </div>
  <div class="row d-flex justify-content-between mb-3">
    <div class="col-mb"><a href="<?php echo base_url();?>admin/adddapro" class="btn btn-primary">Tambah Prodi</a></div>
    <!-- <div class="col-mb">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
   </div> -->
  </div>
  <div class="row justify-content-center">
    <div class="col">
        <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Prodi</th>
                <th>action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>IFSI-S1</td>
                <td>
                  <button type="button" class="btn btn-outline-secondary" value="Edit"><a href="<?php echo base_url();?>admin/edapro" class="bi bi-pencil"></a></button>
                  <button type="button" class="btn btn-outline-secondary" value="Delete"><a href="<?php echo base_url();?>admin/edamat" class="bi bi-trash-fill"></a></button>
                  <!-- <button type="button" class="btn btn-outline-secondary" Value=""><a href="<?php echo base_url();?>admin/mprofil" class="bi bi-person"></a></button> -->
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>RPL-S1</td>
                <td>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/emprofil" class="bi bi-pencil"></a></button>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/edamat" class="bi bi-trash-fill"></a></button>
                  <!-- <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/mprofil" class="bi bi-person"></a></button> -->
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>RPL-S1</td>
                <td>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/emprofil" class="bi bi-pencil"></a></button>
                  <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/edamat" class="bi bi-trash-fill"></a></button>
                  <!-- <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url();?>admin/mprofil" class="bi bi-person"></a></button> -->
                </td>
            </tr>
            
        </table>    
    </div>
</div>