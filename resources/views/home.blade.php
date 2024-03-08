@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<h1> お子様一覧</h1>
@stop

@section('content')
@php
use Illuminate\Support\Carbon;
$now = new Carbon();
@endphp

@foreach($children as $child)
<div class="card-text-bg-secondary mb-3" style="width: 20rem;">
  <div class="card-body">
    <h3 class="card-title">{{$child->child_name}}さん</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">
    <span>{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
    <span>{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
    </h6>
    <a href="/vaccines/{{$child->id}}" class="btn btn-primary">接種状況を確認する</a>
  </div>
</div>
@endforeach


@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

@stop

@section('js')
@stop