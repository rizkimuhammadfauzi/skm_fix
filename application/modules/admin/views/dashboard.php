<?php
   $this->load->view('template/template_header');
   $this->load->view('template/template_menu');
   ?>
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Dashboard</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('operator/operator') ?>">Dashboard</a>
                </li>
               
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
         <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info"><?= $totalResponden ?></h3>
                      <h6>Total Responden</h6>
                    </div>
                    <div>
                      <i class="icon-users info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning"><?= $totalPenilaian->bobot; ?></h3>
                      <h6>Total Penilaian</h6>
                    </div>
                    <div>
                      <i class="icon-badge warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <?php
                        if($rataPenilaian->bobot >= 4){
                      ?> 
                           <div class="badge badge-glow badge-pill badge-success">
                              <?php echo "SANGAT BAIK"; ?> 
                           </div> 
                      <?php
                          }else if($rataPenilaian->bobot >= 3 ){
                      ?>
                           <div class="badge badge-glow badge-pill badge-success">
                              <?php echo"BAIK"; ?>
                           </div>
                      <?php
                          }else if($rataPenilaian->bobot >= 2 ){
                      ?>
                           <div class="badge badge-glow badge-pill badge-success">
                              <?php echo"KURANG BAIK"; ?>
                           </div>
                      <?php
                          }else{
                      ?>
                           <div class="badge badge-glow badge-pill badge-success">
                            <?php echo"TIDAK BAIK"; ?>
                           </div>
                       <?php   
                          }
                      ?>
                      <h3 class="success"></h3>
                      <h6>Rata-rata Penilaian</h6>
                    </div>
                    <div>
                      <i class="icon-like success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section id="morris-charts">
          <!-- Line Chart -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Grafik Kualitas Pelayanan</h4>
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
                  <div class="card-body">
                    <ul class="list-inline text-right pr-2">
                    <div id="line-chart" class="height-400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Bar Chart -->
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Responden Berdasarkan usia dan pendidikan</h4>
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
                  <div class="card-body">
                    <div id="bar-chart" class="height-400"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Responden Berdasarkan Jenis Kelamin</h4>
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
                  <div class="card-body">
                    <div id="donut-chart" class="height-400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </section>

        <div class="content-body">
          <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Responden Terakhir</h3>
          <div class="row breadcrumbs-top">
          </div>
        </div>
      </div>

      <!-- Table header styling start -->
        <div class="row" id="header-styling">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
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
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="bg-info white">
                      <tr>
                        <th>No</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $i=1;
                        foreach($responTerakhir as $p){
                      ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $p->usia ?></td>
                        <td><?= $p->jenis_kelamin ?></td>
                        <td><?= $p->pendidikan ?></td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Table header styling end -->
        
      </div>
    </div>
    </div>
  </div>
  <?php
   $this->load->view('template/template_footer');
   $this->load->view('template/chartline');
   $this->load->view('template/chartbar');
   $this->load->view('template/chartdonut');
   ?>