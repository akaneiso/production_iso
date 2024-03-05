@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>ワクチン接種スケジュール</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                        </div>
                    </div>
                
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>名前</th>
                                <th>接種開始日</th>
                                <th>接種終了日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaccines as $vaccine)
                                <tr>
                                    <td>{{ $vaccine->name }}</td>
                                    <td>生後{{ $vaccine->startdate }}ヶ月</td>
                                    <td>生後{{ $vaccine->enddate }}ヶ月</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
