@extends('layouts.admin')
@section('content')
<div class="container">
    <div class=row>
        <div class="col-12">
            <div class="d-flex justify-content-between">
            <h2>Dettaglio post {{$post->title}}</h2>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna all'elenco</a>
            </div>
        </div>
        <div class="col-12">
            <p><strong>Slug:</strong>{{$post->slug}}</p>
            <p><strong>Autore:</strong>{{$post->author}}</p>
            <p><strong>Tipo:</strong>{{$post->type ? $post->type->name : 'Senza categoria' }}</p>

            <p><strong>Tags</strong>
        
             @forelse($post->tags as $tag)
                {{ $tag->name}}
                @empty
                Nessun tag associato al post
             @endforelse

            </p>

            <label class="d-block"><strong>Riassunto:</strong></label>
            <p>{{$post->excerpt}}</p>
            <label class="d-block"><strong>Contenuto:</strong></label>
            <p>{{$post->content}}</p>

        </div>
    </div>
     
</div>
@endsection 