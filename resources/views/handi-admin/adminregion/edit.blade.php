@extends('layouts.admin')
@section('header')
    Détails de <strong>{{ $item->libelle }}</strong> 
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">Accueil</a></li>
    <li class="breadcrumb-item"><a href="{{route('regions.index')}}">Liste régions</a></li>
    <li class="breadcrumb-item active">Détails de {{ $item->libelle }}</li>

@endsection

@section('content')
<div class="col-sm-4 text-center">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">
                {{$item->libelle}}
            </h4>

        </div>
        <div class="card-body" >
            
               
                    <p>
                        Nombre de chef-lieux de cette région:
                    </p>
                    <h3>{{$item->cheflieu()->count()}}</h3>
                        
                     
                    <a href="{{route('cheflieus.index',['region'=>$item->id])}}" class="btn btn-info" title="Aller au chef-lieux"><i class="fas fa-arrow-circle-right"></i> Allez aux chef-lieux</a>

                
            
        </div>
    </div>

</div>
    <div class="row">
        <div class="col-md-8 col-offset-2">
            <div class="card">
                <div class="card-header">
                    <h3> <i class="fas fa-"></i> Mise à jour des détails</h3>

                </div>
                <div class="card-body">
                        <form action="{{route('regions.update',$item->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            
                            <div class="form-group">
                                <label for="libelle">Libellé:</label> 
                                <input aria-describedby="errorlibelle" type="text" 
                                class="form-control @error('libelle') is-invalid @enderror "
                                 name="libelle" value="{{$item->libelle}}">
                                @error('libelle')
                                    <small class="form-text text-danger" id='errorlibelle'>
                                        {{$errors->first('libelle')}}

                                    </small>
                                @enderror
                            </div>
                            <input type="submit" value="Mettre à jour" class="btn btn-warning">

                            
                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection