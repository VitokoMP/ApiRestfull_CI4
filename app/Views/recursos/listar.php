<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script type="text/javascript">
    
    function eliminarRegistroUF(idRegistro){
		document.getElementById('idregistroUfEliminar').value=idRegistro;
        if (typeof foo !== 'undefined') {
            // Ahora sabemos que foo está definido, ahora podemos continuar.
            $('#popup-eliminar-registroUf').bPopup();
        }

    }

    </script>
    <title>Listar UF Codeigniter 4</title>
</head>

<body>

<section>
    <article>
        <br>
            <div class ="col-12">
            <div class="card">
                    <div class="card-header">                             
                        <h3 class="crud-title">CRUD Ajax PHP Version Beta 0.9</h3>
                    </div>                
                <div class="card-body col-10">
                    <div class="container">
                     <!-- Modal - Add New Record -->               
                            <div class="row">
                                <div class="col-12 col-md-12"> 
                                <!-- Contenido -->

                                                            
                                <!-- Content Section --> 
                                        <!-- crud jquery-->
                                                <div class="da">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="pull-right">
                                                                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Registro</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="records_content">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                <!-- /Content Section --> 
                                    
                                        <!-- Bootstrap Modals --> 
                                <!-- Modal - Add New Record/User -->
                                        <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                            
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Agregar Registro de Uf</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>     
                                                    <!-- modal -body--> 
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="Id_registro">Id registro</label>
                                                                <input  type="text" id="Id_registro" value=""  class="form-control"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Fecha">Fecha</label>
                                                                <input type="text" id="codFecha" value=""   class="form-control"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Valor">Valor en pesos</label>
                                                                <input type="text" id="codValor" class="form-control" value=""/>
                                                            </div>
                                                        </div>
                                                    <!-- // Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <!-- // Modal --> 
                                    
                                                    <!-- Modal - Update User details -->
                                                    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                    
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Actualizar</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>                                                         
                                                                    <div class="modal-body">
                                                                            <div class="form-group">
                                                                            <label for="idalumno">Cod. Alumno</label>
                                                                            <input type="text" id="update_idalumno" value="" class="form-control"/>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <label for="codalumno">Cod. Alumno</label>
                                                                            <input type="text" id="update_codalumno" placeholder="Last Name" class="form-control"/>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <label for="obs">Observaciones</label>
                                                                            <textarea style="text-transform:uppercase" id="update_obs" class="form-control"></textarea>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
                                                                        <input type="hidden" id="hidden_user_id">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                <!-- // Modal --> 
                                                
                                            
                                                    <!-- Fin Contenido --> 
                                                    </div>
                                                </div>
                                                <!-- Fin row --> 
                                        
                                    </div>
                                                        <!-- Fin container -->
                                                            <footer class="footer">
                                                                <div class="container"> <span class="text-muted">  
                                                                </span> 
                                                                </div>
                                                            </footer> 
                                </div>
                            </div>   
            </div> 
        </div>               
    </article>
</section>
             <br>
             <section>
                <article>
                        <div class ="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class ="crud-title">Mantenedor API-Ajax </h2>
                                        </div>
                                        <div class="card-body col-10">
                                            <table class="crud-table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                        <th scope="col" class="col-1">#</th>
                                                        <th scope="col" class="col-3">Fecha</th>
                                                        <th scope="col" class="col-2">Valor</th>
                                                        <th scope="col" class="col-4">Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- ahora si que si -->
                                                    <?php for ( $i=0; $i < count($historicos); $i++):?>
                                                        <tr>
                                                        <th scope="row"><?php echo ($historicos [$i] ["id_registro"]);?></th>
                                                        <td><?php echo ($historicos [$i] ["fecha"]);?></td>
                                                        <td><?php echo ($historicos [$i] ["valor"]);?></td>
                                                        <td>
                                                        <a href="<?php echo BASE_URL.'?modificarRegistro='.$historicos [$i] ["id_registro"]; ?>"
								                        class="btn btn-warning" data-gravity=s
								                        title="Modificar Registro">modificar</a>

                                                        <button href="javascript:;"
                                                        class="btn btn-danger " data-gravity=s
                                                        title="eliminar Uf" 
                                                        onclick='eliminarRegistroUF(<?php echo $historicos [$i] ["id_registro"];?>)'>Eliminar</button>
                                                        </td>
                                                        </tr>

                                                        <?php  endfor;?>
                                                         
                                                    </tbody>  
                                            </table>
                                        </div>
                                    </div>

<!-- POP UP PREVENCION DELETE -->

<div id="popup-eliminar-registroUf"
		style="display: none; background-color: #fff; border-radius: 15px; color: #000; display: none; padding: 20px; min-width: 600px; min-height: 180px;">

		<h1>Eliminar Registro de Uf</h1>
		<form action="<?php echo BASE_URL ?>" method="post"
			class="box validate">

			<input type="hidden" name="c" value="Uf" /> <input type="hidden"
				name="m" value="eliminarRegistroUf" /> <input type="hidden"
				name="idRegistro" id="idregistroUfEliminar" value="" /> 

			<div align="center">
				<font size="5px">Est&aacute; seguro que desea elimnar a esta
					entrada de Uf?</font> <br /> <br />
			</div>
			<p class="divider"></p>
			<div class="actions">
				<div class="left">
					<input type="reset" class="b-close" value="Cancelar" />
				</div>
				<div class="right">
					<input type="submit" value="Quitar" name=submit />
				</div>
			</div>
		</form>
	</div>
                        </div>
                 </article>
             </section>
         
             <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
             <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" ></script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
          
             <!-- Fin crud jquery-->
            <!-- testeo --> 
	        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

         </body> 
         </html> 
         