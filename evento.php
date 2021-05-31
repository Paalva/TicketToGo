<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    

    <title>Ticket To Go</title>
</head>


<body>


  
</div>
<div class="container-fluid">

    <div class="row topbar">
        <div>
        <a class="top-nav-logo top-nav-logo-link" href="index.php">LOGO</a>
                    
                        <label class="mobile-menu" for="menu">
                    </label>
                    <ul class="nav-list">
                    <a class="carrito-btn" href="#"> 0<img class="img-carrito" src="./imgs/cart.png" alt="Carro Compras"></a>
                    </ul>  
         </div>
    </div>

</div>

    <div class="container-fluid">
        <!-- NAV -->
        <nav>
            
            <div class="row nav">                
                <div>
                    <a class="nav-logo nav-logo-link" href="index.php"><img class="img-ticket" src="./imgs/ticket.png" alt="Ticket">Ticket To GO</a>
                    <input type="checkbox" id="menu">
                        <label class="mobile-menu" for="menu">
                        <img src="./imgs/svg/bars.svg" alt="menu bar">
                    </label>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#" class="nav-link">Upcoming</a></li>
                        <li class="nav-item"><a href="evento.php" class="nav-link">Events</a></li>
                        <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">My Tickets</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <hr class="hr-nav">
            </div>
        </nav>
        <!-- NAV -->

        <!-- EVENTO HOME-->
        
        
            <div class="row section-evento" >
            
                
                <div class="col-6">                   
                <a href="#">        
            <div class="evento-main">
            </div>
                </a>
                              
                <div class="dropdown">
                <button type="button"  class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Choose an option
                    </button>
                    
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="modal" data-target="#myModal">VIP $2500</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#myModal">Primera fila $1200</a>
                        <a class="dropdown-item disabled" href="#">Graderia regular $800 (Agotado)</a>
                    </div>
                </div>
                
                    
                </div>
                <hr class="barra-evento">
                <div class="col-6">                   
                        <h1 class="evento-title">Floyd Mayweather vs Conor Mcgregor</h1><br>
                        <h2 class="evento-price"> $800-$2500</h2><br>
                        <h1 class="evento-subtitle">Combate de Boxeo que tendra lugar el 26 de agosto de 2021 en el T-Mobile Arena de Las Vegas (Nevada, Estados Unidos) y enfrentara al invicto y once veces campeón del mundo Floyd Mayweather, Jr. contra el excampeón multidivisional y campeón de Peso Ligero de UFC Conor McGregor.</h1>
                                                
                    </h1>

                    
                </div>
            

        <!-- EVENTO END-->

        <div class="col-12 relacionados"><h2> | Similar Events</h2></div>

<div class="col-3">
<a href="">
    <div class="relacionado-1">
        
       
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #1</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-2">
        
       
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #2</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-3">
        
       
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #3</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>
<div class="col-3">
<a href="">
    <div class="relacionado-4">
    </div>
    </a>
    <div class="txt-background">
    <p class="relacionado-title">Titulo relacionado #4</p>
    <p class="relacionado-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>

</div>




</div><!--AQUI TERMINA EL ROW-->


  
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="pop-up-header">
          
          <h4 class="modal-title">Registro compra</h4>
        </div>
        <div class="modal-body">
          
          <input class="ingresar-texto" type="text" placeholder="Favor ingrese su nombre">
          <input class="ingresar-texto" type="email" placeholder="Favor ingrese su correo electronico">
         
          
        </div>

        <div class="modal-footer">
        <input class="btn-registrarse" data-toggle="modal" data-target="#modal-reserva" data-dismiss="modal" type="submit" value="Registrarse">
          <button type="button" class="btn close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<!--Aqui termina el modal para registrarse-->

<!-- Modal ya registrado -->
<div class="modal fade" id="modal-reserva" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="pop-up-header">
          
          <h4 class="modal-title">Record de asistencia</h4>
        </div>
        <div class="modal-body">
          
          <label class="label-numeros">Numero de adultos</label><input class="ingresar-numeros" type="number" min="0" max="5" placeholder="Max 5"><br>
          <label class="label-numeros">Numero de adultos</label><input disabled class="ingresar-numeros" type="number" min="0" max="5" placeholder="No disponible">
          <p class="modal-text">Existen eventos donde por seguridad y responsabilidad de los organizadores solo pueden asistir personas mayores a los 18 anhos de edad</p>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
          <label class="confirmacion" for="vehicle1"> Entiendo y confirmo que soy mayor de 18 anhos</label><br>
        </div>

        <div class="modal-footer">
        <input class="btn-registrarse" type="submit" value="Confirmar">
          <button type="button"  class="btn close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<!--Aqui termina el modal de ya registrado-->



        <!--Footer -->

<footer>

<div class="row footer-section" id="footer">
<div class="col-12 footer-logo">
<span class="logo-footer"><p  class="footer-title">LOGO</p></span>
<p class="footer-subtitle">Stay connected</p>
<div class="row">
    <div class="col-2 no-mostrar-phone"></div>
    <div class="col-2"><a href="#"><div class="redes-facebook"></div></a></div>
    <div class="col-2"><a href="#"><div class="redes-instagram"></div></a></div>
    <div class="col-2"><a href="#"><div class="redes-twitter"></div></a></div>
    <div class="col-2"><a href="#"><div class="redes-github"></div></a></div>
    <div class="col-2"><a href="#"><div class="redes-linkedin"></div></a></div>

</div>
<hr class="barra-footer">
<p class="rights">All rights reserved to tickettogo.com 2021 </p>
</div>
</div>


</div>

<!--aqui termina el container fluid-->

</footer>

</body>

</html>