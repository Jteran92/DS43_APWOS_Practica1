@extends('layouts.main')
@section('content')
<div id="Fila1" class="container-fluid">
        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/apex_legends.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/bloodlines-2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/counter_strike.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>

        </div>

    </div>

<br>

    <div class="container" id="pagina1">
        <div class="row">
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1 class="texto-grande">Danos tu opinion sobre los juegos!</h1>
                <br>
                <br>
                <br>
                    <p>Queremos saber tu opinion sobre juegos actuales para jugar con amigos, en base a tus opipiones, nosotros haremos recomendaciones buenas o malas sobre los juegos actuales, para que el publico disfrute de esos juegos y no malgasten su dinero.  
                    </p>
            </div>     
                
                <div class="col-6">   
                    <img class="img-fluid" src="img/multijugador.jpg" >
                    
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container" id="pagina2">
        <div class="row">
            <div class=col-3>
                
                <img class="img-fluid" src="img/lol.jpg"> 
            </div>
                   
            <div class="col-3" id="">
                        
                <img class="img-fluid" src="img/dota2.jpg" alt="">

            </div>
        
            
                    
            <div class="col-6">
                <br>
                <h1 class="texto-grande">Los dos mas jugados este verano!</h1>
                <br>
                <p>Entre los juegos mas jugados se encuentran League of legends y DOTA2, ambos juegos pregursores del tipo MOBA (Multijugador de arena de batalla en linea) hoy en dia hay un sin numero de juegos de este tipo, pero no rivalizan con sus 2 principales precursores, los cuales han sabido mantenerse ya que tienen una enorme recaudacion y siguen siendo jugados por muchisimas personas alrededor del mundo. 
                </p> 
            </div>                        
        </div>                
                    
    </div>       
        
<br>    

    <div class="container" id="pagina3">
        <div class="row">
              
            <div class="col-12">
                
                <br>
                <br>    
                <h1 class="grande">3</h1>
                <h1 class="texto-grande"> Juegos mas prometedores para este 2023!</h1>
                <br>
                <br>
                <br>
                <br>
            </div> 
        </div>     
    <div class="container" id="pagina3-2">
            <div class="row">
                <div class="col-4">   
                <img class="img-fluid" src="img/apex_legends.jpg" >                    
                 
                </div> 
                <div class="col-4">                       
                <img class="img-fluid" src="img/ark.jpg" >                     
                
                </div> 
                <div class="col-4">                                            
                <img class="img-fluid" src="img/baldurs_gate.jpg" >
                                  
                </div> 
                
            </div>
        </div>
    </div>
<br>
    <div class="container" id="pagina4">
        <div class="row">
            
          <div class="col-12">
                <br>
                <br>
                <br>
                <h1 class="texto-grande"> Podras encontrar todos los juegos organizados por:</h1> 
                <br>
                <br>
                <br>
          </div>
        </div>
        <div class="row">
            
            <div class="col-4">
                <h1>Categorias</h1>
                <p>Podras encontrar los juegos organizados por su genero, tematica y su modo de juego. Esto para facilitar la busqueda
                    y organizacion de nuestras bibliotecas, facilitando el acceso a la infomacion que podemos proveerte.
                </p>
                </div>
            <div class="col-4">
                <h1>Generos</h1>
                <p>Podras encontrar organizados nuestros juegos por su genero principal o secundaria, por ejemplo si buscas
                    la categoria "Accion" encontraras todos los juegos agregados a nuestra biblioteca con esa categoria.</p>
            </div>
            <div class="col-4">
                <h1>Tematica</h1>
                <p>La tematica del juego se refiere a el tipo de jugabilidad que tiene, pudiendo ser este por ejemplo, supervivencia,
                    mundo abierto para los MMORPG, ambientados en el espacio, etc.</p>
            </div>
        </div>
        <div class="row">
          <div class="col-4">
            <h1>Plataformas</h1>
            <p>Se clasificaran los juegos por plataforma, xbox, playstation, ordenador, steambox, por ejemplo. Se tendran en 
                mayor consideracion los juegos multiplataforma y de acceso gratuito.
            </p>
          </div>
          <div class="col-4">
            <h1>Clasificacion</h1>
            <p>Se refiere a los rangos de edad a la que los jugadores pueden tener acceso. Para poder tener acceso a toda la informacion 
                disponible tendras que acceder con un usuario para comprobar que eres apto para visualizar el contenido disponible.
            </p>
          </div>
          
        </div>
    </div>

    <div class="container" id="pagina2">
        <div class="row">       
            <div class="col-6">
                <br>
                <br>
                <h1 class="texto-grande">Los proximos lanzamientos, mas deseados!</h1>
                <br>
                <br>
                <p>Estos son los juegos mas esperados para este 2024, ya tienen miles de ventas en preventa, los 3 son su segundo lanzamiento por lo que lo que se espera de ellos es un poco mas de lo que originalmente ofrecieron. 
                </p> 
            </div>                        
          
                      
            <div class=col-2>
                <br>
                <br>  
            <img class="img-fluid" src="img/STALKER_2_cover_art.jpg"> 
            </div>
               
            <div class="col-2" id="">
                <br>
                <br>
            <img class="img-fluid" src="img/EGS_Frostpunk2.jpg" alt="">

            </div>   
            <div class="col-2" id="">
                <br>
                <br>  
            <img class="img-fluid" src="img/bloodlines-2-2.png" alt="">
            </div> 
        </div>          
    </div>   

    <div class="container" id="pagina5">
        <div class="row">
            
          <div class="col-12">
                <br>
                <br>
                <br>
                <h1 class="texto-grande"> Te agradecemos visitar nuesta pagina, te dejamos unas palabras de agadecimiento de nuestro equipo!</h1> 
                <br>
                <br>
                <br>
          </div>
        </div>
        <div class="row">
            
            <div class="col-4">
                <br>
                <h1>Programador</h1>
                <br>
                <p>Gracias por visitar nuestra pagina web, agradezco que manden todas las quejas o sugerencias, que quieran proporcionarnos en el boton de abajo .</p>
                </div>
            <div class="col-4">
                <br>
                <h1>Equipo</h1>
                <br>
                <p>El equipo de asociados, agradece tu visita y te manda un saludo, no olvides darle like a nuestra pagina de facebook y asi nos ayudas a crecer y poder otorgar un mejor servicio.</p>
            </div>
            <div class="col-4">
                <br>
                <h1>Moderadores</h1>
                <br>
                <p>Un agradecimiento a todos los moderadores que prestan su tiempo y servicio a mejorar poco a poco la calidad de lso datos de nuestra pagina.</p>
            </div>
        </div>
    </div>
<br>
<br>
<br>
<div class="container">
    <div class="col-12">
<section class="py-lg-10">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
          <div class="py-6 px-6 px-xl-0 rounded-4 " id="color-sugerencias">
            <div class="row align-items-center">
              <div class="offset-xl-1 col-xl-5 col-md-6 col-12">
                <div>
                  <h2 class="h1 text-white mb-3">Cualquier sugerencia o queja es bienvenida!</h2>
                  <p class="text-white fs-4">…Ayudanos a mejorar constantemente, cualquier comentario es bienvenido y si esta dentro de nuestras
                    posibilidades haremos los respectivos cambios!</p>
                  <button class="btn btn-dark">Mandar queja/sugerencia</button>
                </div>
              </div>
              <div class="col-xl-6 col-md-6 col-12">
                <div class="text-center">
                  <img src="img/buzon.png" alt="learning" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
<br>
<br>
    <div class="container" id="pagina6">
        <div class="row">
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1 class="texto-grande">Suscribete a nuestro canal para recibir nuestras noticias!</h1>
                <h1>Solo agrega tu correo electronico en el cuadro debajo.</h1>
                <br>
                <br>
                <br>
                <input id="correo" > <button id="btn" class="btn-azul" type="button">Suscribirse</button>
                <br>
                <br>
                <br>
                        
            </div>     
                    
                <div class="col-6">   
                    <img class="img-fluid" src="img/join-us.jpg" >
                        
                </div>
           </div>
        </div>
    </div>


 

    @endsection