@extends('layouts.header')

@section('content')

<div class="container">
	<div class="row">

@foreach($youtubeurs as $youtubeur)
<div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{ route('setup', ['name' => $youtubeur->name]) }}"><img class="card-img-top" src="img/youtubeur/{{$youtubeur->name}}.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  {{$youtubeur->name}}
                </h4>
            </div>
        </div>
    </div>
@endforeach

    </div>
</div>

@endsection
