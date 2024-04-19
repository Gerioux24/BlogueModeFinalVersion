
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- font-awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <title>Editer</title>
  </head>
  <body>
    <header class="header">
        <div  class="logo">Oli Fashion</div>
        <nav class="navbar">
          <a href="{{ url('/') }}" >Accueil</a>
          <a href="{{ url('/articles') }}">Articles</a>
          <a href="{{ url('/apropos') }}">À propos</a>
          <a href="{{ url('/contact') }}">Contact</a>
          <a href="{{ url('/login') }}"> <button class="button-login">Login</button> </a>
        </nav>
      </header>


        <form action="{{url('/updateproduct/'.$product->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="admin-container">
            <h2>Admin Page</h2>
            <label for="titre">Titre:</label>

            <input type="text" value="{{ $product->product_title }}" placeholder="Titre d'article" name="product_title"  required/>

            <label for="extrait du description">Extrait du description:</label>
            <input type="text"  placeholder="Extrait du description" value="{{ $product->product_little_description }}"  name="product_little_description"  required></input>

            <label for="description">Description:</label>
            <input  placeholder="Description" value="{{ $product->product_description }}" name="product_description"  required></input>

            <label for="image">Image:</label>
            <input type="file"  name="product_image" ><br>
            <button type="submit" >Mettre à jours</button>
        </form>
      </div>

</body>
</html>


