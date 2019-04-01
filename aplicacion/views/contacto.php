<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
	
	<!-- Title Page -->
	<!-- <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?=base_url()?>assets/images/heading-pages-06.jpg);"> -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background: #12007c;">
        <?php
        if( $this->router->fetch_class() == 'inicio' && $this->router->fetch_method() == 'contacto' ){
        ?>
        <h2 class="l-text2 t-center">
			Contactanos
		</h2>
        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-12" >
	        <i class="fs-22 fa fa-whatsapp text-white " > <span class="m-text26 text-white" > 044 55 1319 1273 </span> </i> <br>
    	    <i class="fs-22 fa fa-whatsapp text-white " > <span class="m-text26 text-white" > 044 55 4824 2131 </span> </i> <br>
        	<i class="fs-22 fa fa-whatsapp text-white " > <span class="m-text26 text-white" > 044 55 6419 3885 </span> </i> <br>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-12 col-xl-12" >
        	<i class="fs-22 fa fa-envelope text-white " > <span class="m-text1 text-white" > evelyn_charli@yahoo.com.mx </span> </i> <br>
        </div>            
        <?php
        }
        ?>



	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="<?=base_url()?>assets/images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Envianos un mensaje
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Nombre completo">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Número de teléfono">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Dirección de correo">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Mensaje"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Enviar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



    







