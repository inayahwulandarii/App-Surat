 <section class="page-section">
	<div class="container">
		<?php if ($this->session->flashdata('message') == TRUE) : ?>
		<?= $this->session->flashdata('message'); ?>
		<?php endif; ?>
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Pencarian Surat Online</h2>
			<div class="section-subheading text-muted">Masukkan ID Surat untuk <b>Track</b>:</div>
		</div>
		<br></br>
		<br><div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<?= form_open('tracking/cari', 'id="tracking", class="card card-sm"') ?>
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search"
								name="trackid" placeholder="Masukkan ID Pengajuan Anda">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Cari</button>
						</div>
		</br>
						<!--end of col-->
					</div>
					<?= form_close()?>
					<br></br>
				</div>
				<!--end of col-->
			</div>
		</div>
		<br></br>
		<br></br>
		<br></br>
		<div class="text-right">
            <br><a class="section-subheading text-muted btn btn-simple data-dismiss" href="<?= base_url('home')?>">Kembali</a></br>
            </div> 
	</div>
</section>

<section class="page-section">
</section>
