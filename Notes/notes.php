<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Materialize CSS</title>
    <style>
        .box{
            height: 200px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h4>Icons</h4>
        <i class="material-icons red-text">error</i>
        <i class="material-icons yellow-text text-darken-2">warning</i>
        <i class="material-icons grey-text text-darken-4">cloud</i>
        <i class="material-icons blue-text">folder</i>

        <h4>Icons on Buttons</h4>
        <a href="#" class="btn blue waves-effect waves-light"  id="pulse-btn">
            <span>Send</span>
            <i class="material-icons right">send</i>
        </a>
        <a href="#" class="btn pink waves-effect waves-light pulse">
            <span>Email</span>
            <i class="material-icons right">email</i>
        </a>

        <h4>Icons on floating Buttons</h4>
        <a href="#" class="btn-floating blue" id="pulse-btn">
            <i class="material-icons">add</i>

        </a>
        <a href="#" class="btn-floating red">
            <i class="material-icons">remove</i>
            
        </a>
        <a href="#" class="btn-floating orange">
            <i class="material-icons">edit</i>
            
        </a>
    </div>

  <script>
    var el = document.getElementById("pulse-btn");
        el.onmouseover = function(){
            el.classList.add("pulse");
        };
        el.onmouseout = function(){
            el.classList.remove("pulse");
        };
  </script>

    
</body>
</html>