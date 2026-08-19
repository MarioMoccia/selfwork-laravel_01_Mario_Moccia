<x-layout>

    <header>
        <div class="container-fluid header">
            @if(session()->has('emailSent'))
            <div class="alert alert-success">
                {{session('emailSent')}}
            </div>
            @endif
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center text-align-center">
                    <h1 class="text-white text-center display-1 fw-bold ">CalcioMania</h1>
                </div>
            </div>
        </div>
    </header>

</x-layout>