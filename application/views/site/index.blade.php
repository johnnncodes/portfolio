<!DOCTYPE html>


<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>basco.johnkevin | Portfolio Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ Asset::container('bootstrapper')->styles(); }}
    <link rel="stylesheet" type="text/css" href="css/style.css">
  
    {{ Asset::container('bootstrapper')->scripts(); }} 
</head>
<body>
 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">basco.johnkevin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
              <li><a href="#"><i class="icon-user"></i> Overview</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-star"></i> Related Links <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul> <!-- dropdown-menu -->
              </li><!-- dropdown -->

            </ul><!-- nav ->



           <!--  <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form> -->



          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

   
    <div class="container">


      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1 >I love the web!</h1>
        <p>
          I build simple,beautiful and effective websites that gives my clients better opportunities to make their business a huge success.I provide their needs by using my excellent skills in web development, dedication and passion that results in beautiful and functional websites.
        </p>
        <p class="pull-right"><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
  

      <div class="row">
        <div class="span9">
          <blockquote id="portfolio-heading-con">
            <h2 class="text-info">Portfolio's & Recent Projects:</h2>
          </blockquote>
        </div>
      </div>
      
      <div class="row">
        <ul id="thumbnails">
          <li class="span4">
            <a target="_blank" href="http://codexdev.site40.net/Portfolio-001/">
              <img class="img-polaroid" src="img/1981.jpg"/>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://codexdev.site40.net/Portfolio-001/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://auzoneinn.web44.net/">
              <img class="img-polaroid" src="img/auzone.png"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://auzoneinn.web44.net/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://www.codexdeveloperwp.netau.net/corporate-theme-html5/">
              <img class="img-polaroid" src="img/portfolio-002.jpg"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://www.codexdeveloperwp.netau.net/corporate-theme-html5/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://www.myhometalking.com/">
              <img class="img-polaroid" src="img/myhometalking.jpg"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://www.myhometalking.com/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://www.codexdeveloperwp.netau.net/shop/">
              <img class="img-polaroid" src="img/hillel.jpg"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://www.codexdeveloperwp.netau.net/shop/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://www.codexdeveloperwp.netau.net/neat/">
              <img class="img-polaroid" src="img/redrock.jpg"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://www.codexdeveloperwp.netau.net/neat/">
              Live Demo
            </a>
          </li>
          <li class="span4">
            <a target="_blank" href="http://www.codexdeveloper.webatu.com/">
              <img class="img-polaroid" src="img/codexs.jpg"/>
            </a>
            <a target="_blank" class="btn btn-large btn-block btn-primary" href="http://www.codexdeveloper.webatu.com/">
              Live Demo
            </a>
          </li>
        
        <ul>
      </div>



     

      <hr>

     

    </div> <!-- /container -->

     <footer>
        <div class="container">
          <p>&copy; basco.johnkevin 2012</p>
        </div>
    </footer>



</body>
</html>