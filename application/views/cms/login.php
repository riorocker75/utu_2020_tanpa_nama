	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper" style="margin:50px 0">
	
			<!-- Advanced login -->
			<form action="<?php echo base_url().'index/user_login'; ?>" method="post">
				<div class="row">
					<div class="col-lg-4 offset-lg-5 col-sm-8 offset-sm-2 col-10 offset-1">
					
							<div class="main-login-form">
		
							<div class="mlg-title">
								<h2>Selamat Datang</h2>
							</div>
							<?php show_alert()?>
									<div class="form-group">
									<label for="namalengkap" style="opacity:0.6">Email</label>

									<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
									<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
									</div>

									<div class="form-group">
									<label for="namalengkap" style="opacity:0.6">Password</label>

									<input type="password" class="form-control" name="password" id="exampleInputPassword1">
									</div>

									<div class="row">
										<div class="col-12">
											<a href="" class=" float-right tx-13 red-text text-darken-4 tx-bold-600">Lupa Password ?</a> 
											
										</div>
									</div>

									<div style="margin-top:10px;">
										<button class="btn-login-fullwidth btn-login"> Masuk <i class="fas fa-sign-in-alt"></i></button>

									</div>

									<div class="col-12 d-flex justify-content-center tx-14" style="opacity:0.8;margin-top:10px;margin-bottom:-10px">
										Belum punya akun? 
											<a href="<?php echo base_url().'index/user_daftar'?>" class="blue-text text-darken-2 tx-bold-600">&nbsp;daftar</a>
									
									</div>
							</div>
						
						</div>
				</div>
			</form>
			<!-- /advanced login -->

		</div>
		<!-- /main content -->

	</div>
		<!-- /page content -->