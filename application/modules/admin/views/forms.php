<?php
   $this->load->view('template/template_header');
   $this->load->view('template/template_menu');
   ?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
   <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Forms Pertanyaan</h3>
      <div class="row breadcrumbs-top">
         <div class="breadcrumb-wrapper col-12">
         </div>
      </div>
   </div>
   <div class="content-header-right col-md-6 col-12">
      <div class="float-md-right" role="group" aria-label="Button group with nested dropdown">
         <div class="col-lg-4 col-sm-4 col-12">
            <div class="form-group text-center">
               <button class="btn btn-sm btn-info font-medium-1 grid-form-dialog-btn mt-1">Tambah Data</button>
               <p class="font-small-3 mt-1"></p>
               <div class="grid-form-dialog" title="Tambah Data Pertanyaan">
                  <div class="container">
                     <form method="post" action="<?= base_url('admin/forms/tambahPertanyaan') ?>">
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Pertanyaan</label>
                           <div class="col-sm-10">
                              <textarea class="form-control" name="pertanyaan" required="" rows="3"></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                           <div class="col-sm-10">
                              <textarea class="form-control" name="deskripsi" required="" id="exampleTextarea" rows="3"></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">OPD</label>
                           <div class="col-sm-10">
                              <select class="form-control" required="" name="opd" style="width: 200px;">
                                 <option value="" disabled diselected>-- Pilih Opd --</option>
                                 <?php                                
                                    foreach ($getOpd as $p) {  
                                    echo "<option value='".$p->id_opd."'>".$p->nama_opd."</option>";
                                    }
                                    echo"
                                    </select>"
                                    ?>
                                 </option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="content-body">
<section id="configuration">
   <div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Pertanyaan Kepada Responden</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
               <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="card-content collapse show">
            <div class="card-body card-dashboard">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th width="80%">Pertanyaan</th>
                        <th width="2%">Status</th>
                        <th width="40%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=1;
                        foreach ($getPertanyaan as $p) {                   
                        ?>
                     <tr>
                         <td><?= $no ?></td>
                        <td><?= $p->pertanyaan ?></td>
                         <?php 
                           if($p->status == 1){ ?>
                              <td><input type="checkbox" style="margin-left: 20px;" name="status" <?php if($p->status == 1) echo 'checked'; ?> onclick='window.location.assign("<?= site_url('admin/forms/updateStatusnol?id_pertanyaan='. $p->id_pertanyaan) ?>")'></td>
                           <?php } else { ?>
                            <td><input type="checkbox" style="margin-left: 20px;" name="status" onclick='window.location.assign("<?= site_url('admin/forms/updateStatus?id_pertanyaan='. $p->id_pertanyaan) ?>")'></td>
                           <?php } ?>
                        <td>
                           <center>
                            <a data-toggle="modal" data-target="#modal_edit<?=$p->id_pertanyaan;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="ft-edit"></i></a>
                           <a href="<?= site_url('admin/forms/hapusPertanyaan/'. $p->id_pertanyaan)?>" class="btn btn-danger btn-sm">
                           <i class="ft-trash"></i></a>
                        </td>
                     </tr>
                     <?php $no++; } ?>
               </table>
            </div>
         </section>
         </tbody>
         </table>
         </div>

      <?php 
      foreach ($getPertanyaan as $p){         
      ?>
   <div class="modal fade" id="modal_edit<?php echo $p->id_pertanyaan ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Pertanyaan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <div class="p-20">
                        <form action="<?php echo site_url('admin/forms/updatePertanyaan'); ?>" method="post">
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Pertanyaan</label>
                              <input type="hidden" name="id_pertanyaan" value="<?php echo $p->id_pertanyaan; ?>">
                              <div class="col-10">
                                 <textarea class="form-control" name="pertanyaan" rows="5" ><?= $p->pertanyaan; ?></textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Deskripsi</label>
                              <div class="col-10">
                                 <textarea class="form-control" name="deskripsi" rows="5"><?= $p->deskripsi; ?></textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                           <label class="col-sm-2 col-form-label">OPD</label>
                           <div class="col-sm-10">
                              <select class="form-control" required="" name="opd" style="width: 200px;">
                                 <option value="" disabled diselected>-- Pilih Opd --</option>
                                 <?php                                
                                    foreach ($getOpd as $p) {  
                                    echo "<option value='".$p->id_opd."'>".$p->nama_opd."</option>";
                                    }
                                    echo"
                                    </select>"
                                    ?>
                                 </option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Update">
            </div>
            </form>
         </div>
      </div>
   </div>
<?php } ?>

     <div class="content-header row">
   <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Forms OPD</h3>
      <div class="row breadcrumbs-top">
         <div class="breadcrumb-wrapper col-12">
         </div>
      </div>
   </div>
   <div class="content-header-right col-md-6 col-12">
      <div class="float-md-right" role="group" aria-label="Button group with nested dropdown">
         <div class="col-lg-4 col-sm-4 col-12">
            <div class="form-group text-center">
               <button class="btn btn-sm btn-info font-medium-1 percent-width-dialog-btn mt-1">Tambah Data</button>
               <p class="font-small-3 mt-1"></p>
                <div class="percent-width-dialog" title="Tambah Data OPD">
                  <div class="container">
                     <form method="post" action="<?= base_url('admin/forms/tambahOpd') ?>">
                         <div class="form-group">
                                <label>Nama OPD</label>
                                <input type="tex" name="opd" class="form-control">
                              </div>
                        <div class="form-group" style="margin-right: 50px;">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="content-body">
<section id="configuration">
   <div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Oragnisasi Perangkat Daerah</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
               <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="card-content collapse show">
            <div class="card-body card-dashboard">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th width="80%">Nama OPD</th>
                        <th width="15%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=1;
                        foreach ($getOpd as $p) {                   
                        ?>
                     <tr>
                         <td><?= $no ?></td>
                        <td><?= $p->nama_opd ?></td>
                        <td>
                             <a data-toggle="modal" data-target="#modal_edit2<?=$p->id_opd;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="ft-edit"></i></a>
                           <a href="<?= site_url('admin/forms/hapusOpd/'. $p->id_opd)?>" class="btn btn-danger btn-sm">
                           <i class="ft-trash"></i></a>
                        </td>
                     </tr>
                     <?php $no++; } ?>
               </table>
            </div>
         </section>
         </tbody>
         </table>
         </div>

          <?php 
      foreach ($getOpd as $p){         
      ?>
   <div class="modal fade" id="modal_edit2<?php echo $p->id_opd ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit OPD</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <div class="p-20">
                        <form action="<?php echo site_url('admin/forms/updateOpd'); ?>" method="post">
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Nama OPD</label>
                              <input type="hidden" name="id_opd" value="<?php echo $p->id_opd; ?>">
                              <div class="col-10">
                                 <input type="text" name="nama_opd" class="form-control" value="<?= $p->nama_opd; ?>">
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Update">
            </div>
            </form>
         </div>
      </div>
   </div>
<?php } ?>
         
          <div class="content-header row">
   <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Forms UPTD</h3>
      <div class="row breadcrumbs-top">
         <div class="breadcrumb-wrapper col-12">
         </div>
      </div>
   </div>
   <div class="content-header-right col-md-6 col-12">
      <div class="float-md-right" role="group" aria-label="Button group with nested dropdown">
         <div class="col-lg-4 col-sm-4 col-12">
            <div class="form-group text-center">
               <button class="btn btn-sm btn-info font-medium-1 basic-form-dialog-btn mt-1">Tambah Data</button>
               <p class="font-small-3 mt-1"></p>
                <div class="basic-form-dialog " title="Form Tambah UPTD">
                  <div class="container">
                     <form method="post" action="<?= base_url('admin/forms/tambahUptd') ?>">
                         <div class="form-group">
                            <label>Nama Uptd</label>
                            <input type="text" name="uptd" class="form-control">
                         </div>
                         <div class="form-group">
                            <label>Pilih OPD</label>
                            <select class="form-control" name="opd">
                                 <option value="" disabled diselected>-- Pilih Opd --</option>
                                 <?php                                
                                    foreach ($getOpd as $p) {  
                                    echo "<option value='".$p->id_opd."'>".$p->nama_opd."</option>";
                                    }
                                    echo"
                                    </select>"
                                    ?>
                                 </option>
                              </select>
                         </div>
                        <div class="form-group" style="margin-right: 100px;">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="content-body">
<section id="configuration">
   <div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Unit Pelaksana Teknis Daerah</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
               <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="card-content collapse show">
            <div class="card-body card-dashboard">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama UPTD</th>
                        <th width="15%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=1;
                        foreach ($getUptd as $p) {                   
                        ?>
                     <tr>
                         <td><?= $no ?></td>
                        <td><?= $p->nama_uptd ?></td>
                        <td>
                             <a data-toggle="modal" data-target="#modal_edit3<?=$p->id_uptd;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="ft-edit"></i></a>
                           <a href="<?= site_url('admin/forms/hapusUptd/'. $p->id_uptd)?>" class="btn btn-danger btn-sm">
                           <i class="ft-trash"></i></a>
                        </td>
                     </tr>
                     <?php $no++; } ?>
               </table>
            </div>
         </section>
         </tbody>
         </table>
         </div>

            <?php 
      foreach ($getUptd as $p){         
      ?>
   <div class="modal fade" id="modal_edit3<?php echo $p->id_uptd ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit OPD</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <div class="p-20">
                        <form action="<?php echo site_url('admin/forms/updateUptd'); ?>" method="post">
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Nama Uptd</label>
                              <input type="hidden" name="id_uptd" value="<?php echo $p->id_uptd; ?>">
                              <div class="col-10">
                                 <input type="text" name="nama_uptd" class="form-control" value="<?= $p->nama_uptd; ?>">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Pilih OPD</label>
                              <div class="col-10">
                                  <select class="form-control" name="opd">
                                 <option value="" disabled diselected>-- Pilih Opd --</option>
                                 <?php                                
                                    foreach ($getOpd as $p) {  
                                    echo "<option value='".$p->id_opd."'>".$p->nama_opd."</option>";
                                    }
                                    echo"
                                    </select>"
                                    ?>
                                 </option>
                              </select>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Update">
            </div>
            </form>
         </div>
      </div>
   </div>
<?php } ?>

   </div>
</div>  

<?php
   $this->load->view('template/template_footer');
   ?>