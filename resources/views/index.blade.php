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
    {{ Session::get('success') }}
    <form action="store" method="POST">
        @csrf
        <label for="title">Titulo</label>
        <input value="{{ old('title')}}" name="title" type="text">
        <label for="author">Autor</label>
        <input value="{{ old('author')}}" name="author" type="text">
        <label for="editorial">Editorial</label>
        <input value="{{ old('editorial')}}" name="editorial" type="text">
        <label for="pages">nº de páginas</label>
        <input value="{{ old('pages')}}" name="pages" type="number">
        <textarea name="opinion" id="opinion" cols="30" rows="10"></textarea>
        <select value={{ old('votation') }} name="votation" id="votation">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Añadir libro</button>
    </form>
    <div class="container">
        <div class="row">
            @foreach($books as $book) 
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $book->title }}</h5>
                          <p class="card-text">{{ $book->author }}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>  
            @endforeach
        </div>
    </div>
</body>
</html>