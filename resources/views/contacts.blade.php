<x-layout>
    
    
    <div class="container-fluid header2 h-100">
        <div class="row h-100 justify-content-center gap-4">
            <div class="col-12 h-25 justify-content-center text-center">
                <h2 class="text-white text-color display-5 text-center">Contattaci</h2>
            </div>
            <div class="col-md-3 box text-center d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12"><i class="icon bi bi-whatsapp"></i>
                    </div>
                </div>
                <div class="col-12">
                    <p>Scrivici su Whatsapp</p>
                </div>
            </div>
            <div class="col-md-3 box text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12"><i class="icon bi bi-facebook"></i></div>
                </div>
                <div class="col-12">
                    <p>Scrivici su Facebook</p>
                </div>
            </div>
            <div class="col-md-3 box text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row">
                    <div class="col-12"><i class="icon bi bi-instagram"></i>
                    </div>
                </div>
                <div class="col-12">
                    <p>Scivici su Instagram</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-100 justify-content-center align-items-center">
        <h2 class="text-white display-4 text-center text-color">Oppure scrivici una email</h2>
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('contactSubmit')}}">
                @csrf
                <div class="mb-3 text-white">
                    <label for="user" class="form-label">Inserisci il tuo nome:</label>
                    <input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 text-white">
                    <label for="email" class="form-label">Inserisci la tua mail:</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 text-white">
                    <label for="message" class="form-label">Scrivi qui il tuo messaggio</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
    
</x-layout>