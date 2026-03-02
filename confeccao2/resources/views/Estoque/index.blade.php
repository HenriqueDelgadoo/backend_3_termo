<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estoque</title>

    <!-- Bootstrap opcional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Estoque</h1>

    @if($estoque->isEmpty())
        <div class="alert alert-info">
            Nenhum item em estoque.
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estoque as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->local }}</td>
                        <td>{{ $item->quantidade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>
