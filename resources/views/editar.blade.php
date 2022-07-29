<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>To do list</title>
</head>

<body class="fundo">
    <div class="col-md-12">
        <div class="container pagina">
            <div class="row">
                <div class="col">
                    <h4>Atualizar tarefa</h4>
                    <hr />
                    <form action="{{ route('tarefa.update', $tarefas->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control @error('tarefa') is-invalid @enderror" name="tarefa" value="{{ old('tarefa') ?? $tarefas->tarefa}}" >
                        </div><br>
                        <div class="form-floating d-flex justify-content-end">
                            <a href="{{ route('tarefa.index')}}" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                                <i class="mdi mdi-keyboard-return me-1"></i> Voltar</a>
                        
                            <button type="submit" class="btn btn-success btn-rounded waves-effect me-2 mb-2">
                                <i class="mdi mdi-check me-1"></i>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>