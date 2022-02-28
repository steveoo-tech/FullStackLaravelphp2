@extends('layouts.app')
@section('content')
@if (count($products) > 0)
    <!-- Show all products -->
    <div>
        <ul>
            @foreach ($products as $product)
                <li>
                {{ $product->manufacturer }} 
                ${{ $product->revenue }} 
                </li>
            @endforeach
        </ul>
    </div>
@endif
@endsection