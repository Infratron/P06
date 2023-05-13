<x-layout header="Modifica il tuo annuncio">
    <header>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <form action="{{route('mercatino.update', compact('mercatino'))}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                    @csrf

 
                                <h1>Modifica l'annuncio</h1>
                                
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @method('put')
                    <div class="mt-3 text-center display-6">
                        <label for="Actualogo" class="form-label">Immagine Precedente</label>
                        <img width="300px" alt="Immagine non presente" src="{{Storage::url($mercatino->logo)}}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Foto dell'articolo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$mercatino->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{$mercatino->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci qui le carattestiche del prodotto</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{$mercatino->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica l'articolo</button>
                    <a href="{{route('mercatino.index')}}" type="submit" class="btn btn-outline-primary">Torna indietro</a>
                </form>
                </div>
            </div>
        </div>
</x-layout>

<!-- author
description -->