@extends('layouts.admin');
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiungi un nuovo Post</h2>
            </div> 
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <ul class="list-unstyled">
                <li>{{$error}} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <div class="col-12">
                <form action="{{ route('admin.posts.store')}}" method="POST">
                    @csrf
            <div class="form-group">
                 <label class="control-label">
                    Titolo
                 </label>
                 <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
                 @error('title')
                 <div class=text-danger>{{$message}}</div>
                 @enderror
               </div>

               <div class="form-group">
                <label class="control-label">Tipo</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="">Seleziona un tipo</option>
                    @foreach($types as $type)
                    <option value="{{$type->$id}}" {{ $type->id == old('type_id, post->type_id') ? 'selected' : ''}}>{{$type->name}}</option> 
                    @endforeach
                </select>
                @error('type_id')
                 <div class=text-danger>{{$message}}</div>
                 @enderror
               </div>

<div class="form-group">
    <div class="control-label">Tags</div>
@foreach($tags as $tag)
<div class="form-check @error('tags') is-invalid @enderror">
<input class="form-check-input" type="checkbox" value="{{$tag->id}}" name="tag[]">
<label class="form-check-label">{{$tag->name}}</label>
</div>
@endforeach
<input type="checkbox" name="tags[]" value="18">

@error('tags')
<div class="invalid-feedback">{{$message}}</div>
@enderror
</div>





               <div class="form-group">
                 <label class="control-label">
                    Contenuto
                 </label>
                 <textarea class="form-control" placeholder="Contenuto" id="content" name="content"></textarea>
                  <div class=form-group>
                    <button type="submit" class="btn">Salva post</button>
                  </div>
               </div>
                </form>
            </div>
          
           
        </div>
    </div>
</div>
@endsection

