@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> お子様の情報を修正</h1>
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
  @foreach($children as $child)
  <form class="form" action="/editregister/update/{{$child->id}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <div class="sm-2">
      <label for="FormControlInput1" class="form-label">お子様の名前</label>
      <input type="text" name="child_name[]" class="form-control" value="{{$child->child_name}}">
    </div>

    <div>
      <label for="FormControl" class="form-label">生年月日</label>
    </div>
    <div>
      <label class="date-edit"><input name="birthday[]" type="date" value="{{$child->birthday}}" />
      </label>
    </div>
    <div>
      <input type="submit" class="btn btn-light" value="修正">
      <a href="/editregister/delete/{{$child->id}}" class="btn btn-primary">削除</a>
    </div>
    @endforeach



</div>
</div>
</div>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop