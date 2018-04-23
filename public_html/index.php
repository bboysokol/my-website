<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Przemysław Sokołowski - web designer, freelancer, web developer, strony internetowe, poligrafia, fotografia</title>
	<meta name="description" content="Potrzebujesz strony internetowej, logotypu czy reklamy dla Ciebie lub Twojej firmy? Trafiłeś idealnie! Zajmujemy się również edycją zdjęć, fotomontażami i pozycjonowaniem.">
	<meta name="keywords" content="Przemysław, Sokołowski, web designer, web developer, freelancer, tworzenie, stron, logotypy, wizytówki, foldery, ulotki, pozycjonowanie, reklama, fotomontaż, obróbka, zdjęć, Lubin, Legnica, Wrocław,">
	<meta name="author" content="Przemysław Sokołowski">
	<link rel="Shortcut icon" href="menu/icon.png">
	<link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style_common.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
	<script>	
		$(document).ready(function() {
			$('a[href^="#"]').click(function() {
				var hash = $(this).attr('href');
			$('html, body, div').animate({
					scrollTop: $(hash).offset().top
					}, 1500);
				return false;
			});
		});
	</script>
	
  </head>
<body style="font-family:Raleway; background-image:url('tlo.png'); background-attachment:fixed;">

  <!-- Nawigacja -->
 
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header"><a class="navbar-brand" href="#up"><img alt="logo_sokol" src="sokolmenu.png" style="height:40px; margin-top:-10px;" ></a>
				<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#omnie">O mnie</a></li>
					<li><a href="#oferta">Oferta</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#kontakt">Kontakt</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="zwyklak" href="https://www.facebook.com/sokolbboy" style="padding:10px;"><img src="menu/fb.png" alt="facebook" style="height:30px;"></a></li>
					<li><a class="zwyklak" href="http://instagram.com/bboysokol" style="padding:10px;"><img src="menu/ig.png" alt="instagram" style="height:30px;"></a></li>
				</ul>
			</div>
		</div>
	</div>

  <!-- Przywitanie -->
	
	<div class="container-fluid" id="up">
		<div class="container" style="padding-top:160px; padding-bottom:160px;">
			<center><img src="sokol.png" alt="logo" style="width:200px;">
			<h1>Cześć, jestem Przemek!</h1>
			<h3>Nazywam się Przemysław Sokołowski i jestem freelancerem! No dobra, jestem początkującym freelancerem...</h3>
			<p><a class="btn btn-primary btn-lg" href="#omnie" role="button">Czytaj dalej</a></p></center>
		</div>
	</div>

  <!-- Obrazek 1-->

<img src="glowna/mockup2.jpg" alt="przerywnik1" style="width:100%; margin:0;"  >

  <!-- O mnie -->

	<div class="container-fluid" id="omnie" class="box">
		
		<div class="container" style="padding-top:160px; padding-bottom:160px;">
			<h1><b>Cześć, jestem Przemek!</b></h1>
			<h3 style="line-height:40px;">Nazywam się Przemysław Sokołowski i <b style="color:#0075B1;">jestem freelancerem!</b> No dobra, jestem początkującym freelancerem z <b style="color:#0075B1;">ambicjami</b> i konkretnymi <b style="color:#0075B1;">celami</b>. Narazie tak naprawdę znam się na podstawach, podstawowych języków kodowania, ale <b style="color:#0075B1;">ciągle się uczę!</b> Świat jeszcze o mnie usłyszy, a właściwie o nas. Jak wiadomo, do poczucia stylu i równowagi potrzeba <b style="color:#0075B1;">kobiecego oka</b>. Stroną graficzną zajmuje się moja dziewczyna, która zawsze dodaje swoje: "Ten kolor to śnieżna biel, a raczej chodziło o perłową biel". Tak, właśnie tak, idealnie się uzupełniamy i tworzymy <b style="color:#0075B1;">zgrany zespół</b>, a Ty dzięki temu otrzymujesz wynik naszej pracy, który cieszy oko.
				Zajmujemy się <b style="color:#0075B1;">tworzeniem</b> stron internetowych od podstaw jak i ich szatą graficzną. Tworzymy również identyfikacje wizualną dla firm, fanpagów- to znaczy logotypy, tła, banery. W gruncie rzeczy zajmujemy się szeroko pojętą reklamą dla Ciebie lub Twojej firmy.
				Robimy to z <b style="color:#0075B1;">pasji</b> i z chęci rozwoju, więc każde zlecenie jest indywidualnie rozpatrywane i realizowane. Na codzień jesteśmy zwykłymi nastolatkami którzy żyją, jedzą, piszą kod, grają i tak w kółko. Ja w dodatku do mojego hobby jeszcze tańczę, jestem BBoyem i reprezentuje grupę Bessali. Dlaczego do tego nawiązuje? I w tańcu i w kodowaniu potrzebna jest <b style="color:#0075B1;">kreatywność</b>; kreatywność <b style="color:#0075B1;">to rozwój!</b>
			</h3>
			<center><h2><b>Moje technologie:</b></h2></center><br>
			<div class="col-sm-6 col-md-3">
				<center><img src="umiejetnosci/html.png" width="200px" alt="html"></center><br>
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
					</div>
				</div>
			</div>
  
			<div class="col-sm-6 col-md-3">
				<center><img src="umiejetnosci/css.png" width="200px" alt="css"></center><br>
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					</div>
				</div>
			</div>
  
			<div class="col-sm-6 col-md-3">
				<center><img src="umiejetnosci/javascript.png" width="200px" alt="javascript"></center><br>
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<center><img src="umiejetnosci/php.png" width="200px" alt="php"></center><br>
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					</div>
				</div>
  
			</div>
		</div>
	</div>

  <!-- Obrazek 2 -->

<img src="glowna/mockup.jpg" style="width:100%; margin:0;" class="img-responsive" alt="przerywnik2">

  <!-- Oferta -->

	<div class="container-fluid">
		<div class="container" style="padding-top:160px; padding-bottom:160px;" id="oferta" class="box">
		<h1>Oferta</h1>
		<h3 style="color:#0075B1; padding-bottom:15px;"><b><center>"Jeżeli coś nie ma ceny, nie ma również wartości."</b><br> Albert Einstain</center></h3>

		<div class="row">
			<div class="col-sm-6 col-md-4" >
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/wycena.png" alt="darmowa wycena" width="100px"  style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Darmowa wycena projektu</b></h2>
					<h4 style="color:#FFF;">Twój projekt zostanie wyceniony za darmo, odrazu poznajesz koszt zlecenia!</h4>
					</div>
				</div>
			</div>
				
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/identyfikacja.png" alt="identyfikacja wizualna" width="100px" style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Identyfikacja wizualna</b></h2>
					<h4 style="color:#FFF;">Specjalnie dla Ciebie wykonamy szate graficzną dla strony, logotyp, baner czy tło!</h4>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/poligrafia.png" alt="poligrafia" width="100px" style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Poligrafia - druk reklamowy</b></h2>
					<h4 style="color:#FFF;">Nie będzie również problemem wykonanie dla Ciebie wizytówkę, folder czy ulotki. </h4>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/zdjecia.png" alt="Edycja zdjęć" width="100px" style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Edycja zdjęć cyfrowych</b></h2>
					<h4 style="color:#FFF;">Potrzebujesz obróbki zdjęcia, może ktoś wszedł Ci w kadr i zepsuł zdjęcie(fotomontaż)?</h4>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/www.png" alt="Strony internetowe" width="100px" style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Strony internetowe</b></h2>
					<h4 style="color:#FFF;">Kreatywny pomysł na strone i indywidualne podejście do klienta to nasz priorytet!</h4>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="background-color:#444444;">
				<img align="left" src="oferta/pozycjonowanie.png" alt="pozycjonowanie" width="100px" style="padding:10px;">
					<div class="caption">
					<h2 style="color:#FFF;"><b>Pozycjonowanie w wyszukiwarce</b></h2>
					<h4 style="color:#FFF;">Pozycjonowanie to zabieg zapewniający pozycję w wyszukiwarce! (dodatek)</h4>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
  
  <!-- Obrazek 3 -->
  
  <img src="glowna/mockup3.jpg" style="width:100%; margin:0;" class="img-responsive" alt="przerywnik3" >
  
  <!-- Portfolio -->  
  
	<div class="container-fluid">
		<div class="container" style="padding-top:160px; padding-bottom:160px;" id="portfolio" class="box">
		<h1> Portfolio</h1>
		<h3 style="color:#0075B1;"><b><center>"Nie ma znaczenia, czy coś powstawało pięć minut, czy tydzień, czy artysta się namęczył, czy nie, czy był trzeźwy. Ważny jest efekt."</b><br>Andrzej Mleczko</center> </h4>
			<section class="responsive slider">
				<div>
					<div class="view view-first">
						<a href="http://web-desginer.ct8.pl"><img src="portfolio/sokol.png" alt="p-sokolowski.pl">
						<div class="mask">
							<h2>p-sokolowski.pl</h2>
							<p>STRONA WWW</p>
						</div>
						</a>
					</div>
				</div>
				<div>
					<div class="view view-first">
						<a href="http://czekoladowefanaberie.pl"><img src="portfolio/czekfan.png" alt="czkoladowefanaberie.pl">
						<div class="mask">
							<h2>czekoladowefanaberie.pl</h2>
							<p>STRONA WWW</p>
						</div>
						</a>
					</div>
				</div>
				<div>
					<div class="view view-first">
						<a href="portfolio/ulotka1.jpg"><img src="portfolio/ulotka1.jpg" alt="ulotka1">
						<div class="mask">
							<h2>Czekoladowe Fanaberie</h2>
							<p>ULOTKA</p>
						</div>
						</a>
					</div>
				</div>
				<div>
					<div class="view view-first">
					<a href="#"><img src="portfolio/sokol.png" alt="p-sokolowski.pl">
						<div class="mask">
							<h2>p-sokolowski.pl</h2>
							<p>STRONA WWW</p>
						</div>
					</a>
					</div>
				</div>
				<div>
					<div class="view view-first">
					<a href="http://czekoladowefanaberie.pl"><img src="portfolio/czekfan.png" alt="czekfan">
						<div class="mask">
							<h2>czekoladowefanaberie.pl</h2>
							<p>STRONA WWW</p>
						</div>
					</a>
					</div>
				</div>
				<div>
					<div class="view view-first">
					<a href="portfolio/ulotka1.jpg"><img src="portfolio/ulotka1.jpg" alt="ulotka1">
						<div class="mask">
							<h2>Czekoladowe Fanaberie</h2>
							<p>ULOTKA</p>
						</div>
					</a>
					</div>
				</div>
			</section>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
 
	$('.responsive').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
  </script>
	
		</div>
	</div>

	  <!-- Obrazek 4 -->
	
    <img src="glowna/mockup4.jpg" style="width:100%; margin:0;" class="img-responsive" alt="przerywnik 4">
	
	  <!-- Kontakt -->
	
	<div class="container-fluid" style="background-color:#eee">
		<div class="container" style="padding-top:160px; padding-bottom:100px;" id="kontakt" class="box">
			<h1>Kontakt</h1>
			<div class="col-md-4">
	
				<h3><center>Formularz kontaktowy</center></h3>
	
				<form class="form-horizontal" method="POST" onsubmit="hehe(); return false;" name="formularz">
				
				
				
				<script>
				
				function hehe()
				{
					
					$.post("mail.php",
					{
						email: $("#email").val(),
						title: $("#title").val(),
						tresc: $("#tresc").val()
					},
					function (data,status)
					{
						
						if(data == "true")
						{
							alert("Email został wysłany prawidłowo, dziękujemy za kontakt:)");
							$("#email").val("");
							$("#title").val("");
							$("#tresc").val("");
						}
						
						else if(data == "zly mail")
						{
							alert("Wpisz poprawny adres EMAIL.");
						}
						
						else
						{
							alert("Email NIE został wysłany");
						}
						
					});
					
				}
				
				
				</script>
				
				
				
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
					<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Tytuł</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="title" placeholder="Tytuł" name="tytul">
					</div>
				</div>
  
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Treść</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="tresc" rows="3" placeholder="Treść wiadomości" name="wiadomosc"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Wyślij</button>
					</div>
				</div>
				</form>
	
	
			</div>
			
			<div class="col-md-4">
	
				<center><h3>Dane kontaktowe:</h3></center>
	
				<img src="glowna/user.png" alt="moje_zdjecie"align="left" style="width: 140px !important; height: 140px; border-radius: 140px; border: solid 2px #e2e2e2; margin-right: 5px; background: #e2e2e2;">
				<p style="padding-top:20px">Telefon: +48 724 091 674<br>
				Email: bboy_sokol@o2.pl<br>
				Facebook: <a class="zwyklak" href="https://www.facebook.com/sokolbboy">facebook.com/sokolbboy</a><br>
				Instagram: <a class="zwyklak" href="http://instagram.com/bboysokol">bboysokol</a>
				</p>
	
			</div>
			<div class="col-md-4"><br><img src="sokol.png" width="200px" alt="logo">
			</div>
	
		</div>
	</div>
	
	<div class="container-fluid" style="background-color:#eee">
		<div class="col-md-12"><center><a class="zwyklak" href="">© Przemysław Sokołowski ®2017</a></center>
		</div>
	</div>

	
  
  </body>
</html>