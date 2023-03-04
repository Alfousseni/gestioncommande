@include('layout.entete')

<div  class="ed">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('update_produit',$p->id)}}" method="post">
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Edit Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" value="{{$p->nom}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Quantite</label>
						<input type="number" name="quantite" value="{{$p->quantite}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="number" name="prix" value="{{$p->prix}}" class="form-control" required>
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