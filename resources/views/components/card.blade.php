<div class="card mb-3" style="width: 18rem;">
    <img src="{{$articles ['img']}}" class="card-img-top cardImg" alt="logo di "{{$articles['titolo']}}">
    <div class="card-body">
        <h5 class="card-title">{{$articles['titolo']}}</h5>
        <p class="card-text">Articolo di: {{$articles['autore']}}</p>
        <a href="{{route('articles.detail',['id'=>$articles['id']])}}" class="btn btn-primary">Leggi di più</a>
    </div>
</div>