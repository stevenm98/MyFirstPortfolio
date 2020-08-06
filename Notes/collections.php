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
        <h2>Collections</h2>
        <ul class="collection with-header">
            <li class="collection-header"><h4>K-pop</h4></li>
            <li class="collection-item avatar">
                <i class="material-icons circle blue">person</i>
                <span class="title">Blackpink</span>
                <p class="grey-text">Girl Group</p>
                <a href="" class="secondary-content">
                    <i class="material-icons blue-text">email</i>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle blue">person</i>
                <span class="title">Jennie</span>
                <p class="grey-text">Rapper</p>
                <a href="" class="secondary-content">
                    <i class="material-icons blue-text">email</i>
                </a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle blue">person</i>
                <span class="title">Lisa</span>
                <p class="grey-text">Dancer</p>
                <a href="" class="secondary-content">
                    <i class="material-icons blue-text">email</i>
                </a>
            </li>
            <li class="collection-item">Rose</li>
            <li class="collection-item">Jisoo</li>
            <li class="collection-item">Blinks</li>

        </ul>
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