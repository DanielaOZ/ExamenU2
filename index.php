<php
include('connect.php'); 
$self = $_SERVER['index.php'];
header("refresh:300; url=$self");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Librerias de bootstrap para la grafica -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" href="css/estilos.css"></link>
<title>Examen U2</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    
        <h1 class="border">2.5 El Facto Humano y sus aspectos</h1>

        <div class="box">
            <div class="uno">
                <section>
             
                    <h1 class="texts">Potencia: 0</h1>
                     <h3 id="mensaje"></h3> &nbsp;
              
               <h1><input type="range" name="" id="potencia" min="0" max="100" value="0"></h1> 
               &nbsp;&nbsp;<table id="datos"class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th> id</th>
                        <th>Potencia</th>
                        <th> Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php include "backend/tabla.php"; ?>
                </tbody>
            </table>
            </div>
           <div class="col">
           &nbsp;&nbsp;&nbsp; <h3>Gráfica de Barras </h3>
           &nbsp; <div id="grafica"   class="container shadow-lg  bg-body rounded col-4 " style="width: 450px; height: 300px;"> </div>
              </div>
            </div>
            </div>
         </section>
         <p id="compatible"></p>
        </div>
        
      
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha512-suUtSPkqYmFd5Ls30Nz6bjDX+TCcfEzhFfqjijfdggsaFZoylvTj+2odBzshs0TCwYrYZhQeCgHgJEkncb2YVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script id="tablaD">

</script>
<script src="js/main.js"></script>
<script src="js/grafica.js"></script>
</body>
</html>
