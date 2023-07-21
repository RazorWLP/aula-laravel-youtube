<h1>Detalhes da duvida {{ $support->id }}</h1>
<ul>
    <li>Status: {{ $support->status }}</li>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

<form action="{{route('supports.destroy', $support->id)}}"  method="POST">
    @csrf()
    @method('DELETE')
    <button type="submit">DELETAR</button>
</form>