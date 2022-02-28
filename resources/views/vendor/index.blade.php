@extends('layouts.app')
@section('content')
@if (count($vendors) > 0)
    <!-- Show all products -->
    <div>
        <ul>
            @foreach ($vendors as $vendor)
                <li>
                {{ $vendor->vendorName }} 
                ${{ $vendor->revenue }} 
                </li>
            @endforeach
        </ul>
    </div>
@endif
@endsection