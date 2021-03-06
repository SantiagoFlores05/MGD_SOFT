<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"> </script>
		<script src="assets/js/bootstrap.min.js" ></script>
        <script src="package/dist/sweetalert2.all.min.js" ></script>
        <script src="assets/js/sweetAlert.js"></script>
        <link rel="stylesheet" href="package/dist/sweetalert2.min.css">


        <link rel="stylesheet" href="assets/css/styleAdmin.css">
	</head>
	<body>
    <nav class="navbar">
        <h4>Llantas Moreno Lopez</h4>
        <div class="profile">
            <span class="fas fa-search"></span>
            <img class="profile-image" src="https://picsum.photos/200/200?random=1">
            <p class="profile-name">Administrador</p>
        </div>
    </nav>

    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"><span class="fas fa-bars"></span></label>

    <div class="slidebar">
      <a href="index.php">
        <div class="slidebar-menu" id="sidebar">
            <span  class='bx bxs-home' ></span><p>INICIO</p>
        </div>
      </a>  
       <a href="index.php">
       <div class="slidebar-menu">
            <span class="fas fa-users"></span><p>Usuarios</p>
        </div>
       </a>
       <a href="#">
        <div class="slidebar-menu">
            <span  class='bx bxs-shopping-bags'></span><p>Productos</p>
        </div>
       </a>
       <a href="#">
        <div class="slidebar-menu">
            <span  class="fas fa-clipboard-list"></span><p>Categorias</p>
        </div>
       </a>
       <a href="#">
        <div class="slidebar-menu">
            <span class='bx bx-message-rounded-error' ></span><p>PQR</p>
        </div>
       </a>
       <a href="#">
        <div class="slidebar-menu">
            <span  class='bx bxs-map-pin'></span><p>Citas</p>
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
                        <h3>Usuarios</h3>
                        <p>Registrados en el sistema</p>
                        <h2>50<span> Usuarios</span></h2>
                    </div>
                    <div class="info-image">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="card total2">
                <div class="info">
                    <div class="info-detail">
                        <h3>Productos</h3>
                        <p>Con existencias en inventario</p>
                        <h2>20<span> Productos</span></h2>
                    </div>
                    <div class="info-image1">
                        <i class='bx bxs-car'></i>
                    </div>
                </div>

            </div>
            <div class="card total3">
                <div class="info">
                    <div class="info-detail">
                        <h3>Categorias</h3>
                        <p>Clasificacion de productos</p>
                        <h2>8<span> Categorias</span></h2>
                    </div>
                    <div class="info-image">
                        <i class='bx bx-barcode-reader'></i>
                    </div>
                </div>
            </div>
            <div class="card total4">
                <div class="info">
                    <div class="info-detail">
                        <h3>PQR</h3>
                        <p>Peticiones,quejas o reclamos</p>
                        <h2>2<span> PQR</span></h2>
                    </div>
                    <div class="info-image1">
                        <i class='bx bxs-comment-detail'></i>
                    </div>
                </div>
            </div>

            <div class="card detail">
                <div class="detail-header">
                    <h2>Usuarios registrados</h2>
                    <input type="text" class="busqueda" placeholder="Realizar busqueda &#128270">
                    <a href="#" class="btn">Generar reporte  <i class='bx bxs-notepad' id="ai"></i></a>
                    <a href="index.php?c=usuarios&a=nuevo" class="btn1">Agregar usuario<i class='bx bxs-user-plus' id="ai"></i></a>
                </div>
				<table >
					<thead>
						<tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Identificaci??n</th>
                            <th>Telefono</th>
                            <th>Correo electronico</th>
                            <th>Direcci??n</th>
                            <th>Contrase??a</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data["Usuarios"] as $dato) {
                            echo "<tr>";
                            echo "<td>".$dato["nombre"]."</td>";
                            echo "<td>".$dato["apellido"]."</td>";
                            echo "<td>".$dato["identificacion"]."</td>";
                            echo "<td>".$dato["telefono"]."</td>";
                            echo "<td>".$dato["correoElectronico"]."</td>";
                            echo "<td>".$dato["direccionUsuario"]."</td>";
                            echo "<td id='contra'>".$dato["contrasena"]."</td>";
                            echo "<td><a href='index.php?c=usuarios&a=modificar&idUsuario=".$dato['idUsuario']."'><i class='bx bxs-user-detail' id='icono1'></i></a><a onclick='fntDelPersona(".$dato['idUsuario'].")' ><i class='bx bxs-trash' id='icono2'></i></a></td>";
                            echo "</tr>";
                        }
                        ?>
				    </tbody>
                </table>
                <div class="detail-foter">
                  
                  <h4 class="mostrar">Mostrar</h4> 
                  <input type="number" class="numero"> 
                  <h4 class="mostrar1">registros</h4>
                  <a class="btn5"><i class='bx bx-chevrons-left' id="ia"></i></a><a class="btn6"><i class='bx bx-chevrons-right' id="ia" ></i></a>
                </div>
                </div>
               
            <div class="card customer">
                <h2>Actividades administrativas</h2>
                <div class="customer-wrapper">

                    <img class="customer-image" src="https://picsum.photos/200/200?random=2">    
                    <div class="customer-name">
                    <h4>Usuarios</h4>
                    <p>Gestionar datos </p>
                    </div>
                    <p class="customer-date">Hoy</p>
                </div>    
          
                <div class="customer-wrapper">
                    <img class="customer-image" src="https://picsum.photos/200/200?random=3">
                    <div class="customer-name">
                    <h4>Productos</h4>
                    <p>Actualizar novedades del inventario </p>
                    </div>
                    <p class="customer-date">Hoy</p>
                </div>

                <div class="customer-wrapper">
                   <img class="customer-image" src="https://picsum.photos/200/200?random=4">   
                   <div class="customer-name">
                   <h4>Categorias</h4>
                   <p>Clasificar los productos</p>
                   </div>
                   <p class="customer-date">Hoy</p>
                </div>

                <div class="customer-wrapper">
                    <img class="customer-image" src="https://picsum.photos/200/200?random=5">
                    <div class="customer-name">
                    <h4>PQR</h4>
                    <p>Contestar peticiones de los usuarios</p>
                    </div>
                    <p class="customer-date">Hoy</p>
                </div>
            </div>
    </main>   
                   
    </body>
</html>