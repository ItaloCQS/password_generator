<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="text-center mt-4">
                    <div class="mb-5">
                        <h1>🔑 Gerador De Senhas</h1>
                    </div>
                    <form action="{{ route('generate.password') }}" method="POST">
                        @csrf
                        <label for="length" class="form-label">Comprimento:</label>
                        <input type="number" name="length" id="length" min="4" max="64" class="form-control mb-3 w-25 mx-auto" value="{{ $length ?? 12 }}">
                        <button type="submit" class="btn btn-primary">Gerar</button>
                    </form>
                    @if(isset($password))
                        <div class="mt-4 text-success fs-4">
                            Senha: <strong>{{ $password }}</strong>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
