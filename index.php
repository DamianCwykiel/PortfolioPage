<?php
include("email.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimal-ui, shrink-to-fit=no">
        <title>Damian_Cwykiel</title>
<!-- BootstrapCSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--hourglass-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="icon" href="icon/favicon.ico">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Eczar:400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
		
		<link rel ="stylesheet" href="style.css">
	</head>

    <body data-spy="scroll" data-target="#myScrollspy" data-offset="200">
	
<div class="wrapper">
<!--TopMenu-->
	<header>
        <nav>
            <div class="pos-f-t">
                <div class="collapse" id="slider">
                    <div class="bg-topnav p-4" id="h5">
                        <a href ="#socialmedia"><h3 class="logo-TopMenu">D</h3></a>
                            <span class="text-muted">
								<ul class="list" id="list-topmenu">
									<li><a href ="#gallery">GALLERY</a></li>
									<li><a href ="#about_me">ABOUT_ME</a></li>
									<li><a href ="#skills">SKILLS</a></li>
									<li><a href ="#curriculum">CV</a></li>
									<li><a href ="#projects">PROJECTS</a></li>
									<li><a href ="#contact">CONTACT</a></li>
								</ul>
							</span>
                    </div>
                </div>
					<nav class="navbar navbar-dark bg-dark">
						<button class="navbar-toggler" id="navbarButton" type="button" data-toggle="collapse" data-target="#slider" aria-controls="slider" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<h3 id="logo">PortfolioPage<sup id="copy">DC</sup></h3>
					</nav>
			</div>
        </nav>
	</header>
<!--PageContent-->
		<div class="container-fluid" id="container">	
<!--HeaderJumboTron-->
			<header>
				<div class="jumbotron bg-warning">
					<h1 class="display-3">Welcome!</h1>
						<p class="lead" id="header-h2">I would like to invite you to a jurney throughout my webpage.</p>
						<hr class="m-y-2">
						<p id ="header-p">I hope you will enjoy it!</p>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
								<i>Take a look around!</i>
<!--hourglass-->    <div class="fa" id="div1"></div>
						</div>
						<p class="lead">
							<a class="btn btn-dark btn-lg" href="#about_me" role="button" style="color:white;">Follow me!</a>
						</p>
<!--audio-->		<audio autoplay class="music">
						<source src="audio/HansZimmer.mp3" type="audio/mpeg"><span> Upgrade your browser!</span>
					</audio>
						<br/>
					<button class="playmusic">PLAY/PAUSE</button>	
				</div>
			</header>
<!--asideNav-->   
		
			<aside id="myScrollspy">
				<ul class="nav nav-pills flex-column bg-warning" id="sideNav">
					 <li class="nav-item">
						<a class="nav-link active" href="#gallery">GALLERY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about_me">ABOUT_ME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skills">SKILLS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#curriculum">CV</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">PROJECTS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">CONTACT</a>
					</li>
<!--clock-->	<li id="clockContainer">
						<canvas id="clock" width="150" height="150">
					</li>
<!--date-->		<li id="date">
						<?echo date('Y-m-d');?>
					</li>
				</ul>
			</aside>
<!--Main-->  
			<main class="col-sm-12">
<!--SectionGallery-->	
				<section id="gallery">
					<h2 class="h2" id="galeria">GALLERY</h2>
					<div id="Photoslider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#Photoslider" data-slide-to="0" class="active"></li>
							<li data-target="#Photoslider" data-slide-to="1"></li>
							<li data-target="#Photoslider" data-slide-to="2"></li>
							<li data-target="#Photoslider" data-slide-to="3"></li>
							<li data-target="#Photoslider" data-slide-to="4"></li>
							<li data-target="#Photoslider" data-slide-to="5"></li>
							<li data-target="#Photoslider" data-slide-to="6"></li>
							<li data-target="#Photoslider" data-slide-to="7"></li>
							<li data-target="#Photoslider" data-slide-to="8"></li>
						</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/Slides/slide-1.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-2.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-3.png" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-4.png" alt="Fourth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-5.png" alt="Fifth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-6.png" alt="Sixth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-7.png" alt="Seventh slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-8.png" alt="Eighth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/Slides/slide-9.png" alt="Eighth slide">
						</div>
					</div>
						<a class="carousel-control-prev" href="#Photoslider" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#Photoslider" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
<!--ArrowUp--><a href="#" class="scrollup"></a>
				</section>
<!--SectionAboutMe-->
				<section id="about_me">
					<h2 class ="h2" id="about-me-summary">ABOUT_ME</h2>
					<figure>
						<img src="img/picture-1.jpg" class="float-left"> 
					</figure>
<!--MainArticle-->	<article>
						Hello, my name is Damian Cwykiel and I am a progresive WebDeveloper.</br>I like to work with the accuracy and good quality taking care of each even a small-time detail.</br>
						These days I am looking for a job as a junior web programmer which will enable me to get new skills and build up already learned. I would like to work with people who really love what they do.</br>I am still going to develop myself in what I do and gather new abilities in programming.</br>
						Except all above I am really keen on archeological excavations and travelling. I am also a big fun of different cultures and meeting new people.</br>If you like my application, give me a call.
					</article>
				</section>
<!--SkillsSection-->            
				<section id="skills">
					<h2 class="h2" id="myOffer">SKILLS</h2>
					<div class ="row" id="row-skills">
						<div class="col-md-3">
							<img src="img/html.png" alt ="html.png" class="float-left">
							<p>HTML</p>
						</div>
						<div class="col-md-3">
							<img src="img/css.png" alt ="css.png" class="float-left">
							<p>CSS</p>
						</div>
						<div class="col-md-3">
							<img src="img/js.png" alt ="js.png" class="float-left">
						<p>JS</p>
						</div>
						<div class="col-md-3">
							<img src="img/jquery.png" alt ="jquery.png" class="float-left">
							<p>JQuery</p>
						</div>
						<div class="col-md-3">
							<img src="img/Ajax1.png" alt ="Ajax1.png" class="float-left">
							<p>Ajax</p>
						</div>
						<div class="col-md-3">
							<img src="img/php.png" alt ="php.png" class="float-left">
							<p>PHP</p>
						</div>
						<div class="col-md-3">
							<img src="img/mysql.png" alt ="mysql.png" class="float-left">
							<p>MySQL</p>
						</div>
						<div class="col-md-3">
							<img src="img/bootstrap1.png" alt ="bootstrap1.png" class="float-left">
							<p>Bootstrap</p>
						</div>
						<div class="col-md-3">
							<img src="img/wordpress-1.png" alt ="wordpress.png"class="float-left">
							<p>Wordpress</p>
						</div>
						<div class="col-md-3">
							<img src="img/cpp50.png" alt ="cpp50.png" class="float-left">
							<p>C++</p>
						</div>
						<div class="col-md-3">
							<img src="img/python.png" alt ="python.png" class="float-left">
							<p>Python</p>
						</div>
						<div class="col-md-3">
							<img src="img/react2.png" alt ="react.png" class="float-left">
							<p>React</p>
						</div>
						<div class="col-md-3">
							<img src="img/redux.png" alt ="redux.png" class="float-left">
							<p>Redux</p>
						</div>
						<div class="col-md-3">
							<img src="img/scss.png" alt ="scss.png" class="float-left">
							<p>.SCSS</p>
						</div>
						<div class="col-md-3">
							<img src="img/firebase.png" alt ="firebase.png" class="float-left">
							<p>Firebase</p>
						</div>
						<div class="col-md-3">
							<img src="img/jest.png" alt ="jest.png" class="float-left">
							<p>Jest</p>
						</div>
					</div> 
					<h3 class="h2" id="myOffer">TOOLS_IN_USE </h3>
					<div class ="row" id="row-skills">
						<div class="col-md-3">
							<img src="img/Tools/git.png" alt ="git.png" class="float-left">
							<p>Git</p>
						</div>	
						<div class="col-md-3">
							<img src="img/Tools/npm.png" alt ="npm.png" class="float-left">
							<p>NPM</p>
						</div>
						<div class="col-md-3">
							<img src="img/Tools/tool-yarn.png" alt ="yarn.png" class="float-left">
							<p>Yarn</p>
						</div>
						<div class="col-md-3">
							<img src="img/Tools/webpackTool.png" alt ="webpack.png" class="float-left">
							<p>Webpack</p>
						</div> 
					</div>
				</section>				
<!--SectionCV-->	
				<section id="curriculum">
					<h2 class="h2" id="cv">CURRICULUM_VITAE</h2>
						<div class="row" id="curriculum-row">
							<div class="col-sm-6">
								<a href="CV/CV-Damian_Cwykiel.doc"><img src="img/download.png" alt ="downloader.png"></a><p id="cv-download">download_CV</p>
							</div>
							<div class="col-sm-6">
								<a href="CV/CV-Damian_Cwykiel.pdf" target="_blank"><img src="img/pdf1.png" alt ="downloader.png"></a><p id="cv-download">
								CV_in_PDF</p>
							</div>
						</div>
<!--SectionProjects-->	
				<section id="projects">
					<h2 class ="h2" id="projects">PROJECTS</h2>
					<div class="row" style="margin-top: 15px;">
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="https://damiancwykiel.github.io/Portfolio/" target="_blank"><img class="card-img-top" src="img/Portfolio.png" alt="Portfolio.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="The project 	consists of a few pages which was linked like a loop. Additionaly I appended a battery animation and sliding menu for better navigation between log in and content page. The idea of this was to styled it closely to system's log in page. Tiles show fields with different content.">1st Portfolio<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br><b>
											<img src="img/Projecticons/html.png" alt="html.png">
											<img src="img/Projecticons/css.png" alt="css.png">
											<img src="img/Projecticons/js.png" alt="js.png">
											<img src="img/Projecticons/jquery2.png" alt="jquery2.png">
										</b> 
									</p>
									<a href="https://damiancwykiel.github.io/Portfolio/" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/Portfolio" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="https://damiancwykiel.github.io/ViewConstructor/" target="_blank"><img class="card-img-top" src="img/ViewConstructor.png" alt="ViewConstructor.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="'ViewConstructor' you can use as a basic code editor. JS is switching user between tabs make them disable or active in case you need it. Using CSS panel you can change primary text features as f.ex sizes, colors or animations.">View Constructor<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br><b>
											<img src="img/Projecticons/html.png" alt="html.png">
											<img src="img/Projecticons/css.png" alt="css.png">
											<img src="img/Projecticons/js.png" alt="js.png">
											<img src="img/Projecticons/jquery2.png" alt="jquery2.png">
										</b>
									</p>
									<a href="https://damiancwykiel.github.io/ViewConstructor/" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/ViewConstructor" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div> 
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="https://damiancwykiel.github.io/GWENT/" target="_blank"><img class="card-img-top" src="img/CardGame.png" alt="CardGame.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Card game was inspired by popular game Gwint where the player uses cards to play. In the game we have to match each card with same figure and after the right compare JS make these cards disable. Below the cards pannel a clock counts turns which we made. Used pictrures are real gwint features. The play shows only one turn.">CardGame<sup>i</sup>
									</article> 
									<p class="card-text">Technology used:
										<br><b>
										<img src="img/Projecticons/html.png" alt="html.png">
										<img src="img/Projecticons/css.png" alt="css.png">
										<img src="img/Projecticons/js.png" alt="js.png">
										<img src="img/Projecticons/jquery2.png" alt="jquery2.png">
										</b>
									</p>
									<a href="https://damiancwykiel.github.io/GWENT/" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/GWENT" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 90%; margin-top: 8%">
								<a href="https://damiancwykiel.github.io/RunningShapes/" target="_blank"><img class="card-img-top" src="img/RunningShapes.png" alt="RunningShapes.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="The project-game tests your reaction on displaying geometrical figures. A player has to click on objects and JS measures the time between show up an object and a player's clik on the figure field. Objects except for various shapes also change their colours thanks to use Math.random method.">Running_Shapes<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br><b>
										<img src="img/Projecticons/html.png" alt="html.png">
										<img src="img/Projecticons/css.png" alt="css.png">
										<img src="img/Projecticons/js.png" alt="js.png">
										</b>
									</p>
									<a href="https://damiancwykiel.github.io/RunningShapes/" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/RunningShapes" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
							   </div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 90%; margin-top: 8%">
								<a href="http://mysql-damian-cwykiel-pl.stackstaging.com/index.php" target="_blank"><img class="card-img-top" src="img/Newsletter.png" alt="Newsletter.png"></a>
									<div class="card-body">
										<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="A newsletter connects with MySQL databese using PDO library. The application after fill in an e-mail field sends the data to databse and also baslically verify the correctness of an e-mail box. You can feel free to send your contact e-mail for following my projects' upadtes.">Newsletter<sup>i</sup>
										</article>
										<p class="card-text">Technology used:
											<br><b>
												<img src="img/Projecticons/html.png" alt="html.png">
												<img src="img/Projecticons/css.png" alt="css.png">
												<img src="img/Projecticons/php.png" alt="php.png">
												<img src="img/Projecticons/mysql.png" alt="mysql.png">
											</b>
										</p>
										<a href="http://mysql-damian-cwykiel-pl.stackstaging.com/index.php" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 90%; margin-top: 8%">
								<a href="http://diary-project-damiancwykiel-pl.stackstaging.com/index.php?logout=1" target="_blank"><img class="card-img-top" src="img/thenote.png" alt="thenote.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="In this project the user can create an account which php saves in MySQL database. The user personal notes after login are display on the screen and can be modify or remove. It's a great place to keep information you need to be close to no matter where you are. Now the code is updating and some options can be disabled.">TheNote<sup>i</sup>
									</article>
									<p class="card-text">Technology used: 
										<br/><b>
										<img src="img/Projecticons/html.png" alt="html.png">
										<img src="img/Projecticons/css.png" alt="css.png">
										<img src="img/Projecticons/js.png" alt="js.png">
										<img src="img/Projecticons/jquery2.png" alt="jquery2.png">
										<img src="img/Projecticons/php.png" alt="php.png">
										<img src="img/Projecticons/mysql.png" alt="mysql.png">
										<img src="img/Projecticons/Ajax.png" alt="ajax.png">
										<img src="img/Projecticons/bootstrap.png" alt="bootstrap.png">
										</b>
									</p>
									<a href="http://diary-project-damiancwykiel-pl.stackstaging.com/index.php?logout=1" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/TheNote" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="http://prognozapogody-damiancwykiel.stackstaging.com" target="_blank"><img class="card-img-top" src="img/TheWeatherApp.png" alt="TheWeatherApp.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Here you can check an actual weather from each bigger city or village in the world. The application works using weather API from www.openweathermap.org. Below a serching box by default is displaying a field that shows weather details from one chosen town, in my case that is from Rzeszów.">TheWeatherApp<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
									<br/><b>
										<img src="img/Projecticons/html.png" alt="html.png">
										<img src="img/Projecticons/css.png" alt="css.png">
										<img src="img/Projecticons/js.png" alt="js.png">
										<img src="img/Projecticons/jquery2.png" alt="jquery2.png">
										<img src="img/Projecticons/php.png" alt="php.png">
										<img src="img/Projecticons/mysql.png" alt="mysql.png">
										<img src="img/Projecticons/Ajax.png" alt="ajax.png">
										<img src="img/Projecticons/bootstrap.png" alt="bootstrap.png">
										<img src="img/Projecticons/api.png" alt="api.png">
										</b>
									</p>
									<a href="http://prognozapogody-damiancwykiel.stackstaging.com" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="https://github.com/DamianCwykiel/NotatnikCPP" target="_blank"><img class="card-img-top" src="img/NotatnikCPP.png" alt="NotatnikCPP.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Presented work which is Notatnik_C++ was made in the Object Oriented Programming langulage model of CodeBlocks. Specification of its work was cloned from system's notebook. In this Notatnik you can remove, edit or save created content. It is a great way to replace system's notebook on your own project just by clicking on Project1.exe.">Notatnik_C++<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br/><b>
										<img src="img/Projecticons/builderc++.png" alt="builderc++.png">
										<img src="img/Projecticons/codeblock2.png" alt="codeblock2.png">
										</b>
									</p>
									<a href="https://github.com/DamianCwykiel/NotatnikCPP" target="_blank"><img src="img/Projecticons/cppfile1.png" alt="cppfile1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%">
								<a href="https://github.com/DamianCwykiel/PlayXO" target="_blank"><img class="card-img-top" src="img/PlayXO.png" alt="PlayXO.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="The common known as 'tic-tac-toe' game built in the OOP using C++ and CodeBlocks cross-platform. The game allows to play as a singiel player.">Play_XO<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br/><b>
										<img src="img/Projecticons/builderc++.png" alt="builderc++.png">
										<img src="img/Projecticons/codeblock2.png" alt="codeblock2.png">
										</b>
									</p>
									<a href="https://github.com/DamianCwykiel/PlayXO" target="_blank"><img src="img/Projecticons/cppfile1.png" alt="cppfile1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%; margin-top: 8%">
								<a href="https://github.com/DamianCwykiel/TimeCounter/tree/master" target="_blank"><img class="card-img-top" src="img/TimeCounter.png" alt="TimeCounter.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="This 'TimeCounter' counts the time since start the system to it shuts down. Additionally the icon is added to taskbar and the program is setting off automatically when the system starts. The project bsasic in its simplicity is a nice thing to control our time spends using a computer. ">Time_Counter<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
										<br/><b>
										<img src="img/Projecticons/builderc++.png" alt="builderc++.png">
										<img src="img/Projecticons/codeblock2.png" alt="codeblock2.png">
										</b>
									</p>
									<a href="https://github.com/DamianCwykiel/TimeCounter/tree/master" target="_blank"><img src="img/Projecticons/cppfile1.png" alt="cppfile1.png"></a>
								</div>
							</div> 
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%; margin-top: 8%">
								<a href="https://github.com/DamianCwykiel/ShoppingApp" target="_blank"><img class="card-img-top" src="img/shoppingapp.png" alt="shoppingapp.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="This project is a nice way to replace your traditional shopping list on digital one and keep it in a save place having an access to it in evey place you like. An extra option is to shuffle between typed items randomly selecting one of them. The project was built in JS library - React.">ShoppingApp<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
									<br/><b>
										<img src="img/Projecticons/reactblack.png" alt="reactblack.png">
										<img src="img/Projecticons/scss2.png" alt="scss.png">
										<img src="img/Projecticons/webpack.png" alt="webpack.png">
										<img src="img/Projecticons/yarn.png" alt="yarn.png">
										<img src="img/Projecticons/babel.png" alt="babel.png">
									</b></p>
									<a href="https://github.com/DamianCwykiel/ShoppingApp" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-block" style="width: 100%; height: 100%; margin-top: 8%">
								<a href="https://react-application-2-payments.herokuapp.com/" target="_blank"><img class="card-img-top" src="img/mpka.png" alt="mpka.png"></a>
								<div class="card-body">
									<article class="card-title" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="This 		project uses including: React, Redux, .SCSS, Firebase, Webpack and was been tested in Jest.
									The app styled as a home budget-app allows to add, change or remove created expenses. 
									The database was placed in the google Firebase and an access to it is via fast google login.
									In the app an amount in total you can see above of item list in the header.">MonthlyPaymentsKeeperApp<sup>i</sup>
									</article>
									<p class="card-text">Technology used:
									<br/><b>
										<img src="img/Projecticons/reactblack.png" alt="reactblack.png">
										<img src="img/Projecticons/redux.png" alt="redux.png">
										<img src="img/Projecticons/scss2.png" alt="scss2.png">
										<img src="img/Projecticons/firebase.png" alt="firebase.png">
										<img src="img/Projecticons/jest.png" alt="jest.png">
										<img src="img/Projecticons/webpack.png" alt="webpack.png">
										<img src="img/Projecticons/yarn.png" alt="yarn.png">
										<img src="img/Projecticons/babel.png" alt="babel.png">
										<img src="img/Projecticons/airbnb.png" alt="airbnb.png">
									</b></p>
									<a href="https://react-application-2-payments.herokuapp.com/" target="_blank"><img src="img/Projecticons/web.png" alt="web.png"></a>
									<a href="https://github.com/DamianCwykiel/MonthlyPaymentsKeeperApp" target="_blank"><img src="img/Projecticons/code1.png" alt="code1.png"></a>
								</div>
							</div>
						</div>
					</div>
				</section>						
<!--SectionContact-->			
				<section id="contact">
					<h2 class="h2" id="myContact">CONTACT</h2>
					<div id="contactPanel">
						<div style="text-align:center">
							<h3 id="mail-form">Do you want to get to know more?</h3>
								<p>Contact me via the form.</p>
						</div>
						<div class="row" style="margin-top: 8%">
							<div class="col-lg-6">
								<div id="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164116.5192597883!2d21.84837229017227!3d50.00534563135541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfae3cc14d449%3A0xd2240d31b33eb2ed!2zUnplc3rDs3c!5e0!3m2!1spl!2spl!4v1544183255666" width="410" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div> 
							</div>
							<div class="col-lg-6">
								<div id ="error"> <? echo $error.$success;?></div>
								<form method="POST" id="emailForm">
									<div class="form-group">
										<label for="email">Email address</label> 
										<input type="email" class="form-control" id="email" name ="email" placeholder="Enter Your email">
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<input type="text" class="form-control" id="subject" name="subject">
									</div>
									<div class="form-group">
										<label for="content">Message field</label>
										<textarea class="form-control" id="content" name ="content" rows="9"></textarea>
									</div>
									<button type="submit" id ="submit-button" class="btn btn-success">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			</main><!-- columny12-->
		</div> <!--container-->
 <!--footer-->   
	<footer>
        <div class="row" id="socialmedia">
            <a href="https://github.com/DamianCwykiel" target="_blank" id="git"><img src="img/git.png" alt="git.png"></a>

            <a href="https://www.facebook.com/damian.cwykiel?ref=bookmarks" target="_blank" id="fb"><img src="img/fb.png" alt="fb.png"></a>

            <a href="https://twitter.com/CwykielDamian" target="_blank" id="tw"><img src="img/tw1.png" alt="tw.png"></a>
                        						
			<a href="https://www.linkedin.com/in/damian-cwykiel-8a9580172/" target="_blank" id="lin"><img src="img/lin.png" alt="lin.png"></a>
						
            <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" id="mail"><img src="img/mail.png" alt="mail.png"></a>
		</div>
<!--Footernav-->
        <nav class="row">
            <ul id="contacts">
				<li>
					<a href="#gallery">
						<p>Gallery</p>I
					</a>
				</li>
				<li>
					<a href="#about_me">
						<p>AboutMe</p>II
					</a>
				</li>
				<li>
					<a href="#skills">
						<p>Skills</p>III
					</a>
				</li>
				<li>
					<a href="#curriculum">
						<p>Cv</p>III
					</a>
				</li>
				<li>
					<a href="#projects">
						<p>Projects</p>II
					</a>
				</li>
					<li>
					<a href="#contact">
						<p>Contact</p>I
					</a>
				</li>
            </ul>
        </nav>
		<div class ="column-lg-12" id="logo-footer">
			<h3 id="footer-h3">
				2019&copy; Damian Cwykiel - Portfolio.
			</h3>	
		</div>
	</footer>
</div><!--wrapper-->		
<!--BS\JS-->			
	<script src="script.js"> </script>
		
		<script src="jquery.scrollTo.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
