@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex">
               <h2>Elenco tags</h2>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Slug</th>
                <th>Azioni</th>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 