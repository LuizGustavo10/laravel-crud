<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Editar Usuário</h2>
    <form action="{{ url('/usuarios/'.$usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $usuario->nome }}" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>
        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ url('/usuarios') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>
