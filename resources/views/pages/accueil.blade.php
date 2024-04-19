@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('contenu')

<div class="hero-container">
    <div class="text-hero">
      <div class="titre-hero">
        <h1>
          <span>On</span> Est Là Pour Vous <br />
          Aider À Connaître Le Look <br />
          Qui Vous Convient <br />
          Le Mieux
        </h1>
      </div>
      <div class="sous-titre-hero">
        <p>
          If You Are Looking For Something Fashion Tips For Girls,<br />
          Then You Are Just in The Right Place Because We Are Here <br />To
          Rescue You. So Let's start To Grow Your Style And Make <br />
          A Difference.
        </p>
      </div>
      </div>
      <div class="image-hero">
          <div class="rectangle1"></div>
      </div>
    <div class="rectangle2">
      <img src="frontend/img/pexels-marlon-schmeiski-3151296.jpg" alt="" />
    </div>
  </div>
<section class="section-second">
<div class="imagetext-section-second">
  <div class="image-one">
    <img src="frontend/img/rendy-novantino-_jd8I6yBWM4-unsplash.jpg" alt="">
  </div>
  <div class="image-two">
    <img src="frontend/img/tyler-nix-AxnzedBAdxo-unsplash.jpg" alt="">
  </div>
  <div class="text-section-section">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui maiores nemo adipisci molestiae odio exercitationem accusantium repudiandae saepe pariatur, incidunt cumque totam sapiente tempora sequi placeat. Nesciunt nihil natus tempore maxime animi incidunt itaque aspernatur eaque inventore. Sint, quasi nam.</p>
  <button><a href="contact">Contactez-nous</a></button>
  </div>
</div>

</section>
<div class="article-dispo">
    <div class="article-dispo-titre">
      <h2>Nos articles récents</h2>
    </div>
    <div class="box-card-container">

@foreach ($articles as $article)
        <div class="box1">
            {{--  <img src="{{ $article->product_image }}" alt="" />  --}}
            {{--  <img src="frontend/img/{{ $article->product_image }}" alt="">  --}}
            <img src="{{ asset('storage/product_images/' . $article->product_image) }}">
            <div class="overlay">
            <h3>{{ $article->product_title }}</h3>
            <p>
                {{ $article->product_little_description }}
            </p>
            <a href="/show/{{$article->id}}">Voir Plus</a>
            {{--  <a href="{{url("/show")}}">Voir Plus</a>  --}}

            </div>
        </div>
@endforeach

</div>
</div>

  </section>
  <section class="little-about">
    <div class="rectangle">
      <div class="second-litle-title">
        <h3>About us</h3>
        <div class="litle-text">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis explicabo libero iste aliquam reiciendis minus quaerat voluptatum, autem ex, id numquam provident animoloremque repudiandae dolorumum?</p>
        </div>

        <button ><a href="apropos">Read more</a></button>
      </div>
      <div class="image-solo">
        <img
          src="frontend/img/pexels-ivan-oboleninov-2853909.jpg"
          alt="photo d'une jeune fille avec un fons violet"
        />
      </div>

    </div>

  </section>
  <section class="deco">
      <div class="rectanglo">
        <div class="first-image">
          <img src="frontend/img/pexels-godisable-jacob-914668.jpg" alt="">
        </div>
        <div class="sec-image">
          <img src="frontend/img/pexels-roy-reyna-3007759.jpg" alt="">
        </div>
        <div class="third-image">
          <img src="frontend/img/pexels-marcelo-chagas-2229490.jpg" alt="">
        </div>

    </div>

  </section>

@endsection
