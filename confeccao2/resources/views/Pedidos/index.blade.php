<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pedidos</title>

    <!-- Bootstrap opcional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Lista de Pedidos</h1>

    @if($pedidos->isEmpty())
        <div class="alert alert-info">
            Nenhum pedido cadastrado.
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>OP</th>
                    <th>Nome</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->OP }}</td>
                        <td>{{ $pedido->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($pedido->data)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>
