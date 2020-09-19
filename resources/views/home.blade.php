
@extends('layouts.main-layout')

@section('section1')
  <h2>io sono yield - section 1</h2>
  {{-- @foreach ($ciao as $id => $i)
    {{  $i }}
  @endforeach --}}

{{-- @foreach ($myData as $key )
  {{$key2}}
@endforeach --}}

@foreach ($data as $key => $value) {
  @foreach ($value as $key2 ) {
    <img src="{{$key2}}" alt="">

  }
  @endforeach
}
@endforeach

@endsection
