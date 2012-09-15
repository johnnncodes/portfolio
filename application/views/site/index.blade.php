<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog, from you</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    {{ Asset::container('bootstrapper')->styles(); }}
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }

 
    </style>
    {{ Asset::container('bootstrapper')->scripts(); }} 
</head>
<body>
  <div class="navbar">  
        <div class="navbar-inner">  
            <div class="container">  
                <ul class="nav">  
                    <a class="brand" href="#">w3resource</a>  
                    <li class="active"><a href="#">Home</a></li>  
                    <li><a href="#">Blog</a></li>  
                    <li><a href="#">About</a></li>  
                    <li><a href="#">Contact</a></li>  
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorials<b class="caret"></b></a>  
                        <ul class="dropdown-menu">  
                            <li><a href="#">PHP</a></li>  
                            <li><a href="#">MySQL</a></li>  
                            <li class="divider"></li>  
                            <li><a href="#">JavaScript</a></li>  
                            <li><a href="#">HTML5</a></li>  
                        </ul>  
                    </li>  
                </ul>  
            </div>  
        </div>  
    </div>  

   
    </div><!--/.fluid-container-->



</body>
</html>