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

@foreach($children as $child)
<div class="mx-auto" style="width: 300px;">
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-text-mb3"><strong>{{$child->child_name}}</strong>さん</h4>
    <h5 class="card-subtitle mb-2 text-body-secondary">
      <span>{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
      <span>{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
    </h5>
    <a href="/vaccines/{{$child->id}}" class="btn btn-primary">接種状況を確認する</a>
    <a href="/editregister/{{$child->id}}" class="btn btn-primary">編集</a>
  </div>
</div>
@endforeach


@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

@stop

@section('js')
@stop