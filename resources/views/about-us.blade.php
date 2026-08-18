<x-layout>
    
    
    <header>
        <div class="container-fluid header2">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-6">
                    <h1 class="text-white text-color text-center">Chi Siamo</h1>
                    <p class="text-white text-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi magni repellat, facere aperiam cumque consequuntur delectus porro praesentium voluptates omnis nesciunt magnam provident eum est sequi ab pariatur laborum.</p>
                </div>
            </div>
        </div>
    </header>
    
    <section>
        <div class="container userHeight">
            <div class="row h-100 justify-content-around align-items-center">
                @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                       <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['Ruolo']}}</h6>
                                <a href="{{route('aboutUsDetail', ['name'=>$user['name']])}}" class="card-link">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
    </section>
    
</x-layout>