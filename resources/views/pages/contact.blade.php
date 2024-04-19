@extends('layouts.master')

@section('title')
    Contact
@endsection


@section("contenu")


<div class="contact-container">
    <form>
      <h1>Contactez-nous</h1>
      <input type="text" id="firstName" placeholder="Nom" required />
      <input type="text" id="lastName" placeholder="Prénom(s)" required />
      <input type="email" id="email" placeholder="Adresse email" required />
      <input type="number" id="mobile" placeholder="Mobile" required />
      <h4>Taper votre message ici...</h4>
      <textarea required></textarea>
      <input type="submit" value="Envoyer" id="button" />
    </form>
  </div>


@endsection
