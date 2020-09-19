
@extends('layouts.main-layout')






@section('section1')
  <h2>LE LUNGHE</h2>
  {{-- <h3>{{$value['titolo']}}</h3> --}}
  <div class="pic-box">
    @foreach ($data as $key => $value)
      @if($value['tipo']==='lunga')
        <img src="{{$value['src']}}" alt="Image not found">
      @endif
    @endforeach
  </div>

@endsection

@section('section2')
  <h2>LE CORTE</h2>
  <div class="pic-box">
    @foreach ($data as $key => $value)
      @if($value['tipo']==='corta')
        <img src="{{$value['src']}}" alt="Image not found">
      @endif
    @endforeach
  </div>

@endsection

@section('section3')
  <h2>LE CORTISSIME</h2>
  <div class="pic-box">
    @foreach ($data as $key => $value)
      @if($value['tipo']==='cortissima')
        <img src="{{$value['src']}}" alt="Image not found">
      @endif
    @endforeach
  </div>

@endsection
