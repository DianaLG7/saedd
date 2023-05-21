<?php
    session_start();

    if(isset($_SESSION['username']))
    {
        $usuario = $_SESSION['username'];
    }
    else
    {
        header('location: login.php');
    }

?>

<!doctype html>
<html lang="es">
    <head>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1905268-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-1905268-1');
        </script>

        <title>Perfil_SAEDD</title>
         <!--
         <base href="https://www.sepi.esimez.ipn.mx/telecomdoctorado/"/>
         -->
         
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Metas para SEO -->
        <meta name="description" content="Inicio - Secci&oacute;n de Estudios de Posgrado e Investigaci&oacute;n de la ESIME Zacatenco">
        <meta name="keywords" content="IPN,Instituto,Politécnico,becas,estdiantes,docencia,investigador,deportes,cultura,ingeniería,oferta,maestrias,posgrados,egresados,educación,a,distancia
">
        <!-- Meta para verificación del buscador gratuito -->
        <meta name="google-site-verification" content="MFswsr8mYDk6bAjZsP4dVshJFWYQGYMY5Pit-XGGYDU" />
            
        <!--<link rel="shortcut icon" href="img/template/3.ico"/>-->

        <!-- CSS Bootstrap científica -->
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"    rel="stylesheet">
		<!-- CSS Bootstrap institucional -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
            
        <!--CSS slider SEPI -->
	<link rel="stylesheet" href="css/slider.css">
		
		<!--CSS SEPI-->
	<link rel="stylesheet" href="css/sepicss.css">
            
            
        <!-- CSS del carrusel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Estilos de a galeria -->
        <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
        
        <!-- CSS ligthbox -->
        <link rel="stylesheet" href="css/featherlight.min.css">
            
        <!-- Iconos con Font Awesome -->
        <link href="css/fa-svg-with-js.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet"> <!-- Se agrega para poder usar las fuentes en el css -->
        
        <!-- Fuente plantilla base -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        
        <!--  Estilos personalizados -->
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/ipn.css">
        <!--  Estilos personalizados 666 -->
        <link rel="stylesheet" href="css/personalizados.css">
        <link rel="stylesheet" href="css/jssorStyle.css">  
        <!-- Open Sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
        
        <!-- enlaces de página anterior -->
        <link href="css/jumbotron.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
        
    </head>

    <body data-spy="scroll" data-target="#menu-manual" data-offset="120">
        <header class="d-none d-md-block">
            <nav class="navbar fixed-top" role="navigation" id="barraGobmx">
                <div class="container u-noPaddingContainer">                    
                    <a class="navbar-brand" style="padding-left: 8px;" href="https://www.gob.mx/">
                        <img src="img/template/gobmxlogo.svg"height="29px" alt="Página de inicio, Gobierno de México">
                    </a>
                    <div class="text-rigth barraGobmx-enlaces">
                        <a href="https://www.gob.mx/tramites" title="Trámites" class="nav-link">
                            Trámites
                        </a>
                        <a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link">
                            Gobierno
                        </a>
                        <a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link">
                            Participa
                        </a>
                        <a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link">
                            Datos
                        </a>
                        <a href="https://www.gob.mx/busqueda">
                        <span class="sr-only" class="nav-link">Búsqueda</span><i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        
        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        
        <!-- Encabezado principal -->
        <div class="u-noPaddingContainer contenedorGobierno">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="d-inline-block ipnLogo-enlace">
                            <img src="img/template/pleca-gob.png" alt="" class="plecaGob gob">
                            <a href="https://www.ipn.mx" class="">
                                <img src="img/template/pleca-ipn.png" alt="" class="plecaGob">
                                <p class="d-inline-block tituloLogo">
                                    Instituto Politécnico Nacional <br>
                                    "La Técnica al Servicio de la Patria"
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="utileriasIpn">                
                    <ul class="barra-enlaces">
                        <li>
                            <a href="https://www.ipn.mx/directorio.html">DIRECTORIO</a> |
                        </li>
                        <li>
                            <a href="https://www.ipn.mx/correo-electronico.html">CORREO ELECTRÓNICO</a> |
                        </li>
                        <li>
                            <a href="https://www.ipn.mx/calendario-academico.html">CALENDARIO</a> |
                        </li>
                        <li>
                            <a href="https://www.ipn.mx/buzon.html">BUZÓN</a>
                        </li>
                    </ul>
                </div>
                <!-- Opciones de accesibilidad -->
                <div class="contenedorAccesibilidad">
                    <div class="idiomas text-right">
                        <a href="https://www.ipn.mx/english/">                            
                            <img src="img/template/EN-icon-on.png" alt="Idioma Inglés">
                        </a>
                        <!--
                            <a href="https://www.ipn.mx/frances/">
                            <img src="img/template/FR-icon-on.png" alt="Idioma Francés">
                        </a> 
                        -->
                        <a href="https://www.ipn.mx/" class="mr-3">
                            <img src="img/template/MX-icon.png" alt="Idioma Español">
                        </a>

                        <i class="fab fa-accessible-icon"></i>
                        <a class="btn--accesibilidad contraste">
                            <i class="fas fa-adjust"></i>
                        </a>
                        <a class="btn--accesibilidad aumentaLetra">A+</a>
                        <a class="btn--accesibilidad reduceLetra">A-</a>
                        <a class="btn--accesibilidad resetLetra">A </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Inicio de contenido -->        
        <!-- Menú principal -->
<nav class="navbar navbar-expand-xl navbar-dark d-block d-xl-flex justify-content-center" id="menu-principal">
    <div class="u-noPaddingContainer">
        
        <!-- Banderin -->
        <p class="nav-link banderin u-oculto">
            <img src="" alt="" class="banderin-img">
        </p>
 

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menú principal
        </button>

        <div class="collapse navbar-collapse d-xl-flex justify-content-md-around" id="navbarSupportedContent">
			<ul class="navbar-nav">
<li class="nav-item"> <a class="nav-link" href="profile.php" title="Perfil" >
      Perfil
    </a>
</li>
<li class="nav-item"> <a class="nav-link" href="revision.html" title="Revisión" >
    Revisión
  </a>
</li>
<li class="nav-item"> <a class="nav-link" href="firmsello.html" title="Firma&Sello" >
    Firma y Sello
  </a>
</li>
<li class="nav-item"> <a class="nav-link" href="session_destroy.php" title="Cerrar sesión" ">
    Cerrar sesión
  </a>
</li>
    </div>
	<!--Final del menú-->
    <!-- Opciones de accesibilidad flotantes -->
    <div id="contenedorAccesibilidad-scroll" class="contenedorAccesibilidad u-oculto">
        <i class="fab fa-accessible-icon"></i>
        <a class="btn--accesibilidad contraste">
            <i class="fas fa-adjust"></i>
        </a>
        <a class="btn--accesibilidad aumentaLetra">A+</a>
        <a class="btn--accesibilidad reduceLetra">A-</a>
        <a class="btn--accesibilidad resetLetra">A </a>
    </div>
</nav>
                
                
<!-- Migajas -->
<!--<div class="container u-noPaddingContainer">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <div id="breadcrumbnav">
        <a href="https://www.ipn.mx/">
            <i class="fas fa-home"></i>
        </a><span class="breadcrumbs-separador"> / 
		</span><a href="https://www.esimez.ipn.mx/" target="_blank">ESIME Zacatenco</a>/
		<a href="https://www.sepi.esimez.ipn.mx/" target="_blank">SEPI</a>/
		<a href="https://www.sepi.esimez.ipn.mx/" _self></a>
		<a href="http://www.sepi.esimez.ipn.mx/telecomdoctorado/">Doctorado en Ciencias en Ingeniería de Telecomunicaciones</a>
</div>
        </ol>
    </nav>
</div>-->
<!--Nombre Escuela-->
<div class="nombreEscuela-contenedor nombreEscuela-contenedor--negro">
    <p class="nombreUr-titulo">Sistema de Asistencia para el Estímulo al Desempeño Docente​ (SAEDD)​</p>
    <!-- <div class="container u-noPaddingContainer text-center">
        
    </div> -->
</div>
<!--Inicia contenido SITIO-->
<main class="contenedor sombra">
    <section>
    <!-- Datos Académicos-->
    <section>
        <form class="formulariop">
        <fieldset>
            <legend>PERFIL</legend>
                <div class="contenedor-camposp">

                    <div class="campop">
                        <div align="center"><label>Nombre del becario:</label></div>
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="text" placeholder="&#128221;" readonly>
                        </div>
                    </div>

                    <div class="campop">
                        <div align="center"><label>ID:</label></div>
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="number" placeholder="&#128187;" readonly>
                        </div>
                    </div>

                    <div class="campop">
                        <div align="center"><label>Unidad Académica:</label></div>
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="text" placeholder="&#127979;" readonly>
                        </div>
                    </div>
                    
                    <div class="campop">
                        <div align="center"><label>Estímulo:</label></div>
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="text" placeholder="&#127894;" readonly>
                        </div>
                    </div>

                </div> <!-- Este es el contenedor de TODOS los campos-->

        </fieldset>
        </form>
    </section>
    <br><br>
    <section>
        <form class="formulariop">
        <fieldset>
                <legend>CONTACTO</legend>
                <div class="contenedor-camposp">

                    <div class="campop">
                        <div align="center"><label>Correo Electrónico:</label></div>
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="email" placeholder="&#128231;" readonly>
                        </div>
                    </div>

                    <!-- 
                    <div class="campop">
                        <label>Correo electrónico alterno</label>
                        <input class="input-text" type="email" placeholder="Correo electrónico alterno">
                    </div>
                    -->

                    <div class="campop">
                        <div align="center"><label>Celular:</label></div>                       
                    </div>

                    <div class="campop">
                        <div align="center">
                            <input class="input-text" type="number" placeholder="&#128241;" readonly>
                        </div>
                    </div>
                
                </div> <!-- Este es el contenedor de TODOS los campos-->
        </fieldset>
        </form>
    </section>
    <br><br><br>

    
</main>

<!-- Fin de contenido SITIO -->
        <!-- Pie de página -->
        <footer class="piePagina">
            
            <!-- Aviso IPN -->
            <div class="bg--guinda">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 piePagina-logoSep text-center mb-3">
                            <img src="img/template/firma-sep-vertical.jpg" alt="" class="img-fluid mb-3">
                            <div class="w-100"></div>
                            <a href="https://www.gob.mx/sep">www.gob.mx/SEP</a>
                        </div>
                        <div class="col-lg-10 pl-5 piePagina-texto">
                            <h3 class="text-center piePagina-titulo">INSTITUTO POLITÉCNICO NACIONAL</h3>
                            <p>
                                D.R. Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Alcaldía Gustavo A. Madero, C.P. 07738, Ciudad de México 2009-2013.
                            </p>
                            <br>
                            <p>
                                Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boton para regresar al inicio de la pagina -->
            <span id="top-contenedor">
                <a href="#" class="top-link" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </span>
        
        </footer>
        
        <!-- JS Resources -->
        <script src="js/jquery-3.3.1.min.js"></script>
                 <!--Script de mapas-->
        <script type="text/javascript" src="/js19/scriptreload.js" ></script>
	    <script type="text/javascript" src="/js19/buscadormaps.js" ></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
        <script src="js/fontawesome-all.min.js"></script>
        <!--<script src="/assets/files/main/js/loader.js"></script>-->
        <script src="js/index.onload.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/featherlight.min.js"></script>
        <!-- JS para la funcione de los mapas (Se ponen en la cabecera porque al final no funciona el buscador) -->
        
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
	<script>
		  // ID of the Google Spreadsheet
 var spreadsheetID = "1sKPL-Pp0dqryKPTUWJfX7T1Nr2wQKdqqDKZ4H1lX2Xs";

 // Make sure it is public or set to Anyone with link can view
 var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

 $.getJSON(url, function(data) {

  var entry = data.feed.entry;

  $(entry).each(function(){
	// Column names are name, age, etc.
	$('.results').prepend('<h3>'+this.gsx$titulo.$t+'</h3><p>'+this.gsx$contenido.$t+'</p>');
  });

 });

</script>
</body>
</html>
