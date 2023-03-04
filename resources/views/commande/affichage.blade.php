@include('layout.entete')
<br>

<h1 style="margin-top: 10%;color:black;">Liste des commandes !</h1>


@foreach ($commandes as $commande)  
    <div class="news" align='center' >
        <h3>
            COMMANDE DE {{$commande->client->nom}}
            <em> EFFECTUER LE {{$commande->created_at}} CONTACT {{$commande->client->tel}}</em>
        </h3>
        <p>
            Produit :{{$commande->produit->nom}} <br>
			Quantite :{{$commande->quantite}} <br>
			Prix :{{$commande->produit->prix}} FCFA<br>
			Montant :{{ $commande->quantite * $commande->produit->prix }} FCFA <br>
			 <span align='center' style="color:red; ">{{$commande->etat}}</span>
            <br />
			<a href="{{route('edit_commande',$commande->id)}}" class="edit" ><input type="button" class="btn btn-default" data-dismiss="modal" value="Effectuer"></a>

        </p>
    </div>
@endforeach
@include('layout.pied')
