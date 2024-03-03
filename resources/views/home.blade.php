@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- @section('content_header')
@stop -->

@section('content')
@php
use Illuminate\Support\Carbon;
$now = new Carbon();
@endphp

<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="card text-left">
  <div class="card-header">
  @foreach($users as $user)
  @foreach($user->children as $child)
<h3>{{$child->child_name}}さん</h3>
  </div>
  <div class="card-body">
    <h5 class="card-text">次回の接種開始日：</h5>
    <p class="card-text">ワクチン名：</p>
    <span>{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
    <span>{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
   
  </div>
  <div class="card-footer text-body-secondary">

    @endforeach
    @endforeach
  
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
