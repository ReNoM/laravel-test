@extends('layouts.app')

@section('header')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">{{ $title }}</h1>
            <p class="lead blog-description">{{ $description }}</p>
        </div>
    </div>
@endsection

@section('sidebar')
    <div class="col-sm-3 offset-sm-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>Статистика</h4>
            <p>Всего постов: {{ $stats['total'] }}.</p>
            <p>Дата первого: {{ \Carbon\Carbon::parse($stats['firstDate'])->format('d.m.Y')}}.</p>
            <p>Дата последнего: {{ \Carbon\Carbon::parse($stats['latestDate'])->format('d.m.Y')}}.</p>
            <p>Автор первого: {{ $stats['firstAuthor'] }}</p>
            <p>Автор последнего: {{ $stats['latestAuthor'] }}</p>
        </div>
        <!-- /.blog-sidebar -->
    </div>
@endsection
