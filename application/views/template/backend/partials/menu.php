<?php $pag = $this->uri->segment(1); ?>
<?php $page = $this->uri->segment(2); ?>
<?php $pages = $this->uri->segment(3); ?>


<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url() ?>assets/img/user.png" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?php
							echo "Admin";
							?>
							<span class="user-level">Pelatih</span>
						</span>
					</a>
					<div class="clearfix"></div>
				</div>
			</div>
			<ul class="nav">
				<li <?php if ($page == "Dashboard") {
						echo 'class="nav-item active" ';
					} else {
						echo 'class="nav-item" ';
					} ?>>
					<?= anchor('admin/Dashboard', '<i class="fas fa-home"></i><p>Dashboard</p>'); ?>

				</li>

				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Data Masuk</h4>
				</li>

				<li <?php if ($pag == "sekolah" || $pag == "Sekolah") {
						echo 'class="nav-item active" ';
					} else {
						echo 'class="nav-item" ';
					} ?>>
					<?= anchor('Sekolah', '<i class="fas fa-home"></i><p>Pemain</p>'); ?>
				</li>

				<li <?php if ($pag == "Kriteria" || $pag == "kriteria" || $pag == "Subkriteria" || $pag == "subkriteria") {
						echo 'class="nav-item active" ';
					} else {
						echo 'class="nav-item" ';
					} ?>>
					<a data-toggle="collapse" href="#baseed">
						<i class="fas fa-layer-group"></i>
						<p>Kriteria</p>
						<span class="caret"></span>
					</a>

					<div class="collapse" id="baseed">
						<ul class="nav nav-collapse">
							<li><?= anchor('Kriteria', '<span class="sub-item"><i class="fas fa-tasks"></i> Kriteria</span>'); ?></li>
							<li><?= anchor('Subkriteria', '<span class="sub-item"><i class="fas fa-tasks"></i> Subkriteria</span>'); ?></li>
						</ul>
					</div>
				</li>

				<li <?php if ($pag == "Alternatif" || $pag == "alternatif" || $page == "Banding" || $page == "banding" || $page == "banding_parameter" ) {
						echo 'class="nav-item active" ';
					} else {
						echo 'class="nav-item" ';
					} ?>>

					<a data-toggle="collapse" href="#hitung">
						<i class="fas fa-layer-group"></i>
						<p>Perhitungan</p>
						<span class="caret"></span>
					</a>

					<div class="collapse" id="hitung">
						<ul class="nav nav-collapse">
							<li><?= anchor('Alternatif', '<span class="sub-item"><i class="fas fa-tasks"></i> Alternatif</span>'); ?></li>
							<li><?= anchor('Perbandingan/banding', '<span class="sub-item"><i class="fas fa-tasks"></i> Banding Kriteria & Subkriteria </span>'); ?></li>
							<li><?= anchor('Perbandingan/banding_parameter', '<span class="sub-item"><i class="fas fa-tasks"></i> Banding Skala Nilai </span>'); ?></li>

						</ul>
					</div>
				</li>

				<li <?php if ($page == "hasil" || $page == "Hasil") {
						echo 'class="nav-item active" ';
					} else {
						echo 'class="nav-item" ';
					} ?>>
					<?= anchor('Perbandingan/hasil', '<i class="fas fa-tasks"></i><p>Hasil</p>'); ?>
				</li>

			</ul>
		</div>
	</div>
</div>
<!-- EndSidebar -->