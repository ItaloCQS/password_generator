<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Senhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>🔑 Gerador de Senhas</h1>

        <form method="POST" action="{{ route('password.generate') }}" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="length" class="form-label">Comprimento:</label>
                <input type="number" name="length" id="length" value="{{ $length ?? 12 }}" min="4" max="64" class="form-control w-25 mx-auto">
            </div>
            <button type="submit" class="btn btn-primary">Gerar</button>
        </form>

        @if(isset($password))
            <div class="mt-4 fs-4 text-success">
                Senha: <strong>{{ $password }}</strong>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
