<?php
echo initialize_tinymce();
?>
<?php

/* Global Variables */

$candidate['page-title'] = 'Kalender Event'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kalender Event'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/Headeradmin.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
<?php foreach ($query as $row) {} ?>
		<h1>Kalender Event</h1>
		<p class="breadcrumb">admin/Kalender Event/</p>

	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<!-- <a href="DisplayFormTambah" class="button button-arrow">Tambah Konten</a> -->
		<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8">
		<h4>
		<div class="sidebar-box white animate-onscroll">
		<div class="newsletter-form">
			<form action="<?php echo base_url(); ?>Kalender_Event/submitKalenderEvent/" method="post">
			<div class="newsletter-zip">
			<input type="text" name="judul"  placeholder="Judul Event" required/>
			</div>
			<div class="newsletter-zip">
			<input type="text" name="tanggal_event"  placeholder="Tanggal Event" required/>
			</div>
			<div class="newsletter-zip">
			<input type="text" name="jam_event"  placeholder="Jam Event" required/>
			</div>
			<div class="newsletter-zip">
			<input type="text" name="nama_lokasi"  placeholder="Lokasi" required/>
			</div>
			<div class="newsletter-zip">
			<input type="text" name="location"  placeholder="Link Lokasi" required/>
			</div>

			<div class="newsletter-zip"><br/>
			<textarea name="content"></textarea>
			</div>
			
			<div class="newsletter-zip">
			</br>
			<!-- <i class="icons icon-camera"></i><input type="file" name="userfile" required/> -->
			</div>
			
			<div class="newsletter-submit">
			<input type="submit"  name="submit" value="SAVE" class="input"/>
			</div>
			</form>

         </div>
         </div>  
         </h4>
         </div>
						</div>			

		</div>
	</section>
				<!-- /Section -->

			</section>



			<?php

			/* <footer> </footer> */
			include ('assets/includes/footer.php');

			/* JavaScript */
			include ('assets/includes/foot.php');

			?>