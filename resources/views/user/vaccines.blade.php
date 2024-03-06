@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> 接種状況</h1>
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
      <span class="age">{{ $now->diff(new Carbon($child->birthday))->y . '歳' }}</span>
      <span class="age">{{ $now->diff(new Carbon($child->birthday))->m . 'ヶ月' }}</span>
      <a href="/" class="btn btn-primary">戻る</a>
    </div>
    <div class="card-body">
      @php
      $birthdayPlusTwoMonths2 = \Carbon\Carbon::parse($child->birthday)->addMonths(2);
      $birthdayPlusTwoMonths5 = \Carbon\Carbon::parse($child->birthday)->addMonths(5);
      $birthdayPlusTwoMonths12 = \Carbon\Carbon::parse($child->birthday)->addMonths(12);
      $birthdayPlusTwoMonths36 = \Carbon\Carbon::parse($child->birthday)->addMonths(36);
      $dob = Carbon::parse($child->birthday);
      $age = $dob->diffInMonths();
      @endphp
      <form class="form" action="{{ route('vaccines', ['id' => $child->id]) }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
    
        @if($age<=2) @foreach($vaccines1 as $vaccine1) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine1->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine1->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine1->id}}" value="1" @if($child->vaccine1) checked @endif >接種完了

          </div>
          @endforeach
          @endif

          @if($age<=2) @foreach($vaccines2 as $vaccine2) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine2->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine2->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine2->id}}" value="1" @if($child->vaccine2) checked @endif >接種完了

          </div>
          @endforeach
          @endif
          @if($age<=2) @foreach($vaccines3 as $vaccine3) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine3->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine3->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine3->id}}" value="1" @if($child->vaccine3) checked @endif >接種完了

          </div>
          @endforeach
          @endif
          @if($age<=2) @foreach($vaccines4 as $vaccine4) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine4->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine4->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine4->id}}" value="1" @if($child->vaccine4) checked @endif >接種完了

          </div>
          @endforeach
          @endif

          @if($age<=2) @foreach($vaccines5 as $vaccine5) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine5->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine5->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine5->id}}" value="1" @if($child->vaccine5) checked @endif >接種完了

          </div>
          @endforeach
          @endif

          @if($age<=2) @foreach($vaccines6 as $vaccine6) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine6->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine6->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine6->id}}" value="1" @if($child->vaccine6) checked @endif >接種完了

          </div>
          @endforeach
          @endif

          @if($age<=2) @foreach($vaccines7 as $vaccine7) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths2->format('Y年m月d日') }} </h5>
          <h5>ワクチン名：{{$vaccine7->name}}</h5>
          <div class="form-group">
          <input type="hidden" name="vaccine{{$vaccine7->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine7->id}}" value="1" @if($child->vaccine7) checked @endif >接種完了

          </div>
          @endforeach
          @endif

          @if($age>2 && $age<=5) @foreach($vaccines8 as $vaccine8) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths5->format('Y年m月d日') }} </h5>
            <h5>ワクチン名：{{$vaccine8->name}}</h5>
            <div class="form-group">
            <input type="hidden" name="vaccine{{$vaccine8->id}}" value="0">
            <input type="checkbox" name="vaccine{{$vaccine8->id}}" value="1" @if($child->vaccine8) checked @endif >接種完了
            </div>
            @endforeach
            @endif

            @if($age>5 && $age<=12) @foreach($vaccines9 as $vaccine9) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths12->format('Y年m月d日') }}</h5>
              <h5>ワクチン名：{{$vaccine9->name}}</h5>
              <div class="form-group">
              <input type="hidden" name="vaccine{{$vaccine9->id}}" value="0">
              <input type="checkbox" name="vaccine{{$vaccine9->id}}" value="1" @if($child->vaccine9) checked @endif >接種完了
              </div>
              @endforeach
              @endif

              @if($age>5 && $age<=12) @foreach($vaccines10 as $vaccine10) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths12->format('Y年m月d日') }}</h5>
              <h5>ワクチン名：{{$vaccine10->name}}</h5>
              <div class="form-group">
              <input type="hidden" name="vaccine{{$vaccine10->id}}" value="0">
              <input type="checkbox" name="vaccine{{$vaccine10->id}}" value="1" @if($child->vaccine10) checked @endif >接種完了
              </div>
              @endforeach
              @endif

              @if($age>12 && $age<=36) @foreach($vaccines11 as $vaccine11) <h5 class="card-text">次回の接種推奨日：{{ $birthdayPlusTwoMonths36->format('Y年m月d日') }} 
                <h5>ワクチン名：{{$vaccine11->name}}</h5>
                <div class="form-group">
                <input type="hidden" name="vaccine{{$vaccine11->id}}" value="0">
                <input type="checkbox" name="vaccine{{$vaccine11->id}}" value="1" @if($child->vaccine11) checked @endif >接種完了
                </div>
                @endforeach
                @endif
                <button type="submit" >登録</button>
    </form>
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