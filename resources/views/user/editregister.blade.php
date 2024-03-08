@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>お子様の情報を修正</h1>
@stop
@section('content')
<div class="mx-auto" style="width: 300px;">
  @if ($errors->any())
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @foreach($children as $child)
  <div class="card text-left">
    <form class="form" action="/editregister/update/{{$child->id}}" method="post" class="form-horizontal">
      {{ csrf_field() }}

      <div class="w-75 p-3">
        <div>
          <label for="FormControlInput1" class="form-label ">お子様の名前</label>
          <input type="text" name="child_name[]" class="form-control mb-3 " value="{{$child->child_name}}">
        </div>

        <div>
          <label for="FormControl" class="form-label">生年月日</label>
        </div>
        <label class="date-edit mb-3"><input name="birthday[]" type="date" value="{{$child->birthday}}" /></label>
        <div>
          <input type="submit" class="btn btn-primary" value="修正">
        </div>
      </div>
      @endforeach
  </div>
</div>
</div>
</div>
<a href="/" class="btn btn-dark">戻る</a>

@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop