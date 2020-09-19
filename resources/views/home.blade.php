
@extends('layouts.main-layout')

@section('section1')
  <h2>io sono yield - section 1</h2>

@foreach ($data as $key => $value)
  <h2>{{$value['titolo']}}</h2>
  <img src="{{$value['src']}}" alt="">
@endforeach

@endsection
