<?php include_once APPPATH . 'views/templates/header.php';?>
<div class="container theme-showcase" role="main">
	<br>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregaUsuario">Agregar Usuario</button>
<!-- Modal -->
<div class="modal fade" id="agregaUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulario para agregar usuario</h4>
      </div>
      
      <form method="post">
      <div class="modal-body">
      
       
        <div class="form-group">
		    <label for="nombre-usuario">Usuario (Ej: 12345678-9 o 19876543-K)</label>
		    <input type="text" class="form-control" id="nombre-usuario" onkeypress="return justNumbers(event);" maxlength="10" name="nombre-usuario" placeholder="RUT" required="true">
		</div>
		<div class="form-group">
		    <label for="nombre-usuario">Nombre</label>
		    <input type="text" class="form-control" id="nombre-usuario-nombre" name="nombre-usuario-nombre" placeholder="Nombre del Solicitante" required="true2">
		</div>
		 <div class="form-group">
		    <label for="password-usuario">Contraseña</label>
		    <input type="password" class="form-control" id="password-usuario" name="password-usuario" placeholder="******" required="">
		 </div>
		 <div class="form-group">
		    <label for="rango-usuario">Rango</label>
		    <select id="rango-usuario" name="rango-usuario" class="form-control" required="">
				<option value="">--Selecciona un rango</option>
		    			    	<option value="1">Administrador</option>
		    			    	<option value="2">Finanzas</option>
		    			    	<option value="3">Facturas</option>
		    			    	<option value="4">Recibos</option>
		    			    	<option value="5">Normal</option>
		    			    </select>
		</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-success" value="Crear Usuario">
      </div>
      
      </form>
    </div>
  </div>
</div>

<br>
<br>
<div class="panel panel-primary">
  <div class="panel-heading">Usuarios</div>
  <div class="panel-body">
  	<table class="table table-hover">
  		<tbody><tr>
  			<th>ID</th>
  			<th>NOMBRE DE USUARIO</th>
  			<th>RANGO</th>
  			<th>Contraseña</th>
  			<th>OPCIONES</th>
  		</tr><tr>
  		  		<form action="index.php?page=usuarios&amp;actualizar=1" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="1">
	  		</tr><tr>	
	  			<td>1</td>
	  			<td>15919475</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=1" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=2" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="2">
	  		<tr>	
	  			<td>2</td>
	  			<td>13922821</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=2" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=3" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="3">
	  		<tr>	
	  			<td>3</td>
	  			<td>14211637</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=3" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=4" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="4">
	  		<tr>	
	  			<td>4</td>
	  			<td>15023729</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=4" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=5" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="5">
	  		<tr>	
	  			<td>5</td>
	  			<td>13783071</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=5" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=6" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="6">
	  		<tr>	
	  			<td>6</td>
	  			<td>15936702</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=6" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=7" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="7">
	  		<tr>	
	  			<td>7</td>
	  			<td>16370078</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=7" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=8" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="8">
	  		<tr>	
	  			<td>8</td>
	  			<td>16937019</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=8" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=9" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="9">
	  		<tr>	
	  			<td>9</td>
	  			<td>16592198</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=9" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=10" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="10">
	  		<tr>	
	  			<td>10</td>
	  			<td>10576467</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=10" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=11" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="11">
	  		<tr>	
	  			<td>11</td>
	  			<td>15181757</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=11" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=12" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="12">
	  		<tr>	
	  			<td>12</td>
	  			<td>17716774</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=12" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=13" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="13">
	  		<tr>	
	  			<td>13</td>
	  			<td>15940616</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=13" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=14" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="14">
	  		<tr>	
	  			<td>14</td>
	  			<td>16375115</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=14" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=15" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="15">
	  		<tr>	
	  			<td>15</td>
	  			<td>15649820</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=15" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=16" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="16">
	  		<tr>	
	  			<td>16</td>
	  			<td>16410033</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=16" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=17" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="17">
	  		<tr>	
	  			<td>17</td>
	  			<td>16359917</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=17" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=18" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="18">
	  		<tr>	
	  			<td>18</td>
	  			<td>16076065</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=18" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=19" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="19">
	  		<tr>	
	  			<td>19</td>
	  			<td>11630892</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=19" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=20" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="20">
	  		<tr>	
	  			<td>20</td>
	  			<td>16939019</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=20" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=21" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="21">
	  		<tr>	
	  			<td>21</td>
	  			<td>17286253</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=21" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=22" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="22">
	  		<tr>	
	  			<td>22</td>
	  			<td>17308890</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=22" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=23" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="23">
	  		<tr>	
	  			<td>23</td>
	  			<td>17082711</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=23" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=24" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="24">
	  		<tr>	
	  			<td>24</td>
	  			<td>17002884</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=24" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=25" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="25">
	  		<tr>	
	  			<td>25</td>
	  			<td>17677539</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=25" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=26" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="26">
	  		<tr>	
	  			<td>26</td>
	  			<td>18151763</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=26" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=27" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="27">
	  		<tr>	
	  			<td>27</td>
	  			<td>16931960</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=27" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=28" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="28">
	  		<tr>	
	  			<td>28</td>
	  			<td>12512037</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=28" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=29" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="29">
	  		<tr>	
	  			<td>29</td>
	  			<td>11993652</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=29" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=30" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="30">
	  		<tr>	
	  			<td>30</td>
	  			<td>15780187</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=30" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=31" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="31">
	  		<tr>	
	  			<td>31</td>
	  			<td>15466813</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=31" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=32" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="32">
	  		<tr>	
	  			<td>32</td>
	  			<td>15161901</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=32" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=33" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="33">
	  		<tr>	
	  			<td>33</td>
	  			<td>15790555</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=33" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=34" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="34">
	  		<tr>	
	  			<td>34</td>
	  			<td>16630362</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=34" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=35" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="35">
	  		<tr>	
	  			<td>35</td>
	  			<td>17183642</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=35" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=38" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="38">
	  		<tr>	
	  			<td>38</td>
	  			<td>18098661</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=38" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=39" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="39">
	  		<tr>	
	  			<td>39</td>
	  			<td>10228844</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=39" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=40" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="40">
	  		<tr>	
	  			<td>40</td>
	  			<td>15343005</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=40" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=41" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="41">
	  		<tr>	
	  			<td>41</td>
	  			<td>17733658</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=41" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=42" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="42">
	  		<tr>	
	  			<td>42</td>
	  			<td>16784402</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=42" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=43" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="43">
	  		<tr>	
	  			<td>43</td>
	  			<td>17697986</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=43" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=44" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="44">
	  		<tr>	
	  			<td>44</td>
	  			<td>17096633</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=44" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=45" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="45">
	  		<tr>	
	  			<td>45</td>
	  			<td>20256563</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=45" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=46" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="46">
	  		<tr>	
	  			<td>46</td>
	  			<td>20256564</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=46" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=48" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="48">
	  		<tr>	
	  			<td>48</td>
	  			<td>18631142</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=48" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=50" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="50">
	  		<tr>	
	  			<td>50</td>
	  			<td>18366019</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3" selected="">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=50" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=51" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="51">
	  		<tr>	
	  			<td>51</td>
	  			<td>15774959</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=51" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=52" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="52">
	  		<tr>	
	  			<td>52</td>
	  			<td>17404554</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1" selected="">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=52" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=53" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="53">
	  		<tr>	
	  			<td>53</td>
	  			<td>16520353</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=53" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  		  		<form action="index.php?page=usuarios&amp;actualizar=54" method="post"></form>
	  		<input type="hidden" name="id-usuario" id="id-usuario" value="54">
	  		<tr>	
	  			<td>54</td>
	  			<td>18276427</td>
	  			<td><select id="user-rango" name="user-rango" class="form-control input-sm"><option value="1">Administrador</option><option value="2">Finanzas</option><option value="3">Facturas</option><option value="4">Recibos</option><option value="5" selected="">Normal</option></select></td>
	  			<td><input type="password" class="form-control input-sm" id="user-password" name="user-password" placeholder="******"></td>
	  			<td>
	  				<a href="index.php?page=usuarios&amp;eliminar=54" class="btn btn-danger btn-xs"><b>Eliminar</b></a>
	  				<button type="submit" class="btn btn-primary btn-xs"><b>Actualizar</b></button>
	  			</td>
	  		</tr>
  		
  			</tbody></table>
  </div>
</div>      


    </div>

</body>
</html>