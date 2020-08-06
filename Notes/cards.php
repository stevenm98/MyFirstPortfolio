<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Materialize CSS</title> 
</head>
<body> 
<nav class="nav-wrapper blue lighten-2">
   <div class="container">
      <a href="#" class="brand-logo">Site Title</a>
      <a href="#" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="btn-floating indigo darken-4 z-depth-0 pulse">
            <i class="material-icons">notifications</i>
        </a></li>
        <li><span class="badge white-text pink new" style="position:relative;top:20px;right:25px;">7</span></li>
      </ul>
   </div>
    
</nav>

<ul class="sidenav" id="mobile-links">
   <li><a href="#">Home</a></li>
   <li><a href="#">About</a></li>
   <li><a href="#">Contact</a></li>
   <li><a href="#">Login</a></li>
</ul>



<div class="container">
    <h2>Food</h2>

    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-image">
                    <img src="curry.jpg" class="responsive-img materialboxed">
                    <a href="#" class="halfway-fab btn-floating pink pulse">
                    <i class="material-icons">favorite</i>
                </a>
                </div>
                <div class="card-content">
                    <span class="card-title">Sample Title</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Exercitationem autem fugit, impedit necessitatibus eum earum harum inventore pariatur a.
                    Fugit laudantium id voluptas cupiditate magni recusandae cum, officiis quibusdam vero!
                    </p>
                </div>
                <div class="card-action">
                    <a href="#" class="orange-text text-darken-4">More Details</a>
                    <a href="#" class="orange-text text-darken-4">View Ingredients</a>
                </div>
            </div>
        </div>
        <div class="col s12 l6">
        <div class="card">
                <div class="card-image">
                    <img src="pasta.jpg" alt="">
                    <a href="#" class="halfway-fab btn-floating pink pulse">
                    <i class="material-icons">favorite</i>
                </a>
                </div>
                <div class="card-content">
                    <span class="card-title">Sample Title</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Exercitationem autem fugit, impedit necessitatibus eum earum harum inventore pariatur a.
                    Fugit laudantium id voluptas cupiditate magni recusandae cum, officiis quibusdam vero!
                    </p>
                </div>
                <div class="card-action">
                    <a href="#" class="orange-text text-darken-4">More Details</a>
                    <a href="#" class="orange-text text-darken-4">View Ingredients</a>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    })
</script> 
</body>
</html>