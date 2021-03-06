<?php get_header(); ?>

<style>
	#doctors button {
    margin-top: 3px;
}
</style>
<link rel="stylesheet" href="<?php get_template_directory_uri() . '/assets/css/doctors-page.css';?>">
<div id="doctors" class="sticky text-center">
	<div class="container">
		<h2 class="text-center text-medinova">আপনি কি ধরণের ডক্টর খুঁজছেন?</h2>
		<!-- Button trigger modal -->
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop1">হৃদরোগ ও মেডিসিন বিশেষজ্ঞ </button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop2">মেডিসিন বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop3">চর্ম, অ্যালার্জি, যৌন রোগ </button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop4">কিডনী বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop5">গাইনী, প্রসূতি ও স্ত্রী রোগ বিশেষজ্ঞ ও সার্জন।</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop6">লিভার, পরিপাক তন্ত্র ও মেডিসিন রোগ বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop7">ইউরোলজী ও সার্জারি বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop8">শিশু রোগ বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop9">নিউরোলজী ও মেডিসিন বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop10">অর্থপেডিক ও ট্রামা সার্জন</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop11">মেডিসিন, ডায়াবেটিক, থাইরয়েড ও হরমোন বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop12">ফিজিক্যাল মেডিসিন অ্যান্ড রিহ্যাবিলিটেশন</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop13">মেডিসিন, বক্ষব্যাধি, এজমা বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop14">হেমাটলজী বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop15">ক্যান্সার বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop16">মনোরোগ, স্নায়ুবিক, সেক্স সমস্যা ও মাদকাসক্তি বিশেষজ্ঞ</button>
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop17">নাক, কান, গলা রোগ বিশেষজ্ঞ ও সার্জন</button>
	</div><!-- Container -->
</div><!-- #Doctors -->


<!--

 Modal 1 Start

  -->
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel1">হৃদরোগ ও মেডিসিন বিশেষজ্ঞ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/taufiq.jpg" alt="doctor">
										<h5>Prof. Dr. Md. Toufiqur Rahman Faruque</h5>
										<p class="text-mute">হৃদরোগ</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), MD (Cardiology), FCPS (Medicine), FACC (America), FACP, FASE, FRCP, FCCP, FESC, FAHA, FAPSIC,
    									Cardiology & Medicine</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/407" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/laxman.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Laxman Chandra Baroi</h5>
										<p class="text-mute">Cardiology & Medicine(হৃদরোগ)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (IPGMR), BCS (Health), MCPS (Medicine), D.Card (Cardiology)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/406" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->



<!--

 Modal 2 Start

  -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel2">মেডিসিন বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/konok.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Rashedul Hasan (Kanak)</h5>
										<p class="text-mute">Medicine(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/427" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/faqrul.jpg" alt="doctor">
										<h5>Prof. Dr. F.M Mofakkharul Islam</h5>
										<p class="text-mute">Medicine(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/423" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/icon.png" alt="doctor">
										<h5>Asso. Prof. Dr. Afroza Alam</h5>
										<p class="text-mute">Medicine(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/427" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Irfan.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. S.M Rezaul Irfan</h5>
										<p class="text-mute">Medicine(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine), CCD (Diabetology).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Kamlesh.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Kamlesh Chandra Basu</h5>
										<p class="text-mute">Medicine(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, BCS (Health), MCPS (Medicine), MD (Internal Medicine).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->


<!--

 Modal 3 Start

  -->
<div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel3">চর্ম, অ্যালার্জি, যৌন রোগ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/ali.jpg" alt="doctor">
										<h5>Prof. Dr. Chowdhury Mohammad Ali</h5>
										<p class="text-mute">Dermatologist(চর্ম )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (Dhaka), DDV (DU)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/408" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->


<!--

 Modal 4 Start

  -->
<div class="modal fade" id="staticBackdrop4" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel4">কিডনী বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/icon.png" alt="doctor">
										<h5>DR. MASUD IQBAL</h5>
										<p class="text-mute">Head of The Department (Nephrology)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p> Sir Salimullah Medical College & Mitford Hospital</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->



<!--

 Modal 5 Start

  -->
<div class="modal fade" id="staticBackdrop5" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel5" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel5">গাইনী, প্রসূতি ও স্ত্রী রোগ বিশেষজ্ঞ ও সার্জন।</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/kishwar.jpg" alt="doctor">
										<h5>Prof. Dr. Kishwar Sultana</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), FCPS, MCPS, DGO</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/416" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/tahmina.jpg" alt="doctor">
										<h5>Asso. Prof. Dr. Tahmeena</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Gaynae), MCPS, DGO Trained in IUI, IVF, ICSI (Mumbai, India). Executive Member of OGSB.</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/418" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/nimi.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Noor-E-Ferdous (Nimmi)</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), MS (Obc & Gaynae), Fellowship Training in Gaynaecological Oncology. Gynecologist & Obstetrician</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/419" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Jakia.jpg" alt="doctor">
										<h5>MAsst. Prof. Dr. Jakia Sultana</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, BCS (Health), FCPS (Gaynae & Obs)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/420" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Dr-Sharmin-Akthe.jpg" alt="doctor">
										<h5>Dr. Sharmin Akter</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, BCS(Health),MCPS, FCPS(Obs & gynae).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Dola.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Runa Akhter (Dola)</h5>
										<p class="text-mute">Gynecologist & Obstetrician(গাইনী)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, BCS, FCPS (Gaynae & Obs)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
	
<!--

 Modal 6 Start

  -->
<div class="modal fade" id="staticBackdrop6" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel6" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel6">লিভার, পরিপাক তন্ত্র ও মেডিসিন রোগ বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Jakib.jpg" alt="doctor">
										<h5>Asso. Prof. Dr. Mir Jakib Hossain</h5>
										<p class="text-mute">Medicine & Gastrology</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine), MD (Gastro)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/412" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/safiullah.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. A.B.M Safiullah</h5>
										<p class="text-mute">Medicine & Gastrology</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, MD (Gastroenterology), Advanced Training in Gastroenterology, Singapore.</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/413" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/rokon.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Rukunuzzaman Bhuiyan</h5>
										<p class="text-mute">Medicine & Gastrology(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine), MD (Gastro), Member ACP (America)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/414" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/icon.png" alt="doctor">
										<h5>DR. SUKANTO DAS</h5>
										<p class="text-mute">Medicine & Gastrology(মেডিসিন )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), BCS (Health), FCPS (Medicine), MCPS (Medicine), MD (Gastroenterology) BSMMU (PG HOSPITAL)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
	<!--

 Modal 7 Start

  -->
<div class="modal fade" id="staticBackdrop7" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel7" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel7">ইউরোলজী ও সার্জারি বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Mahmud.jpg" alt="doctor">
										<h5>sst. Prof. Dr. Mohammad Mahmud Alam</h5>
										<p class="text-mute">Urology(মূত্র)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MMBS, BCS (Health), MS (Urology),</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/439" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
	<!--

 Modal 8 Start

  -->
<div class="modal fade" id="staticBackdrop8" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel8" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel8">শিশু রোগ বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Shamsur.jpg" alt="doctor">
										<h5>Dr. A.W Shamsur Rob</h5>
										<p class="text-mute">Pediatric(শিশু )
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), DCH (KSA), MAMS (Vienna), FRSH (London), Fellowship in Neonatology (Delhi).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
		<!--

 Modal 9 Start

  -->
<div class="modal fade" id="staticBackdrop9" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel9" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel9">নিউরোলজী ও মেডিসিন বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Aminur.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Aminur Rahman</h5>
										<p class="text-mute">Neurologist (ব্রেন ও স্ন্যায়ু )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine), MD (neurology), FINR (Switzerland), Fellow, Interventional Neurology (Thailand), Neurologist</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/432" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/suva.png" alt="doctor">
										<h5>Asso. Prof. Dr. Subash Kanti Dey</h5>
										<p class="text-mute">Neurologist (ব্রেন ও স্ন্যায়ু )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, MD (Neurology), Fellow, Interventional Neurology & Stroke (India)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/432" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Rafiqul.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Md. Rafiqul Islam</h5>
										<p class="text-mute">Neurologist (ব্রেন ও স্ন্যায়ু )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, MD (Neuromedicine), Phd-Medicine (Japan), Mphil (Nutrition) (DU).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/434" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
<!--

 Modal 10 Start

  -->
<div class="modal fade" id="staticBackdrop10" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel10" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel10">অর্থপেডিক ও ট্রামা সার্জন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/icon.png" alt="doctor">
										<h5>Dr. Nirmal Kanti Biswash</h5>
										<p class="text-mute">Orthopedics(হাড় )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, BCS (Health), MS (Orthopedic Surgery).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/438" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Indrojit.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Indrojit Kumar Kundu</h5>
										<p class="text-mute">Orthopedics(হাড় )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, MS (Orthopedics).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/437" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Nazmul.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Md. Nazmul Huda</h5>
										<p class="text-mute">Orthopedics(হাড় )</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), BCS (Health), FCPS (Surgery), MS (Orthopedics). Trained in Orthopedics (Japan).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/436" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
<!--

 Modal 11  Start

  -->
<div class="modal fade" id="staticBackdrop11" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel11" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel11">মেডিসিন, ডায়াবেটিক, থাইরয়েড ও হরমোন বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Dalia.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Dalia Sultana
</h5>
										<p class="text-mute">Medicine,Diabetology & Endocrinologist</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DU), MD (Endocrinology) (Birdem), CCD (Diabetology) (Birdem).</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/428" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Jewel.jpg" alt="doctor">
										<h5>Dr. A.B.M Khurshed Alam Bhuiyan (Jewel)</h5>
										<p class="text-mute">Medicine,Diabetology & Endocrinologist</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, FCPS (Medicine), MD (Gastro)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/429" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/rushda.jpg" alt="doctor">
										<h5>Dr. Rushda Sharmin</h5>
										<p class="text-mute">Medicine,Diabetology & Endocrinologist</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS (DMC), FCPS (Medicine) Gold Medalist, MD (Endocrinology), CCD (Diabetology) Birdem./p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/430" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
<!--

 Modal 12 Start

  -->
<div class="modal fade" id="staticBackdrop12" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel12" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel12">ফিজিক্যাল মেডিসিন অ্যান্ড রিহ্যাবিলিটেশন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Dr.-Md.-Nadim-Kamal.jpg" alt="doctor">
										<h5>DR. MD. NADIM KAMAL</h5>
										<p class="text-mute">FCPS (Physical Medicine)</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>Physical medicine and rehabilitation Bangabandhu Sheikh Mujib Medical University</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
<!--

 Modal 13 Start

  -->
<div class="modal fade" id="staticBackdrop13" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel13" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel13">মেডিসিন, বক্ষব্যাধি, এজমা বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/mostafa.jpg" alt="doctor">
										<h5>PROF. DR. A. K. M. MOSTAFA HOSSAIN</h5>
										<p class="text-mute">Medicine, Chest & Asthma Specialist</p>
									</div><!-- Card Header -->
									<div class="card-body">
										<p>MBBS, DTCD, MD (Chest), FRCP (Edin), FCCP (America), FWHO (Bangkok)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->
<!--

 Modal 14 Start

  -->
<div class="modal fade" id="staticBackdrop14" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel14" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel14">হেমাটলজী বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/Dr.-Md.-Nadim-Kamal.jpg" alt="doctor">
										<h5>Asst. Prof. Dr. Jannatul Ferdous</h5>
										<p class="text-mute">FCPS (Haematology)</p>
									</div>
									<div class="card-body">
										<p>MBBS, MTM. Mugda medical collage hospital.</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->

<!--

 Modal 15 Start

  -->
<div class="modal fade" id="staticBackdrop15" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel15" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel15">ক্যান্সার বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/SWAPAN.jpg" alt="doctor">
										<h5>PROF. DR. SWAPAN BANDYOPADHYAA</h5>
										<p class="text-mute">Oncology Department</p>
									</div>
									<div class="card-body">
										<p>M.D, M.PHIL</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="#" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->

<!--

 Modal 16 Start

  -->
<div class="modal fade" id="staticBackdrop16" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel16" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel16">মনোরোগ, স্নায়ুবিক, সেক্স সমস্যা ও মাদকাসক্তি বিশেষজ্ঞ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/mehjabin.jpg" alt="doctor">
										<h5>Prof. Dr. Nahid Mahjabin Morshed</h5>
										<p class="text-mute">Psychiatrist (মানসিক )</p>
									</div>
									<div class="card-body">
										<p>MBBS, MSC (DU), MPhil (Psychiatric), Fellow (WPA, Australia),</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/440" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      </div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->


<!--

 Modal 17 Start

  -->
<div class="modal fade" id="staticBackdrop17" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel17" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel17">নাক, কান, গলা রোগ বিশেষজ্ঞ ও সার্জন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Contenn start -->
			<div class="class text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/liton.jpg" alt="doctor">
										<h5>r. Md. Asaduzzaman Liton</h5>
										<p class="text-mute">নাক, কান, গলা রোগ বিশেষজ্ঞ ও সার্জন</p>
									</div>
									<div class="card-body">
										<p>MBBS (DMC), FCPS (ENT), BCS (Health) ENT</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/410" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
							<div class="col-md-6 col-sm-12"> <!-- START -->
								<div class="card">
									<div class="card-header">
										<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/doctor/doulot.jpg" alt="doctor">
										<h5>PROF. DR. MD. DOULOTUZZAMAN</h5>
										<p class="text-mute">MBBS</p>
									</div>
									<div class="card-body">
										<p>MBBS, MCPS, DLO (DU), PHD (USA)</p>
									</div><!-- Card Body -->
									<div class="card-footer">
										<a href="http://medinova.ohcare.net/provider/possible/appointment/410" class="btn btn-primary">Appointment</a>
									</div>
								</div><!-- Card -->
							</div><!-- col-md-6 col-sm-12 end --><!-- END -->
						</div> <!-- row -->
					</div><!-- Container -->
				</div><!-- Doctor -->
<!-- content end -->
      	</div><!-- Modal Body End -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="changable">Go To Home</a>
      </div>
    </div> <!-- Modal content -->
  </div><!--modal-dialog -->
</div>	<!-- 						End Modal  						-->


<!-- script code -->
	<script src="<?php get_template_directory_uri()?> /assets/js/doctor-jquery.min.js" type="text/javascript"></script>
<!-- Script code end -->
<?php get_footer(); ?>