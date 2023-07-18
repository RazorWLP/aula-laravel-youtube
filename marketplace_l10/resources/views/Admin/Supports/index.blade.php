<h1>Listagem de suportes</h1>
<a href="{{route('supports.create')}}">Criar duvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <!-- Adicione o link ou botão de ação desejado aqui -->
                </td>
            </tr> 
        @endforeach
    </tbody>
</table>
