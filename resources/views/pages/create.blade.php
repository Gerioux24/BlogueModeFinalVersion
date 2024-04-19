

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
    <link rel="stylesheet" href="frontend/css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- font-awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <title>Create</title>
  </head>
  <body>
    <header class="header-admin">
        <div  class="logo">Oli Fashion</div>
        <nav class="navbar">
          {{--  <a href="{{ url('/') }}" >Accueil</a>
          <a href="{{ url('/articles') }}">Articles</a>
          <a href="{{ url('/apropos') }}">À propos</a>
          <a href="{{ url('/contact') }}">Contact</a>  --}}
          <a href="{{ url('/login') }}"> <button class="button-login">Se déconnecter</button> </a>
        </nav>
      </header>


        <form action="{{url('/saveproduct')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="admin-container">
            <h2>Admin Page</h2>
            <label for="titre">Titre:</label>

            <input type="text" placeholder="Titre d'article" name="product_title"  required/>

            <label for="extrait du description">Extrait du déscription:</label>
            <textarea  placeholder="Extrait du description"  name="product_little_description" rows="4" cols="50"  required></textarea>
            <label for="description">Déscription:</label>
            <textarea  placeholder="Description"  name="product_description" rows="10" cols="50" required></textarea>
            <label for="image">Image:</label>
            <input type="file"  name="product_image" required><br>
            <button type="submit" >Ajouter l'article </button>
        </form>
      </div>

    <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Images</th>
          <th class="article-titles">Titres</th>
          <th class="hours-days">Dates et Heures</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>

                <td>            <img src="{{ asset('storage/product_images/' . $article->product_image) }}">
                </td>
                <td class="article-titles">{{ $article->product_title }}</td>
                <td class="hours-days">{{ $article->created_at }}</td>
                <td class="actions-buttons">

                    <form action="{{ url('/editerarticle/'.$article->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <span class="action-btn">
                            <button type="submit">Editer</button>
                        </span>
                    </form>
                    <form action="{{ url('/deletearticle/'.$article->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <span class="action-btn">
                            <button class="action-second" type="submit">Supprimer</button>
                        </span>
                    </form>

                    {{--  <form action="{{ url(deletearticle/'.$article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span class="action-btn">
                            <button type="submit">Edit</button>
                            <button type="submit">Remove</button>
                            <input type="submit" value="Delete">


                        </span>
                    </form>  --}}

                </td>
            </tr>
        @endforeach
    </tbody>

    </table>
  </div>

</body>
</html>

