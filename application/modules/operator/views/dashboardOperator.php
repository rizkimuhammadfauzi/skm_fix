<?php
   $this->load->view('template/template_header');
   $this->load->view('template/template_menuOperator');
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
                <li class="breadcrumb-item active">Statistik
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="morris-charts">        
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
                  <h4 class="card-title">Responden usia dan pendidikan</h4>
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