<!DOCTYPE html>
<html>
<head>
    <title>Novo Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Cadastrar Usuário</h2>
    <form action="{{ url('/usuarios') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a href="{{ url('/usuarios') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>
