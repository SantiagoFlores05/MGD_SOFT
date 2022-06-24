<?php



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"> </script>
    <link rel="stylesheet" href="../../assets/css/estiloCliente.css">
    <link href='../../assets/css/main.css' rel='stylesheet' />
    <script src='../../assets/js/main.js'></script>
    <script src='../../assets/js/es.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'es'
        });
        calendar.render();
      });

    </script>

</head>
<body>
    <nav class="navbar">
        <h4>Llantas Moreno Lopez</h4>
        <div class="profile">
            <span class="fas fa-search"></span>
            <img class="profile-image" src="https://picsum.photos/200/200?random=1">
            <p class="profile-name">Cliente</p>
        </div>
    </nav>

    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"><span class="fas fa-bars"></span></label>

    <div class="slidebar">
      <a href="#">
        <div class="slidebar-menu" id="sidebar">
            <span  class='bx bxs-home' ></span><p>INICIO</p>
        </div>
      </a>  
       <a href="#">
       <div class="slidebar-menu">
            <span class="bx bxs-map-pin"></span><p>Citas</p>
        </div>
       </a>
       <a href="#">
        <div class="slidebar-menu">
            <span class='bx bx-message-rounded-error' ></span><p>PQR</p>
        </div>
       </a>
      
       <a href="#">
        <div class="slidebar-menu">
            <span  class='bx bx-log-out-circle' ></span><p>Salir</p>
        </div>
       </a>
    </div>


    <main>
        <div class="dashboard-container">
            <div class="card total1">
                <div class="info">
                    <div class="info-detail">
                        <h2>Formulario para agendar su cita</h2>
                        <p>Registre los datos de su vehículo </p>
                       
                       
                        <form class="agendar" action="#" method="POST">
                     
                            <h4>Tipo de carrocería</h4>
                            <select name="carroceria" class="box">
                                <!-- Opciones de la lista -->
                                <option value="1">Sedán</option>
                                <option value="2" selected>Hatchback</option> <!-- Opción por defecto -->
                                <option value="3">Suv</option>
                                <option value="4">Pick-Up</option>
                                <option value="5">Minivan</option>
                                <option value="6">Crossover</option>
                            </select>
                     
                            <h4>Cantidad de ejes</h4>
                            <select name="ejes" class="box">
                                <!-- Opciones de la lista -->
                                <option value="1">2-Ejes</option>
                                <option value="2" selected>3-Ejes</option> <!-- Opción por defecto -->
                                <option value="3">4-Ejes</option>
                                <option value="4">5-Ejes</option>
                                <option value="5">6-Ejes</option>
                            </select>
                        
                            <h4>Marca del vehículo</h4>
                            <select name="vehiculo" class="box">
                                <!-- Opciones de la lista -->
                                <option value="1">Ford</option>
                                <option value="2" selected>Chevrolet</option> <!-- Opción por defecto -->
                                <option value="3">Renault</option>
                                <option value="4">Kenworth</option>
                                <option value="5">Toyota</option>
                            </select>
                       
                            <h4>Modelo del vehículo</h4>
                            <input type="number" name="modelo" class="box" placeholder="2012">
                         
                            <h4>Seleccione el servicio que desea</h4>
                            <select name="servicio" class="box">
                                <!-- Opciones de la lista -->
                                <option value="1">Vulcanizado</option>
                                <option value="2" selected>Despinchar</option> <!-- Opción por defecto -->
                                <option value="3">Regrabado</option>
                                <option value="4">Mantenimiento</option>
                                <option value="5">Otro</option>
                            </select>
                      
                       
                            <h4>Registre una observación</h4>
                            <input type="text" name="observacion" class="box">
    
                            <input type="submit" name="agendar" value="Agendar cita" class="btn">
                    
                        </form> 

                    </div>
   
                </div>
            </div>

            <div class="card total2">
               
                    <div class="info-detail">
                    
                    </div>
                   
                    <div id='calendar'></div>
                
              

            </div>
            
            
            

            <div class="card detail">
                <div class="detail-header">
                    <h1> Todo lo que necesitas</h1>
                </div>
                    <div class="wrap">
    
                        
                            <div class="card1" id="card">
                                <div class="face front">
                                    <img src="../../assets/img/index1.png" alt="">
                                    <h3>Neumaticos</h3>
                                </div>
                                <div class="face back">
                                    <h3>Llantas</h3>
                                    
                                </div>
                            </div>
                        
                            <div class="card1" id="card1">
                                <div class="face front">
                                    <img src="../../assets/img/index.jpg" alt="">
                                    <h3>Kid de Herramientas</h3>
                                </div>
                                <div class="face back">
                                    <h3> Servicio seguro </h3>
                                </div>
                            </div>
                        
                            <div class="card1" id="card2">
                                <div class="face front">
                                    <img src="../../assets/img/index3.jpg" alt="">
                                    <h3>Agendar Citas</h3>
                                </div>
                                <div class="face back">
                                    <h3> Servicio seguro </h3>
                                </div>
                            </div>
                        
                            <div class="card1" id="card3">
                                <div class="face front">
                                    <img src="../../assets/img/index4.png" alt="">
                                    <h3> Servicio seguro </h3>
                                </div>
                                <div class="face back">
                                    <h3>Servicio seguro</h3>
                                    
                                </div>
                             </div>
                    </div>
                    
    
                
            </div>



            <div class="card customer">
                <div class="customer-wrapper">
                    
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1988.493946386944!2d-74.11429368255617!3d4.596191200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f992f88e2ce0b%3A0x5f759f81a7557781!2sSENA%20-%20Complejo%20sur!5e0!3m2!1ses!2sco!4v1656014857072!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           
            </div>
        </div>   
    </main>
    


</body>
</html>