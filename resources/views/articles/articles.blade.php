<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calcio Mania</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-trophy"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/chi-siamo">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contatti">Contatti</a>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            I nostri Servizi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('articles.list')}}">Tutti i nostri aggiornamenti sul calcio Mercato</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="container-fluid article">
            <div class="row h-100">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Tutte le ultime notizie sul Calcio Mercato</h2>
                </div>
                @foreach ( $articles as $articles )
                <div class="col-12 col-md-3">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{$articles ['img']}}" class="card-img-top cardImg" alt="logo di "{{'titolo'}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$articles['titolo']}}</h5>
                            <p class="card-text">Articolo di: {{$articles['autore']}}</p>
                            <a href="{{route('articles.detail',['id'=>$articles['id']])}}" class="btn btn-primary">Leggi di più</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>