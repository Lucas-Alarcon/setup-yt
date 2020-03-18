@extends('layouts.header')

@section('style')

.card-img-top {
  display: block;
  height: 200px;
  object-fit: contain;
} 

@endsection

@section('content')

<div class="container">
	<div class="row">

@foreach($equipments as $equipment)
<div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{ route('equipment', ['id' => $equipment->id]) }}"><img class="card-img-top" src="../img/equipment/{{$equipment->img}}.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  {{$equipment->name}}
                </h4>
            </div>
        </div>
    </div>
@endforeach

    </div>
</div>

@endsection