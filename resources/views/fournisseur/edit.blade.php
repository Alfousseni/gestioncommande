@include('layout.entete')

<div  class="ed">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('update_fournisseure',$p->id)}}" method="post">
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Edit fournisseur</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" value="{{$p->nom}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>prenom</label>
						<input type="text" name="prenom" value="{{$p->prenom}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>tel</label>
						<input type="text" name="tel" value="{{$p->tel}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{$p->email}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Adresse</label>
						<input type="text" name="adresse" value="{{$p->adresse}}" class="form-control" required>
					</div>
					{{-- <div class="form-group">
						<label>Fournisseur</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Categories</label>
						<input type="text" class="form-control" required>
					</div>					 --}}
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default"  value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
@include('layout.pied')