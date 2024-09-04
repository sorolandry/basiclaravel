@extends('layouts.master')

@section('title')
show
@endsection

@section('contenu')
        <h1>Détail du produit</h1>
               
            <hr>
            <h1>{{$produit->product_name}}</h1>
            <h2>${{$produit->product_price}}</h2>
            <p>{{$produit->product_description}}</p>
            <hr>
            <h4>{{$produit->created_at}}</h4>
            
            <hr>
            
            <a href="{{url('editproduct',[$produit->id])}}" class="btn btn-default">Edit</a>
            <form action="{{url('deleteproduct',[$produit->id])}}" method="POST" class="pull-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>

            </form>
             
                        {{-- {{$produits->links()}} --}}
@endsection
