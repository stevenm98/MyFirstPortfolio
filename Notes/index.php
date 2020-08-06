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
        <h2>Modals</h2>
        <a href="#terms" class="btn blue modal-trigger waves-effect waves-light">Terms & Conditions</a>
        <div class="modal" id="terms">
            <div class="modal-content">
                <h4>Terms & Conditions</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Commodi voluptate possimus repudiandae soluta reiciendis deleniti 
                   quisquam repellat dolore consequatur nulla! Dolores culpa explicabo
                   provident qui a similique exercitationem tempore praesentium.
                </p>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-close btn blue">Agree & Close</a>
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
    });
    $(document).ready(function(){
        $('.modal').modal();
    });
    /*$(document).ready(function(){ //this opens when the page is loaded 
      $('#terms').modal().modal('open');
  });*/
</script> 
</body>
</html>