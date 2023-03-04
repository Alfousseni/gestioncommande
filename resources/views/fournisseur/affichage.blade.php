@include('layout.entete')

<br>

@if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif


<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion des <b>fournisseures</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un fournisseur</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Nom</th>
						<th>prenom</th>
						<th>tel</th>
						<th>email</th>
						<th>adresse</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fournisseures as $fournisseure)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ $fournisseure->nom }}</td>
						<td>{{ $fournisseure->prenom }}</td>
						<td>{{ $fournisseure->tel }}</td>
						<td>{{ $fournisseure->email }}</td>
						<td>{{ $fournisseure->adresse }}</td>
						<td>
							<a href="{{route('edite_fournisseure',$fournisseure->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="{{route('delete_fournisseure',$fournisseure->id)}}" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('add_fournisseure')}}" method="POST">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Ajout Fournisseur</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control" required>
					</div>
					<div class="form-group">
						<label>prenom</label>
						<input type="text" name="prenom" class="form-control" required>
					</div>
					<div class="form-group">
						<label>tel</label>
						<input type="text" name="tel" class="form-control" required>
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" class="form-control" required>

					</div>
					<div class="form-group">
						<label>Adresse</label>
						<input type="text" name="adresse" class="form-control" required>

					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

<!-- Delete Modal HTML -->
{{-- <div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('delete_produit',$produit->id)}}" method="GET">
				<div class="modal-header">						
					<h4 class="modal-title">Effacer  produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Etes vous sur de vouloir supprimer ce produit?</p>
					<p class="text-warning"><small>Cette action est irreversible.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div> --}}




@include('layout.pied')
