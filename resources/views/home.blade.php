@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> お子様一覧</h1>
@stop

@section('content')
@php
use Illuminate\Support\Carbon;
$now = new Carbon();
@endphp

<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($children as $child)
  <div class="card text-left">
    <div class="card-header">
      <h3> {{$child->child_name}}さん</h3>
      <span>{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
      <span>{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
      <a href="/vaccines/{{$child->id}}">接種状況を確認する</a>
    </div>
   </div>
    <div class="card-footer text-body-secondary">
    </div>
  </div>
  @endforeach
</div>
</div>
</div>

@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

@stop

@section('js')
@stop