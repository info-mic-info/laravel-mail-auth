@extends('layouts.admin');
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex">
            <h2>Elenco Tipo</h2>
            </div>
            <div>
                <a href="{{ route('admin.types.create') }}" class="btn btn-primary">Aggiungi tipo</a>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Slug</th>
                <th>Azioni</th>
            </thead>
            <tbody>
               @foreach($types as $type)
               <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->nome}}</td>
                <td>{{$type->slug}}</td>
                <td><a href="{{'route.types.show', type->slug}}"><i class="fas fa-eye"></i></a></td>
               </tr>
               @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

 