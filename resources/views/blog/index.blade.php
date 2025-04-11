@extends('layouts.template')

@section('title', optional($page)->title ?? 'Home')

@section('description')
    {{ optional($page)->description ?? 'Home description' }}
@endsection

@section('h1', optional($page)->h1 ?? 'Home')

@section('content')
    <div>
        @if ($page->article)
                {{ $page->article }}
        @endif
    </div>
@endsection
