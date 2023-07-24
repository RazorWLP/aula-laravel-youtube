<h1>Duvida {{$support->id}}</h1>

<x-alert/>

<form action="{{ route('supports.update', $support->id)}}" method="POST">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
    @csrf()
    @method('PUT')
    @include('admin.supports.partinals.form', [
        'support' => $support
    ])
</form>