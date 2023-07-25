<h1>Listagem de suportes</h1>
<a href="{{route('supports.create')}}">Criar duvida</a>
<table border="3" style="padding: 5px">
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Ver detalhes</th>
        <th>Editar</th>
    </thead>
    <tbody>
        @foreach($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>

                <td><a href="{{ route('supports.show', $support->id) }}">---></a></td>

                <td><a href="{{ route('supports.edit', $support->id) }}">Editar</a></td>
            </tr> 
        @endforeach
    </tbody>
</table>
