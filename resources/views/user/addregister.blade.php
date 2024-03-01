@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> 予防接種一覧</h1>
@stop
@section('content')
  <div class="mx-auto" style="width: 400px;">
    <h3>お子様を追加</h2>
      @if ($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form class="form" action="{{ url('/addregister') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="sm-2">
          <label for="FormControlInput1" class="form-label">お子様の名前</label>
          <input type="text" name="child_name" class="form-control">
        </div>

        <div>
          <label for="FormControl" class="form-label">生年月日</label>
        </div>
        <div>
          <label class="date-edit"><input name="birthday" type="date" value="" />
        </label></div>

        <div>
          <input type="submit" class="btn btn-light" value="追加">
        </div>

  </div>
  </div>
  </div>
  @stop

  @section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop