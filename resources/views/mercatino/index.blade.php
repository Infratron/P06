<x-layout header="Benvenuto nel mercatino">
        @if(session('mercatinoCreated'))
        <div class="alert alert-success">
            {{ session('mercatinoCreated')}}
        </div>
        @endif
        @if(session('mercatinoUpdate'))
        <div class="alert alert-success">
            {{ session('mercatinoUpdate')}}
        </div>
        @endif
        @if(session('mercatinoDeleted'))
        <div class="alert alert-success">
            {{ session('mercatinoDeleted')}}
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
                        <hr>
                        @if($mercatino->user_id)
                            <p class="small fst-italic"> Caricato il {{$mercatino->created_at}}</p>
                            <p class="small">Creato da {{$mercatino->user->name}}</p>
                        @else
                            <p class="small fst-italic"> Caricato il {{$mercatino->created_at}}</p>
                            <p class="small">Creato da Utente Anonimo</p>
                        @endif
                        <hr>
                        <div class="my-3 d-inline">
                            <a href="{{route('mercatino.show', compact('mercatino'))}}" class="btn btn-primary mt-3">
                                Scopri di più
                            </a>
                            @if($mercatino->user_id && $mercatino->user->id == Auth::user()->id)
                            <a href="{{route('mercatino.edit', compact('mercatino'))}}" class="btn btn-danger mt-3">
                                Modifica Annuncio
                            </a>
                            <form method="POST" action="{{route('mercatino.destroy', compact('mercatino'))}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning">
                                Cancella Annuncio
                            </button>
                            </form>
                            @endif
                        </div>
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