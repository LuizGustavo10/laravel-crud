<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Usuários</h2>
    <a href="{{ url('/usuarios/create') }}" class="btn btn-primary mb-3">Novo Usuário</a>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ url('/usuarios/'.$usuario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Confirma exclusão?')" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>