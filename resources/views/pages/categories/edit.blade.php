@extends('index')
@section('content')
  <form action="/category/{{ $category->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Items Name</label>
      <input 
        id="name" 
        name="name"
        type="text" 
        class="form-control" 
        placeholder="Masukan kategori..."
        value="{{ $category->name }}"
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection