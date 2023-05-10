<x-layout header="{{$mercatino->name}}">

    <div class="container my-5">
        <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($mercatino->logo)}}" alt="Immagine del prodotto" class="img-fluid">
            <h2 class="display-1">{{$mercatino->name}}</h2>
            <h2>{{$mercatino->price}}</h2>
            <p>{{$mercatino->description}}</p>
            <p>{{$mercatino->created_at}}</p>
            <hr>
            <a href="{{route('mercatino.index')}}" class="btn btn-primary">Torna Indietro</a>
    </div>
        </div>
    </div>



</x-layout>