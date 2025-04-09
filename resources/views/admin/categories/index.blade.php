@extends('layouts.template')

@section('title', 'Категории')

@section('description')

@endsection

@section('h1', 'Категории')

@section('content')
    <div>
        @if ($categories->isEmpty())
            <p>{{ __('Категорий пока нет.') }}</p>
        @else
            <div>
                <p>Показано {{ $categories->firstItem() }} по {{ $categories->lastItem() }} из {{ $categories->total() }} категорий</p>
            </div>
            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <a class="fw-bold" href="">
                                    id {{ $category->id }} : {{ $category->name }}</a>
                               <div><h6>{{ $category->title }}</h6>
                                <p>{{ $category->description }}</p></div>
                            </span>
                        </div>
                        @if ($category->children->isNotEmpty())
                            <ul class="list-group mt-2">
                                @foreach ($category->children as $child)
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>↳ <a href="">id {{ $child->id }} : {{ $child->name }}
                                                </a>
                                                <div><h6>{{ $child->title }}</h6>
                                                <p>{{ $child->description }}</p></div>
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <div class="d-flex justify-content-start mb-3 mt-3">
                {{ $categories->links('layouts.pagination') }}
            </div>
        @endif
    </div>
@endsection
