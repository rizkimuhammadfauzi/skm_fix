<?php
   $this->load->view('template/template_header');
   $this->load->view('template/template_menu');
   ?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
   <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">Forms P3D</h3>
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
               <div class="grid-form-dialog" title="Tambah Data P3D">
                  <div class="container">
                     <form method="post" action="<?= base_url('admin/pengaturan/tambahP3d') ?>">
                        <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username">
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                              </div>
                              <div class="form-group">
                                <label>Pilih Uptd</label>
                                <select class="form-control" name="uptd">
                                 <option value="" disabled diselected>-- Pilih Uptd --</option>
                                 <?php                                
                                    foreach ($getUptd as $p) {  
                                    echo "<option value='".$p->id_uptd."'>".$p->nama_uptd."</option>";
                                    }
                                    echo"
                                    </select>"
                                    ?>
                                 </option>
                              </select>
                              </div>
                              <div class="form-group">
                                <label>Pilih Level</label>
                                <select class="form-control" name="level">
                                 <option value="" disabled diselected>-- Pilih Level --</option>
                                 <option value="admin">admin</option>
                                 <option value="operator">operator</option>
                                 <option value="user">user</option>
                              </select>
                              </div>
                        <div class="form-group">
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
            <h4 class="card-title">Pusat Pusat Pengelolaan Pendapatan Daerah </h4>
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
                        <th width="80%">username</th>
                        <th width="2%">Status</th>
                        <th width="20%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                      <?php 
                        $no=1;
                        foreach ($getUser as $p) {                   
                        ?>
                     <tr>
                         <td><?= $no ?></td>
                         <td><?= $p->username ?></td>
                            <?php 
                           if($p->status == 1){ ?>
                              <td><input type="checkbox" style="margin-left: 20px;" name="status" <?php if($p->status == 1) echo 'checked'; ?> onclick='window.location.assign("<?= site_url('admin/pengaturan/updateStatusnol?id_user='. $p->id_user) ?>")'></td>
                           <?php } else { ?>
                            <td><input type="checkbox" style="margin-left: 20px;" name="status" onclick='window.location.assign("<?= site_url('admin/pengaturan/updateStatus?id_user='. $p->id_user) ?>")'></td>
                           <?php } ?>
                        <td>
                            <a data-toggle="modal" data-target="#modal_edit<?=$p->id_user;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="ft-edit"></i></a>
                           <a href="<?= site_url('admin/pengaturan/hapusP3d/'. $p->id_user )?>" class="btn btn-danger btn-sm">
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
      foreach ($getUser as $p){         
      ?>
   <div class="modal fade" id="modal_edit<?php echo $p->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit P3D</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <div class="p-20">
                        <form action="<?php echo site_url('admin/pengaturan/updateP3d'); ?>" method="post">
                           <div class="form-group row">
                              <label class="col-2 col-form-label">username</label>
                              <input type="hidden" name="id_user" value="<?php echo $p->id_user; ?>">
                              <div class="col-10">
                                 <input type="text" name="username" class="form-control" value="<?= $p->username; ?>">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">password</label>
                              <div class="col-10">
                                 <input type="password" name="password" placeholder="masukan password baru" class="form-control">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Pilih Level</label>
                              <div class="col-10">
                                 <select class="form-control" name="level">
                                 <option value="" disabled diselected>-- Pilih Level --</option>
                                 <option value="admin">admin</option>
                                 <option value="operator">operator</option>
                                 <option value="user">user</option>
                              </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Pilih Uptd</label>
                              <div class="col-10">
                                 <select class="form-control" name="uptd">
                                 <option value="" disabled diselected>-- Pilih Uptd --</option>
                                 <?php                                
                                    foreach ($getUptd as $p) {  
                                    echo "<option value='".$p->id_uptd."'>".$p->nama_uptd."</option>";
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