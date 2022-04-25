<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Control de cajas pitalito
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Control de cajas pitalito</li>
    
    </ol>

  </section>

  <section class="content">

        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive" width="100%">
                    
                    <thead>
                    
                        <tr>
                        
                        <th style="width:10px">#</th>
                        <th>Caja</th>
                        <th>Usuario</th>
                        <th>Descripción</th>
                        <th>Actualizo</th>
                        <th>Actualizado</th>
                        
                        
                        </tr> 

                    </thead>    


                     <tbody>
          
          <tr>
            <td>1</td>
            <td>P0001</td>
            <td>loquito perez</td>
            <td><button class="btn btn-success btn-xs">Disponible</button></td>
            <td>Diego Calderon</td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-success"><i class="fa fa-pencil"> Mostrar</i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

          <tr>
            <td>1</td>
            <td>P0005</td>
            <td>loquito perez</td>
            <td><button class="btn btn-danger btn-xs">Lleno</button></td>
            <td>Diego Calderon</td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-success"><i class="fa fa-pencil"> Mostrar</i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

          <tr>
            <td>1</td>
            <td>P1001</td>
            <td>loquito perez coso</td>
            <td><button class="btn btn-success btn-xs">Disponible</button></td>
            <td>Diego Calderon</td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-success"><i class="fa fa-pencil"> Mostrar</i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

        </tbody>  

                </table>

            </div>

        </div>

        
    </section>
</div>
 



