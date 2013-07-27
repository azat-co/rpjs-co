<?php
  $bg = array('intro-bg.jpg', '5110886-2.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link rel="author" href="https://plus.google.com/u/0/116816240985852388027" />
	<link rel="publisher" href="https://plus.google.com/u/0/116816240985852388027" />		
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="Content-Language" content="en">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="description"
			content="Step-by-step hands-on tutorials on Backbone.js, Node.js, jQuery, Express.js, MongoDB and more." >
    <meta content="Azat Mardanov" name="author">
    <meta content="Rapid Prototyping with JS" name="title">
    <link href="http://purl.org/dc/elements/1.1/" rel="schema.DCTERMS">
    <meta content="book" name="DCTERMS.type">
    <meta name="DCTERMS.description" 
      content="Step-by-step hands-on tutorials on Backbone.js, Node.js, jQuery, Express.js, MongoDB and more">
    <meta content="Technical" name="DCTERMS.subject">
    <meta content="Azat Mardanov" name="DCTERMS.creator">
    <meta content="Leanpub" name="DCTERMS.publisher">
    <meta content="Rapid Prototyping with JS" name="DCTERMS.title">
    <meta content="2012-11-27" name="DCTERMS.date">
    <meta content="eng" name="DCTERMS.language">
    <meta property="og:description" 
      content="Step-by-step hands-on tutorials on Backbone.js, Node.js, jQuery, Express.js, MongoDB and more">
    <meta content="/img/small.png" property="og:image">
    <meta content="book" property="og:type">
    <meta content="http://rapidprototypingwithjs.com" property="og:url">
    <meta content="Rapid Prototyping with JS" property="og:site_name">
    <meta content="Rapid Prototyping with JS" property="og:title">
    <title>Rapid Prototyping with JS: Agile JavaScript Development in PDF, Mobi, ePub and paperback</title>
	<style type="text/css">
		@media screen and (min-width: 481px) {			
			#section-home {
				/*<?php echo $selectedBg; ?>*/
				background-image: url(img/<?= $selectedBg ?>);
				/*background-image:url("../img/intro-bg.jpg");*/
				/*background-image:url("img/5110886.jpg");*/
				/*background-image:url("../img/rotator.php");*/
			}			
		}
	</style>    
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" media="screen">
	
	<!--[if IE 7]>
		<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.2.min.js"%3E%3C/script%3E'))</script>
	<script type="text/javascript" src="js/modernizr.js"></script>

	
	</head>

	<body>
		<div id="wrapper">
			<div id="sidebar">
				<a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<!-- <div id="logo"> <a href="/"><img src="img/logo.svg" alt="logo" /></a> </div> -->
				<nav id="nav" class="navigation" role="navigation">
					<ul class="unstyled">
						<li class="active" data-section="section-home"><i class="icon-home"></i> <span>Home</span></li>					
						<li data-section="section-about" class=""><i class="icon-laptop"></i> <span>About</span></li>
						<li data-section="section-toc" class=""><i class="icon-list"></i> <span>Contents</span></li>
						<li data-section="section-sample" class=""><i class="icon-book"></i> <span>Free Sample</span></li>						
						<li data-section="section-author" class=""><i class="icon-user"></i> <span>Author</span></li>
						<li data-section="section-contact" class="last"><i class="icon-envelope"></i> <span>Contact</span></li>						
					</ul>
				</nav>
			</div>
			
			<div id="container">
										
				<section class="section" id="section-home" data-section="section-home">
					<div class="container-fluid">	
						<div class="row-fluid">
							
							<div class="alt-image img-circle thumb">
								<img src="img/rapid-prototyping-with-js.jpg" alt="Rapid Prototyping with JS" class="img-polaroid" />
							</div>
							
							<div class="span6 intro">
								<hgroup>
									<h1>Rapid Prototyping with JS</h1>
									<h3>Agile JavaScript Development</h3>
								</hgroup>
								<div class="buy-buy-buy">
									<div>
										<form action="https://leanpub.com/purchases" method="post">
											<input type="hidden" name="book_slug" value="rapid-prototyping-with-js" />
						 					<a onclick="_gaq.push(['_trackEvent', 'BuyLinks', 'EBook', 'Buy EBook']);$(this).parent().submit()" class="btn-inverse btn-primary" data-section="section-about"  
						 					  data-toggle="tooltip"
						 					  title="PDF, ePub/iPad, mobi/Kindle formats + free future updates">
												Buy <b>an ebook</b>
												<i class="icon-circle-arrow-right"></i><span class="price">$19.99<span>
											</a>
											<noscript>
												<input type="submit" name="commit" value="Buy an ebook $19.99" class="btn-inverse btn-primary"/>
											</noscript>
										</form>									
					<!-- 					<a href="" class="btn-inverse btn-primary" data-section="section-about">
											Buy <b>an ebook</b>
											<i class="icon-circle-arrow-right"></i><span class="price">$19.99<span>
										</a>
		 -->					</div>
									<div>								
										<a href="http://www.lulu.com/commerce/index.php?fBuyContent=13749336" onclick="_gaq.push(['_trackEvent', 'BuyLinks', 'Paperback', 'Buy Paperback']);" class="btn-inverse" data-section="section-about"
										  data-toggle="tooltip"
						 				  title="222 pages, email hi@rpjs.co for a free ebook coupon!">
											Buy <b>a paperback</b> <br/>+ free ebook
											<i class="icon-circle-arrow-right"></i><span class="price">$39.99</span>
										</a>								
									</div>
									<div>								
										<a href="mailto:hi@rapidprototypingwithjs.com?subject=Paperback+EBook+1hr%20Skype%20Session%20Request" class="btn-inverse" data-section="section-about"
										data-toggle="tooltip"
						 				  title="Private 1-1 online/in-person session with the author of RPJS Azat Mardanov is included, email hi@rpjs.co for questions!">
											Paperback + Ebook +<br/><b>1hr Skype session</b>
											<i class="icon-circle-arrow-right"></i><span class="price">$120.00</span>
										</a>								
									</div>									
								</div>

								<button class="btn-inverse" data-section="section-about">
									Learn <b>More</b>
									<i class="icon-circle-arrow-down"></i>
								</button>
							</div>

						</div>
						<div class="pull-right">
		          <a href="https://twitter.com/RPJSBook" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @RPJSBook</a>
			          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>        
			        <a href="https://twitter.com/intent/tweet?button_hashtag=RPJS&text=Free%20Intro%20to%20Backbone.js%20and%20other%20JS%20tutorials" class="twitter-hashtag-button" data-related="azat_co,RPJSBook" data-url="http://rapidprototypingwithjs.com">Tweet #RPJS</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		        </div>
					</div>	
				</section>
								
				<section class="section" id="section-about" data-section="section-about">
					<div class="container-fluid">
						<div class="row-fluid title">
							<div class="span3">
								<h2>About</h2>
							</div>
							<div class="span9 hidden-phone">	
								<hr>
							</div>
						</div>
						<div class="row-fluid desc">
							<div class="span8">
								<p><i>Rapid Prototyping with JS: Agile JavaScript Development</i> is a hands-on book which introduces you to agile JavaScript web and mobile software development using the latest cutting-edge front-end and back-end technologies including:</p>
							</div>
						</div>
						<div class="row-fluid content">
							<div class="span8 expand">
								<h4>Topics and Tutorials</h4>
								<div class="row-fluid">
									<div class="span6">
										<div class="toolbox-header" data-length="245">HTML, CSS/LESS</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="230">Twitter Bootstrap</div>
										<div class="toolbox-item"></div>	
										
										<div class="toolbox-header" data-length="200">Javascript/jQuery</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="250">Parse.com</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="200">Node.js</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="220">Express.js, Derby</div>
										<div class="toolbox-item"></div>
									</div>
									<div class="span6 hidden-tablet">
										<div class="toolbox-header" data-length="170">MongoDB</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="235">Git</div>
										<div class="toolbox-item"></div>	
										
										<div class="toolbox-header" data-length="155">Heroku/Windows Azure</div>
										<div class="toolbox-item"></div>
										
										<div class="toolbox-header" data-length="245">JSON/BSON</div>
										<div class="toolbox-item"></div>

										<div class="toolbox-header" data-length="145">Agile Methodologies</div>
										<div class="toolbox-item"></div>										
									</div>
								</div>	
							</div>
							<div class="span4 hidden-phone">
								<h4>Over 12 Coding Examples</h4>
								<div id="pie-chart">
									<span id="label1" class="chart-label">Backbone.js + Parse.com</span>
									<svg id="line1" class="chart-line">
										<line x1="0" y1="0" x2="25" y2="25" 
										style="stroke:rgb(21,21,21);stroke-width:1"></line>
									</svg> 
		
									<span id="label2" class="chart-label">Node.js + MongoDB</span>
									<svg id="line2" class="chart-line">
										<line x1="25" y1="0" x2="0" y2="25" 
										style="stroke:rgb(21,21,21);stroke-width:1">
										</line>
									</svg> 
									<span id="label3" class="chart-label">jQuery</span>
									<svg id="line3" class="chart-line">
										<line x1="0" y1="0" x2="25" y2="25" 
										style="stroke:rgb(21,21,21);stroke-width:1"></line>
									</svg>
									<span id="label4" class="chart-label">Other</span>
									<svg id="line4" class="chart-line">
										<line x1="25" y1="0" x2="0" y2="25" 
										style="stroke:rgb(21,21,21);stroke-width:1">
										</line>
									</svg>
									
								</div>
								<div class="row-fluid button">
									<a class="btn-inverse pull-left" target="_blank" href="http://github.com/azat-co/rpjs">
										Explore <b>code examples</b>
										<i class="icon-circle-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="row-fluid button">
								<button data-section="section-toc" class="btn-inverse pull-left next-section" target="_blank" href="http://github.com/azat-co/rpjs">
									Read <b>Contents</b>
									<i class="icon-circle-arrow-down"></i>
								</button>
						</div>						
					</div>
				</section>	
	
				<section class="section" id="section-toc" data-section="section-toc">
					<div class="container-fluid">
						<div class="row-fluid title">
							<div class="span4">
								<h2>Contents</h2>
							</div>
							<div class="span8 alt">	
								<hr>
							</div>
						</div>
						<div class="row-fluid button">
							<button data-section="section-sample" class="btn-default pull-left next-section" >
								Read <b>a free chapter</b>
								<i class="icon-circle-arrow-down"></i>
							</button>
						</div>		
						<div class="row-fluid desc">
							<div class="span8">
							  <div class="cms-content">
				          <ul class="toc has-parts">
								<li class="chapter">
									<!-- <i class="icon-circle-arrow-right"></i> -->
									What Readers Say</li>
								<li class="chapter">Rapid Prototyping with JS on the Internet</li>
								<li class="chapter">Introduction</li>
								<li class="toc-section">Why RPJS?</li>
								<li class="toc-section">LeanPub</li>
								<li class="toc-section">What to Expect</li>
								<li class="toc-section">Who This Book is For</li>
								<li class="toc-section">What This Book is Not</li>
								<li class="toc-section">Prerequisites</li>
								<li class="toc-section">How to Use the Book</li>
								<li class="toc-section">Examples</li>
								<li class="toc-section">Notation</li>
								<li class="toc-section">Terms</li>
								<li class="part"><span class="section-number">I </span>Quick Start</li>
								<li class="chapter"><span class="section-number">1 </span>Basics</li>
								<li class="toc-section"><span class="section-number">1.1 </span>Front-End Definitions</li>
								<li class="sub-section"><span class="section-number">1.1.1 </span>Bigger Picture</li>
								<li class="sub-section"><span class="section-number">1.1.2 </span>HyperText Markup Language</li>
								<li class="sub-section"><span class="section-number">1.1.3 </span>Cascading Style Sheets</li>
								<li class="sub-section"><span class="section-number">1.1.4 </span>JavaScript</li>
								<li class="toc-section"><span class="section-number">1.2 </span>Agile Methodologies</li>
								<li class="sub-section"><span class="section-number">1.2.1 </span>Scrum</li>
								<li class="sub-section"><span class="section-number">1.2.2 </span>Test-Driven Development</li>
								<li class="sub-section"><span class="section-number">1.2.3 </span>Continuous Deployment and Integration</li>
								<li class="sub-section"><span class="section-number">1.2.4 </span>Pair Programming</li>
								<li class="toc-section"><span class="section-number">1.3 </span>Back-End Definitions</li>
								<li class="sub-section"><span class="section-number">1.3.1 </span>Node.js</li>
								<li class="sub-section"><span class="section-number">1.3.2 </span>NoSQL and MongoDB</li>
								<li class="sub-section"><span class="section-number">1.3.3 </span>Cloud Computing</li>
								<li class="sub-section"><span class="section-number">1.3.4 </span>HTTP Requests and Responses</li>
								<li class="sub-section"><span class="section-number">1.3.5 </span>RESTful API</li>
								<li class="chapter"><span class="section-number">2 </span>Setup</li>
								<li class="toc-section"><span class="section-number">2.1 </span>Local Setup</li>
								<li class="sub-section"><span class="section-number">2.1.1 </span>Development Folder</li>
								<li class="sub-section"><span class="section-number">2.1.2 </span>Browsers</li>
								<li class="sub-section"><span class="section-number">2.1.3 </span>IDEs and Text Editors</li>
								<li class="sub-section"><span class="section-number">2.1.4 </span>Version Control Systems</li>
								<li class="sub-section"><span class="section-number">2.1.5 </span>Local HTTP Servers</li>
								<li class="sub-section"><span class="section-number">2.1.6 </span>Database: MongoDB</li>
								<li class="sub-section"><span class="section-number">2.1.7 </span>Other Components</li>
								<li class="toc-section"><span class="section-number">2.2 </span>Cloud Setup</li>
								<li class="sub-section"><span class="section-number">2.2.1 </span>SSH Keys</li>
								<li class="sub-section"><span class="section-number">2.2.2 </span>GitHub</li>
								<li class="sub-section"><span class="section-number">2.2.3 </span>Windows Azure</li>
								<li class="sub-section"><span class="section-number">2.2.4 </span>Heroku</li>
								<li class="sub-section"><span class="section-number">2.2.5 </span>Cloud9</li>
								<li class="part"><span class="section-number">II </span>Front-End Prototyping</li>
								<li class="chapter"><span class="section-number">3 </span>jQuery and Parse.com</li>
								<li class="toc-section"><span class="section-number">3.1 </span>Definitions</li>
								<li class="sub-section"><span class="section-number">3.1.1 </span>JavaScript Object Notation</li>
								<li class="sub-section"><span class="section-number">3.1.2 </span>AJAX</li>
								<li class="sub-section"><span class="section-number">3.1.3 </span>Cross-Domain Calls</li>
								<li class="toc-section"><span class="section-number">3.2 </span>jQuery</li>
								<li class="toc-section"><span class="section-number">3.3 </span>Twitter Bootstrap</li>
								<li class="toc-section"><span class="section-number">3.4 </span>LESS</li>
								<li class="sub-section"><span class="section-number">3.4.1 </span>Variables</li>
								<li class="sub-section"><span class="section-number">3.4.2 </span>Mixins</li>
								<li class="sub-section"><span class="section-number">3.4.3 </span>Operations</li>
								<li class="toc-section"><span class="section-number">3.5 </span>Example of using 3rd-party API (Twitter) and jQuery</li>
								<li class="toc-section"><span class="section-number">3.6 </span>Parse.com</li>
								<li class="toc-section"><span class="section-number">3.7 </span>Message Board with Parse.com Overview</li>
								<li class="toc-section"><span class="section-number">3.8 </span>Message Board with Parse.com: REST API and jQuery version</li>
								<li class="toc-section"><span class="section-number">3.9 </span>Pushing to GitHub</li>
								<li class="toc-section"><span class="section-number">3.10 </span>Deployment to Windows Azure</li>
								<li class="toc-section"><span class="section-number">3.11 </span>Deployment to Heroku</li>
								<li class="toc-section"><span class="section-number">3.12 </span>Updating and Deleting of Messages</li>
								<li class="chapter"><span class="section-number">4 </span>Intro to Backbone.js</li>
								<li class="toc-section"><span class="section-number">4.1 </span>Setting up Backbone.js App from Scratch</li>
								<li class="sub-section"><span class="section-number">4.1.1 </span>Dependencies</li>
								<li class="toc-section"><span class="section-number">4.2 </span>Working with Collections</li>
								<li class="toc-section"><span class="section-number">4.3 </span>Event Binding</li>
								<li class="toc-section"><span class="section-number">4.4 </span>Views and Subviews with Underscore.js</li>
								<li class="toc-section"><span class="section-number">4.5 </span>Refactoring</li>
								<li class="toc-section"><span class="section-number">4.6 </span>AMD and Require.js for Development</li>
								<li class="toc-section"><span class="section-number">4.7 </span>Require.js for Production</li>
								<li class="toc-section"><span class="section-number">4.8 </span>Super Simple Backbone Starter Kit</li>
								<li class="chapter"><span class="section-number">5 </span>Backbone.js and Parse.com</li>
								<li class="toc-section"><span class="section-number">5.1 </span>Message Board with Parse.com: JavaScript SDK and Backbone.js version</li>
								<li class="toc-section"><span class="section-number">5.2 </span>Deploying Message Board to PaaS</li>
								<li class="toc-section"><span class="section-number">5.3 </span>Enhancing Message Board</li>
								<li class="part"><span class="section-number">III </span>Back-End Prototyping</li>
								<li class="chapter"><span class="section-number">6 </span>Node.js and MongoDB</li>
								<li class="toc-section"><span class="section-number">6.1 </span>Node.js</li>
								<li class="sub-section"><span class="section-number">6.1.1 </span>Building “Hello World” in Node.js</li>
								<li class="sub-section"><span class="section-number">6.1.2 </span>Node.js Core Modules</li>
								<li class="sub-section"><span class="section-number">6.1.3 </span>Node Package Manager</li>
								<li class="sub-section"><span class="section-number">6.1.4 </span>Deploying “Hello World” to PaaS</li>
								<li class="sub-section"><span class="section-number">6.1.5 </span>Deploying to Windows Azure</li>
								<li class="sub-section"><span class="section-number">6.1.6 </span>Deploying to Heroku</li>
								<li class="toc-section"><span class="section-number">6.2 </span>Message Board: Run-Time Memory Version</li>
								<li class="toc-section"><span class="section-number">6.3 </span>Test Case for Message Board</li>
								<li class="toc-section"><span class="section-number">6.4 </span>MongoDB</li>
								<li class="sub-section"><span class="section-number">6.4.1 </span>MongoDB Shell</li>
								<li class="sub-section"><span class="section-number">6.4.2 </span>MongoDB Native Driver</li>
								<li class="sub-section"><span class="section-number">6.4.3 </span>MongoDB on Heroku: MongoHQ</li>
								<li class="sub-section"><span class="section-number">6.4.4 </span>BSON</li>
								<li class="toc-section"><span class="section-number">6.5 </span>Message Board: MongoDB Version</li>
								<li class="chapter"><span class="section-number">7 </span>Putting It All Together</li>
								<li class="toc-section"><span class="section-number">7.1 </span>Different Domain Deployment</li>
								<li class="toc-section"><span class="section-number">7.2 </span>Changing Endpoints</li>
								<li class="toc-section"><span class="section-number">7.3 </span>Message Board Application</li>
								<li class="toc-section"><span class="section-number">7.4 </span>Deployment</li>
								<li class="toc-section"><span class="section-number">7.5 </span>Same Domain Deployment</li>
								<li class="chapter"><span class="section-number">8 </span>Advanced Node.js Topics</li>
								<li class="toc-section"><span class="section-number">8.1 </span>Asynchronicity in Node</li>
								<li class="sub-section"><span class="section-number">8.1.1 </span>Non-Blocking I/O</li>
								<li class="sub-section"><span class="section-number">8.1.2 </span>Asynchronous Way of Coding</li>
								<li class="toc-section"><span class="section-number">8.2 </span>MongoDB Migration with Monk</li>
								<li class="toc-section"><span class="section-number">8.3 </span>TDD in Node.js with Mocha</li>
								<li class="sub-section"><span class="section-number">8.3.1 </span>Who Needs Test-Driven Development?</li>
								<li class="sub-section"><span class="section-number">8.3.2 </span>Quick Start Guide</li>
								<li class="toc-section"><span class="section-number">8.4 </span>Wintersmith — Static Site Generator</li>
								<li class="sub-section"><span class="section-number">8.4.1 </span>Getting Started with Wintersmith</li>
								<li class="sub-section"><span class="section-number">8.4.2 </span>Other Static Site Generators</li>
								<li class="toc-section"><span class="section-number">8.5 </span>Intro to Express.js: Simple REST API app with Monk and MongoDB</li>
								<li class="sub-section"><span class="section-number">8.5.1 </span>REST API app with Express.js and Monk</li>
								<li class="toc-section"><span class="section-number">8.6 </span>Intro to Express.js: Parameters, Error Handling and Other Middleware</li>
								<li class="sub-section"><span class="section-number">8.6.1 </span>Request Handlers</li>
								<li class="sub-section"><span class="section-number">8.6.2 </span>Parameters Middleware</li>
								<li class="sub-section"><span class="section-number">8.6.3 </span>Error Handling</li>
								<li class="sub-section"><span class="section-number">8.6.4 </span>Other Middleware</li>
								<li class="sub-section"><span class="section-number">8.6.5 </span>Abstraction</li>
								<li class="toc-section"><span class="section-number">8.7 </span>Node.js MVC: Express.js + Derby Hello World Tutorial</li>
								<li class="sub-section"><span class="section-number">8.7.1 </span>Node MVC Framework</li>
								<li class="sub-section"><span class="section-number">8.7.2 </span>Derby Installation</li>
								<li class="sub-section"><span class="section-number">8.7.3 </span>File Structure</li>
								<li class="sub-section"><span class="section-number">8.7.4 </span>Dependencies</li>
								<li class="sub-section"><span class="section-number">8.7.5 </span>Views</li>
								<li class="sub-section"><span class="section-number">8.7.6 </span>Main Server</li>
								<li class="sub-section"><span class="section-number">8.7.7 </span>Derby Application</li>
								<li class="sub-section"><span class="section-number">8.7.8 </span>Launching Hello World App</li>
								<li class="sub-section"><span class="section-number">8.7.9 </span>Passing Values to Back-End</li>
								<li class="chapter">Conclusion and Further Reading</li>
								<li class="toc-section">Conclusion</li>
								<li class="toc-section">Further Reading</li>
								<li class="sub-section">JavaScript resources and free ebooks</li>
								<li class="sub-section">JavaScript books</li>
								<li class="sub-section">Node.js resources and free ebooks</li>
								<li class="sub-section">Node.js books</li>
								<li class="sub-section">Interactive online classes and courses</li>
								<li class="sub-section">Startup books and blogs</li>
								<li class="chapter">Acknowledgment</li>
								<li class="chapter">About the Author</li>
							</ul>
				        </div>
				      </div>
				    </div>
						
				  </div>
				</section>
						
				<section class="section default" id="section-sample" data-section="section-sample">
					<div class="container-fluid">
						<div class="row-fluid title">
							<div class="span4">
								<h2>Intro to Backbone.js</h2>
							</div>
							<div class="span8 hidden-phone">	
								<hr>
							</div>
						</div>
						<div class="row-fluid desc">
							<div class="span5">
								<ul class="free-chapter">
									<li class="sample-chapters">
										<a href="#setting-up"><i class="icon-chevron-down"></i>Setting up Backbone.js App from Scratch</a></li>									
									<li class="sample-chapters">
										<a href="#collections"><i class="icon-chevron-down"></i>Working with Collections</a></li>
									<li class="sample-chapters">
										<a href="#event-binding"><i class="icon-chevron-down"></i>Event Binding</a></li>
									<li class="sample-chapters">
										<a href="#views"><i class="icon-chevron-down"></i>Views and Subviews with Underscore.js</a></li>
									<li class="sample-chapters">
										<a href="#refactoring"><i class="icon-chevron-down"></i>Refactoring</a></li>
									<li class="sample-chapters">
										<a href="#amd"><i class="icon-chevron-down"></i>AMD and Require.js for Development</a></li>
									<li class="sample-chapters">
										<a href="#require"><i class="icon-chevron-down"></i>Require.js for Production</a></li>
									<li class="sample-chapters">
										<a href="#ssbsk"><i class="icon-chevron-down"></i>Super Simple Backbone Starter Kit</a></li>
								</ul>
							</div>
						</div>
							<div class="row-fluid button">
								<a class="btn-inverse pull-left" target="_blank" href="http://samples.leanpub.com/rapid-prototyping-with-js-sample.pdf">
									Download as <b>PDF</b>
									<i class="icon-download-alt"></i>
								</a>
							</div>							

						<div class="row-fluid book-text">				
<p><strong>Summary</strong>: demonstration of how to build Backbone.js application from scratch and use views, collections, subviews, models, event binding, AMD, Require.js on the example of the apple database application.</p>

<blockquote>
<p><em>&#8220;Code is not an asset. It&#8217;s a liability. The more you write, the more you&#8217;ll have to maintain later.&#8221;</em> — Unknown</p>
</blockquote>

<h2 id="setting-up">Setting up Backbone.js App from Scratch</h2>

<p>We&#8217;re going to build a typical starter &#8220;Hello World&#8221; application using Backbone.js and Mode-View-Controller (MVC) architecture. I know it might sound like overkill in the beginning, but as we go along we&#8217;ll add more and more complexity, including Models, Subviews and Collections. </p>

<p>A full source code for the &#8220;Hello World&#8221; app is available at GitHub under <a href="https://github.com/azat-co/rpjs/tree/master/backbone/hello-world">github.com/azat-co/rpjs/backbone/hello-world</a>.</p>

<h3>Dependencies</h3>

<p>Download the following libraries:</p>

<ul>
<li><p><a href="http://code.jquery.com/jquery-1.9.0.js">jQuery 1.9 development source file</a></p></li>
<li><p><a href="http://underscorejs.org/underscore.js">Underscore.js development source file</a></p></li>
<li><p><a href="http://backbonejs.org/backbone.js">Backbone.js development source file</a></p></li>
</ul>

<p>And include these frameworks in the <strong>index.html</strong> file like this:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script&gt;
    //TODO write some awesome JS code!
  &lt;/script&gt;

&lt;/head&gt;
&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p><b>Note:</b> We can also put <code>&lt;script&gt;</code> tags right after the <code>&lt;/body&gt;</code> tag in the end of the file. This will change the order in which scripts and the rest of HTML are loaded, and impact performance in large files.</p>

<p>Let&#8217;s define a simple Backbone.js Router inside of a <code>&lt;script&gt;</code> tag:</p>



<pre><code>  ...
  var router = Backbone.Router.extend({
  });
  ...</code></pre>

<p><b>Note:</b> For now, to Keep It Simple Stupid (KISS), we&#8217;ll be putting all of our JavaScript code right into the <strong>index.html</strong> file. This is not a good idea for a real development or production code. We&#8217;ll refactor it later.</p>

<p>Then set up a special <code>routes</code> property inside of an <strong>extend</strong> call:</p>



<pre><code>  var router = Backbone.Router.extend({
    routes: {
    }
  });</code></pre>

<p>The Backbone.js <strong>routes</strong> property needs to be in the following format: <code>'path/:param':'action'</code> which will result in the <code>filename#path/param</code> URL triggering a function named <strong>action</strong> (defined in the Router object). For now, we&#8217;ll add a single <strong>home</strong> route:</p>



<pre><code>  var router = Backbone.Router.extend({
    routes: {
      &apos;&apos;: &apos;home&apos;
    }
  });</code></pre>

<p>This is good, but now we need to add a <strong>home</strong> function:</p>



<pre><code>  var router = Backbone.Router.extend({
    routes: {
      &apos;&apos;: &apos;home&apos;
    },
    home: function(){
      //TODO render html
    }
  });</code></pre>

<p>We&#8217;ll come back to the <strong>home</strong> function later to add more logic for creating and rendering of a View. Right now we should define our <strong>homeView</strong>:</p>



<pre><code>  var homeView = Backbone.View.extend({
  });</code></pre>

<p>It looks familiar, right? Backbone.js uses similar syntax for all of its components: the <strong>extend</strong> function and a JSON object as a parameter to it. </p>

<p>There are a multiple ways to proceed from now on, but the best practice is to use the <strong>el</strong> and <strong><em>template</em></strong> properties, which are magical, i.e., special in Backbone.js:</p>



<pre><code>  var homeView = Backbone.View.extend({
    el: &apos;body&apos;,
    template: _.template(&apos;Hello World&apos;)   
  });</code></pre>

<p>The property <strong>el</strong> is just a string that holds the jQuery selector (you can use class name with &#8216;.&#8217; and id name with &#8216;#&#8217;). The template property has been assigned an Underscore.js function <strong>template</strong> with just a plain text &#8216;Hello World&#8217;. </p>

<p>To render our <strong>homeView</strong> we use <code>this.$el</code> which is a compiled jQuery object referencing element in an <strong>el</strong> property, and the jQuery <code>.html()</code> function to replace HTML with <code>this.template()</code> value. Here is what the full code for our Backbone.js View looks like:</p>



<pre><code>  var homeView = Backbone.View.extend({
    el: &apos;body&apos;,
    template: _.template(&apos;Hello World&apos;),
    render: function(){
      this.$el.html(this.template({}));
    }
  });</code></pre>

<p>Now, if we go back to the <strong>router</strong> we can add these two lines to the <strong>home</strong> function:</p>



<pre><code>  var router = Backbone.Router.extend({
    routes: {
      &apos;&apos;: &apos;home&apos;
    },
    initialize: function(){
      
    },
    home: function(){
      this.homeView = new homeView;
      this.homeView.render();
    }
  });</code></pre>

<p>The first line will create the <em>homeView</em> object and assign it to the <em>homeView</em> property of the router. The second line will call the <code>render()</code> method in the <em>homeView</em> object, triggering the &#8216;Hello World&#8217; output.</p>

<p>Finally, to start a Backbone app, we call <code>new Router</code> inside of a document-ready wrapper to make sure that the file&#8217;s DOM is fully loaded:</p>



<pre><code>var app;
$(document).ready(function(){
  app = new router;
  Backbone.history.start();      
})</code></pre>

<p>Here is the full code of the <strong>index.html</strong> file:</p>



<pre><code>
&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script&gt;
    var app;
    var router = Backbone.Router.extend({
      routes: {
        &apos;&apos;: &apos;home&apos;
      },
      initialize: function(){
       //some code to execute
       //when the object is instantiated 
      },
      home: function(){
        this.homeView = new homeView;
        this.homeView.render();
      }
    });

    var homeView = Backbone.View.extend({
      el: &apos;body&apos;,
      template: _.template(&apos;Hello World&apos;),
      render: function(){
        this.$el.html(this.template({}));
      }
    });

    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })

  &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Open <strong>index.html</strong> in the browser to see if it works, i.e., the &#8216;Hello World&#8217; message should be on the page.</p>

<h2 id="collections">Working with Collections</h2>

<p>The full source code of this example is under <a href="https://github.com/azat-co/rpjs/tree/master/backbone/collections">rpjs/backbone/collections</a>. It&#8217;s built on top of &#8220;Hello World&#8221; example from the <strong>Setting up Backbone.js App from Scratch</strong> exercise which is available for download at <a href="https://github.com/azat-co/rpjs/tree/master/backbone/hello-world">rpjs/backbone/hello-world</a>.</p>

<p>We should add some data to play around with, and to hydrate our views. To do this, add this right after the <strong>script</strong> tag and before the other code:</p>



<pre><code>  var appleData = [
    {
      name: &quot;fuji&quot;,
      url: &quot;img/fuji.jpg&quot;
    },
    {
      name: &quot;gala&quot;,
      url: &quot;img/gala.jpg&quot;
    }      
  ];</code></pre>

<p>This is our apple <em>database</em>. :-) Or to be more correct, REST API endpoint-substitute, which provides us with names and image URLs of the apples (data models). </p>

<p><b>Note:</b> This mock dataset can be easily substituted by assigning REST API endpoints of your back-end to <code>url</code> properties in Backbone.js Collections and/or Models, and calling the <code>fetch()</code> method on them.</p>

<p>Now to make the User Experience (UX) a little bit better, we can add a new route to the <strong>routes</strong> object in the Backbone Route:</p>



<pre><code>  ...  
  routes: {
    &apos;&apos;: &apos;home&apos;,
    &apos;apples/:appleName&apos;: &apos;loadApple&apos;
  },
  ...</code></pre>

<p>This will allow users to go to <code>index.html#apples/SOMENAME</code> and expect to see some information about an apple. This information will be fetched and rendered by the <strong>loadApple</strong> function in the Backbone Router definition:</p>



<pre><code>  loadApple: function(appleName){
    this.appleView.render(appleName);
  }</code></pre>

<p>Have you noticed an <strong>appleName</strong> variable? It&#8217;s exactly the same name as the one that we&#8217;ve used in <strong>route</strong>. This is how we can access query string parameters (e.g, <code>?param=value&amp;q=search</code>) in Backbone.js.</p>

<p>Now we&#8217;ll need to refactor some more code to create a Backbone Collection, populate it with data in our <strong>appleData</strong> variable, and to pass the collection to <strong>homeView</strong> and <strong>appleView</strong>. Conveniently enough, we do it all in the Router constructor method <strong>initialize</strong>:</p>



<pre><code>  initialize: function(){
    var apples = new Apples();
    apples.reset(appleData);
    this.homeView = new homeView({collection: apples});
    this.appleView = new appleView({collection: apples});
  },</code></pre>

<p>At this point, we&#8217;re pretty much done with the Router class and it should look like this:</p>



<pre><code>  var router = Backbone.Router.extend({
    routes: {
      &apos;&apos;: &apos;home&apos;,
      &apos;apples/:appleName&apos;: &apos;loadApple&apos;
    },
    initialize: function(){
      var apples = new Apples();
      apples.reset(appleData);
      this.homeView = new homeView({collection: apples});
      this.appleView = new appleView({collection: apples});
    },
    home: function(){        
      this.homeView.render();
    },
    loadApple: function(appleName){
      this.appleView.render(appleName);
    }
  });</code></pre>

<p>Let&#8217;s modify our <strong>homeView</strong> a bit to see the whole <em>database</em>:</p>



<pre><code>  var homeView = Backbone.View.extend({
    el: &apos;body&apos;,
    template: _.template(&apos;Apple data: &lt;%= data %&gt;&apos;),
    render: function(){
      this.$el.html(this.template({
      data: JSON.stringify(this.collection.models)
    }));
    }
  });</code></pre>

<p>For now, we just output the string representation of the JSON object in the browser. This is not user-friendly at all, but later we&#8217;ll improve it by using a list and subviews. </p>

<p>Our apple Backbone Collection is very clean and simple:</p>



<pre><code>  var Apples = Backbone.Collection.extend({
  });</code></pre>

<p><b>Note:</b> Backbone automatically creates models inside of a collection when we use the <code>fetch()</code> or <code>reset()</code> functions.</p>

<p>Apple view is not any more complex; it has only two properties: <strong>template</strong> and <strong>render</strong>. In a template, we want to display <strong>figure</strong>, <strong>img</strong> and <strong>figcaption</strong> tags with specific values. The Underscore.js template engine is handy at this task:</p>



<pre><code>  var appleView = Backbone.View.extend({
    template: _.template(
          &apos;&lt;figure&gt;\
             &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
             &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
           &lt;/figure&gt;&apos;),
  ...
  });</code></pre>

<p>To make a JavaScript string, which has HTML tags in it, more readable we can use the backslash line breaker escape (<code>\</code>) symbol, or close strings and concatenate them with a plus sign (<code>+</code>). This is an example of <strong>appleView</strong> above, which is refactored using the latter approach:</p>



<pre><code>  var appleView = Backbone.View.extend({
    template: _.template(
        &apos;&lt;figure&gt;&apos;+
          +&apos;&lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;&apos;+
          +&apos;&lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;&apos;+
        +&apos;&lt;/figure&gt;&apos;),
  ...</code></pre>

<p>Please note the &#8216;&lt;%=&#8217; and &#8216;%&gt;&#8217; symbols; they are the instructions for Undescore.js to print values in properties <strong>url</strong> and <strong>name</strong> of the <strong>attributes</strong> object.</p>

<p>Finally, we&#8217;re adding the render function to the <strong>appleView</strong> class. </p>



<pre><code>  render: function(appleName){
    var appleModel = this.collection.where({name:appleName})[0];
    var appleHtml = this.template(appleModel);
    $(&apos;body&apos;).html(appleHtml);
  }</code></pre>

<p>We find a model within the collection via <code>where()</code> method and use <code>[]</code> to pick the first element. Right now, the <strong>render</strong> function is responsible for both loading the data and rendering it. Later we&#8217;ll refactor the function to separate these two functionalities into different methods.</p>

<p>The whole app, which is in the <a href="https://github.com/azat-co/rpjs/tree/master/backbone/collections">rpjs/backbone/collections/index.html</a> folder, looks like this:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script&gt;
   var appleData = [
      {
        name: &quot;fuji&quot;,
        url: &quot;img/fuji.jpg&quot;
      },
      {
        name: &quot;gala&quot;,
        url: &quot;img/gala.jpg&quot;
      }      
    ];
    var app;
    var router = Backbone.Router.extend({
      routes: {
        &quot;&quot;: &quot;home&quot;,
        &quot;apples/:appleName&quot;: &quot;loadApple&quot;
      },
      initialize: function(){
        var apples = new Apples();
        apples.reset(appleData);
        this.homeView = new homeView({collection: apples});
        this.appleView = new appleView({collection: apples});
      },
      home: function(){        
        this.homeView.render();
      },
      loadApple: function(appleName){
        this.appleView.render(appleName);
      }
    });

    var homeView = Backbone.View.extend({
      el: &apos;body&apos;,
      template: _.template(&apos;Apple data: &lt;%= data %&gt;&apos;),
      render: function(){
        this.$el.html(this.template({
        data: JSON.stringify(this.collection.models)
      }));
      }
      //TODO subviews
    });

    var Apples = Backbone.Collection.extend({

    });
    var appleView = Backbone.View.extend({
      template: _.template(&apos;&lt;figure&gt;\
                  &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
                  &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
                &lt;/figure&gt;&apos;),
      //TODO re-write with load apple and event binding
      render: function(appleName){
        var appleModel = this.collection.where({
          name:appleName
        })[0];
        var appleHtml = this.template(appleModel);
        $(&apos;body&apos;).html(appleHtml);
      }
    });
    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })

  &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Open <code>collections/index.html</code> file in your browser. You should see the data from our &#8220;database&#8221;, i.e., <code>Apple data: [{&quot;name&quot;:&quot;fuji&quot;,&quot;url&quot;:&quot;img/fuji.jpg&quot;},{&quot;name&quot;:&quot;gala&quot;,&quot;url&quot;:&quot;img/gala.jpg&quot;}]</code>. </p>

<p>Now, let&#8217; go to <code>collections/index.html#apples/fuji</code> or <code>collections/index.html#apples/gala</code> in your browser. We expect to see an image with a caption. It&#8217;s a detailed view of an item, which in this case is an apple. Nice work!</p>

<h2 id="event-binding">Event Binding</h2>

<p>In real life, getting data does not happen instantaneously, so let&#8217;s refactor our code to simulate it. For a better UI/UX, we&#8217;ll also have to show a loading icon (a.k.a. spinner or ajax-loader) to users to notify them that the information is being loaded.</p>

<p>It&#8217;s a good thing that we have event binding in Backbone. Without it, we&#8217;ll have to pass a function that renders HTML as a callback to the data loading function, to make sure that the rendering function is not executed before we have the actual data to display. </p>

<p>Therefore, when a user goes to detailed view (<code>apples/:id</code>) we only call the function that loads the data. Then, with the proper event listeners, our view will automagically (this is not a typo) update itself, when there is a new data (or on a data change, Backbone.js supports multiple and even custom events).</p>

<p>Let&#8217;s change the code in the router:</p>



<pre><code>  ...
    loadApple: function(appleName){
      this.appleView.loadApple(appleName);
    }
  ...</code></pre>

<p>Everything else remains the same utill we get to the <strong>appleView</strong> class. We&#8217;ll need to add a constructor or an <strong>initialize</strong> method, which is a special word/property in the Backbone.js framework. It&#8217;s called each time we create an instance of an object, i.e., <code>var someObj = new SomeObject()</code>. We can also pass extra parameters to the <strong>initialize</strong> function, as we did with our views (we passed an object with the key <strong>collection</strong> and the value of <strong>apples</strong> Backbone Collection). Read more on Backbone.js constructors at <a href="http://backbonejs.org/#View-constructor">backbonejs.org/#View-constructor</a>.</p>



<pre><code>  ...
  var appleView = Backbone.View.extend({
    initialize: function(){
      //TODO: create and setup model (aka an apple)
    },
  ...</code></pre>

<p>Great, we have our <strong>initialize</strong> function. Now we need to create a model which will represent a single apple and set up proper event listeners on the model. We&#8217;ll use two types of events, <code>change</code> and a custom event called <code>spinner</code>. To do that, we are going to use the <code>on()</code> function, which takes these properties: <code>on(event, actions, context)</code> — read more about it at <a href="http://backbonejs.org/#Events-on">backbonejs.org/#Events-on</a>:</p>



<pre><code>  ...
  var appleView = Backbone.View.extend({
      this.model = new (Backbone.Model.extend({}));
      this.model.bind(&apos;change&apos;, this.render, this);
      this.bind(&apos;spinner&apos;,this.showSpinner, this);
    },
  ...      </code></pre>

<p>The code above basically boils down to two simple things:</p>

<ol>
<li>Call <code>render()</code> function of <strong>appleView</strong> object when the model has changed</li>
<li>Call <code>showSpinner()</code> method of <strong>appleView</strong> object when event <strong>spinner</strong> has been fired.</li>
</ol>

<p>So far, so good, right? But what about the spinner, a GIF icon? Let&#8217;s create a new property in <strong>appleView</strong>:</p>



<pre><code>  ...
    templateSpinner: &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;,
  ...    </code></pre>

<p>Remember the <code>loadApple</code> call in the router? This is how we can implement the function in <strong>appleView</strong>:</p>



<pre><code>  ...
  loadApple:function(appleName){
    this.trigger(&apos;spinner&apos;); 
    //show spinner GIF image
    var view = this; 
    //we&apos;ll need to access that inside of a closure
    setTimeout(function(){ 
    //simulates real time lag when 
    //fetching data from the remote server
      view.model.set(view.collection.where({
        name:appleName
      })[0].attributes);  
    },1000);    
  },
  ...</code></pre>

<p>The first line will trigger the <code>spinner</code> event (the function for which we still have to write). </p>

<p>The second line is just for scoping issues (so we can use <strong>appleView</strong> inside of the closure). </p>

<p>The <code>setTimeout</code> function is simulating a time lag of a real remote server response. Inside of it, we assign attributes of a selected model to our view&#8217;s model by using a <code>model.set()</code> function and a <strong>model.attributes</strong> property (which returns the properties of a model). </p>

<p>Now we can remove an extra code from the <code>render</code> method and implement the <code>showSpinner</code> function:</p>



<pre><code>  render: function(appleName){
    var appleHtml = this.template(this.model);
    $(&apos;body&apos;).html(appleHtml);
  },
  showSpinner: function(){
    $(&apos;body&apos;).html(this.templateSpinner);        
  }
  ...</code></pre>

<p>That&#8217;s all! Open <code>index.html#apples/gala</code> or <code>index.html#apples/fuji</code> in your browser and enjoy the loading animation while waiting for an apple image to load. </p>

<p>The full code of the <strong>index.html</strong> file:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script&gt;
   var appleData = [
      {
        name: &quot;fuji&quot;,
        url: &quot;img/fuji.jpg&quot;
      },
      {
        name: &quot;gala&quot;,
        url: &quot;img/gala.jpg&quot;
      }      
    ];
    var app;
    var router = Backbone.Router.extend({
      routes: {
        &quot;&quot;: &quot;home&quot;,
        &quot;apples/:appleName&quot;: &quot;loadApple&quot;
      },
      initialize: function(){
        var apples = new Apples();
        apples.reset(appleData);
        this.homeView = new homeView({collection: apples});
        this.appleView = new appleView({collection: apples});
      },
      home: function(){        
        this.homeView.render();
      },
      loadApple: function(appleName){
        this.appleView.loadApple(appleName);

      }
    });

    var homeView = Backbone.View.extend({
      el: &apos;body&apos;,
      template: _.template(&apos;Apple data: &lt;%= data %&gt;&apos;),
      render: function(){
        this.$el.html(this.template({
          data: JSON.stringify(this.collection.models)
        }));
      }
      //TODO subviews
    });

    var Apples = Backbone.Collection.extend({

    });
    var appleView = Backbone.View.extend({
      initialize: function(){
        this.model = new (Backbone.Model.extend({}));
        this.model.on(&apos;change&apos;, this.render, this);
        this.on(&apos;spinner&apos;,this.showSpinner, this);
      },
      template: _.template(&apos;&lt;figure&gt;\
                &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
                &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
                &lt;/figure&gt;&apos;),
      templateSpinner: &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;,

      loadApple:function(appleName){
        this.trigger(&apos;spinner&apos;);
        var view = this; //we&apos;ll need to access 
        //that inside of a closure
        setTimeout(function(){ //simulates real time 
        //lag when fetching data from the remote server
          view.model.set(view.collection.where({
            name:appleName
          })[0].attributes);  
        },1000);
        
      },

      render: function(appleName){
        var appleHtml = this.template(this.model);
        $(&apos;body&apos;).html(appleHtml);
      },
      showSpinner: function(){
        $(&apos;body&apos;).html(this.templateSpinner);        
      }

    });
    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })

  &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;a href=&quot;#apples/fuji&quot;&gt;fuji&lt;/a&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<h2 id="views">Views and Subviews with Underscore.js</h2>

<p>This example is available at <a href="https://github.com/azat-co/rpjs/tree/master/backbone/subview">rpjs/backbone/subview</a>.</p>

<p>Subviews are Backbone Views that are created and used inside of another Backbone View. A subviews concept is a great way to abstract (separate) UI events (e.g., clicks), and templates for similarly structured elements (e.g., apples).</p>

<p>A use case of a Subview might include a row in a table, a list item in a list, a paragraph, a new line, etc. </p>

<p>We&#8217;ll refactor our home page to show a nice list of apples. Each list item will have an apple name and a &#8220;buy&#8221; link with an <strong>onClick</strong> event. Let&#8217;s start by creating a subview for a single apple with our standard Backbone <code>extend()</code> function:</p>



<pre><code>  ...
  var appleItemView = Backbone.View.extend({
    tagName: &apos;li&apos;,
    template: _.template(&apos;&apos;
           +&apos;&lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;&apos;
          +&apos;&lt;%=name%&gt;&apos;
          +&apos;&lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;&apos;),
    events: {
      &apos;click .add-to-cart&apos;: &apos;addToCart&apos;
    },
    render: function() {
      this.$el.html(this.template(this.model.attributes));
    },
    addToCart: function(){
      this.model.collection.trigger(&apos;addToCart&apos;, this.model);
    }
  });
  ...</code></pre>

<p>Now we can populate the object with <strong>tagName</strong>, <strong>template</strong>, <strong>events</strong>, <strong>render</strong> and <strong>addToCart</strong> properties/methods. </p>



<pre><code>  ...
  tagName: &apos;li&apos;,
  ...</code></pre>

<p><strong>tagName</strong> automatically allows Backbone.js to create an HTML element with the specified tag name, in this case <code>&lt;li&gt;</code> — list item. This will be a representation of a single apple, a row in our list.</p>



<pre><code>  ...
  template: _.template(&apos;&apos;
         +&apos;&lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;&apos;
        +&apos;&lt;%=name%&gt;&apos;
        +&apos;&lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;&apos;),
  ...</code></pre>

<p>The template is just a string with Undescore.js instructions. They are wrapped in <code>&lt;%</code> and <code>%&gt;</code> symbols. <code>&lt;%=</code> simply means print a value. The same code can be written with backslash escapes:</p>



<pre><code>  ...
  template: _.template(&apos;\
         &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;\
        &lt;%=name%&gt;\
        &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;\
        &apos;),
  ...</code></pre>

<p>Each <code>&lt;li&gt;</code> will have two anchor elements (<code>&lt;a&gt;</code>), links to a detailed apple view (<code>#apples/:appleName</code>) and a <strong>buy</strong> button. Now we&#8217;re going to attach an event listener to the <strong>buy</strong> button:</p>



<pre><code>  ...
  events: {
    &apos;click .add-to-cart&apos;: &apos;addToCart&apos;
  },
  ...</code></pre>

<p>The syntax follows this rule: </p>



<pre><code>event + jQuery element selector: function name</code></pre>

<p>Both the key and the value (right and left parts separated by the colon) are strings. For example:</p>



<pre><code>&apos;click .add-to-cart&apos;: &apos;addToCart&apos;</code></pre>

<p>or</p>



<pre><code>&apos;click #load-more&apos;: &apos;loadMoreData&apos;</code></pre>

<p>To render each item in the list, we&#8217;ll use the jQuery <code>html()</code> function on the <code>this.$el</code> jQuery object, which is the <code>&lt;li&gt;</code> HTML element based on our <strong>tagName</strong> attribute:</p>



<pre><code>  ...
  render: function() {
    this.$el.html(this.template(this.model.attributes));
  },
  ...</code></pre>

<p>addToCart will use the <code>trigger()</code> function to notify the collection that this particular model (apple) is up for the purchase by the user:</p>



<pre><code>  ...
    addToCart: function(){
      this.model.collection.trigger(&apos;addToCart&apos;, this.model);
    }
  ...</code></pre>

<p>Here is the full code of the <strong>appleItemView</strong> Backbone View class:</p>



<pre><code>  ...
  var appleItemView = Backbone.View.extend({
    tagName: &apos;li&apos;,
    template: _.template(&apos;&apos;
           +&apos;&lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;&apos;
          +&apos;&lt;%=name%&gt;&apos;
          +&apos;&lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;&apos;),
    events: {
      &apos;click .add-to-cart&apos;: &apos;addToCart&apos;
    },
    render: function() {
      this.$el.html(this.template(this.model.attributes));
    },
    addToCart: function(){
      this.model.collection.trigger(&apos;addToCart&apos;, this.model);
    }
  });
  ...</code></pre>

<p>Easy peasy! But what about the master view, which is supposed to render all of our items (apples) and provide a wrapper <code>&lt;ul&gt;</code> container for <code>&lt;li&gt;</code> HTML elements? We need to modify and enhance our <strong>homeView</strong>. </p>

<p>To begin with, we can add extra properties of string type understandable by jQuery as selectors to <strong>homeView</strong>:</p>



<pre><code>  ...
  el: &apos;body&apos;,
  listEl: &apos;.apples-list&apos;,
  cartEl: &apos;.cart-box&apos;,
  ...</code></pre>

<p>We can use properties from above in the template, or just hard-code them (we&#8217;ll refactor our code later) in <strong>homeView</strong>:</p>



<pre><code>  ...
  template: _.template(&apos;Apple data: \
    &lt;ul class=&quot;apples-list&quot;&gt;\
    &lt;/ul&gt;\
    &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;),
  ...</code></pre>

<p>The <strong>initialize</strong> function will be called when <strong>homeView</strong> is created (<code>new homeView()</code>) — in it we render our template (with our favorite by now <code>html()</code> function), and attach an event listener to the collection (which is a set of apple models):</p>



<pre><code>  ...
    initialize: function() {
      this.$el.html(this.template);
      this.collection.on(&apos;addToCart&apos;, this.showCart, this);
    },
  ...</code></pre>

<p>The syntax for the binding event is covered in the previous section. In essence, it is calling the <code>showCart()</code> function of <strong>homeView</strong>. In this function, we append <strong>appleName</strong> to the cart (along with a line break, a <code>&lt;br/&gt;</code> element):</p>



<pre><code>  ...    
    showCart: function(appleModel) {
      $(this.cartEl).append(appleModel.attributes.name+&apos;&lt;br/&gt;&apos;);
    },
  ...</code></pre>

<p>Finally, here is our long-awaited <code>render()</code> method, in which we iterate through each model in the collection (each apple), create an <strong>appleItemView</strong> for each apple, create an <code>&lt;li&gt;</code> element for each apple, and append that element to <strong>view.listEl</strong> — <code>&lt;ul&gt;</code> element with a class apples-list in the DOM:</p>



<pre><code>  ...
  render: function(){
    view = this; 
    //so we can use view inside of closure
    this.collection.each(function(apple){
      var appleSubView = new appleItemView({model:apple}); 
      // creates subview with model apple
      appleSubView.render(); 
      // compiles template and single apple data
      $(view.listEl).append(appleSubView.$el);   
      //append jQuery object from single 
      //apple to apples-list DOM element
    });
  }
  ...</code></pre>

<p>Let&#8217;s make sure we didn&#8217;t miss anything in the <strong>homeView</strong> Backbone View:</p>



<pre><code>  ...
  var homeView = Backbone.View.extend({
    el: &apos;body&apos;,
    listEl: &apos;.apples-list&apos;,
    cartEl: &apos;.cart-box&apos;,
    template: _.template(&apos;Apple data: \
      &lt;ul class=&quot;apples-list&quot;&gt;\
      &lt;/ul&gt;\
      &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;),
    initialize: function() {
      this.$el.html(this.template);
      this.collection.on(&apos;addToCart&apos;, this.showCart, this);
    },
    showCart: function(appleModel) {
      $(this.cartEl).append(appleModel.attributes.name+&apos;&lt;br/&gt;&apos;);
    },      
    render: function(){
      view = this; //so we can use view inside of closure
      this.collection.each(function(apple){
        var appleSubView = new appleItemView({model:apple}); 
        // create subview with model apple
        appleSubView.render(); 
        // compiles tempalte and single apple data
        $(view.listEl).append(appleSubView.$el);   
        //append jQuery object from single apple 
        //to apples-list DOM element
      });
    }
  }); 
  ...</code></pre>

<p>You should be able to click on the buy, and the cart will populate with the apples of your choice. Looking at an individual apple does not require typing its name in the URL address bar of the browser anymore. We can click on the name and it opens a new window with a detailed view. </p>

<p><img src="img/backbone-subview1.png" alt="The list of apples rendered by subviews." /></p>

<p>By using subviews, we reused the template for all of the items (apples) and attached a specific event to each of them. Those events are smart enough to pass the information about the model to other objects: views and collections.</p>

<p>Just in case, here is the full code for the subviews example, which is also available at <a href="https://github.com/azat-co/rpjs/blob/master/backbone/subview/index.html">rpjs/backbone/subview/index.html</a>:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script&gt;
   var appleData = [
      {
        name: &quot;fuji&quot;,
        url: &quot;img/fuji.jpg&quot;
      },
      {
        name: &quot;gala&quot;,
        url: &quot;img/gala.jpg&quot;
      }      
    ];
    var app;
    var router = Backbone.Router.extend({
      routes: {
        &quot;&quot;: &quot;home&quot;,
        &quot;apples/:appleName&quot;: &quot;loadApple&quot;
      },
      initialize: function(){
        var apples = new Apples();
        apples.reset(appleData);
        this.homeView = new homeView({collection: apples});
        this.appleView = new appleView({collection: apples});
      },
      home: function(){        
        this.homeView.render();
      },
      loadApple: function(appleName){
        this.appleView.loadApple(appleName);

      }
    });
    var appleItemView = Backbone.View.extend({
      tagName: &apos;li&apos;,
      // template: _.template(&apos;&apos;
      //    +&apos;&lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;&apos;
      //    +&apos;&lt;%=name%&gt;&apos;
      //    +&apos;&lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;&apos;),
      template: _.template(&apos;\
             &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;\
            &lt;%=name%&gt;\
            &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;\
            &apos;),

      events: {
        &apos;click .add-to-cart&apos;: &apos;addToCart&apos;
      },
      render: function() {
        this.$el.html(this.template(this.model.attributes));
      },
      addToCart: function(){
        this.model.collection.trigger(&apos;addToCart&apos;, this.model);
      }
    });

    var homeView = Backbone.View.extend({
      el: &apos;body&apos;,
      listEl: &apos;.apples-list&apos;,
      cartEl: &apos;.cart-box&apos;,
      template: _.template(&apos;Apple data: \
        &lt;ul class=&quot;apples-list&quot;&gt;\
        &lt;/ul&gt;\
        &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;),
      initialize: function() {
        this.$el.html(this.template);
        this.collection.on(&apos;addToCart&apos;, this.showCart, this);
      },
      showCart: function(appleModel) {
        $(this.cartEl).append(appleModel.attributes.name+&apos;&lt;br/&gt;&apos;);
      },      
      render: function(){
        view = this; //so we can use view inside of closure
        this.collection.each(function(apple){
          var appleSubView = new appleItemView({model:apple}); 
          // create subview with model apple
          appleSubView.render(); 
          // compiles tempalte and single apple data
          $(view.listEl).append(appleSubView.$el);   
          //append jQuery object from 
          //single apple to apples-list DOM element
        });
      }
    });

    var Apples = Backbone.Collection.extend({
    });

    var appleView = Backbone.View.extend({
      initialize: function(){
        this.model = new (Backbone.Model.extend({}));
        this.model.on(&apos;change&apos;, this.render, this);
        this.on(&apos;spinner&apos;,this.showSpinner, this);
      },
      template: _.template(&apos;&lt;figure&gt;\
                &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
                &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
              &lt;/figure&gt;&apos;),
      templateSpinner: &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;,
      loadApple:function(appleName){
        this.trigger(&apos;spinner&apos;);
        var view = this; 
        //we&apos;ll need to access that inside of a closure
        setTimeout(function(){ 
        //simulates real time lag when fetching data
        // from the remote server
          view.model.set(view.collection.where({
            name:appleName
          })[0].attributes);  
        },1000);        
      },
      render: function(appleName){
        var appleHtml = this.template(this.model);
        $(&apos;body&apos;).html(appleHtml);
      },
      showSpinner: function(){
        $(&apos;body&apos;).html(this.templateSpinner);        
      }
    });

    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })

  &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The link to an individual item, e.g., <code>collections/index.html#apples/fuji</code>, also should work independently, by typing it in the browser address bar.</p>

<h2 id="refactoring">Refactoring</h2>

<p>At this point you are probably wondering what is the benefit of using the framework and still having multiple classes, objects and elements with different functionalities in one <em>single</em> file. This was done for the purpose of <em>Keep it Simple Stupid</em> (KISS). </p>

<p>The bigger your application is, the more pain there is in unorganized code base. Let&#8217;s break down our application into multiple files where each file will be one of these types:</p>

<ul>
<li>view</li>
<li>template</li>
<li>router</li>
<li>collection</li>
<li>model</li>
</ul>

<p>Let&#8217;s write these scripts to include tags into our <strong>index.html</strong> head — or body, as noted previously: </p>



<pre><code>  &lt;script src=&quot;apple-item.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-home.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apples.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-app.js&quot;&gt;&lt;/script&gt;</code></pre>

<p>The names don&#8217;t have to follow the convention of dashes and dots, as long as it&#8217;s easy to tell what each file is supposed to do.</p>

<p>Now, let&#8217;s copy our objects/classes into the corresponding files.</p>

<p>Our main <strong>index.html</strong> file should look very minimalistic:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;

  &lt;script src=&quot;apple-item.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-home.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple.view.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apples.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-app.js&quot;&gt;&lt;/script&gt;
  
&lt;/head&gt;
&lt;body&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The other files just have the code that corresponds to their filenames. </p>

<p>The content of <strong>apple-item.view.js</strong>:</p>



<pre><code>  var appleView = Backbone.View.extend({
    initialize: function(){
      this.model = new (Backbone.Model.extend({}));
      this.model.on(&apos;change&apos;, this.render, this);
      this.on(&apos;spinner&apos;,this.showSpinner, this);
    },
    template: _.template(&apos;&lt;figure&gt;\
              &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
              &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
            &lt;/figure&gt;&apos;),
    templateSpinner: &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;,

    loadApple:function(appleName){
      this.trigger(&apos;spinner&apos;);
      var view = this; 
      //we&apos;ll need to access that inside of a closure
      setTimeout(function(){ 
      //simulates real time lag when fetching 
      //data from the remote server
        view.model.set(view.collection.where({
          name:appleName
        })[0].attributes);  
      },1000);
      
    },

    render: function(appleName){
      var appleHtml = this.template(this.model);
      $(&apos;body&apos;).html(appleHtml);
    },
    showSpinner: function(){
      $(&apos;body&apos;).html(this.templateSpinner);        
    }

  });</code></pre>

<p>The <strong>apple-home.view.js</strong> file has the <strong>homeView</strong> object: </p>



<pre><code>  var homeView = Backbone.View.extend({
    el: &apos;body&apos;,
    listEl: &apos;.apples-list&apos;,
    cartEl: &apos;.cart-box&apos;,
    template: _.template(&apos;Apple data: \
      &lt;ul class=&quot;apples-list&quot;&gt;\
      &lt;/ul&gt;\
      &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;),
    initialize: function() {
      this.$el.html(this.template);
      this.collection.on(&apos;addToCart&apos;, this.showCart, this);
    },
    showCart: function(appleModel) {
      $(this.cartEl).append(appleModel.attributes.name+&apos;&lt;br/&gt;&apos;);
    },      
    render: function(){
      view = this; //so we can use view inside of closure
      this.collection.each(function(apple){
        var appleSubView = new appleItemView({model:apple}); 
        // create subview with model apple
        appleSubView.render(); 
        // compiles tempalte and single apple data
        $(view.listEl).append(appleSubView.$el);   
        //append jQuery object from 
        //single apple to apples-list DOM element
      });
    }
  });</code></pre>

<p>The <strong>apple.view.js</strong> file contains the master apples&#8217; list:</p>



<pre><code>  var appleView = Backbone.View.extend({
    initialize: function(){
      this.model = new (Backbone.Model.extend({}));
      this.model.on(&apos;change&apos;, this.render, this);
      this.on(&apos;spinner&apos;,this.showSpinner, this);
    },
    template: _.template(&apos;&lt;figure&gt;\
            &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
            &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
          &lt;/figure&gt;&apos;),
    templateSpinner: &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;,
    loadApple:function(appleName){
      this.trigger(&apos;spinner&apos;);
      var view = this; 
      //we&apos;ll need to access that inside of a closure
      setTimeout(function(){ 
      //simulates real time lag when 
      //fetching data from the remote server
        view.model.set(view.collection.where({
          name:appleName
        })[0].attributes);  
      },1000);      
    },
    render: function(appleName){
      var appleHtml = this.template(this.model);
      $(&apos;body&apos;).html(appleHtml);
    },
    showSpinner: function(){
      $(&apos;body&apos;).html(this.templateSpinner);        
    }
  });</code></pre>

<p><strong>apples.js</strong> is an empty collection:</p>



<pre><code>    var Apples = Backbone.Collection.extend({
    });</code></pre>

<p><strong>apple-app.js</strong> is the main application file with the data, the router, and the starting command:</p>



<pre><code>   var appleData = [
      {
        name: &quot;fuji&quot;,
        url: &quot;img/fuji.jpg&quot;
      },
      {
        name: &quot;gala&quot;,
        url: &quot;img/gala.jpg&quot;
      }      
    ];
    var app;
    var router = Backbone.Router.extend({
      routes: {
        &apos;&apos;: &apos;home&apos;,
        &apos;apples/:appleName&apos;: &apos;loadApple&apos;
      },
      initialize: function(){
        var apples = new Apples();
        apples.reset(appleData);
        this.homeView = new homeView({collection: apples});
        this.appleView = new appleView({collection: apples});
      },
      home: function(){        
        this.homeView.render();
      },
      loadApple: function(appleName){
        this.appleView.loadApple(appleName);
      }
    });
    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })</code></pre>

<p>Now let&#8217;s try to open the application. It should work exactly the same as in the previous Subviews example.</p>

<p>It&#8217;s a way better code organization, but it&#8217;s still far from perfect, because we still have HTML templates directly in the JavaScript code. The problem is that designers and developers can&#8217;t work on the same files, and any change to the presentation requires a change in the main code base.</p>

<p>We can add a few more JS files to our <strong>index.html</strong> file:</p>



<pre><code>  &lt;script src=&quot;apple-item.tpl.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-home.tpl.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-spinner.tpl.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple.tpl.js&quot;&gt;&lt;/script&gt;</code></pre>

<p>Usually, one Backbone view has one template, but in the case of our <strong>appleView</strong> — detailed view of an apple in a separate window — we also have a spinner, a &#8220;loading&#8221; GIF animation.</p>

<p>The contents of the files are just global variables which are assigned some string values. Later we can use these variables in our views, when we call the Underscore.js helper method <strong>_.template()</strong>.</p>

<p>The <strong>apple-item.tpl.js</strong> file:</p>



<pre><code>var appleItemTpl = &apos;\
     &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;\
    &lt;%=name%&gt;\
    &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;\
    &apos;;</code></pre>

<p>The <strong>apple-home.tpl.js</strong> file:</p>



<pre><code>var appleHomeTpl = &apos;Apple data: \
        &lt;ul class=&quot;apples-list&quot;&gt;\
        &lt;/ul&gt;\
        &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;;</code></pre>

<p>The <strong>apple-spinner.tpl.js</strong> file:</p>



<pre><code>var appleSpinnerTpl = &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;;</code></pre>

<p>The <strong>apple.tpl.js</strong> file:</p>



<pre><code>var appleTpl = &apos;&lt;figure&gt;\
                &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
                &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
              &lt;/figure&gt;&apos;;</code></pre>

<p>Try to start the application now. The full code is under the <a href="https://github.com/azat-co/rpjs/tree/master/backbone/refactor">rpjs/backbone/refactor</a> folder. </p>

<p>As you can see in the previous example, we used global scoped variables (without the keyword <code>window</code>). </p>

<p>W&gt;## Warning
W&gt;
W&gt; Be careful when you introduce a lot of variables into the global namespace (window keyword). There might be conflicts and other unpredictable consequences. For example, if you wrote an open source library and other developers started using the methods and properties directly, instead of using the interface, what happens later when you decide to finally remove/deprecate those global leaks? To prevent this, properly written libraries and applications use <a href="https://developer.mozilla.org/en-US/docs/JavaScript/Guide/Closures">JavaScript closures</a>.</p>

<p>Example of using closure and a global variable module definition:</p>



<pre><code>(function() {
  var apple= function() {
  ...//do something useful like return apple object
  };  
  window.Apple = apple;
}())</code></pre>

<p>Or in case when we need to access the app object (which creates a dependency on that object):</p>



<pre><code>(function() {
  var app = this.app; 
  //equivalent of window.appliation 
  //in case we need a dependency (app)
  this.apple = function() {
  ...//return apple object/class
  //use app variable
  }
  // eqivalent of window.apple = function(){...};
}())</code></pre>

<p>As you can see, we&#8217;ve created the function and called it immediately while also wrapping everything in parentheses <code>()</code>.</p>

<h2 id="amd">AMD and Require.js for Development</h2>

<p>AMD allows us to organize development code into modules, manage dependencies, and load them asynchronously. This article does a great job at explaining why AMD is a good thing: <a href="http://requirejs.org/docs/whyamd.html">WHY AMD?</a></p>

<p>Start your local HTTP server, e.g., <a href="http://www.mamp.info/en/index.html">MAMP</a>.</p>

<p>Let&#8217;s enhance our code by using the Require.js library. </p>

<p>Our <strong>index.html</strong> will shrink even more:</p>



<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;script src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;underscore.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;backbone.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;require.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;apple-app.js&quot;&gt;&lt;/script&gt;  
&lt;/head&gt;
&lt;body&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>We only included libraries and the single JavaScript file with our application. This file has the following structure:</p>



<pre><code>require([...],function(...){...});</code></pre>

<p>Or in a more explanatory way:</p>



<pre><code>require([
  &apos;name-of-the-module&apos;,
  ...
  &apos;name-of-the-other-module&apos;
  ],function(referenceToModule, ..., referenceToOtherModule){
  ...//some useful code
  referenceToModule.someMethod();
});</code></pre>

<p>Basically, we tell a browser to load the files from the array of filenames — first parameter of the <code>require()</code> function — and then pass our modules from those files to the anonymous callback function (second argument) as variables. Inside of the main function (anonymous callback) we can use our modules by referencing those variables. Therefore, our <strong>apple-app.js</strong> metamorphoses into:</p>



<pre><code>  require([
    &apos;apple-item.tpl&apos;, //can use shim plugin
    &apos;apple-home.tpl&apos;,
    &apos;apple-spinner.tpl&apos;,
    &apos;apple.tpl&apos;,
    &apos;apple-item.view&apos;,
    &apos;apple-home.view&apos;,
    &apos;apple.view&apos;,
    &apos;apples&apos;  
  ],function(
    appleItemTpl,
    appleHomeTpl,
    appleSpinnerTpl,
    appleTpl,
    appelItemView,
    homeView,
    appleView,
    Apples
    ){
   var appleData = [
      {
        name: &quot;fuji&quot;,
        url: &quot;img/fuji.jpg&quot;
      },
      {
        name: &quot;gala&quot;,
        url: &quot;img/gala.jpg&quot;
      }      
    ];
    var app;
    var router = Backbone.Router.extend({ 
    //check if need to be required
      routes: {
        &apos;&apos;: &apos;home&apos;,
        &apos;apples/:appleName&apos;: &apos;loadApple&apos;
      },
      initialize: function(){
        var apples = new Apples();
        apples.reset(appleData);
        this.homeView = new homeView({collection: apples});
        this.appleView = new appleView({collection: apples});
      },
      home: function(){        
        this.homeView.render();
      },
      loadApple: function(appleName){
        this.appleView.loadApple(appleName);

      }
    });

    $(document).ready(function(){
      app = new router;
      Backbone.history.start();      
    })
});    </code></pre>

<p>We put all of the code inside the function which is a second argument of <code>require()</code>, mentioned modules by their filenames, and used dependencies via corresponding parameters. Now we should define the module itself. This is how we can do it with the <code>define()</code> method:</p>



<pre><code>define([...],function(...){...})</code></pre>

<p>The meaning is similar to the <code>require()</code> function: dependencies are strings of filenames (and paths) in the array which is passed as the first argument. The second argument is the main function that accepts other libraries as parameters (the order of parameters and modules in the array is important):</p>



<pre><code>define([&apos;name-of-the-module&apos;],function(nameOfModule){
  var b = nameOfModule.render();
  return b; 
})</code></pre>

<p><b>Note:</b> There is no need to append <strong>.js</strong> to filenames. Require.js does it automatically. Shim plugin is used for importing text files such as HTML templates.</p>

<p>Let&#8217;s start with the templates and convert them into the Require.js modules. </p>

<p>The new <strong>apple-item.tpl.js</strong> file:</p>



<pre><code>define(function() {
  return &apos;\
             &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;\
            &lt;%=name%&gt;\
            &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;\
            &apos;
});   </code></pre>

<p>The <strong>apple-home.tpl</strong> file:</p>



<pre><code>define(function(){ 
  return &apos;Apple data: \
        &lt;ul class=&quot;apples-list&quot;&gt;\
        &lt;/ul&gt;\
        &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;;
});</code></pre>

<p>The <strong>apple-spinner.tpl.js</strong> file:</p>



<pre><code>define(function(){
  return &apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;;
});</code></pre>

<p>The <strong>apple.tpl.js</strong> file:</p>



<pre><code>define(function(){
  return &apos;&lt;figure&gt;\
          &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;\
          &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;\
        &lt;/figure&gt;&apos;;
 });                           </code></pre>

<p>The <strong>apple-item.view.js</strong> file:</p>



<pre><code>define(function() {
  return &apos;\
             &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;\
            &lt;%=name%&gt;\
            &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;\
            &apos;
});   </code></pre>

<p>In the <strong>apple-home.view.js</strong> file, we need to declare dependencies on apple-home.tpl and apple-item.view.js files:</p>



<pre><code>define([&apos;apple-home.tpl&apos;,&apos;apple-item.view&apos;],function(
  appleHomeTpl,
  appleItemView){
return  Backbone.View.extend({
      el: &apos;body&apos;,
      listEl: &apos;.apples-list&apos;,
      cartEl: &apos;.cart-box&apos;,
      template: _.template(appleHomeTpl),
      initialize: function() {
        this.$el.html(this.template);
        this.collection.on(&apos;addToCart&apos;, this.showCart, this);
      },
      showCart: function(appleModel) {
        $(this.cartEl).append(appleModel.attributes.name+&apos;&lt;br/&gt;&apos;);
      },      
      render: function(){
        view = this; //so we can use view inside of closure
        this.collection.each(function(apple){
          var appleSubView = new appleItemView({model:apple}); 
          // create subview with model apple
          appleSubView.render(); 
          // compiles tempalte and single apple data
          $(view.listEl).append(appleSubView.$el);   
          //append jQuery object from 
          //single apple to apples-list DOM element
        });
      }
    });
})</code></pre>

<p>The <strong>apple.view.js</strong> file depends on two templates:</p>



<pre><code>define([    
  &apos;apple.tpl&apos;,
  &apos;apple-spinner.tpl&apos;
],function(appleTpl,appleSpinnerTpl){
  return  Backbone.View.extend({
    initialize: function(){
      this.model = new (Backbone.Model.extend({}));
      this.model.on(&apos;change&apos;, this.render, this);
      this.on(&apos;spinner&apos;,this.showSpinner, this);
    },
    template: _.template(appleTpl),
    templateSpinner: appleSpinnerTpl,
    loadApple:function(appleName){
      this.trigger(&apos;spinner&apos;);
      var view = this; 
      //we&apos;ll need to access that inside of a closure
      setTimeout(function(){ 
      //simulates real time lag when 
      //fetching data from the remote server
        view.model.set(view.collection.where({
          name:appleName
        })[0].attributes);  
      },1000);      
    },
    render: function(appleName){
      var appleHtml = this.template(this.model);
      $(&apos;body&apos;).html(appleHtml);
    },
    showSpinner: function(){
      $(&apos;body&apos;).html(this.templateSpinner);        
    }
  });
});</code></pre>

<p>The <strong>apples.js</strong> file:</p>



<pre><code>define(function(){
    return Backbone.Collection.extend({})
});   </code></pre>

<p>I hope you can see the pattern by now. All of our code is split into the separate files based on the logic (e.g., view class, collection class, template). The main file loads all of the dependencies with the <code>require()</code> function. If we need some module in a non-main file, then we can ask for it in the <code>define()</code> method. Usually, in modules we want to return an object, e.g., in templates we return strings and in views we return Backbone View classes/objects.</p>

<p>Try launching the example under the <a href="https://github.com/azat-co/rpjs/tree/master/backbone/amd">rpjs/backbone/amd</a> folder. Visually, there shouldn&#8217;t be any changes. If you open the Network tab in the Developers Tool, you can see a difference in how the files are loaded. The old <a href="https://github.com/azat-co/rpjs/blob/master/backbone/refactor/index.html">rpjs/backbone/refactor/index.html</a> file loads our JS scripts in a serial manner while the new the new <a href="https://github.com/azat-co/rpjs/blob/master/backbone/amd/index.html">rpjs/backbone/amd/index.html</a> file loads them in parallel. </p>

<p><img src="img/backbone-amd2.png" alt="The old rpjs/backbone/refactor/index.html file" /></p>

<p><img src="img/backbone-amd1.png" alt="The new rpjs/backbone/amd/index.html file" /></p>

<p>Require.js has a lot of configuration options which are defined through <code>requirejs.config()</code> call in a top level of an HTML page. More information can be found at <a href="http://requirejs.org/docs/api.html#config">requirejs.org/docs/api.html#config</a>.</p>

<p>Let&#8217;s add a bust parameter to our example. The bust argument will be appended to the URL of each file preventing a browser from caching the files. Perfect for development and terrible for production. :-)</p>

<p>Add this to the <strong>apple-app.js</strong> file in front of everything else:</p>



<pre><code>requirejs.config({
  urlArgs: &quot;bust=&quot; +  (new Date()).getTime()
}); 
require([
...</code></pre>

<p><img src="img/backbone-amd3.png" alt="Network Tab with bust parameter added" /></p>

<p>Please note that each file request now has status 200 instead of 304 (not modified).</p>

<h2 id="require">Require.js for Production</h2>

<p>We&#8217;ll use the Node Package Manager (NPM) to install the <strong>requirejs</strong> library (it&#8217;s not a typo; there&#8217;s no period in the name). In your project folder, run this command in a terminal:</p>



<pre><code>$ npm install requirejs</code></pre>

<p>Or add <code>-g</code> for global installation:</p>



<pre><code>$ npm install -g requirejs</code></pre>

<p>Create a file <strong>app.build.js</strong>:</p>

<pre><code>({
    appDir: &quot;./js&quot;,
    baseUrl: &quot;./&quot;,
    dir: &quot;build&quot;,
    modules: [
        {
            name: &quot;apple-app&quot;
        }
    ]
})</code></pre>

<p>Move the script files under the <code>js</code> folder (appDir property). The builded files will be placed under the <code>build</code> folder (dir parameter). For more information on the build file, check out this <em>extensive</em> example with comments: <a href="https://github.com/jrburke/r.js/blob/master/build/example.build.js">https://github.com/jrburke/r.js/blob/master/build/example.build.js</a>.</p>

<p>Now everything should be ready for building one gigantic JavaScript file, which will have all of our dependencies/modules:</p>



<pre><code>$ r.js -o app.build.js</code></pre>

<p>or</p>



<pre><code>$ node_modules/requirejs/bin/r.js -o app.build.js</code></pre>

<p>You should get a list of the r.js processed files.</p>

<p><img src="img/backbone-require.png" alt="A list of the r.js processed files." /></p>

<p>Open <strong>index.html</strong> from the build folder in a browser window, and check if the Network Tab shows any improvement now with just one request/file to load.</p>

<p><img src="img/backbone-require2.png" alt="Performance improvement with one request/file to load." /></p>

<p>For more information, check out the official r.js documentation at <a href="http://requirejs.org/docs/optimization.html">requirejs.org/docs/optimization.html</a>.</p>

<p>The example code is available under the <a href="https://github.com/azat-co/rpjs/tree/master/backbone/r">rpjs/backbone/r</a> and <a href="https://github.com/azat-co/rpjs/tree/master/backbone/r/build">rpjs/backbone/r/build</a> folders.</p>

<p>For uglification of JS files (decreases the files&#8217; sizes), we can use the <a href="https://github.com/mishoo/UglifyJS2">Uglify2</a> module. To install it with NPM, use:</p>



<pre><code>$ npm install uglify-js</code></pre>

<p>Then update the <strong>app.build.js</strong> file with the <code>optimize: &quot;uglify2&quot;</code> property:</p>

<pre><code>({
    appDir: &quot;./js&quot;,
    baseUrl: &quot;./&quot;,
    dir: &quot;build&quot;,
    optimize: &quot;uglify2&quot;,
    modules: [
        {
            name: &quot;apple-app&quot;
        }
    ]
})</code></pre>

<p>Run r.js with:</p>



<pre><code>$ node_modules/requirejs/bin/r.js -o app.build.js</code></pre>

<p>You should get something like this:</p>



<pre><code>define(&quot;apple-item.tpl&quot;,[],function(){return&apos;             &lt;a href=&quot;#apples/&lt;%=name%&gt;&quot; target=&quot;_blank&quot;&gt;            &lt;%=name%&gt;            &lt;/a&gt;&amp;nbsp;&lt;a class=&quot;add-to-cart&quot; href=&quot;#&quot;&gt;buy&lt;/a&gt;            &apos;}),define(&quot;apple-home.tpl&quot;,[],function(){return&apos;Apple data:         &lt;ul class=&quot;apples-list&quot;&gt;        &lt;/ul&gt;        &lt;div class=&quot;cart-box&quot;&gt;&lt;/div&gt;&apos;}),define(&quot;apple-spinner.tpl&quot;,[],function(){return&apos;&lt;img src=&quot;img/spinner.gif&quot; width=&quot;30&quot;/&gt;&apos;}),define(&quot;apple.tpl&quot;,[],function(){return&apos;&lt;figure&gt;                              &lt;img src=&quot;&lt;%= attributes.url %&gt;&quot;/&gt;                              &lt;figcaption&gt;&lt;%= attributes.name %&gt;&lt;/figcaption&gt;                            &lt;/figure&gt;&apos;}),define(&quot;apple-item.view&quot;,[&quot;apple-item.tpl&quot;],function(e){return Backbone.View.extend({tagName:&quot;li&quot;,template:_.template(e),events:{&quot;click .add-to-cart&quot;:&quot;addToCart&quot;},render:function(){this.$el.html(this.template(this.model.attributes))},addToCart:function(){this.model.collection.trigger(&quot;addToCart&quot;,this.model)}})}),define(&quot;apple-home.view&quot;,[&quot;apple-home.tpl&quot;,&quot;apple-item.view&quot;],function(e,t){return Backbone.View.extend({el:&quot;body&quot;,listEl:&quot;.apples-list&quot;,cartEl:&quot;.cart-box&quot;,template:_.template(e),initialize:function(){this.$el.html(this.template),this.collection.on(&quot;addToCart&quot;,this.showCart,this)},showCart:function(e){$(this.cartEl).append(e.attributes.name+&quot;&lt;br/&gt;&quot;)},render:function(){view=this,this.collection.each(function(e){var i=new t({model:e});i.render(),$(view.listEl).append(i.$el)})}})}),define(&quot;apple.view&quot;,[&quot;apple.tpl&quot;,&quot;apple-spinner.tpl&quot;],function(e,t){return Backbone.View.extend({initialize:function(){this.model=new(Backbone.Model.extend({})),this.model.on(&quot;change&quot;,this.render,this),this.on(&quot;spinner&quot;,this.showSpinner,this)},template:_.template(e),templateSpinner:t,loadApple:function(e){this.trigger(&quot;spinner&quot;);var t=this;setTimeout(function(){t.model.set(t.collection.where({name:e})[0].attributes)},1e3)},render:function(){var e=this.template(this.model);$(&quot;body&quot;).html(e)},showSpinner:function(){$(&quot;body&quot;).html(this.templateSpinner)}})}),define(&quot;apples&quot;,[],function(){return Backbone.Collection.extend({})}),requirejs.config({urlArgs:&quot;bust=&quot;+(new Date).getTime()}),require([&quot;apple-item.tpl&quot;,&quot;apple-home.tpl&quot;,&quot;apple-spinner.tpl&quot;,&quot;apple.tpl&quot;,&quot;apple-item.view&quot;,&quot;apple-home.view&quot;,&quot;apple.view&quot;,&quot;apples&quot;],function(e,t,i,n,a,l,p,o){var r,s=[{name:&quot;fuji&quot;,url:&quot;img/fuji.jpg&quot;},{name:&quot;gala&quot;,url:&quot;img/gala.jpg&quot;}],c=Backbone.Router.extend({routes:{&quot;&quot;:&quot;home&quot;,&quot;apples/:appleName&quot;:&quot;loadApple&quot;},initialize:function(){var e=new o;e.reset(s),this.homeView=new l({collection:e}),this.appleView=new p({collection:e})},home:function(){this.homeView.render()},loadApple:function(e){this.appleView.loadApple(e)}});$(document).ready(function(){r=new c,Backbone.history.start()})}),define(&quot;apple-app&quot;,function(){});</code></pre>

<p><b>Note:</b> The file is not formatted on purpose to show how Uglify2 works. Without the line break escape symbols, the code is on one line. Also notice that variables and objects&#8217; names are shortened.</p>

<h2 id="ssbsk">Super Simple Backbone Starter Kit</h2>

<p>To jump-start your Backbone.js development, consider using <a href="https://github.com/azat-co/super-simple-backbone-starter-kit">Super Simple Backbone Starter Kit</a> or similar projects:</p>

<ul>
<li><a href="http://backboneboilerplate.com/">Backbone Boilerplate</a></li>
<li><a href="http://coenraets.org/blog/2012/02/sample-app-with-backbone-js-and-twitter-bootstrap/">Sample App with Backbone.js and Twitter Bootstrap</a></li>
<li>More Backbone.js tutorials <a href="https://github.com/documentcloud/backbone/wiki/Tutorials%2C-blog-posts-and-example-sites">github.com/documentcloud/backbone/wiki/Tutorials%2C-blog-posts-and-example-sites</a>.</li>
</ul>

<script>var hljs=new function(){function m(p){return p.replace(/&/gm,"&amp;").replace(/</gm,"&lt;")}function c(r,q,p){return RegExp(q,"m"+(r.cI?"i":"")+(p?"g":""))}function j(r){for(var p=0;p<r.childNodes.length;p++){var q=r.childNodes[p];if(q.nodeName=="CODE"){return q}if(!(q.nodeType==3&&q.nodeValue.match(/\s+/))){break}}}function g(t,s){var r="";for(var q=0;q<t.childNodes.length;q++){if(t.childNodes[q].nodeType==3){var p=t.childNodes[q].nodeValue;if(s){p=p.replace(/\n/g,"")}r+=p}else{if(t.childNodes[q].nodeName=="BR"){r+="\n"}else{r+=g(t.childNodes[q])}}}if(/MSIE [678]/.test(navigator.userAgent)){r=r.replace(/\r/g,"\n")}return r}function a(s){var q=s.className.split(/\s+/);q=q.concat(s.parentNode.className.split(/\s+/));for(var p=0;p<q.length;p++){var r=q[p].replace(/^language-/,"");if(d[r]||r=="no-highlight"){return r}}}function b(p){var q=[];(function(s,t){for(var r=0;r<s.childNodes.length;r++){if(s.childNodes[r].nodeType==3){t+=s.childNodes[r].nodeValue.length}else{if(s.childNodes[r].nodeName=="BR"){t+=1}else{q.push({event:"start",offset:t,node:s.childNodes[r]});t=arguments.callee(s.childNodes[r],t);q.push({event:"stop",offset:t,node:s.childNodes[r]})}}}return t})(p,0);return q}function l(y,z,x){var r=0;var w="";var t=[];function u(){if(y.length&&z.length){if(y[0].offset!=z[0].offset){return(y[0].offset<z[0].offset)?y:z}else{return z[0].event=="start"?y:z}}else{return y.length?y:z}}function s(C){var D="<"+C.nodeName.toLowerCase();for(var A=0;A<C.attributes.length;A++){var B=C.attributes[A];D+=" "+B.nodeName.toLowerCase();if(B.nodeValue!=undefined&&B.nodeValue!=false&&B.nodeValue!=null){D+='="'+m(B.nodeValue)+'"'}}return D+">"}while(y.length||z.length){var v=u().splice(0,1)[0];w+=m(x.substr(r,v.offset-r));r=v.offset;if(v.event=="start"){w+=s(v.node);t.push(v.node)}else{if(v.event=="stop"){var q=t.length;do{q--;var p=t[q];w+=("</"+p.nodeName.toLowerCase()+">")}while(p!=v.node);t.splice(q,1);while(q<t.length){w+=s(t[q]);q++}}}}w+=x.substr(r);return w}function i(){function p(u,t,v){if(u.compiled){return}if(!v){u.bR=c(t,u.b?u.b:"\\B|\\b");if(!u.e&&!u.eW){u.e="\\B|\\b"}if(u.e){u.eR=c(t,u.e)}}if(u.i){u.iR=c(t,u.i)}if(u.r==undefined){u.r=1}if(u.k){u.lR=c(t,u.l||hljs.IR,true)}for(var s in u.k){if(!u.k.hasOwnProperty(s)){continue}if(u.k[s] instanceof Object){u.kG=u.k}else{u.kG={keyword:u.k}}break}if(!u.c){u.c=[]}u.compiled=true;for(var r=0;r<u.c.length;r++){p(u.c[r],t,false)}if(u.starts){p(u.starts,t,false)}}for(var q in d){if(!d.hasOwnProperty(q)){continue}p(d[q].dM,d[q],true)}}function e(J,D){if(!i.called){i();i.called=true}function z(r,M){for(var L=0;L<M.c.length;L++){if(M.c[L].bR.test(r)){return M.c[L]}}}function w(L,r){if(C[L].e&&C[L].eR.test(r)){return 1}if(C[L].eW){var M=w(L-1,r);return M?M+1:0}return 0}function x(r,L){return L.iR&&L.iR.test(r)}function A(O,N){var M=[];for(var L=0;L<O.c.length;L++){M.push(O.c[L].b)}var r=C.length-1;do{if(C[r].e){M.push(C[r].e)}r--}while(C[r+1].eW);if(O.i){M.push(O.i)}return c(N,"("+M.join("|")+")",true)}function s(M,L){var N=C[C.length-1];if(!N.t){N.t=A(N,H)}N.t.lastIndex=L;var r=N.t.exec(M);if(r){return[M.substr(L,r.index-L),r[0],false]}else{return[M.substr(L),"",true]}}function p(O,r){var L=H.cI?r[0].toLowerCase():r[0];for(var N in O.kG){if(!O.kG.hasOwnProperty(N)){continue}var M=O.kG[N].hasOwnProperty(L);if(M){return[N,M]}}return false}function F(M,O){if(!O.k){return m(M)}var N="";var P=0;O.lR.lastIndex=0;var L=O.lR.exec(M);while(L){N+=m(M.substr(P,L.index-P));var r=p(O,L);if(r){t+=r[1];N+='<span class="'+r[0]+'">'+m(L[0])+"</span>"}else{N+=m(L[0])}P=O.lR.lastIndex;L=O.lR.exec(M)}N+=m(M.substr(P,M.length-P));return N}function K(r,M){if(M.sL&&d[M.sL]){var L=e(M.sL,r);t+=L.keyword_count;return L.value}else{return F(r,M)}}function I(M,r){var L=M.cN?'<span class="'+M.cN+'">':"";if(M.rB){q+=L;M.buffer=""}else{if(M.eB){q+=m(r)+L;M.buffer=""}else{q+=L;M.buffer=r}}C.push(M);B+=M.r}function E(O,L,Q){var R=C[C.length-1];if(Q){q+=K(R.buffer+O,R);return false}var M=z(L,R);if(M){q+=K(R.buffer+O,R);I(M,L);return M.rB}var r=w(C.length-1,L);if(r){var N=R.cN?"</span>":"";if(R.rE){q+=K(R.buffer+O,R)+N}else{if(R.eE){q+=K(R.buffer+O,R)+N+m(L)}else{q+=K(R.buffer+O+L,R)+N}}while(r>1){N=C[C.length-2].cN?"</span>":"";q+=N;r--;C.length--}var P=C[C.length-1];C.length--;C[C.length-1].buffer="";if(P.starts){I(P.starts,"")}return R.rE}if(x(L,R)){throw"Illegal"}}var H=d[J];var C=[H.dM];var B=0;var t=0;var q="";try{var v=0;H.dM.buffer="";do{var y=s(D,v);var u=E(y[0],y[1],y[2]);v+=y[0].length;if(!u){v+=y[1].length}}while(!y[2]);if(C.length>1){throw"Illegal"}return{r:B,keyword_count:t,value:q}}catch(G){if(G=="Illegal"){return{r:0,keyword_count:0,value:m(D)}}else{throw G}}}function f(t){var r={keyword_count:0,r:0,value:m(t)};var q=r;for(var p in d){if(!d.hasOwnProperty(p)){continue}var s=e(p,t);s.language=p;if(s.keyword_count+s.r>q.keyword_count+q.r){q=s}if(s.keyword_count+s.r>r.keyword_count+r.r){q=r;r=s}}if(q.language){r.second_best=q}return r}function h(r,q,p){if(q){r=r.replace(/^((<[^>]+>|\t)+)/gm,function(t,w,v,u){return w.replace(/\t/g,q)})}if(p){r=r.replace(/\n/g,"<br>")}return r}function o(u,x,q){var y=g(u,q);var s=a(u);if(s=="no-highlight"){return}if(s){var w=e(s,y)}else{var w=f(y);s=w.language}var p=b(u);if(p.length){var r=document.createElement("pre");r.innerHTML=w.value;w.value=l(p,b(r),y)}w.value=h(w.value,x,q);var t=u.className;if(!t.match("(\\s|^)(language-)?"+s+"(\\s|$)")){t=t?(t+" "+s):s}if(/MSIE [678]/.test(navigator.userAgent)&&u.tagName=="CODE"&&u.parentNode.tagName=="PRE"){var r=u.parentNode;var v=document.createElement("div");v.innerHTML="<pre><code>"+w.value+"</code></pre>";u=v.firstChild.firstChild;v.firstChild.cN=r.cN;r.parentNode.replaceChild(v.firstChild,r)}else{u.innerHTML=w.value}u.className=t;u.result={language:s,kw:w.keyword_count,re:w.r};if(w.second_best){u.second_best={language:w.second_best.language,kw:w.second_best.keyword_count,re:w.second_best.r}}}function k(){if(k.called){return}k.called=true;var r=document.getElementsByTagName("pre");for(var p=0;p<r.length;p++){var q=j(r[p]);if(q){o(q,hljs.tabReplace)}}}function n(){if(window.addEventListener){window.addEventListener("DOMContentLoaded",k,false);window.addEventListener("load",k,false)}else{if(window.attachEvent){window.attachEvent("onload",k)}else{window.onload=k}}}var d={};this.LANGUAGES=d;this.highlight=e;this.highlightAuto=f;this.fixMarkup=h;this.highlightBlock=o;this.initHighlighting=k;this.initHighlightingOnLoad=n;this.IR="[a-zA-Z][a-zA-Z0-9_]*";this.UIR="[a-zA-Z_][a-zA-Z0-9_]*";this.NR="\\b\\d+(\\.\\d+)?";this.CNR="\\b(0x[A-Za-z0-9]+|\\d+(\\.\\d+)?)";this.RSR="!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|\\.|-|-=|/|/=|:|;|<|<<|<<=|<=|=|==|===|>|>=|>>|>>=|>>>|>>>=|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~";this.BE={b:"\\\\.",r:0};this.ASM={cN:"string",b:"'",e:"'",i:"\\n",c:[this.BE],r:0};this.QSM={cN:"string",b:'"',e:'"',i:"\\n",c:[this.BE],r:0};this.CLCM={cN:"comment",b:"//",e:"$"};this.CBLCLM={cN:"comment",b:"/\\*",e:"\\*/"};this.HCM={cN:"comment",b:"#",e:"$"};this.NM={cN:"number",b:this.NR,r:0};this.CNM={cN:"number",b:this.CNR,r:0};this.inherit=function(p,s){var r={};for(var q in p){r[q]=p[q]}if(s){for(var q in s){r[q]=s[q]}}return r}}();hljs.LANGUAGES.bash=function(){var d={"true":1,"false":1};var b={cN:"variable",b:"\\$([a-zA-Z0-9_]+)\\b"};var a={cN:"variable",b:"\\$\\{(([^}])|(\\\\}))+\\}",c:[hljs.CNM]};var c={cN:"string",b:'"',e:'"',i:"\\n",c:[hljs.BE,b,a],r:0};var e={cN:"test_condition",b:"",e:"",c:[c,b,a,hljs.CNM],k:{literal:d},r:0};return{dM:{k:{keyword:{"if":1,then:1,"else":1,fi:1,"for":1,"break":1,"continue":1,"while":1,"in":1,"do":1,done:1,echo:1,exit:1,"return":1,set:1,declare:1},literal:d},c:[{cN:"shebang",b:"(#!\\/bin\\/bash)|(#!\\/bin\\/sh)",r:10},hljs.HCM,hljs.CNM,c,b,a,hljs.inherit(e,{b:"\\[ ",e:" \\]",r:0}),hljs.inherit(e,{b:"\\[\\[ ",e:" \\]\\]"})]}}}();hljs.LANGUAGES.cs={dM:{k:{"abstract":1,as:1,base:1,bool:1,"break":1,"byte":1,"case":1,"catch":1,"char":1,checked:1,"class":1,"const":1,"continue":1,decimal:1,"default":1,delegate:1,"do":1,"do":1,"double":1,"else":1,"enum":1,event:1,explicit:1,extern:1,"false":1,"finally":1,fixed:1,"float":1,"for":1,foreach:1,"goto":1,"if":1,implicit:1,"in":1,"int":1,"interface":1,internal:1,is:1,lock:1,"long":1,namespace:1,"new":1,"null":1,object:1,operator:1,out:1,override:1,params:1,"private":1,"protected":1,"public":1,readonly:1,ref:1,"return":1,sbyte:1,sealed:1,"short":1,sizeof:1,stackalloc:1,"static":1,string:1,struct:1,"switch":1,"this":1,"throw":1,"true":1,"try":1,"typeof":1,uint:1,ulong:1,unchecked:1,unsafe:1,ushort:1,using:1,virtual:1,"volatile":1,"void":1,"while":1,ascending:1,descending:1,from:1,get:1,group:1,into:1,join:1,let:1,orderby:1,partial:1,select:1,set:1,value:1,"var":1,where:1,yield:1},c:[{cN:"comment",b:"///",e:"$",rB:true,c:[{cN:"xmlDocTag",b:"///|<!--|-->"},{cN:"xmlDocTag",b:"</?",e:">"}]},hljs.CLCM,hljs.CBLCLM,{cN:"string",b:'@"',e:'"',c:[{b:'""'}]},hljs.ASM,hljs.QSM,hljs.CNM]}};hljs.LANGUAGES.ruby=function(){var g="[a-zA-Z_][a-zA-Z0-9_]*(\\!|\\?)?";var a="[a-zA-Z_]\\w*[!?=]?|[-+~]\\@|<<|>>|=~|===?|<=>|[<>]=?|\\*\\*|[-/+%^&*~`|]|\\[\\]=?";var n={keyword:{and:1,"false":1,then:1,defined:1,module:1,"in":1,"return":1,redo:1,"if":1,BEGIN:1,retry:1,end:1,"for":1,"true":1,self:1,when:1,next:1,until:1,"do":1,begin:1,unless:1,END:1,rescue:1,nil:1,"else":1,"break":1,undef:1,not:1,"super":1,"class":1,"case":1,require:1,yield:1,alias:1,"while":1,ensure:1,elsif:1,or:1,def:1},keymethods:{__id__:1,__send__:1,abort:1,abs:1,"all?":1,allocate:1,ancestors:1,"any?":1,arity:1,assoc:1,at:1,at_exit:1,autoload:1,"autoload?":1,"between?":1,binding:1,binmode:1,"block_given?":1,call:1,callcc:1,caller:1,capitalize:1,"capitalize!":1,casecmp:1,"catch":1,ceil:1,center:1,chomp:1,"chomp!":1,chop:1,"chop!":1,chr:1,"class":1,class_eval:1,"class_variable_defined?":1,class_variables:1,clear:1,clone:1,close:1,close_read:1,close_write:1,"closed?":1,coerce:1,collect:1,"collect!":1,compact:1,"compact!":1,concat:1,"const_defined?":1,const_get:1,const_missing:1,const_set:1,constants:1,count:1,crypt:1,"default":1,default_proc:1,"delete":1,"delete!":1,delete_at:1,delete_if:1,detect:1,display:1,div:1,divmod:1,downcase:1,"downcase!":1,downto:1,dump:1,dup:1,each:1,each_byte:1,each_index:1,each_key:1,each_line:1,each_pair:1,each_value:1,each_with_index:1,"empty?":1,entries:1,eof:1,"eof?":1,"eql?":1,"equal?":1,"eval":1,exec:1,exit:1,"exit!":1,extend:1,fail:1,fcntl:1,fetch:1,fileno:1,fill:1,find:1,find_all:1,first:1,flatten:1,"flatten!":1,floor:1,flush:1,for_fd:1,foreach:1,fork:1,format:1,freeze:1,"frozen?":1,fsync:1,getc:1,gets:1,global_variables:1,grep:1,gsub:1,"gsub!":1,"has_key?":1,"has_value?":1,hash:1,hex:1,id:1,include:1,"include?":1,included_modules:1,index:1,indexes:1,indices:1,induced_from:1,inject:1,insert:1,inspect:1,instance_eval:1,instance_method:1,instance_methods:1,"instance_of?":1,"instance_variable_defined?":1,instance_variable_get:1,instance_variable_set:1,instance_variables:1,"integer?":1,intern:1,invert:1,ioctl:1,"is_a?":1,isatty:1,"iterator?":1,join:1,"key?":1,keys:1,"kind_of?":1,lambda:1,last:1,length:1,lineno:1,ljust:1,load:1,local_variables:1,loop:1,lstrip:1,"lstrip!":1,map:1,"map!":1,match:1,max:1,"member?":1,merge:1,"merge!":1,method:1,"method_defined?":1,method_missing:1,methods:1,min:1,module_eval:1,modulo:1,name:1,nesting:1,"new":1,next:1,"next!":1,"nil?":1,nitems:1,"nonzero?":1,object_id:1,oct:1,open:1,pack:1,partition:1,pid:1,pipe:1,pop:1,popen:1,pos:1,prec:1,prec_f:1,prec_i:1,print:1,printf:1,private_class_method:1,private_instance_methods:1,"private_method_defined?":1,private_methods:1,proc:1,protected_instance_methods:1,"protected_method_defined?":1,protected_methods:1,public_class_method:1,public_instance_methods:1,"public_method_defined?":1,public_methods:1,push:1,putc:1,puts:1,quo:1,raise:1,rand:1,rassoc:1,read:1,read_nonblock:1,readchar:1,readline:1,readlines:1,readpartial:1,rehash:1,reject:1,"reject!":1,remainder:1,reopen:1,replace:1,require:1,"respond_to?":1,reverse:1,"reverse!":1,reverse_each:1,rewind:1,rindex:1,rjust:1,round:1,rstrip:1,"rstrip!":1,scan:1,seek:1,select:1,send:1,set_trace_func:1,shift:1,singleton_method_added:1,singleton_methods:1,size:1,sleep:1,slice:1,"slice!":1,sort:1,"sort!":1,sort_by:1,split:1,sprintf:1,squeeze:1,"squeeze!":1,srand:1,stat:1,step:1,store:1,strip:1,"strip!":1,sub:1,"sub!":1,succ:1,"succ!":1,sum:1,superclass:1,swapcase:1,"swapcase!":1,sync:1,syscall:1,sysopen:1,sysread:1,sysseek:1,system:1,syswrite:1,taint:1,"tainted?":1,tell:1,test:1,"throw":1,times:1,to_a:1,to_ary:1,to_f:1,to_hash:1,to_i:1,to_int:1,to_io:1,to_proc:1,to_s:1,to_str:1,to_sym:1,tr:1,"tr!":1,tr_s:1,"tr_s!":1,trace_var:1,transpose:1,trap:1,truncate:1,"tty?":1,type:1,ungetc:1,uniq:1,"uniq!":1,unpack:1,unshift:1,untaint:1,untrace_var:1,upcase:1,"upcase!":1,update:1,upto:1,"value?":1,values:1,values_at:1,warn:1,write:1,write_nonblock:1,"zero?":1,zip:1}};var h={cN:"yardoctag",b:"@[A-Za-z]+"};var d={cN:"comment",b:"#",e:"$",c:[h]};var c={cN:"comment",b:"^\\=begin",e:"^\\=end",c:[h],r:10};var b={cN:"comment",b:"^__END__",e:"\\n$"};var u={cN:"subst",b:"#\\{",e:"}",l:g,k:n};var p=[hljs.BE,u];var s={cN:"string",b:"'",e:"'",c:p,r:0};var r={cN:"string",b:'"',e:'"',c:p,r:0};var q={cN:"string",b:"%[qw]?\\(",e:"\\)",c:p,r:10};var o={cN:"string",b:"%[qw]?\\[",e:"\\]",c:p,r:10};var m={cN:"string",b:"%[qw]?{",e:"}",c:p,r:10};var l={cN:"string",b:"%[qw]?<",e:">",c:p,r:10};var k={cN:"string",b:"%[qw]?/",e:"/",c:p,r:10};var j={cN:"string",b:"%[qw]?%",e:"%",c:p,r:10};var i={cN:"string",b:"%[qw]?-",e:"-",c:p,r:10};var t={cN:"string",b:"%[qw]?\\|",e:"\\|",c:p,r:10};var e={cN:"function",b:"\\bdef\\s+",e:" |$|;",l:g,k:n,c:[{cN:"title",b:a,l:g,k:n},{cN:"params",b:"\\(",e:"\\)",l:g,k:n},d,c,b]};var f={cN:"identifier",b:g,l:g,k:n,r:0};var v=[d,c,b,s,r,q,o,m,l,k,j,i,t,{cN:"class",b:"\\b(class|module)\\b",e:"$|;",k:{"class":1,module:1},c:[{cN:"title",b:"[A-Za-z_]\\w*(::\\w+)*(\\?|\\!)?",r:0},{cN:"inheritance",b:"<\\s*",c:[{cN:"parent",b:"("+hljs.IR+"::)?"+hljs.IR}]},d,c,b]},e,{cN:"constant",b:"(::)?([A-Z]\\w*(::)?)+",r:0},{cN:"symbol",b:":",c:[s,r,q,o,m,l,k,j,i,t,f],r:0},{cN:"number",b:"(\\b0[0-7_]+)|(\\b0x[0-9a-fA-F_]+)|(\\b[1-9][0-9_]*(\\.[0-9_]+)?)|[0_]\\b",r:0},{cN:"number",b:"\\?\\w"},{cN:"variable",b:"(\\$\\W)|((\\$|\\@\\@?)(\\w+))"},f,{b:"("+hljs.RSR+")\\s*",c:[d,c,b,{cN:"regexp",b:"/",e:"/[a-z]*",i:"\\n",c:[hljs.BE]}],r:0}];u.c=v;e.c[1].c=v;return{dM:{l:g,k:n,c:v}}}();hljs.LANGUAGES.diff={cI:true,dM:{c:[{cN:"chunk",b:"^\\@\\@ +\\-\\d+,\\d+ +\\+\\d+,\\d+ +\\@\\@$",r:10},{cN:"chunk",b:"^\\*\\*\\* +\\d+,\\d+ +\\*\\*\\*\\*$",r:10},{cN:"chunk",b:"^\\-\\-\\- +\\d+,\\d+ +\\-\\-\\-\\-$",r:10},{cN:"header",b:"Index: ",e:"$"},{cN:"header",b:"=====",e:"=====$"},{cN:"header",b:"^\\-\\-\\-",e:"$"},{cN:"header",b:"^\\*{3} ",e:"$"},{cN:"header",b:"^\\+\\+\\+",e:"$"},{cN:"header",b:"\\*{5}",e:"\\*{5}$"},{cN:"addition",b:"^\\+",e:"$"},{cN:"deletion",b:"^\\-",e:"$"},{cN:"change",b:"^\\!",e:"$"}]}};hljs.LANGUAGES.javascript={dM:{k:{keyword:{"in":1,"if":1,"for":1,"while":1,"finally":1,"var":1,"new":1,"function":1,"do":1,"return":1,"void":1,"else":1,"break":1,"catch":1,"instanceof":1,"with":1,"throw":1,"case":1,"default":1,"try":1,"this":1,"switch":1,"continue":1,"typeof":1,"delete":1},literal:{"true":1,"false":1,"null":1}},c:[hljs.ASM,hljs.QSM,hljs.CLCM,hljs.CBLCLM,hljs.CNM,{b:"("+hljs.RSR+"|case|return|throw)\\s*",k:{"return":1,"throw":1,"case":1},c:[hljs.CLCM,hljs.CBLCLM,{cN:"regexp",b:"/",e:"/[gim]*",c:[{b:"\\\\/"}]}],r:0},{cN:"function",b:"\\bfunction\\b",e:"{",k:{"function":1},c:[{cN:"title",b:"[A-Za-z$_][0-9A-Za-z$_]*"},{cN:"params",b:"\\(",e:"\\)",c:[hljs.ASM,hljs.QSM,hljs.CLCM,hljs.CBLCLM]}]}]}};hljs.LANGUAGES.css=function(){var a={cN:"function",b:hljs.IR+"\\(",e:"\\)",c:[{eW:true,eE:true,c:[hljs.NM,hljs.ASM,hljs.QSM]}]};return{cI:true,dM:{i:"[=/|']",c:[hljs.CBLCLM,{cN:"id",b:"\\#[A-Za-z0-9_-]+"},{cN:"class",b:"\\.[A-Za-z0-9_-]+",r:0},{cN:"attr_selector",b:"\\[",e:"\\]",i:"$"},{cN:"pseudo",b:":(:)?[a-zA-Z0-9\\_\\-\\+\\(\\)\\\"\\']+"},{cN:"at_rule",b:"@(font-face|page)",l:"[a-z-]+",k:{"font-face":1,page:1}},{cN:"at_rule",b:"@",e:"[{;]",eE:true,k:{"import":1,page:1,media:1,charset:1},c:[a,hljs.ASM,hljs.QSM,hljs.NM]},{cN:"tag",b:hljs.IR,r:0},{cN:"rules",b:"{",e:"}",i:"[^\\s]",r:0,c:[hljs.CBLCLM,{cN:"rule",b:"[^\\s]",rB:true,e:";",eW:true,c:[{cN:"attribute",b:"[A-Z\\_\\.\\-]+",e:":",eE:true,i:"[^\\s]",starts:{cN:"value",eW:true,eE:true,c:[a,hljs.NM,hljs.QSM,hljs.ASM,hljs.CBLCLM,{cN:"hexcolor",b:"\\#[0-9A-F]+"},{cN:"important",b:"!important"}]}}]}]}]}}}();hljs.LANGUAGES.xml=function(){var b="[A-Za-z0-9\\._:-]+";var a={eW:true,c:[{cN:"attribute",b:b,r:0},{b:'="',rB:true,e:'"',c:[{cN:"value",b:'"',eW:true}]},{b:"='",rB:true,e:"'",c:[{cN:"value",b:"'",eW:true}]},{b:"=",c:[{cN:"value",b:"[^\\s/>]+"}]}]};return{cI:true,dM:{c:[{cN:"pi",b:"<\\?",e:"\\?>",r:10},{cN:"doctype",b:"<!DOCTYPE",e:">",r:10,c:[{b:"\\[",e:"\\]"}]},{cN:"comment",b:"<!--",e:"-->",r:10},{cN:"cdata",b:"<\\!\\[CDATA\\[",e:"\\]\\]>",r:10},{cN:"tag",b:"<style",e:">",k:{title:{style:1}},c:[a],starts:{cN:"css",e:"</style>",rE:true,sL:"css"}},{cN:"tag",b:"<script",e:">",k:{title:{script:1}},c:[a],starts:{cN:"javascript",e:"<\/script>",rE:true,sL:"javascript"}},{cN:"vbscript",b:"<%",e:"%>",sL:"vbscript"},{cN:"tag",b:"</?",e:"/?>",c:[{cN:"title",b:"[^ />]+"},a]}]}}}();hljs.LANGUAGES.java={dM:{k:{"false":1,"synchronized":1,"int":1,"abstract":1,"float":1,"private":1,"char":1,"interface":1,"boolean":1,"static":1,"null":1,"if":1,"const":1,"for":1,"true":1,"while":1,"long":1,"throw":1,strictfp:1,"finally":1,"protected":1,"extends":1,"import":1,"native":1,"final":1,"implements":1,"return":1,"void":1,"enum":1,"else":1,"break":1,"transient":1,"new":1,"catch":1,"instanceof":1,"byte":1,"super":1,"class":1,"volatile":1,"case":1,assert:1,"short":1,"package":1,"default":1,"double":1,"public":1,"try":1,"this":1,"switch":1,"continue":1,"throws":1},c:[{cN:"javadoc",b:"/\\*\\*",e:"\\*/",c:[{cN:"javadoctag",b:"@[A-Za-z]+"}],r:10},hljs.CLCM,hljs.CBLCLM,hljs.ASM,hljs.QSM,{cN:"class",b:"(class |interface )",e:"{",k:{"class":1,"interface":1},i:":",c:[{b:"(implements|extends)",k:{"extends":1,"implements":1},r:10},{cN:"title",b:hljs.UIR}]},hljs.CNM,{cN:"annotation",b:"@[A-Za-z]+"}]}};hljs.LANGUAGES.php={cI:true,dM:{k:{and:1,include_once:1,list:1,"abstract":1,global:1,"private":1,echo:1,"interface":1,as:1,"static":1,endswitch:1,array:1,"null":1,"if":1,endwhile:1,or:1,"const":1,"for":1,endforeach:1,self:1,"var":1,"while":1,isset:1,"public":1,"protected":1,exit:1,foreach:1,"throw":1,elseif:1,"extends":1,include:1,__FILE__:1,empty:1,require_once:1,"function":1,"do":1,xor:1,"return":1,"implements":1,parent:1,clone:1,use:1,__CLASS__:1,__LINE__:1,"else":1,"break":1,print:1,"eval":1,"new":1,"catch":1,__METHOD__:1,"class":1,"case":1,exception:1,php_user_filter:1,"default":1,die:1,require:1,__FUNCTION__:1,enddeclare:1,"final":1,"try":1,"this":1,"switch":1,"continue":1,endfor:1,endif:1,declare:1,unset:1,"true":1,"false":1,namespace:1},c:[hljs.CLCM,hljs.HCM,{cN:"comment",b:"/\\*",e:"\\*/",c:[{cN:"phpdoc",b:"\\s@[A-Za-z]+",r:10}]},hljs.CNM,hljs.inherit(hljs.ASM,{i:null}),hljs.inherit(hljs.QSM,{i:null}),{cN:"variable",b:"\\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*"},{cN:"preprocessor",b:"<\\?php",r:10},{cN:"preprocessor",b:"\\?>"}]}};hljs.LANGUAGES.python=function(){var c={cN:"string",b:"(u|b)?r?'''",e:"'''",r:10};var b={cN:"string",b:'(u|b)?r?"""',e:'"""',r:10};var a={cN:"string",b:"(u|r|ur|b|br)'",e:"'",c:[hljs.BE],r:10};var f={cN:"string",b:'(u|r|ur|b|br)"',e:'"',c:[hljs.BE],r:10};var d={cN:"title",b:hljs.UIR};var e={cN:"params",b:"\\(",e:"\\)",c:[c,b,a,f,hljs.ASM,hljs.QSM]};return{dM:{k:{keyword:{and:1,elif:1,is:1,global:1,as:1,"in":1,"if":1,from:1,raise:1,"for":1,except:1,"finally":1,print:1,"import":1,pass:1,"return":1,exec:1,"else":1,"break":1,not:1,"with":1,"class":1,assert:1,yield:1,"try":1,"while":1,"continue":1,del:1,or:1,def:1,lambda:1,nonlocal:10},built_in:{None:1,True:1,False:1,Ellipsis:1,NotImplemented:1}},i:"(</|->|\\?)",c:[hljs.HCM,c,b,a,f,hljs.ASM,hljs.QSM,{cN:"function",b:"\\bdef ",e:":",i:"$",k:{def:1},c:[d,e],r:10},{cN:"class",b:"\\bclass ",e:":",i:"[${]",k:{"class":1},c:[d,e],r:10},hljs.CNM,{cN:"decorator",b:"@",e:"$"}]}}}();hljs.LANGUAGES.sql={cI:true,dM:{i:"[^\\s]",c:[{cN:"operator",b:"(begin|start|commit|rollback|savepoint|lock|alter|create|drop|rename|call|delete|do|handler|insert|load|replace|select|truncate|update|set|show|pragma)\\b",e:";|$",k:{keyword:{all:1,partial:1,global:1,month:1,current_timestamp:1,using:1,go:1,revoke:1,smallint:1,indicator:1,"end-exec":1,disconnect:1,zone:1,"with":1,character:1,assertion:1,to:1,add:1,current_user:1,usage:1,input:1,local:1,alter:1,match:1,collate:1,real:1,then:1,rollback:1,get:1,read:1,timestamp:1,session_user:1,not:1,integer:1,bit:1,unique:1,day:1,minute:1,desc:1,insert:1,execute:1,like:1,ilike:2,level:1,decimal:1,drop:1,"continue":1,isolation:1,found:1,where:1,constraints:1,domain:1,right:1,national:1,some:1,module:1,transaction:1,relative:1,second:1,connect:1,escape:1,close:1,system_user:1,"for":1,deferred:1,section:1,cast:1,current:1,sqlstate:1,allocate:1,intersect:1,deallocate:1,numeric:1,"public":1,preserve:1,full:1,"goto":1,initially:1,asc:1,no:1,key:1,output:1,collation:1,group:1,by:1,union:1,session:1,both:1,last:1,language:1,constraint:1,column:1,of:1,space:1,foreign:1,deferrable:1,prior:1,connection:1,unknown:1,action:1,commit:1,view:1,or:1,first:1,into:1,"float":1,year:1,primary:1,cascaded:1,except:1,restrict:1,set:1,references:1,names:1,table:1,outer:1,open:1,select:1,size:1,are:1,rows:1,from:1,prepare:1,distinct:1,leading:1,create:1,only:1,next:1,inner:1,authorization:1,schema:1,corresponding:1,option:1,declare:1,precision:1,immediate:1,"else":1,timezone_minute:1,external:1,varying:1,translation:1,"true":1,"case":1,exception:1,join:1,hour:1,"default":1,"double":1,scroll:1,value:1,cursor:1,descriptor:1,values:1,dec:1,fetch:1,procedure:1,"delete":1,and:1,"false":1,"int":1,is:1,describe:1,"char":1,as:1,at:1,"in":1,varchar:1,"null":1,trailing:1,any:1,absolute:1,current_time:1,end:1,grant:1,privileges:1,when:1,cross:1,check:1,write:1,current_date:1,pad:1,begin:1,temporary:1,exec:1,time:1,update:1,catalog:1,user:1,sql:1,date:1,on:1,identity:1,timezone_hour:1,natural:1,whenever:1,interval:1,work:1,order:1,cascade:1,diagnostics:1,nchar:1,having:1,left:1,call:1,"do":1,handler:1,load:1,replace:1,truncate:1,start:1,lock:1,show:1,pragma:1},aggregate:{count:1,sum:1,min:1,max:1,avg:1}},c:[{cN:"string",b:"'",e:"'",c:[hljs.BE,{b:"''"}],r:0},{cN:"string",b:'"',e:'"',c:[hljs.BE,{b:'""'}],r:0},{cN:"string",b:"`",e:"`",c:[hljs.BE]},hljs.CNM,{b:"\\n"}]},hljs.CBLCLM,{cN:"comment",b:"--",e:"$"}]}};hljs.LANGUAGES.ini={cI:true,dM:{i:"[^\\s]",c:[{cN:"comment",b:";",e:"$"},{cN:"title",b:"^\\[",e:"\\]"},{cN:"setting",b:"^[a-z0-9_\\[\\]]+[ \\t]*=[ \\t]*",e:"$",c:[{cN:"value",eW:true,k:{on:1,off:1,"true":1,"false":1,yes:1,no:1},c:[hljs.QSM,hljs.NM]}]}]}};hljs.LANGUAGES.perl=function(){var c={getpwent:1,getservent:1,quotemeta:1,msgrcv:1,scalar:1,kill:1,dbmclose:1,undef:1,lc:1,ma:1,syswrite:1,tr:1,send:1,umask:1,sysopen:1,shmwrite:1,vec:1,qx:1,utime:1,local:1,oct:1,semctl:1,localtime:1,readpipe:1,"do":1,"return":1,format:1,read:1,sprintf:1,dbmopen:1,pop:1,getpgrp:1,not:1,getpwnam:1,rewinddir:1,qq:1,fileno:1,qw:1,endprotoent:1,wait:1,sethostent:1,bless:1,s:1,opendir:1,"continue":1,each:1,sleep:1,endgrent:1,shutdown:1,dump:1,chomp:1,connect:1,getsockname:1,die:1,socketpair:1,close:1,flock:1,exists:1,index:1,shmget:1,sub:1,"for":1,endpwent:1,redo:1,lstat:1,msgctl:1,setpgrp:1,abs:1,exit:1,select:1,print:1,ref:1,gethostbyaddr:1,unshift:1,fcntl:1,syscall:1,"goto":1,getnetbyaddr:1,join:1,gmtime:1,symlink:1,semget:1,splice:1,x:1,getpeername:1,recv:1,log:1,setsockopt:1,cos:1,last:1,reverse:1,gethostbyname:1,getgrnam:1,study:1,formline:1,endhostent:1,times:1,chop:1,length:1,gethostent:1,getnetent:1,pack:1,getprotoent:1,getservbyname:1,rand:1,mkdir:1,pos:1,chmod:1,y:1,substr:1,endnetent:1,printf:1,next:1,open:1,msgsnd:1,readdir:1,use:1,unlink:1,getsockopt:1,getpriority:1,rindex:1,wantarray:1,hex:1,system:1,getservbyport:1,endservent:1,"int":1,chr:1,untie:1,rmdir:1,prototype:1,tell:1,listen:1,fork:1,shmread:1,ucfirst:1,setprotoent:1,"else":1,sysseek:1,link:1,getgrgid:1,shmctl:1,waitpid:1,unpack:1,getnetbyname:1,reset:1,chdir:1,grep:1,split:1,require:1,caller:1,lcfirst:1,until:1,warn:1,"while":1,values:1,shift:1,telldir:1,getpwuid:1,my:1,getprotobynumber:1,"delete":1,and:1,sort:1,uc:1,defined:1,srand:1,accept:1,"package":1,seekdir:1,getprotobyname:1,semop:1,our:1,rename:1,seek:1,"if":1,q:1,chroot:1,sysread:1,setpwent:1,no:1,crypt:1,getc:1,chown:1,sqrt:1,write:1,setnetent:1,setpriority:1,foreach:1,tie:1,sin:1,msgget:1,map:1,stat:1,getlogin:1,unless:1,elsif:1,truncate:1,exec:1,keys:1,glob:1,tied:1,closedir:1,ioctl:1,socket:1,readlink:1,"eval":1,xor:1,readline:1,binmode:1,setservent:1,eof:1,ord:1,bind:1,alarm:1,pipe:1,atan2:1,getgrent:1,exp:1,time:1,push:1,setgrent:1,gt:1,lt:1,or:1,ne:1,m:1};var d={cN:"subst",b:"[$@]\\{",e:"}",k:c,r:10};var b={cN:"variable",b:"\\$\\d"};var a={cN:"variable",b:"[\\$\\%\\@\\*](\\^\\w\\b|#\\w+(\\:\\:\\w+)*|[^\\s\\w{]|{\\w+}|\\w+(\\:\\:\\w*)*)"};var g=[hljs.BE,d,b,a];var f={b:"->",c:[{b:hljs.IR},{b:"{",e:"}"}]};var e=[b,a,hljs.HCM,{cN:"comment",b:"^(__END__|__DATA__)",e:"\\n$",r:5},f,{cN:"string",b:"q[qwxr]?\\s*\\(",e:"\\)",c:g,r:5},{cN:"string",b:"q[qwxr]?\\s*\\[",e:"\\]",c:g,r:5},{cN:"string",b:"q[qwxr]?\\s*\\{",e:"\\}",c:g,r:5},{cN:"string",b:"q[qwxr]?\\s*\\|",e:"\\|",c:g,r:5},{cN:"string",b:"q[qwxr]?\\s*\\<",e:"\\>",c:g,r:5},{cN:"string",b:"qw\\s+q",e:"q",c:g,r:5},{cN:"string",b:"'",e:"'",c:[hljs.BE],r:0},{cN:"string",b:'"',e:'"',c:g,r:0},{cN:"string",b:"`",e:"`",c:[hljs.BE]},{cN:"string",b:"{\\w+}",r:0},{cN:"string",b:"-?\\w+\\s*\\=\\>",r:0},{cN:"number",b:"(\\b0[0-7_]+)|(\\b0x[0-9a-fA-F_]+)|(\\b[1-9][0-9_]*(\\.[0-9_]+)?)|[0_]\\b",r:0},{cN:"regexp",b:"(s|tr|y)/(\\\\.|[^/])*/(\\\\.|[^/])*/[a-z]*",r:10},{cN:"regexp",b:"(m|qr)?/",e:"/[a-z]*",c:[hljs.BE],r:0},{cN:"sub",b:"\\bsub\\b",e:"(\\s*\\(.*?\\))?[;{]",k:{sub:1},r:5},{cN:"operator",b:"-\\w\\b",r:0},{cN:"pod",b:"\\=\\w",e:"\\=cut"}];d.c=e;f.c[1].c=e;return{dM:{k:c,c:e}}}();hljs.LANGUAGES.cpp=function(){var b={keyword:{"false":1,"int":1,"float":1,"while":1,"private":1,"char":1,"catch":1,"export":1,virtual:1,operator:2,sizeof:2,dynamic_cast:2,typedef:2,const_cast:2,"const":1,struct:1,"for":1,static_cast:2,union:1,namespace:1,unsigned:1,"long":1,"throw":1,"volatile":2,"static":1,"protected":1,bool:1,template:1,mutable:1,"if":1,"public":1,friend:2,"do":1,"return":1,"goto":1,auto:1,"void":2,"enum":1,"else":1,"break":1,"new":1,extern:1,using:1,"true":1,"class":1,asm:1,"case":1,typeid:1,"short":1,reinterpret_cast:2,"default":1,"double":1,register:1,explicit:1,signed:1,typename:1,"try":1,"this":1,"switch":1,"continue":1,wchar_t:1,inline:1,"delete":1,alignof:1,char16_t:1,char32_t:1,constexpr:1,decltype:1,noexcept:1,nullptr:1,static_assert:1,thread_local:1},built_in:{std:1,string:1,cin:1,cout:1,cerr:1,clog:1,stringstream:1,istringstream:1,ostringstream:1,auto_ptr:1,deque:1,list:1,queue:1,stack:1,vector:1,map:1,set:1,bitset:1,multiset:1,multimap:1,unordered_set:1,unordered_map:1,unordered_multiset:1,unordered_multimap:1,array:1,shared_ptr:1}};var a={cN:"stl_container",b:"\\b(deque|list|queue|stack|vector|map|set|bitset|multiset|multimap|unordered_map|unordered_set|unordered_multiset|unordered_multimap|array)\\s*<",e:">",k:b,r:10};a.c=[a];return{dM:{k:b,i:"</",c:[hljs.CLCM,hljs.CBLCLM,hljs.QSM,{cN:"string",b:"'",e:"[^\\\\]'",i:"[^\\\\][^']"},hljs.CNM,{cN:"preprocessor",b:"#",e:"$"},a]}}}();</script>

<script>hljs.initHighlightingOnLoad();</script>
					    </div>							
					</div>	
	
			
				</section>			
			
				
				
					<section class="section alt" id="section-author" data-section="section-author">
					<div class="container-fluid">
						<div class="row-fluid title">
							<div class="span3">
								<h2>Azat Mardanov</h2>
							</div>
							<div class="span9 hidden-phone alt">	
								<hr class="">
							</div>
						</div>
						<div class="row-fluid desc">
							<div class="span8">								
								<p>Azat Mardanov has over 12 years of experience in web, mobile and software development. With a Bachelor’s Degree in Informatics and a Master of Science in Information Systems Technology degree, Azat possesses deep academic knowledge as well as extensive practical experience. </p>

								<p>Recently, Azat has worked as a CTO/co-founder at <a href="http://www.crunchbase.com/company/gizmo">Gizmo</a> — an enterprise cloud platform for mobile marketing campaigns, and has undertaken the prestigious <a href="http://500.co/">500 Startups</a> business accelerator program. Previously, he was developing mission-critical applications for government agencies in Washington, DC: National Institutes of Health, National Center for Biotechnology Information, Federal Deposit Insurance Corporation, and Lockheed Martin. Azat is a frequent attendee at Bay Area tech meet-ups and hackathons (<a href="http://angelhack.com">AngelHack</a> hackathon ’12 finalist with team <a href="http://fashionmetric.com">FashionMetric.com</a>). </p>

								<p>Currently, he works as an engineer at the curated social media news aggregator website, <a href="http://storify.com">Storify.com</a>. He mentors entrepreneurs as a hacker in residence at startup accelerator and fund <a href="http://startupmonthly.org">StartupMonthly</a>, where he is teaching technical <a href="http://www.startupmonthly.org/rapid-prototyping-with-javascript-and-nodejs.html">Rapid Prototyping with JavaScript and Node.js</a> training to much acclaim. In his spare time, Azat writes about technology on his blog: <a href="http://webapplog.com">webAppLog.com</a>.</p>
								          <a href="https://twitter.com/azat_co" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @azat_co</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>        
						</div>
							<div class="span4 expand">
								<div class="row-fluid">
									<div class="span12">
										<img src="img/azat-1.jpg" alt="Azat Mardanov" class="photo-border">
									</div>
								</div>
<!-- 								<div class="row-fluid content slide">			
								<div class="span12">
									<img src="img/azat-2.jpg" alt="Device Lab">
								</div>
								</div>
								<div class="row-fluid content slide">			
									<div class="span12">
										<img src="img/azat-3.jpg" alt="Device Lab">
									</div>
								</div> -->			

							</div>	
							
							<div class="row-fluid button author-message-btn">
								<a class="btn-default pull-right" target="_blank" href="mailto:hi@rapidprototypingwithjs.com">
									Send <b>a message</b>
									<i class="icon-envelope"></i>
								</a>
							</div>
							
						</div>
							</div>						
					

					
				</section>	
	
				
				
				<section class="section" id="section-contact" data-section="section-contact">
					<div class="container-fluid">
						<div class="row-fluid title">
							<div class="span3">
								<h2>Contact</h2>
							</div>
							<div class="span9 hidden-phone">	
								<hr>
							</div>
						</div>
						<div class="row-fluid content">
							<div class="span12">
								<h4 class="intro">Let's stay in touch!</h4>
								<p>If you have any questions please use the contact form or choose a method below.</p>
								<div class="row-fluid alt contact">
									<b>Email:</b>
									<span><a href="mainlto:hi@RapidPrototypingWithJS.com">hi@RapidPrototypingWithJS.com</a></span>
								</div>
								<div class="row-fluid alt  contact">
									<b>Facebook:</b>
									<span><a href="http://www.facebook.com/RapidPrototypingWithJS" rel="external">facebook.com/RapidPrototypingWithJS</a></span>
								</div>
								<div class="row-fluid alt  contact">
									<b>Twitter:</b>
									<span><a href="http://www.twitter.com/RPJSBook" rel="external">@RPJSBook</a></span>
								</div>
								
								<div class="row-fluid alt  contact">
									<b>GitHub:</b>
									<span><a href="http://github.com/azat-co/rpjs" rel="external">github.com/azat-co/rpjs</a></span>
								</div>
								<div class="row-fluid alt  contact">
									<b>Storify:</b>
									<span><a href="https://storify.com/azat_co/rapid-prototyping-with-js" rel="external">Rapid Prototyping with JS on Storify</a></span>
								</div>

								
								
							</div>
<!-- 							<div class="span6">
							
								<div class="row-fluid">
									<div class="span12">
										 
									</div>
								</div>
								
							
							</div> -->
						</div>	
						
						<div class="footer">
							<div class="row-fluid">
								<div class="span12">
									<p>&copy; 2013 | <a href="http://azat.co/" rel="external">Azat Mardanov</a></p>
									
								</div>
							</div>	
						</div>
					</div>	
				</section>
							</div>	
		</div>

			</div>	
		</div>		
	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/d3.v3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap-tooltip.min.js"></script>

<script type="text/javascript">

  $('.buy-buy-buy a').tooltip()
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36472155-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</body>
</html>
