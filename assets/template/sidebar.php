<div class="sidebar" data-color="rose">

	<div class="logo"><a href="http://www.creative-tim.com/" class="simple-text logo-mini">
		<i class="material-icons">inbox</i>
	</a>
	<a href="http://www.creative-tim.com/" class="simple-text logo-normal">
		Dashboard
	</a></div>
	<div class="sidebar-wrapper" id="style-1">
		<div class="user">
			<div class="photo">
				<img src="assets/img/avatar-user.svg" />
			</div>
			<div class="user-info">
				<a data-toggle="collapse" href="#collapseExample" class="username">
					<span>
						User
						<b class="caret"></b>
					</span>
				</a>
				<div class="collapse" id="collapseExample">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="profile-saya.php">
								<span class="sidebar-normal">Profile saya</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<ul class="nav">
			
			<li class="nav-item">
				<a class="nav-link" href="admin.php">
					<i class="material-icons">dashboard</i>
					<p> Dashboard </p>
				</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link" href="surat-masuk.php">
					<i class="material-icons">mail_outline</i>
					<p>Surat Masuk</p>
				</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link" data-toggle="collapse" href="#mapsExamples">
					<i class="material-icons">inbox</i>
					<p> Surat Keluar
						<b class="caret"></b>
					</p>
				</a>
				<div class="collapse" id="mapsExamples">
					<ul class="nav">
						<li class="nav-item ">
							<a class="nav-link" href="daftar-surat-keluar.php">
								<span class="sidebar-normal">Daftar surat keluar</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="tambah-surat.php">
								<span class="sidebar-normal">Tambah surat</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item ">
				<a class="nav-link" href="disposisi.php">
					<i class="material-icons">bookmark_border</i>
					<p>Disposisi</p>
				</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link" data-toggle="collapse" href="#tablesExamples">
					<i class="material-icons">people_outline</i>
					<p> Pengaturan user
						<b class="caret"></b>
					</p>
				</a>

				<div class="collapse" id="tablesExamples">
					<ul class="nav">
						<li class="nav-item ">
							<a class="nav-link" href="daftar-user.php">
								<span class="sidebar-normal">Daftar user</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="tambah-user.php">
								<span class="sidebar-normal">Tambah user</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item ">
				<a class="nav-link" href="profile-saya.php">
					<i class="material-icons">person_outline</i>
					<p>Profile saya</p>
				</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link" href="" data-toggle="modal" data-target="#myModal10">
					<i class="material-icons">login</i>
					<p>Logout</p>
				</a>
			</li>
			
		</ul>
	</div>
</div>


<!-- logout modal -->
<div class="modal fade modal-mini modal-primary" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-small">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
			</div>
			<div class="modal-body">
				<p class="text-center"><img src="assets/img/hello.png" class="img-fluid img-logout" alt=""></p>
				<p class="text-center">Apakah anda ingin logout ?</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-link" data-dismiss="modal">Batalkan</button>
				<button type="button" class="btn btn-danger btn-link">Keluar
					<div class="ripple-container"></div>
				</button>
			</div>
		</div>
	</div>
</div>
<!-- logout modal -->