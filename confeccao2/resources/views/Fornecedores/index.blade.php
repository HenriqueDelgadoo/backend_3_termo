<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Fornecedores</title>

    <!-- Bootstrap opcional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Lista de Fornecedores</h1>

    @if($fornecedores->isEmpty())
        <div class="alert alert-info">
            Nenhum fornecedor cadastrado.
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($fornecedor->data)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>
