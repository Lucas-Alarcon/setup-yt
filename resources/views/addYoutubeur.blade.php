@extends('layouts.header')

@section('content')
<div class="container">
  <h2 class="my-4">Ajouter un Youtubeur</h2>
  <form method="post" action="{{ route('insertYoutubeur') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nom :</label>
      <input type="text" name="name" id="name">
    </div>
    <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }}">
      <label for="image">Image :</label>
      <input type="file" id="image" name="image"
      class="{{ $errors->has('image') ? ' is-invalid ' : '' }}form-control-file">
      <label class="image-label" for="image"></label>
      @if ($errors->has('image'))
      <div class="invalid-feedback">
        {{ $errors->first('image') }}
      </div>
      @endif
    </div>
    <div class="form-group">
      <img id="preview" class="img-fluid" src="#" alt="">
    </div>
    <div class="form-group">
      <input type="submit" value="Ajouter">
    </div>

  </div>
  <!-- /.container -->

  @endsection

  @section('script')
  <script>
    $(() => {
      $('input[type="file"]').on('change', (e) => {
        let that = e.currentTarget
        if (that.files && that.files[0]) {
          $(that).next('.image-label').html(that.files[0].name)
          let reader = new FileReader()
          reader.onload = (e) => {
            $('#preview').attr('src', e.target.result)
          }
          reader.readAsDataURL(that.files[0])
        }
      })
    })
  </script>
  @endsection