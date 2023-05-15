<x-layout header="Profilo Utente">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">I tuoi dati</h5>
                    <p class="card-text">Nome utente: {{Auth::user()->name}}<p>
                        <p class="card-text">Email utente: {{Auth::user()->email}}<p>
                            <p class="card-text">Iscritto il: {{Auth::user()->created_at}}<p>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#userDestroy">
                                    Elimina Profilo
                                  </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>




    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach(Auth::user()->mercatinos as $mercatino)
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
        </div>
    </div>

    <div class="modal" tabindex="-1" id="userDestroy">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Clicca su elimina profilo per confermare</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>L'operazione è irreversibile</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
              <form action="{{route('user.destroy')}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Elimina Profilo</button>
            </div>
          </div>
        </div>
      </div>
</x-layout>