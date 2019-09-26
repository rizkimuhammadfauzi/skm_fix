<!DOCTYPE html>
<html lang="en" style="" class=" js no-touch csstransforms csstransitions">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Basic Page Needs -->

<title>Survei Kepuasan Masyarakat Pelayanan SAMSAT Jawa Barat</title>

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="<?php echo base_url(); ?>assets/forms/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/socialize-bookmarks.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/aero.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= site_url('app-assets/vendors/css/extensions/sweetalert.css'); ?>">

<!-- Toggle Switch -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/forms/jquery.switch.css">

<!-- Owl Carousel Assets -->
<link href="<?php echo base_url(); ?>assets/forms/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/forms/owl.theme.css" rel="stylesheet">

<!-- Google web font -->
<link href="<?php echo base_url(); ?>assets/forms/css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script type="text/javascript" async="" src="<?php echo base_url(); ?>assets/forms/ga.js"></script><script src="<?php echo base_url(); ?>assets/forms/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/jquery-ui-1.8.22.min.js"></script>

<!-- Wizard-->
<script src="<?php echo base_url(); ?>assets/forms/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="<?php echo base_url(); ?>assets/forms/check.min.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="<?php echo base_url(); ?>assets/forms/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="<?php echo base_url(); ?>assets/forms/respond.min.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11097556-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>

<body cz-shortcut-listen="true" class="" style="">
<?php
// echo print_r($jawaban);
// echo $jawaban[2]->jawaban;

 ?>
	<header>
         <div class="container">
            <div class="row">
				<div class="col-md-4 col-xs-3" id="logo">
					<!-- <h4>FORM KEPUASAN MASYARAKAT</h4> -->
				</div>
				<div class="col-md-8 col-xs-3" id="logo">
					<img src="<?php echo base_url(); ?>assets/images/logopemprovjabar.png" style="width:12%; ">
					<img src="<?php echo base_url(); ?>assets/images/logopoldajabar.png" style="width:10%; " >
					<img src="<?php echo base_url(); ?>assets/images/logopoldametro.png" style="width:10%;" >
					<img src="<?php echo base_url(); ?>assets/images/logojasaraharja.png" style="width:15%;" >
				</div>
            
         	</div><!-- End row -->
         </div><!-- End container -->
    </header> <!-- End header -->
        	
            <div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>Survei Kepuasan Masyarakat</h1>
                <p>Terhadap kualitas pelayanan SAMSAT di Provinsi Jawa Barat</p>
                </div>
       		</div>
            </div>

<section class="container" id="main">

<!-- Start Survey container -->
<div id="survey_container" class="wizard" novalidate="novalidate">

	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="ui-progressbar-value ui-widget-header ui-corner-left" style="display: none; width: 0%;"></div></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form name="example-1" action="<?php echo base_url('form/submit'); ?>" method="POST" class="wizard-form" novalidate="novalidate">
		<div id="middle-wizard" class="wizard-branch wizard-wrapper">
			<div class="step wizard-step current" style="display: block;">
				<div class="row">
					<div class="col-md-6">
					<h3 class="col-md-12 wizard-header">Isi data disamping yuk! Bantu Kang Penda mengevaluasi pelayanan SAMSAT di Jawa Barat</h3>
						<img src="<?php echo base_url(); ?>assets/images/kangpenda.png" style="width:40%;" >
						<input id="website" name="website" type="text" value="" class="valid">
					</div>

					<div class="col-md-6">
						<ul class="data-list floated clearfix">
							<li id="age"><input type="text" name="usia" class="required form-control valid" placeholder="Usia"></li>
						</ul>

						<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required valid" name="pendidikan">
									<option value="" selected="">Pendidikan terakhir</option>
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA/Sederajat</option>
									<option value="D3">D3</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</select>
							</div>
							</li>
						</ul>
                        
						<ul class="data-list">
								<li>
								<div class="styled-select">
									<select class="form-control required valid" name="jenis_kelamin">
										<option value="" selected="">Jenis Kelamin</option>
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
								</div>
								</li>
						</ul>

						<ul class="data-list">
								<li>
								<div class="styled-select">
									<select class="form-control required valid" id="pekerjaan" name="pekerjaan" onchange="pekerjaanLainnya()">
										<option value="" selected="">Pekerjaan</option>
										<option value="PNS">PNS</option>
										<option value="TNI">TNI</option>
										<option value="POLRI">POLRI</option>
										<option value="SWASTA">SWASTA</option>
										<option value="WIRAUSAHA">WIRAUSAHA</option>
										<option value="Lainnya">Lainnya</option>
									</select>
								</div>
								</li>
						</ul>

						<ul class="">
							<li id="pekerjaan_lainnya">
							<input type="text" name="pekerjaan_lainnya" class="form-control valid" placeholder="Pekerjaan Lainnya"></li>
						</ul>
                        
					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<ul class="data-list" id="terms">
							<li>
                            <strong>Apakah Anda sudah mengetahui <a href="#" data-toggle="modal" data-target="#terms-txt">maksud dan tujuan survei</a> ?</strong>
							<label class="switch-light switch-ios ">
                                    <input type="checkbox" name="terms" class="required fix_ie8 valid" value="yes">
                                    <span>
                                        <span class="ie8_hide">Belum</span>
                                        <span>Sudah</span>
                                    </span>
                                    <a></a>
                                </label>
							</li>
						</ul>
					</div>
				</div>
                
			</div><!-- end step-->

			<?php
			$i=0;
			$count = 0;
				foreach ($pertanyaan as $data) {
			?>
			<div class="step row wizard-step" style="display: block;">
				<div class="question_title">
					<h3 class="wizard-header"><?php echo $data->pertanyaan; ?></h3>
					<p><?php //echo $data->deskripsi; ?></p>
				</div>
				<input type="hidden" id="id_pertanyaan[<?php echo $i; ?>" name="id_pertanyaan[<?php echo $count; ?>]" value="<?php echo $data->id_pertanyaan; ?>">
				<div class="row">
					<div class="col-lg-3">
						<div class="item col-md-12">
							<div style="text-align:center;" onchange="selectJawaban()">
								<input id="answer_1_<?php echo $data->id_pertanyaan; ?>" name="id_jawaban[<?php echo $count; ?>]" type="radio" value="<?php echo $jawaban[$i]->id_jawaban;?>" class="required valid" style="text-align: center;">
								<label for="answer_1_<?php echo $data->id_pertanyaan; ?>"><img src="<?php echo base_url(); ?>assets/images/penilaian/sangat_kurang.png" alt="" style="align: center;"></label>
								<h4><?php echo $jawaban[$i]->jawaban;?></h4>
							</div>
						</div>
					</div>
					<?php $i+=1; ?>
					<div class="col-lg-3">
						<div class="item col-md-12">
						   <div style="text-align:center;">
								<input id="answer_2_<?php echo $data->id_pertanyaan; ?>" name="id_jawaban[<?php echo $count; ?>]" type="radio" value="<?php echo $jawaban[$i]->id_jawaban;?>" class="required valid">
								<label for="answer_2_<?php echo $data->id_pertanyaan; ?>"><img src="<?php echo base_url(); ?>assets/images/penilaian/kurang.png" alt="" style="text-align:center;"></label>
								<h4><?php echo $jawaban[$i]->jawaban;?></h4>
						    </div>
						</div>
					</div>
					<?php $i+=1; ?>
					<div class="col-lg-3">
						<div class="item col-md-12">
							<div style="text-align:center;">
								<input id="answer_3_<?php echo $data->id_pertanyaan; ?>" name="id_jawaban[<?php echo $count; ?>]" type="radio" value="<?php echo $jawaban[$i]->id_jawaban;?>" class="required valid">
								<label for="answer_3_<?php echo $data->id_pertanyaan; ?>"><img src="<?php echo base_url(); ?>assets/images/penilaian/puas.png" alt=""></label>
								<h4><?php echo $jawaban[$i]->jawaban;?></h4>
							</div>
						</div>
					</div>
					<?php $i+=1; ?>
					<div class="col-lg-3">
						<div class="item col-md-12">
							<div style="text-align:center;">
								<input id="answer_4_<?php echo $data->id_pertanyaan; ?>" type="radio" name="id_jawaban[<?php echo $count; ?>]" value="<?php echo $jawaban[$i]->id_jawaban;?>" class="required valid">
								<label for="answer_4_<?php echo $data->id_pertanyaan; ?>"><img src="<?php echo base_url(); ?>assets/images/penilaian/sangat_puas.png" alt=""></label>
								<h4><?php echo $jawaban[$i]->jawaban;?></h4>
							</div>
						</div>
					</div>
					<?php $i+=1; ?>
				</div>
				<!-- /row-->
			</div><!-- end step -->
			<?php
			$count += 1;
				}
			?>
			
			<div class="submit step wizard-step" id="complete" style="display: none;" disabled="disabled">
                    	<i class="icon-check"></i>
						<h3>Survei selesai! Terimakasih telah meluangkan waktu Anda.</h3>
						<div class="col-lg-12">
								<textarea name="kritiksaran" rows="8" cols="50" placeholder="Kritik dan Saran (Jika Ada)"></textarea>
						</div>
						<br>
						<button type="submit" name="process" class="submit" id="type-success" disabled="disabled">Kirim hasil survei</button>
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward" disabled="disabled">Sebelumnya</button>
			<button type="button" name="forward" class="forward">Selanjutnya </button>
		</div><!-- end bottom-wizard -->
	</form>
    
</div><!-- end Survey container -->


</section><!-- end section main container -->
       
<footer>   
    <section id="footer">
    <div class="container">
		<div class="row">
			<div class="col-md-12">
					<ul id="footer-nav">
						<li>Copyright© 2019 Pusat Layanan Operasional Pendapatan Daerah </li>
					</ul>              
			</div>
		</div>
	</div>
    </section>

</footer> 
 
 <div id="toTop" style="display: none;">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">About us</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal About -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="termsLabel">Maksud dan Tujuan Survei</h4>
      </div>
      <div class="modal-body">
        <p>Tujuan utama dari survei ini adalah untuk mengetahui feedback terhadap pelayanan publik
			pungutan pajak kendaraan bermotor di SAMSAT wilayah Provinsi Jawa Barat.
			Survei ini adalah kolaborasi antara Badan Pendapatan Daerah Provinsi Jawa Barat,
			 POLDA Jabar, POLDA Metro Jaya, dan Jasa Marga. Survei ini diharapkan mampu
			  mencerminkan pola pelayanan publik saat ini dan dapat digunakan sebagai referensi yang baik
			  untuk evaluasi pelayanan kedepannya.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- PEKERJAAN -->

<script>
function pekerjaanLainnya() {
  var trigger = document.getElementById('pekerjaan');
  var x = document.getElementById('pekerjaan_lainnya');
  if (trigger.value !== 'Lainnya') {
	x.style.visibility = 'hidden';
	} else {
	x.style.visibility = 'visible';
  }
}
</script>

<script>
$('#selectJawaban').change(function () {
    $('#selectJawaban').css("background", $("select option:selected").css("background-color"));
});
</script>


<!-- OTHER JS --> 
<script src="<?php echo base_url(); ?>assets/forms/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/jquery.placeholder.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/jquery.tweet.min.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/quantity-bt.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/retina.js"></script>
<script src="<?php echo base_url(); ?>assets/forms/functions.js"></script>


<!-- FANCYBOX -->
<script src="<?php echo base_url(); ?>assets/forms/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/forms/jquery.fancybox-media.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/forms/fancy_func.js" type="text/javascript"></script> 

<script src="<?= site_url('app-assets/js/scripts/extensions/sweet-alerts.js'); ?>" type="text/javascript"></script>
<script src="<?= site_url('app-assets/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript"></script>


</body></html>