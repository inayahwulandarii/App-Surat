 <!-- Masthead-->
 <header class="masthead">
 	<div class="container">
	    <h2 class="section-heading text-uppercase">SELAMAT DATANG</h2>
		<h7 class="section-heading text-uppercase">---- DI ----</h7>
 		<h4 class="section-heading text-uppercase">PENDATAAN SURAT DINAS PEMBERDAYAAN MASYARAKAT DAN DESA PROVINSI SUMATERA SELATAN</h4>
 	</div>
 </header>

 <!-- profil-->
 <section class="page-section" id="profil">
 	<div class="container">

 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<div class="section-subheading text-muted">Dinas Pemberdayaan Masyarakat dan Desa Provinsi Sumatera Selatan</div>
 		</div>
		<br></br>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 		</div>
		 <div class="text-right">
		 <a class="section-subheading text-muted btn btn-simple data-dismiss" href="#page-top">Kembali</a>
</div>
 	</div>
 </section>
 
 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Struktur Organisasi</h2>
 			<div class="section-subheading text-muted">Dinas Pemberdayaan Masyarakat dan Desa Provinsi Sumatera Selatan</div>
 		</div>
 		<center>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur Dinas PMD" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur Dinas PMD</div>
 						<div class="section-subheading text-muted">Lihat Detail</div>
				
 					</div>
 				</div>
 			</div>
			 <div class="text-right">
		 <a class="section-subheading text-muted btn btn-simple data-dismiss" href="#page-top">Kembali</a>
</div>
</center>
	<div class="container">
 		<div class="text-center">
			 <h2 class="section-heading text-uppercase">Info Pengajuan Surat Online</h2>
			 <div class="section-subheading text-muted">Dinas Pemberdayaan Masyarakat dan Desa Provinsi Sumatera Selatan</div>
		</div>
		<br><div class="row text-justify pl-5 pr-5">
 			<p>Diberitahukan untuk melakukan Pengajuan Surat Online dimohon untuk melengkapi data dengan benar dan 
				 berkas persyaratan untuk Pengajuan Surat Online di Upload. Jika terdapat permasalahan dalam mengisi 
				 form Pengajuan Surat Online dimohon kepada pengaju untuk datang langsung ke Kantor Dinas PMD, atas
				 perhatiannya terimakasih.</p>
 		</div></br>
		<div class="text-right">
		 <br><a class="section-subheading text-muted btn btn-simple data-dismiss" href="#page-top">Kembali</a></br>
</div>
		</div>
		 
 		</div>
 	</div>
 </section>
