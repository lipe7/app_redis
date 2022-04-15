<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Notícia</th>
        </tr>
    </thead>

    <tbody>
        @foreach($noticias as $n)
            <td>{{ $n->titulo }}</td>
            <td>{{ $n->noticia }}</td>
        @endforeach
    </tbody>

</table>