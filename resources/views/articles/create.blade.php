<x-layout>
    <header>
        <div class="container-fluid header2">
            <div class="row h-100">
                <div class="col-12 d-flex text-center justify-content-center align-items-center">
                    <h1 class="text-center display-1 fw-bold">CalcioMania</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid text-white">
        <div class="row text-center justify-content-center align-items-center">
            <h1 class="my-3 display-5">Inserisci qui il tuo articolo che sarà pubblicato sulla nostra pagina</h1>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <form method="post" action="{{route('articles.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo dell'articolo:</label>
                        <input type="text" name="titolo" class="form-control" id="titolo" aria-describedby="titoloHelp">
                    </div>
                     <div class="mb-3">
                        <label for="articolo" class="form-label">Scrivi il tuo articolo:</label>
                        <textarea name="articolo" id="articolo" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="autore" class="form-label">Autore:</label>
                        <input type="text" name="autore" class="form-control" id="autore" aria-describedby="autoreHelp">
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Pubblicato il:</label>
                        <input type="date" name="data" class="form-control" id="data" aria-describedby="dataHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia il tuo articolo</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>