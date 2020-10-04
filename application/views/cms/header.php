<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $this->m_dah->get_option('blog_name'); ?> | <?php echo strip_tags($this->m_dah->get_option('blog_description')); ?></title>
	<!--<link rel="icon" type="image/png" href="<?php echo base_url().'dah_image/default/logo_utu.png' ?>">-->
	<!-- Global stylesheets -->
  <!-- core CSS -->

  	<link rel="stylesheet" href="<?php echo base_url() ?>assets_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_front/css/bootgrid-15col.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/core_utu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/custom_utu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/custom.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/slick-theme.css">

    <!-- font -->
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/font-aw/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/material-icon/material-icon.css">


	<!-- Core JS files -->
  <script src="<?php echo base_url()?>assets_front/js/jquery.min.js" ></script>

	<!-- Theme JS files -->


	 <!-- Histats.com  START  (aync)-->

<!-- Histats.com  END  -->
</head>

  <body>

<!-- nsearchnav -->
<div class="search-nav sticky-top ">
        <div class="container-custom">
     <div class="row">
       <div class="col-lg-2 d-none d-md-none d-lg-block">
       <a href="<?php echo base_url()?>">
         <p class="white-text tx-24 tx-bold-600"> <img src="<?php echo base_url()?>dah_image/default/logo_utu.png" style="width:48px;height:48px;">
      </a>
 
        </div>
       <div class="col-12 col-sm-6 col-md-6 col-lg-5">
       <form action="<?php echo base_url().'search'?>" method="post" class="cari-header">
            <i class="fa fa-search" style="margin-left:10px"></i>
                <input type="text"  class="input-banner" placeholder="Cari disini " name="item">
                <input
                type="submit"
                name="submit"
                class="btn-bordered-icon btn-find "
                value="Cari"
             hidden />
            </form>
       </div>
       <div class="col-sm-6 col-md-6 col-lg-5 d-none d-sm-block ">
        
        <div class="float-right">
          <ul class="search-right">
                 <?php
                      $id=$this->session->userdata('user_id');
                      $notif_inv=$this->m_dah->get_susun_invoice($id,0)->num_rows();
                      $notif_invoices=$this->m_dah->get_susun_invoice($id,0)->result();
                      foreach($this->cart->contents() as $items){
                         $tots_item += $items['qty'];
                      }
                   ?>
                <?php if($this->session->userdata('user_status') != "login"){?>
                
                  <li class="dropdown">
                    <a data-toggle="dropdown">
                      <div class="btn-icon">
                        <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                        <?php if(count($this->cart->contents())>0){ ?>
                          <span class="det-bel"><?php  echo $tots_item ?></span>
                        <?php }else{}?>
                      </div>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-custom down-lg">
                        <div class="dropdown-title">
                          Keranjang Belanja 
                          <span class="float-right"><?php echo count($this->cart->contents()); ?></span>
                          </div>
                          <?php if(count($this->cart->contents())>0){ ?>
                            <?php foreach($this->cart->contents() as $item){ ?>
                                  <div class="ket-cart-body">

                                                        <div class="ket-cb-img">
                                                        <span class="jlh-beli">&nbsp;<?php echo $item['qty'] ?></span>

                                                          <!-- start gambar produk -->
                                                          <?php 
                                                                if($item['options']['gambar']!=""){
                                                                  echo"<img src='".base_url().'dah_image/products/'.$item['options']['gambar']."' alt='product'>";
                                                                }else{
                                                                    echo "<img src='".base_url()."dah_image/default/no_product.jpg' alt='product'>";
                                                                }
                                                          ?>

                                                          <!-- akhir  dari gambar -->

                                                          <div class="ket-cb-nama">
                                                            <a href="<?php echo base_url().'produk/'.$item['id'].'-'.create_slug($item['name']) ?>" class="tx-14"><?php echo substr(strip_tags($item['name']),0,55) ?></a>
                                                            <p class="tx-14 tx-bold-600"><?php echo number_format($item['price'])?> 
                                                              <?php
                                                              $total_peritem=$item['price'] * $item['qty']; 
                                                              ?>
                                                              <span class="float-right" style="color:rgb(119, 121, 140);">Rp.<?php echo number_format($total_peritem)?></span>
                                                            </p>
                                                          </div>

                                                          <div class="ket-cart-close">
                                                            <a href="<?php echo base_url().'index/removefromnotifcart/'.$item['rowid']; ?>" class=" diki-tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Belanja"> <i class="fa fa-times"></i></a>
                                                         </div>   
                                                          
                                                        </div> 

                                            </div>
                                            				  
                                 <?php }?>
                                 <div class="ket-cart-footer">
                                              <a href="<?php echo base_url().'index/pembayaran' ?>">Bayar Langsung</a>
                                             </div>  
                          <?php }else{?>
                            <div class="center-img" style="margin-top:20px">
                              <img src="<?php echo base_url()?>/dah_image/default/box-kosong.png">
                            </div>
                          <?php } ?>
                    </div>
                  </li>
                <li class="d-sm-none d-md-none u-lg-block" >
                    <a href="<?php echo base_url().'index/user_login'?>" class="btn-bordered-sm tx-14" style="margin-right:-5px;border:none!important">Masuk</a>
                    <a href="<?php echo base_url().'index/user_daftar'?>" class="btn-bordered-sm tx-14">Daftar</a>
                </li>  
              
                
                <?php }else{?>

                <!-- ini jika dia sudah login -->

                <li class="dropdown">
                    <a data-toggle="dropdown">
                    <div class="btn-icon">
                      <i class="fa fa-shopping-bag" aria-hidden="true" ></i>
                    </div>
                      <?php if(count($this->cart->contents())>0){ ?>
                        <span class="det-bel"><?php  echo $tots_item ?></span>
                      <?php }else{}?>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-custom down-lg">
                        <div class="dropdown-title">
                          Keranjang Belanja 
                          <span class="float-right"><?php echo count($this->cart->contents()); ?></span>
                          </div>
                          <?php if(count($this->cart->contents())>0){ ?>
                            <?php foreach($this->cart->contents() as $item){ ?>
                                  <div class="ket-cart-body">

                                                        <div class="ket-cb-img">
                                                        <span class="jlh-beli">&nbsp;<?php echo $item['qty'] ?></span>

                                                          <!-- start gambar produk -->
                                                          <?php 
                                                                if($item['options']['gambar']!=""){
                                                                  echo"<img src='".base_url().'dah_image/products/'.$item['options']['gambar']."' alt='product'>";
                                                                }else{
                                                                    echo "<img src='".base_url()."dah_image/default/no_product.jpg' alt='product'>";
                                                                }
                                                          ?>

                                                          <!-- akhir  dari gambar -->

                                                          <div class="ket-cb-nama">
                                                            <a href="<?php echo base_url().'produk/'.$item['id'].'-'.create_slug($item['name']) ?>" class="tx-14"><?php echo substr(strip_tags($item['name']),0,55) ?></a>
                                                            <p class="tx-14 tx-bold-600"><?php echo number_format($item['price'])?> 
                                                              <?php
                                                              $total_peritem=$item['price'] * $item['qty']; 
                                                              ?>
                                                              <span class="float-right" style="color:rgb(119, 121, 140);">Rp.<?php echo number_format($total_peritem)?></span>
                                                            </p>
                                                          </div>

                                                          <div class="ket-cart-close">
                                                            <a href="<?php echo base_url().'index/removefromnotifcart/'.$item['rowid']; ?>" class=" diki-tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Belanja"> <i class="fa fa-times"></i></a>
                                                        </div>        
                                                        </div> 
                                                        
                                                        <div class="ket-cart-total">
                                                             <p class="float-right"> <b>Total :</b>&nbsp;&nbsp; 
                                                                 <b class="blue-text text-accent-3 tx-14"> <?php echo "Rp.". number_format($this->cart->total()) ?></b>
                                                              </p>
                                                          </div>   
                                  </div>	
                                  <div class="ket-cart-footer">
                                    <a href="<?php echo base_url().'index/pembayaran' ?>">Bayar Langsung</a>
                                </div>   			  
                                 <?php }?>
                          <?php }else{?>
                            <div class="center-img" style="margin-top:20px">
                              <img src="<?php echo base_url()?>/dah_image/default/box-kosong.png">
                            </div>
                          <?php } ?>
                    </div>
                  </li>

                  <li class="dropdown ">
                   <a data-toggle="dropdown">
                    <div class="btn-icon">
                        <i class="fa fa-bell tx-18" aria-hidden="true"></i>
                    </div>
                   </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-custom">
                      <div class="dropdown-title">
                        Notifikasi Pesanan
                      </div>
                      <?php if($notif_inv > 0){ ?>
                        <?php foreach($notif_invoices as $inc){ ?>
                            <a href="<?php echo base_url().'user/invoice_detail/'.$inc->id ?>" > 
                              <div class="notif-body">
                              <a href="<?php echo base_url().'user/invoice_detail/'.$inc->id ?>" class="blue-text text-accsent-3 tx-14 tx-bold-600"> <?php echo $inc->no?></a>
                              <p class=" tx-12">Rp <?php echo number_format($inc->pembayaran)?></p>
                               <label class="labil labil-notif tx-10">Harap dibayar</label>
                              </div>
                              </a>
                          <?php }?>
                      <?php }else{?>
                        <div class="center-img" style="margin-top:20px">
                             <img src="<?php echo base_url()?>/dah_image/default/box-kosong.png">
                        </div>
                          Oops Belum ada belanja
                      <?php } ?>  
                    </div>
                </li>

                <li class="dropdown">
                   <a data-toggle="dropdown">
                     <div class="btn-icon">
                       <i class="fa fa-user tx-18" aria-hidden="true"></i>
                      </div>
                   </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-custom">
                      <ul class="hover-li">
                          <li><a href="<?php echo base_url().'user/invoice' ?>">Pesanan</a> </li>
                          <li><a href="<?php echo base_url().'user'?>">Profil</a></li>
                          <li><a href="" data-toggle="modal" data-target="#modal-resi">Lacak Pesanan</a></li>
                          <li><a href="<?php echo base_url().'user/bantuan'; ?>">Bantuan</a></li>
                          <li><a href="<?php echo base_url().'user/user_logout'?>">Keluar</a></li>
                      </ul>
                    </div>
                </li>

                
                <?php } ?>
            
          </ul>

        </div>
      
      </div>
     </div>
    </div>
    </div>
    <!-- end searchnav -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav-custom">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
      </button>

      <div class="float-right">
        <ul class="nav-bawah-right d-md-none d-sm-none">
          <li>
                   <!-- start cart aksi -->
                   <?php if(count($this->cart->contents())>0){ ?>
                    <div class="cart-view">
                       
                        <div class="btn-icon-2">
                          <a><i class="fa fa-shopping-bag " aria-hidden="true" ></i></a>
                          <b class="b-beli"><?php echo $tots_item; ?></b>
                        </div>
                    

                        <div class="ket-cart">
                        <div class="identity-cart">
                            <i class="fa fa-caret-up white-text" aria-hidden="true"></i>
                          </div>

                          <div class="ket-cart-title">
                              Keranjang Belanja <b class="float-right tx-bold-500 tx-14"><?php echo count($this->cart->contents()); ?></b>
                          </div>
                          <?php if(count($this->cart->contents())>0){ ?>
                              <div class="ket-cart-body">
                               
                                 <?php foreach($this->cart->contents() as $item){ ?>
                                  <div class="ket-cb-img">
                                    <!-- start gambar produk -->
                                    <span class="jlh-beli-2">&nbsp;<?php echo $item['qty'] ?></span>
                                    <?php 
                                          if($item['options']['gambar']!=""){
                                            echo"<img src='".base_url().'dah_image/products/'.$item['options']['gambar']."' alt='product'>";
                                          }else{
                                              echo "<img src='".base_url()."dah_image/default/no_product.jpg' alt='product'>";
                                          }
                                     ?>
                                     <!-- akhir  dari gambar -->

                                    <div class="ket-cb-nama">
                                      <a href="<?php echo base_url().'produk/'.$item['id'].'-'.create_slug($item['name']) ?>" class="tx-12"><?php echo substr(strip_tags($item['name']),0,55) ?></a>
                                      <p class="tx-12 tx-bold-600"><?php echo number_format($item['price'])?> 
                                      <?php
                                         $total_peritem=$item['price'] * $item['qty']; 
                                        ?>
                                        <b class="float-right" style="color:rgb(119, 121, 140);">Rp.<?php echo number_format($total_peritem)?></b>
                                      </p>
                                     
                                    </div>

                                    <!-- inidia2 -->
                                        <div class="ket-cart-close">
                                          <a href="<?php echo base_url().'index/removefromnotifcart/'.$item['rowid']; ?>" class=" diki-tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Belanja"> <i class="fa fa-times"></i></a>
                                      </div>  
                                  </div> 
                                 <?php }?>
                                  
                                 <div class="ket-cart-total">
                                    <p class="float-right">Total :&nbsp;&nbsp; 
                                      <b class="blue-text text-accent-3"> <?php echo "Rp.". number_format($this->cart->total()) ?></b>
                                    </p>
                                 </div>

                         
                               
                              </div>
                              <!-- end body cart -->

                               <!-- cart-footer -->
                                <div class="ket-cart-footer">
                                    <a href="<?php echo base_url().'index/pembayaran' ?>">Bayar Langsung</a>
                                </div>            
                              <!-- end cart-footer -->
                          <?php }else{?>
                            
                          <?php }?> 
                         
                        </div>

                        
                    </div>
                    <?php }else{ ?>
                      <!-- ini dia -->
                      <div class="cart-view">
                         <div class="btn-icon-2">
                          <a><i class="fa fa-shopping-bag " aria-hidden="true" ></i></a>
                          </div>

                        <div class="ket-cart">
                          <div class="identity-cart">
                            <i class="fa fa-caret-up white-text" aria-hidden="true"></i>
                          </div>
                         
                          <div class="ket-cart-title">
                              Keranjang Belanja <b class="float-right tx-bold-500 tx-14"><?php echo count($this->cart->contents()); ?></b>
                          </div>
                        
                            
                            <div class="ket-cart-body">
                                <img src="<?php echo base_url()?>dah_image/default/box-kosong.png" width="80px" style="position:relative;left:100px;right:0">
                              <p style="color:#000;font-size:13px;text-align:center;opacity:0.6">Keranjang masih kosong</p>  
                            </div>

                          
                        </div>
                    </div>
                    <?php } ?>
                   <!-- end cart aksi    -->   
          </li>
          <?php if($this->session->userdata('user_status') != "login"){?>
            <li>
            <div class="btn-icon-2">
              <a href="" class=" tx-16" data-toggle="modal" data-target="#login-pembeli" title="Masuk ke akun"> <i class="fas fa-sign-in-alt"></i></a>
          </div>
            </li>
          <?php }else{ ?>
            <li class="has_dropdown_side">
                 <div class="btn-icon-2">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div> 
                  <div class="dropdown_ct_side">
                     
                      <div class="dropdown-ct-body">
                          <ul>
                              <li><a href="<?php echo base_url().'user/invoice' ?>">Pesanan</a> </li>
                              <li><a href="<?php echo base_url().'user'?>">Profil</a></li>
                              <li><a href="" data-toggle="modal" data-target="#modal-resi">Lacak Pesanan</a></li>
                              <li><a href="<?php echo base_url().'user/bantuan'; ?>">Bantuan</a></li>
                              <li><a href="<?php echo base_url().'user/user_logout'?>">Keluar</a></li>
                          </ul>
                      </div>
                  </div>
                </li>
          <?php }?>  

         
        </ul> 
    </div> 
  
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="navbar-nav mr-auto tx-14">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'shop'?>">Semua Produk <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'index/tentang'?>">Tentang</a>
              </li>
              

            <li class="nav-item">
                <a class="nav-link" href="">Metode Pembayaran</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#modal-lacak">Lacak Pesanan</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#modal-resi" style="cursor:pointer">Cek Resi</a>
              </li>
            </ul>
        </div>
        
      </div>
     
    </nav>
    <!-- end navbar -->
