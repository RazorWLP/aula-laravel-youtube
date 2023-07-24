<h1>Nova duvida</h1>

<x-alert/>

<form action="{{ route('supports.store')}}" method="POST">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
    @include('admin.supports.partinals.form')
</form>