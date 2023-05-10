<x-layout header="Benvenuto nel mercatino">
        <div class="container my-5"></div>
        <div class="row justify-content-center">
            @if (count($mercatini))
            @foreach($mercatini as $mercatino)
            <div class="col-12 col-md-4 my-3">
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$mercatino->logo}}</h5>
                        <p class="small fst-italic">{{$mercatino->name}}</p>
                        <p class="card-text">{{$mercatino->price}}</p>
                    </div>
                    </div>
            </div>
            @endforeach
            @else
            <div class="col-12 text-center mb-5">
                <h2>Al momento non ci sono annunci nel mercatino</h2>
                @endif
            </div>
            </div>
        </div>
</x-layout>