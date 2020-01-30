<!---HEADER WEB-->
<?php	
	function header_web(){
?>
		<div class="header-two">
			<div class="container-fluid">
				<nav class="navbar navbar-default" role="navigation">
				<button type="button" class="navbar-toggle x collapsed" data-toggle="collapse"
						 data-target="#menu" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
			
				<div class="container">
					<div  class="header-logo">
						<a href="index.php"><img class="img-responsive" src="assets/images/logo.png" width=230></a>
					</div>		
					<div class="collapse navbar-collapse" id="menu" style="padding-top: 20px">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">Homeeeee</a></li>
							<li><a href="pengumuman.php">Pengumuman Anggota BEM</a></li>
							<li><a href="index.php?aksi=struktur">Struktur</a></li>
							<li><a href="index.php?aksi=proker">Program Kerja</a></li> 
							<li><a href="index.php?aksi=kontak">Kontak</a></li> 
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div>
				</div>	
			</div>	
		</div>

<?php }?>
	
<!---BANNER WEB-->		
<?php
	function banner_web(){
?>	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox" >  
                <div class="item active"><!-- First-Slide -->
                    <img src="assets/images/bem1.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">ORGANISASI MAHASISWA<span> </span>(ORMAWA)</h3>
                        <h4 data-animation="animated flipInX">STMIK IKMI CIREBON</h4>
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="assets/images/bem2.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Kegiatan Rutin Donor Darah</h3>
                        <h4 data-animation="animated fadeInUp">BEM STMIK IKMI Cirebon</h4>
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="assets/images/bem3.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">Kegiatan Debat Calon Presma & Wapresma</h3>
                        <h4 data-animation="animated flipInX">BEM STMIK IKMI Cirebon</h4>
                    </div>
                </div> 
                 <div class="item"><!-- 4-Slide -->
                    <img src="assets/images/jadi.jpg" alt="" class="img-responsive"/>
                     <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInLeft">Kegiatan Pemilihan Umum Presma & Wapresma</h3>
                        <h4 data-animation="animated flipInX">BEM STMIK IKMI Cirebon</h4>
                    </div>
                </div> 
                <div class="item"><!-- 4-Slide -->
                    <img src="assets/images/porma.jpg" alt="" class="img-responsive"/>
                     <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInLeft">Kegiatan Pemilihan Umum Presma & Wapresma</h3>
                        <h4 data-animation="animated flipInX">BEM STMIK IKMI Cirebon</h4>
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="assets/js/custom.js"></script>
	</div>

<?php }?>

<!---FOOTER WEB-->
<?php
	function footer_web(){
		?>
			<div class="col-md-12 subscribe" align="center">
			<p align="center"> TIM INOVASI & IT BEM STMIK IKMI @2019</p>	
			</div>
<?php } ?>

<!---KONEKSI WEB-->
<?
	function koneksi_db(){ 
		$host = "sql210.epizy.com"; 
		$database = "epiz_24206078_bemikmi"; 
		$user = "epiz_24206078"; 
		$password = "Siandong52262"; 
		
		$link = mysqli_connect($host,$user,$password);

		mysqli_select_db($link,$database);
		 
		if(!$link) 
			echo "Error:".mysqli_error(); 
		return $link; 
	} 


?>
<!---AKSI WEB-->


<!-- function aksi(){
//         if(isset($_GET['aksi'])){
//           if($_GET['aksi']=="login"){
//             include 'login.php';
//           }elseif($_GET['aksi']=="berita"){
//             include 'index.php';
//           }elseif($_GET['aksi']=="struktur"){
//             include 'index.php';
//           }elseif($_GET['aksi']=="proker"){
//             include 'index.php';
//           }elseif($_GET['aksi']=="kontak"){
//             include 'index.php';
//           }
//         else{
//           include 'index.php';
//         }
//     }
// } -->