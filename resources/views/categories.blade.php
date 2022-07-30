@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h3>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h3>
            </li>
        </ul>
    @endforeach
@endsection


