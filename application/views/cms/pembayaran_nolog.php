<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-line">
            <ul>
                <li><a href="<?php echo base_url()?>">Home</a> </li>
                <li><a href="">Pembayaran</a> </li>
            </ul>
        </div>
    </div>

</section>


<section class="checkout-product">
    <div class="container">
    <form action="<?php echo base_url().'index/order_nolog' ?>" method="post">
                    <div class="row">

                        <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                            <div class="laman-bayar">

                                <div class="laman-bayar-title">
                                <h2>Konfirmasi Pembayaran</h2>
                                </div>  

                                <div class="laman-bayar-body">    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                             <div class="input-group-dfv2">
					                            <input class="input-dfv2" type="text" name="nama"  placeholder="Nama lengkap" required="required">
                                                <i class="fa fa-id-card" aria-hidden="true"></i>

                                                <input type="hidden" name="ongkir" class="ongkir" required="required">
                                                <?php echo "<span class='text-warning'>".form_error('nama')."</span>"; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="input-group-dfv2">
                                                <input type="text" name="telp" class="input-dfv2" placeholder="No. Telp/Hp .." required="required">
                                                  <i class="fa fa-phone" aria-hidden="true"></i>
                                                <?php echo "<span class='text-warning'>".form_error('telp')."</span>"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-dfv2">
                                            
                                            <input type="text" name="email" class="input-dfv2" placeholder="Email valid anda" required="required">
                                            <i class="fas fa-mail-bulk"></i>
                                            <input type="hidden" name="pembayaran" class="pembayaran">
                                            <?php echo "<span class='text-warning'>".form_error('email')."</span>"; ?>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-dfv2">
                                            
                                            <input type="text" name="alamat" class="input-dfv2" placeholder="Alamat lengkap .." required="required">
                                            <i class="fa fa-address-book" aria-hidden="true"></i>
                                            <input type="hidden" name="pembayaran" class="pembayaran">
                                            <?php echo "<span class='text-warning'>".form_error('alamat')."</span>"; ?>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="select-formg">
                                                
                                                <?php
                                                $province_ori = json_decode(GetProv(), TRUE);
                                                echo "<select name='prov_origin' required class='select-fgp form-provinsi2' id='prov_origin'>";
                                                echo "<option value=''>Pilih Provinsi ..</option>";
                                                for ($i=1; $i < count($province_ori['rajaongkir']['results']); $i++) {
                                                    echo "<option value='".$province_ori['rajaongkir']['results'][$i]['province_id']."' class='jne tiki pos all' >".$province_ori['rajaongkir']['results'][$i]['province']."</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                                <?php echo "<span class='text-warning'>".form_error('prov_origin')."</span>"; ?>
                                                <i class="fas fa-city "></i> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                             <div class="select-formg">
                                                <?php
                                                echo "<select name='city_origin' required class='select-fgp form-kota2' id='prov_origin'>";
                                                echo "<option value=''>Pilih provinsi terlebih dulu</option>";
                                                echo "</select>";
                                                ?>
                                                <?php echo "<span class='text-warning'>".form_error('city_origin')."</span>"; ?>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="input-group-dfv2">
                                                <input type="text" name="kecamatan" class="input-dfv2" placeholder="Kecamatan .." required="required">
                                                   <i class="fas fa-home    "></i>
                                                <?php echo "<span class='text-warning'>".form_error('kecamatan')."</span>"; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="input-group-dfv2">
                                                <input type="text" name="kodepos" class="input-dfv2" placeholder="Kode pos .." required="required">
                                                <i class="fa fa-inbox"></i>
                                                <?php echo "<span class='text-warning'>".form_error('kodepos')."</span>"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-dfv2"> 
                                               <input type="text" name="catatan"class="input-dfv2" placeholder="Catatan tambahan">
                                                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <?php echo "<span class='text-warning'>".form_error('kurir')."</span>"; ?>
                                                <div class="tempat-cost"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                   <input type="text" name="rek_bank" value="bm1" hidden>

                                </div>
                            </div>  
                        </div>

                         <!-- sidebar detail -->
                         <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <br>
                              <!-- detail ringkasan-->
                             <div class="laman-bayar">

                                <div class="laman-bayar-title">
                                <h2>Pesanan Anda</h2>
                                </div>  

                                <div class="laman-bayar-body b-detail">
                                <?php if(count($this->cart->contents())>0){ ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <td><b>Produk</b></td>
                                            <td></td>
                                            <td><b>Total</b></td>
                                            <?php foreach($this->cart->contents() as $item){ ?>
                                            <tr>
                                                <td class="no-padding-left no-padding-right tx-13"><?php echo $item['name'] ?></td>
                                                <td class="text-center tx-13"><?php echo $item['qty'] ?></td>
                                                <td class="no-padding-left no-padding-right text-right tx-13"><?php echo "Rp.". number_format($item['price']) ?></td>
                                            </tr>
                                            <?php } ?>
                                            <tr class="tx-bold-600">
                                                <td colspan="2" class="text-right tx-13">SubTotal</td>
                                                <td class="pembayaran-total no-padding-left no-padding-right text-right text-bold tx-13" id="<?php echo $this->cart->total(); ?>"><?php echo "Rp.". number_format($this->cart->total()) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right tx-13">Ongkos Kirim</td>
                                                <td class="no-padding-left no-padding-right text-right text-bold tx-13">
                                                    <span class="text-ongkos-kirim tx-13">Isi Alamat</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-left tx-13"><b>Total</b> (Harga + Ongkir)</td>
                                                <td class="no-padding-left no-padding-right text-right text-bold tx-13">
                                                    <span class="text-pembayaran tx-13"></span>
                                                </td>
                                            </tr>
                                        </table>
                                        <div style="padding:0 10px"> 
                                            <span class="tx-bold-600">Pembayaran Transfer Bank</span><br>
                                              <span class="bank-det">Bank Mandiri 982736 </span><br>
                                              <span class="bank-det">9876354</span><br>
                                            <span class="bank-det">AN. Laut</span>
                                        </div>
                                      
                                    </div>
                                    <?php }else{ ?>
                                    
                                        <img src="<?php echo base_url()?>dah_image/system/boxkosong.png" width="80px" style="position:relative;left:100px;right:0">

                                        <p class="text-center" style="opacity:0.7">Keranjang masih kosong. Ayo <a href="<?php echo base_url().'index/shop'; ?>">belanja</a>.</p>
                                         <?php } ?>
                                            </div>
                                            
                                        <br>
                                            <div class="form-group">
                                                <input type="submit" class="btn-bordered-md-fullwidth bor-primary-md" value="Buat Pesanan">
                                            </div>
                                  
                                        </div>  
                                    <!-- end detail ringkasan-->
                                        
                                </div>
                         <!-- end sidebar detail -->
                         </div>
                     </form>
   
    </div>
</section>  