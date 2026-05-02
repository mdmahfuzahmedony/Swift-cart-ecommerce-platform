@extends('layouts.app')

@section('content')
    
    @include('sections.home._hero')
    @include('sections.home._categories')
    @include('sections.home._new_arrivals')
    @include('sections.home._blog')       {{-- নতুন ব্লগ সেকশন --}}
    @include('sections.home._features')
  

@endsection