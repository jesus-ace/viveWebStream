<header id="header" class="header">
		<div class="header-inner">
			<div class="container-fluid px-lg-5">
				<nav class="navbar navbar-expand-lg my-navbar font-text-bold">
  					<div class="container-fluid">
  						<!--a class="navbar-brand" href="#"><img src="image/cisco_netacad_logo.png" alt="" swidth="100" height="40"></a-->
						<a class="navbar-brand" href="#"><img src="\image\LOGO_Vive_76x40px.png" alt="" width="76" height="40"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  						<span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin: 5px 0px 0px 0px; "></i></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  						<ul class="navbar-nav">
								<li class="nav-item">
		  							<a class="nav-link active" aria-current="page" href="#">Inicio</a>
								</li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Programas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Novedades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">123 TV</a>
                                </li>
	  						</ul>
						</div>
  					</div>
				</nav>
			</div>
		</div>
</header>
<script>
$(function(){
	var navbar = $('.header-inner');
	$(window).scroll(function(){
		if($(window).scrollTop()<=40){
			navbar.removeClass('navbar-scroll');
		}else{
			navbar.addClass('navbar-scroll');
		}
	});
});
</script>