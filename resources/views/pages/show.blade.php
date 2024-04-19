@extends('layouts.master')

@section('title')
    Show
@endsection

@section('contenu')

<div class="single-article">
    <div>
        <img src="{{ asset('storage/product_images/' . $article->product_image) }}">
    </div>
    <div class="texte-titre">
      <h2>{{ $article->product_title }}</h2>
      <p>

          {{  $article->product_description  }}

      </p>

    </div>
  </div>
  @endsection
