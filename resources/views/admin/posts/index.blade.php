@extends('layouts.admin');
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex">
            <h2>Elenco Post</h2>
            </div>
            <div>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Aggiungi post</a>
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
                <th>Titolo</th>
                <th>Slug</th>
                <th>Azioni</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->slug)}}" title="Visualizza post" class="btn btn-square">
                            
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('admin.posts.edit', $post-> slug)}}" title="Modifica post" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                 <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post->slug)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                 </form>  
                 
                    </td>
                   
                </tr> 
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

 