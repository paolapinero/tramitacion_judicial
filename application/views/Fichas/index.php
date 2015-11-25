<?php include_once APPPATH . 'views/templates/header.php';?>
<div class="container">
	<table class="table table-hover" id="tabla_fichas">
		<thead>
			<tr class="success">
				<th># de Ficha </th>
				<th>RUT Demandado</th>
				<th>Demandado</th>
				<th>Estado</th>
				<th>SubEstado</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($fichas as $ficha) {

				?>
				<tr>
					<td><?= $ficha['id'] ?></td>
					<td><?= $ficha['rut'] ?></td>
					<td><?= $ficha['nombre'] ?></td>
					<td><?= $ficha['estado'] ?></td>
					<td><?= $ficha['subestado'] ?></td>
					<td>
						<a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-search"></span></a>
						<a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-list"></span></a>
						<a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></a>
					</td>
				</tr>	
				<?php	
			}
			?>
		</tbody>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>	
<script>
$(document).ready(function(){
    $('#tabla_fichas').DataTable({
    	 "language": {
                "url": '<?php echo base_url("/js/bootstrap-dataTables-Spanish.json") ?>',
                "decimal": ",",
                "thousands": "."
            },
    });
});
</script>