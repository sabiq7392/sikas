@extends('index')
@section('content')
  <form action="/category" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Kategori</label>
      <input 
        id="name" 
        name="name"
        type="text" 
        class="form-control" 
        placeholder="Masukan kategori..."
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection