<x-layout header="Nuovo Blog Di matteo">
@if(session('articleCreated'))
<div class="alert alert-success">
    {{ session('articleCreated')}}
</div>
@endif
@if(session('userDeleted'))
<div class="alert alert-success">
    {{ session('userDeleted')}}
</div>
@endif
</x-layout>