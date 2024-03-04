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
  @foreach($children as $child)
  <div class="card text-left">
    <div class="card-header">
      <h3> {{$child->child_name}}さん</h3>
    </div>
    <div class="card-body">
      @php
      $birthdayPlusTwoMonths2 = \Carbon\Carbon::parse($child->birthday)->addMonths(2);
      $birthdayPlusTwoMonths5 = \Carbon\Carbon::parse($child->birthday)->addMonths(5);
      $birthdayPlusTwoMonths12 = \Carbon\Carbon::parse($child->birthday)->addMonths(12);
      $dob = Carbon::parse($child->birthday);
      $age = $dob->diffInMonths();
      @endphp

      @foreach($vaccines2 as $vaccine2)
      @if($age<=2) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} ワクチン名：{{$vaccine2->name}}</h5>
        @endif
        @endforeach

        @foreach($vaccines5 as $vaccine5)
        @if($age>2 && $age<=5) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths5->format('Y年m月d日') }} ワクチン名：{{$vaccine5->name}}</h5>
          @endif
          @endforeach

          @foreach($vaccines12 as $vaccine12)
          @if($age>5 && $age<=12) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths12->format('Y年m月d日') }} ワクチン名：{{$vaccine12->name}}</h5>
            @endif
            @endforeach
          
            <span>{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
            <span>{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
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
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop