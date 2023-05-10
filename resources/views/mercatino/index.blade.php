<x-layout header="Benvenuto nel mercatino">
        @if(session('mercatinoCreated'))
        <div class="alert alert-success">
            {{ session('mercatinoCreated')}}
        </div>
        @endif
        <div class="container my-5"></div>
        <div class="row justify-content-center">
            @if (count($mercatini))
            @foreach($mercatini as $mercatino)

            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <img src="{{Storage::url($mercatino->logo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$mercatino->name}}</h5>
                        <p class="card-text">{{$mercatino->price}}</p>
                        <p class="small fst-italic"> Caricato il {{$mercatino->created_at}}</p>
                        <a href="{{route('mercatino.show', compact('mercatino'))}}" class="btn btn-primary mt-3">
                            Scopri di più
                        </a>
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