@extends('layouts.admin')
@section('content')
<div class="container">
    <div class=row>
        <div class="col-12">
            <div class="d-flex justify-content-between">
            <h2>Dettaglio tipo {{$type->name}}</h2>
            <a href="{{route('admin.types.index')}}" class="btn btn-primary">Torna all'elenco</a>
            </div>
        </div>
        <div class="col-12">
        
<p><strong>Slug:</strong>{{$type->slug}}</p>
        </div>
        <div class="col-12">
            <h2>Post appartenenti a questa categoria</h2>
            <div class="row">
            @forelse ($type->posts as $post)
              <div class="col-3">
                 <div class="card">
                   <h5>{{$post->$title}}</h5>
                   <p>{{$post->$excerpt}}</p>
                   <a class="btn btn-primary" href="{{route('admin.posts.show', $post->slug)}}">Continua a leggere</a>
                 </div>
               </div>
            @empty
<h5 class="text-center">Non ci sono post per questa categoria</h5>
            @endforelse
            </div>
        </div>
    </div>
     
</div>
@endsection 