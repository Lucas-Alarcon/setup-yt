@extends('layouts.header')

@section('style')

.card-img-top {
  display: block;
  height: 300px;
  object-fit: contain;
}

@endsection

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="../img/equipment/{{$equipment->img}}.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$equipment->name}}</h3>
            <p class="card-text">{{$equipment->description}}</p>
            <span><a href="{{ $equipment->url }}" target = "_blank">Acheter sur Amazon</a></span>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

@endsection
