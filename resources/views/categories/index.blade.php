@extends('layouts.app')

@section('head_title','Lista Categorie')

@section('content')
    <h1>Lista categorie</h1>
    <div class="mb-3">
        <a href="{{route('categories.create')}}" class="btn btn-primary">Aggiungi categoria</a>
    </div>
    @if ( session('message') )
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
        
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome categoria</th>
      <th>Tot post</th>
      <th>Mostra</th>
      <th>Modifica</th>
      <th>Cancella</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $index => $category)
    <tr>
      <th>{{$index+1}}</th>
      <td>{{$category->name}}</td>
      <td>
        {{$category->count()}}
      </td>
      <td>
          <a class="btn btn-info" href="{{ route('categories.show',$category) }}">Mostra</a>
      </td>
      <td>
          <a class="btn btn-warning" href="{{ route('categories.edit',$category) }}">Modifica</a>
      </td>
      <td>
        <form method="post" action="{{ route('categories.destroy',$category) }}">
          @method('delete')
          @csrf
          <button class="btn btn-danger confirm_delete">Cancella</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


<script>
  $('.confirm_delete').click(e => {
      if(!confirm('Sei sicuro di cancellare, stronzo?')){
          e.preventDefault();
      }
    });
</script>


@endsection