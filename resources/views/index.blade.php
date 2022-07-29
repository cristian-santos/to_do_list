<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>To do list</title>
</head>

<body class="fundo">
    <div class="col-md-12">
        <div class="container pagina">
            <div class="row">
                <div class="col">
                    <h4>To do List</h4>
                    <hr />
                    <div class="input-group">
                        <input type="text" class="form-control @error('tarefa') is-invalid @enderror" name="tarefa" placeholder="Cadastrar nova tarefa">
                        <div class="input-group-append" id="button-addon4">
                            <button class="btn btn-secondary" type="submit">Cadastrar</button>
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3 d-flex align-items-center">
                        <div class="col-sm-9">
                           lavar moto
                        <hr>
                        </div>
                        <div class="col-sm-3">
                        <a href="#" style="text-decoration: none">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Concluir
                            </button>
                        </a>

                        <a href="#" style="text-decoration: none">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                        </a>

                        <a href="#">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </body>
</html>