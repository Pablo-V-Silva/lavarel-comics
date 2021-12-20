@extends('layouts.app')
@section('content')

<div class="blueBanner comicImage position-relative">
  <div class="container">

    <img class="comicThumb" src="{{$comic['thumb']}}" alt="" height="350px">
  </div>
</div>
<!-- /Image thumb -->

<div class="container">
  <div class="row"></div>
  <div class="col-8">
  <h4 class="text-uppercase">{{ $comic['title'] }}</h4>
  <div class="row comicPrice">
    <div class="col-8">
      <div class="comicValue">
        U.S Price : {{$comic['price']}}
      </div>
    </div>
    <div class="col-4"></div>
  </div>
  </div>
  <div class="col-4"></div>
</div>
<!-- /Comic info -->

@endsection
