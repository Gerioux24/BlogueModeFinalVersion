@extends('layouts.master')

@section('title')
    Articles
@endsection


@section('contenu')

<div class="article-dispo">
    <div class="article-dispo-titre">
      <h2>Nos articles disponibles</h2>
    </div>
    <div class="box-card-container">

@foreach ($articles as $article)
        <div class="box1">

            <img src="{{ asset('storage/product_images/' . $article->product_image) }}">

            <div class="overlay">
            <h3>{{ $article->product_title }}</h3>
            <p>
                {{ $article->product_little_description }}
            </p>
            <a href="/show/{{$article->id}}">Voir Plus</a>

            </div>
        </div>
@endforeach

</div>
</div>


      {{--  <div class="box1">
        <img src="frontend/img/pexels-aizhana-aldanova-983569.jpg" alt="" />
        <div class="overlay">
          <h3>Jupe Parisienne</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single10.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/joshua-rawson-harris-6PROVhY2Yq4-unsplash.jpg" alt="" />
        <div class="overlay">
          <h3>Soutien Marocaine</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single11.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/wesley-tingey-zar90MHyWYc-unsplash.jpg" alt="" />
        <div class="overlay">
          <h3>Cheveux Blonde</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single12.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/pexels-godisable-jacob-914668.jpg" alt="" />
        <div class="overlay">
          <h3>Look Sénégalaise</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single13.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/karina-tess-l35dDPD3Gys-unsplash.jpg" alt="" />
        <div class="overlay">
          <h3>Look Parisienne</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single14.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/pexels-ivan-oboleninov-2916814.jpg" alt="" />
        <div class="overlay">
          <h3>Robe Parisienne</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single15.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/pexels-jonas-androx-18251378.jpg" alt="" />
        <div class="overlay">
          <h3>Look Tuléarienne</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single16.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/pexels-roy-reyna-3007759.jpg" alt="" />
        <div class="overlay">
          <h3>Sportive & Sexy</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single17.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/gean-montoya-Kiq8jsD3qBI-unsplash.jpg" alt="" />
        <div class="overlay">
          <h3>Pull de nuit</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single18.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/dom-hill-nimElTcTNyY-unsplash.jpg" alt="" />
        <div class="overlay">
          <h3>Jogging Jaune</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single19.html">Voir Plus</a>
        </div>
      </div>
      <div class="box1">
        <img src="frontend/img/pexels-tomaz-barcellos-1987301.jpg" alt="" />
        <div class="overlay">
          <h3>Cheveux colorés</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis dignissimos eos, unde dolore deserunt vel!
          </p>
          <a href="single20.html">Voir Plus</a>
        </div>
      </div>  --}}

@endsection
