<!DOCTYPE html>
	<html lang="es">
		<head>

			<title> Registro</title>
			<link href="../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
			<link rel="stylesheet" type="text/css" href="../css/Stilo.css">
		
			<script type="../main.js"></script>

	<script  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
			
			<meta charset="utf-8">

			<script type="text/javascript">
				$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
			</script>
		</head>
			<body>	
				<header id="main-header">
	
					<a id="logo-header" href="../inicio.php">
						<span class="site-name">JORNADA ACADÉMICA</span>
						<span class="site-desc">Y DE INVESTIGACIÓN</span>
					</a> <!-- / #logo-header -->
					<a id="iso"><img src="../img/iso-9001.jpg" height="80px"></a>
					
					<a id="logo-headerr" >
						<span class="site-namer">SiP</span>
						<span class="site-descr">Subdireccion de Posgrado e Investigacion</span>
					</a>

					<nav>
						<ul>
							<li><a href="../inicio.php">Inicio</a></li>
							<li><a href="archivos.php">Descargables</a></li>
							<li><a href="#">Registro</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
					</nav><!-- / nav -->

				</header><!-- / #main-header -->
				<br><br><br><br>

				<img src="../img/actualizado1.png" id="ac">


<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Regístrate</a></li>
        <li class="tab"><a href="#login">Iniciar Sesión</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Registro</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Enviar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bienvenido</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Iniciar</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->



<br>
<br>
<br>
		<footer id="footer">
			<p>Investigación || <a href="http://www.itsz.edu.mx/">Instituto Tecnológico Superior de Zacapoaxtla</a> || Departamento de posgrado e investigación</p>

			<p>Carretera Acuaco-Zacapoaxtla Km. 8, Col. Totoltepec, 73680 Zacapoaxtla, Puebla <br> 
                                              Teléfono y Fax: 01 233 317 5000 </p>
		</footer>

	</body>

	</html>