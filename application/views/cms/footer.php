
<!-- to top -->
<div class="to-top text-center">
	<i class="fa fa-arrow-up " aria-hidden="true"></i>
</div>
<!-- end to top -->

<div class="modal-cart modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p class="text-center">Produk berhasil di masukkan ke keranjang.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Lanjut belanja</a>
				<a href="<?php echo base_url().'index/keranjang' ?>" class="btn btn-primary btn-sm">Keranjang / Pembayaran</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- footer start -->
<footer class="footer-class">
  

  <div class="copyright-footer">
    <div class="d-flex justify-content-center tx-14">
      &copy;<?php echo date('Y')?> Dibuat Oleh : <a href="" class="pink-text text-lighten-2">&nbsp;Mahasiswa Unimal&nbsp; </a>untuk Indonesia

    </div>
    </div>
  
</footer>
<!-- end footer -->


<!-- modal login dan daftar -->
<!-- Modal -->
<div class="modal fade modal-login" id="login-pembeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masuk Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url().'index/user_login' ?>" method="post">
        <div class="modal-body">  
        <div class="form-group">
             
              <input type="email" class="form-control tx-14" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        <div class="form-group">
      
          <input type="password" class="form-control tx-14" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

             <div class="row">
                <div class="col-6">
                 <a href="" class=" float-left tx-13 red-text text-darken-4 tx-bold-600">Lupa Password ?</a> 
                 
                </div>
                <div class="col-6 ">
                   <a href="<?php echo base_url().'index/user_daftar';?>" class="float-right tx-13 blue-text text-darken-2 tx-bold-600">Daftar akun</a>
                </div>

             </div>

             <div class="col-12" style="margin-top:10px;">
               <button type="submit" class="btn-login-fullwidth bor-login"> Masuk <i class="fas fa-sign-in-alt"></i></button>

			 </div>
				 <div class="d-flex justify-content-center">

				 <a data-toggle="modal" data-target="#login-penjual" id="log-jual" class="tx-12 labil labil-success white-text" style="text-transform:none;cursor:pointer">Masuk Ke Toko</a>
				</div>

        
          </div>
      </form>
     
    </div>
  </div>
</div>

<!-- end modal login dan daftar -->



<!-- modal login dan daftar penjual-->
<!-- Modal -->
<div class="modal fade modal-login" id="login-penjual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masuk ke Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url().'petani/login_act' ?>" method="post">
        <div class="modal-body">  
        <div class="form-group">
             
              <input type="text" class="form-control tx-14" name="uname"   placeholder="Username">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        <div class="form-group">
      
          <input type="password" class="form-control tx-14" name="pass" placeholder="Password">
        </div>

             <div class="row">
                <div class="col-6">
                 <a href="" class=" float-left tx-13 red-text text-darken-4 tx-bold-600">Lupa Password ?</a> 
                 
                </div>
                <div class="col-6 ">
                   <a href="<?php echo base_url().'petani/daftar_petani';?>" class="float-right tx-13 blue-text text-darken-2 tx-bold-600">Daftar menjadi penjual</a>
                </div>

             </div>

             <div class="col-12" style="margin-top:10px;">
               <button type="submit" class="btn-login-fullwidth bor-login"> Masuk <i class="fas fa-sign-in-alt"></i></button>

			 </div>

          </div>
      </form>
     
    </div>
  </div>
</div>

<!-- end modal login dan daftar -->

<!-- modal login pemabayran cek-->
<!-- Modal -->
<div class="modal fade modal-login" id="pembayaran_log_aja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masuk akun lanjut bayar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url().'index/user_login_static'; ?>" method="post">
        <div class="modal-body">  
        <div class="form-group">
             
              <input type="email" class="form-control tx-14" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        <div class="form-group">
      
          <input type="password" class="form-control tx-14" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

             <div class="row">
                <div class="col-6">
                 <a href="" class=" float-left tx-13 red-text text-darken-4 tx-bold-600">Lupa Password ?</a> 
                 
                </div>
                <div class="col-6 ">
                   <a href="<?php echo base_url().'index/user_daftar';?>" class="float-right tx-13 blue-text text-darken-2 tx-bold-600">Daftar akun</a>
                </div>

             </div>

             <div class="col-12" style="margin-top:10px;">
               <button type="submit" class="btn-login-fullwidth bor-login"> Masuk <i class="fas fa-sign-in-alt"></i></button>
			 </div>
			
          </div>
      </form>
     
    </div>
  </div>
</div>
<!-- end login pemabayran cek--->

<!-- modal resi -->

<div class="modal fade" id="modal-resi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="login-v2-title">
				<h2>Cek Resi Pengiriman</h2>
				<i class="fa fa-times tx-20 close" data-dismiss="modal" aria-label="Close"></i>
			</div>
			<form method="get" action="http://www.cekresi.com" target="_BLANK" class="main-search">
				<div class="login-v2-body">  
						
						<div class="input-group-dfv2">
							
							<input class="input-dfv2" type="text" name="noresi" placeholder="Masukkan no.resi" style="padding-right:90px!important">
							<i class="fa fa-key" aria-hidden="true"></i>

						<button style="position:absolute;right:0;top:2px;padding:10px 30px;font-size:14px;color:#fff;background:#0095DA;border:none;border-radius:3px;cursor:pointer">cari</button>
						</div>
					
				</div>
					
				</form>
			
		</div>
	</div>
</div>


<!-- end modal resi -->

<!-- modal lacak -->
<div class="modal fade" id="modal-lacak" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="login-v2-title">
				<h2>Lacak pesanan, tanpa login</h2>
				<i class="fa fa-times tx-20 close" data-dismiss="modal" aria-label="Close"></i>
			</div>
			<form method="post" action="<?php echo base_url().'index/cek_inolog_act'?>" class="main-search">
				<div class="login-v2-body">  
						
						<div class="input-group-dfv2">
							
							<input class="input-dfv2" type="text" name="kode_beli" placeholder="Kode Pembeli" style="padding-right:90px!important" required>
							<i class="fa fa-key" aria-hidden="true"></i>

						</div>

						<div class="input-group-dfv2">
							<input class="input-dfv2" type="text" name="kode_order" placeholder="Kode Order" style="padding-right:90px!important" required>
							<i class="fa fa-barcode"></i>

						</div>
						<button class="btn-u-md btn-primary">Lihat Status</button>
					
				</div>
					
				</form>
			
		</div>
	</div>
</div>

<!-- end lacak -->

<!-- modal promo -->


<!-- end modal promo -->

    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="<?php echo base_url()?>assets_front/js/core_utu.js"></script>
	<script src="<?php echo base_url()?>assets_front/js/input-spinner.js" ></script>
	<script src="<?php echo base_url()?>assets_front/js/slick.js" ></script>
    <script src="<?php echo base_url(); ?>assets_front/js/prodsli.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>

    <script>
      $( function() {
        $( "#draggable" ).draggable();
	  } );
	  

	  $(".variable").slick({
		infinite: true,
		variableWidth: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		autoplay: true,
  		autoplaySpeed: 5000,
	  });
	  
	  $(document).ready(function(){
		$("#log-jual").click(function(){
			$("#login-pembeli").fadeOut();
			$(".modal-backdrop").fadeOut();

		});	

	  });
	  $( document ).ready(function() {
			// load the overlay
	
		
		// if (document.cookie.indexOf('visited=true') == -1){
			
		// 	// var year = 1000*60*60*24;
		// 	// var fminute = 1000*15*60;

		// 	var expires = new Date((new Date()).valueOf() + fminute);
		// 	document.cookie = "visited=true;expires=" + expires.toUTCString();

		// }
	}); 

	// chat
	
	$( document ).ready(function() {
		var day = 1000*60*60*1;
		var expires = new Date((new Date()).valueOf() + day);
		if ($.cookie("sehari_close1") == null) {
	$('#promo-mod').modal({backdrop: 'static', keyboard: false}) 

			// Show the modal, with delay func.
			$('#promo-mod').appendTo("body");
			function show_modal(){
			$('#promo-mod').modal();
			}
		window.setTimeout(show_modal, 3000);
		}
		$('#tutup-promo').click(function () { 
			document.cookie = "sehari_close1=true;expires=" + expires.toUTCString();
		});
	}); 
	
	$(document).ready(function () {
		$('.grt-close').click(function () { 
				$('#chat-body').slideUp();
			});
			$('#chat-sess').click(function () { 
				$('.chat-sess-body').toggle();	
			});
	});

	$(document).ready(function () {
		var cek_jam= new Date().getHours();
		var pesan;
		var pagi=('Selamat Pagi');
		var siang=('Selamat Siang');
		var sore=('Selamat Sore');
		var malam=('Selamat Malam');

		if(cek_jam >= 0 && cek_jam < 10 ){
			pesan = pagi;
		}else if(cek_jam >= 10 && cek_jam < 15){
			pesan = siang;
		}else if(cek_jam >=15 && cek_jam < 18){
			pesan = sore;
		}else if(cek_jam >=18 && cek_jam < 24){
			pesan = malam;
		}
		$('#pesan-hari').append(pesan);	

	});

	// end chat
	
      </script>

<script type="text/javascript">
			$(document).ready(function(){
				$('.diki-tooltip').tooltip();

					$('body').on("click",".btn-addtocart",function(){
						var id = $(this).attr('id');
						var data = "id="+id;
						$.ajax({
							type: 'POST',
							url: "<?php echo base_url(); ?>" + "index/addtocart",
							data: data,
							success: function(){
								$('.modal-cart').modal();
							},
							beforeSend: function(){
								$('#'+id).after("<span class='ajax-cart heading-text pull-right'><i class='icon-spinner2 spinner position-left'></i></span>");
								$('#'+id).hide();
							},
							complete: function(){
								$('.ajax-cart').hide();
								$('#'+id).show();
							},
							error: function() {
								alert("Gagal menambahkan produk ke keranjang !");
							}
						});
					});

					$('body').on("click",".btn-bayarlangsung",function(){
						var id = $(this).attr('id');
						var jumlah_produk =document.getElementById('jumlah_produk').value;
						var stock_hasil = document.getElementById('stock_hasil').value;
					
						$.ajax({
							type: 'POST',
							url: "<?php echo base_url(); ?>" + "index/addtocart2",
							data: "id="+id +'&jumlah_produk='+jumlah_produk +'&stock_hasil='+stock_hasil,
							success: function(){
								window.location.replace("<?php echo base_url().'index/pembayaran'?>");
							},
							error: function() {
								alert("Gagal menuju laman pembayaran mohon diulangi lagi !");
							}
						});
					});	


					$('body').on("click",".keranjang-dulu",function(){
						var id = $(this).attr('id');
						var jumlah_produk =document.getElementById('jumlah_produk').value;
						var stock_hasil = document.getElementById('stock_hasil').value;
					
						$.ajax({
							type: 'POST',
							url: "<?php echo base_url(); ?>" + "index/addtocart2",
							data: "id="+id +'&jumlah_produk='+jumlah_produk +'&stock_hasil='+stock_hasil,
							success: function(){
								window.location.reload(); 
							},
							error: function() {
								alert("Gagal menuju laman pembayaran mohon diulangi lagi !");
							}
						});
					});			



	$('body').on("change",".form-provinsi",function(){
				var provinsi = $(this).val();
				var data = "provinsi="+provinsi;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_kota/",
					data: data,
					success: function(html){
						$('.form-kota').html(html);
					},
					beforeSend: function(){
						$('.form-kota').after("<center><span class='ajax-ongir heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
						$('.form-kota').hide();
					},
					complete: function(){
						$('.ajax-ongir').hide();
						$('.form-kota').show();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".form-kota",function(){
				var kota = $(this).val();
				var id_prod = $('.id_prod').val();
				var kurir = $('.form-kurir').val();
				var data = "kota="+kota+"&id_prod="+id_prod;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_cost/",
					data: data,
					success: function(html){
						$('.tempat-cost').html(html);
					},
					beforeSend: function(){
						$('.tempat-cost').before("<center><span class='ajax-cost heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
					},
					complete: function(){
						$('.ajax-cost').hide();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});



			// payment ship
			$('body').on("change",".form-provinsi2",function(){
				var provinsi = $(this).val();
				var data = "provinsi="+provinsi;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_kota2/",
					data: data,
					success: function(html){
						$('.form-kota2').html(html);
					},
					beforeSend: function(){
						$('.form-kota2').after("<center><span class='ajax-ongir heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
						$('.form-kota2').hide();
					},
					complete: function(){
						$('.ajax-ongir').hide();
						$('.form-kota2').show();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".form-kota2",function(){
				var kota = $(this).val();
				var data = "kota="+kota;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_cost2/",
					data: data,
					success: function(html){
						$('.tempat-cost').html(html);
					},
					beforeSend: function(){
						$('.tempat-cost').before("<center><span class='ajax-cost heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
					},
					complete: function(){
						$('.ajax-cost').hide();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".pilih-kurir",function(){
						var cost = $(this).attr('id');
						var total = $('.pembayaran-total').attr('id');
						var x = parseInt(total)+parseInt(cost);
						$('.text-ongkos-kirim').html("Rp. "+cost+" ,-");
						$('.text-pembayaran').html("Rp. "+ x +" ,-");
						$('.pembayaran').val(x);
						$('.ongkir').val(cost);
					});
			// akhir pembayaran
			$('body').on("click",".btn-hide-alert",function(){
						$(this).parent().hide();
					});

					$(".modal-cart").modal("hide").on("hidden.bs.modal", function () {
						location.reload();
					});

			$('input[type="submit"]').on("click",function(){
					$(this).addClass('disabled');
				});



				function readCookie(name) {
							var nameEQ = name + "=";
							var ca = document.cookie.split(';');
							for (var i = 0; i < ca.length; i++) {
								var c = ca[i];
								while (c.charAt(0) == ' ') c = c.substring(1, c.length);
								if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
							}
							return null;
						}
	// akhir public
		});
				</script>
	<script>
            $(".input-spinner").inputSpinner()
    </script>  
	
	<script>
      function initMap() {
	  var map;
	  var lok={lat: 5.2030553, lng: 97.0612123};
        map = new google.maps.Map(document.getElementById('lokasi'), {
          center: lok,
          zoom: 14
        });

		var marker = new google.maps.Marker({
          position: lok,
          map: map,
          title: 'Lokasi Kami'
        });
	
      }
    </script>	

 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVbyFOcEs46t1t4srUIKVZIfZpSXsbiN8&callback=initMap" async defer></script>

	



  </body>
</html>