@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> お子様を追加</h1>
@stop
@section('content')
<div class="mx-auto" style="width: 400px;">
  @if ($errors->any())
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card text-left">
    <form class="form" action="{{ url('/addregister') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <div class="card-body w-75 p-3">
        <label for="FormControlInput1" class="form-label">お子様の名前</label>
        <input type="text" name="child_name" class="form-control mb-3">


        <div>
          <label for="FormControl" class="form-label">生年月日</label>
        </div>
        <div>
          <label class="date-edit mb-3"><input name="birthday" type="date" />
          </label>
        </div>

        <div>
          <input type="submit" class="btn btn-primary  mt-3 mb-3" value="追加">
        </div>
      </div>
  </div>

<a href="/" class="btn btn-dark ml-5">戻る</a>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop