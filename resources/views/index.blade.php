<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <nav style="width:100vw;height:80px;background-color:#f0f0f0;">
        <ul>
            <p>index</p>
        </ul>
        @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
           @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
           @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
@endif
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
                <form action="store" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="container mb-3">
                        <label class="form-label" for="title">Título</label>
                        <input placeholder="título" class="form-control" value="{{ old('title')}}" name="title" type="text">
                    </div>
                    <div class="container mb-3">
                        <label class="form-label" for="author">Autor</label>
                        <input placeholder="autor" class="form-control" value="{{ old('author')}}" name="author" type="text">
                    </div>
                    <div class="container mb-3">
                        <label class="form-label" for="editorial">Editorial</label>
                        <input placeholder="editorial" class="form-control" value="{{ old('editorial')}}" name="editorial" type="text">
                    </div>
                    <div class="container mb-3">
                        <label class="form-label" for="pages">nº de páginas</label>
                        <input placeholder="numero de páginas" class="form-control" value="{{ old('pages')}}" name="pages" type="number">
                    </div>
                    <div class="container mb-3">
                        <textarea placeholder="explica tu opinión. Que te ha parecido, lo que quieras comentar..." class="form-control" name="opinion" id="opinion" cols="30" rows="10"></textarea>
                    </div>
                    <div class="container mb-3">
                        <label for="votation">Valoración</label>
                        <select class="form-control" value={{ old('votation') }} name="votation" id="votation">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option selected="selected" value="5">5</option>
                        </select>
                    </div>
                    <div class="container mb-3">
                        <label class="form-label" for="image">Imagen de portada</label>
                        <input name="img" class="form-control" type="file">
                    </div>
                    <div class="container mb-3 text-center">
                        <button class="btn btn-primary"type="submit">Añadir libro</button>
                    </div>
                </form>
            </div>
            <div class="col-9">
                {!! Session::get('success') !!}
                <div class="row">
                    @foreach($books as $book) 
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img loading="lazy" src=" {{ $book->img }}" class="card-img-top" alt="imagen">
                            <div class="card-body">
                              <h5 class="card-title">{{ $book->title }}</h5>
                              <p class="card-text">{{ $book->author }}</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>