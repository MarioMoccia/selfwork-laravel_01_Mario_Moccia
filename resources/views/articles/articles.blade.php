<x-layout>  
    
    <section>
        <div class="container-fluid article">
            <div class="row h-100">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Tutte le ultime notizie sul Calcio Mercato</h2>
                </div>
                @foreach ( $articles as $article )
                <div class="col-12 col-md-3">
                   <x-card 
                    :articles="$article"
                   />
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
</x-layout>