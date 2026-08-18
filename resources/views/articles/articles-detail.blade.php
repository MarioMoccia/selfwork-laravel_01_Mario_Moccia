<x-layout>
    
    
    <section>
        <div class="container-fluid article">
            <div class="row h-100">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">{{$articles['titolo']}}</h2>
                </div>
                <div class="-col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                    <h3>Attaccante</h3>
                    <h4>Del Piero Alessandro</h4>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{$articles['img']}}" alt="logo squadra">
                </div>
            </div>
        </div>
    </section>
    
</x-layout>