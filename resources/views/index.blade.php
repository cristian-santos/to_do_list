<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d093a04ba7.js" crossorigin="anonymous"></script>
    <title>To do list</title>
</head>

<body class="fundo">
    <div class="col-md-12">
        <div class="container pagina">
            <div class="row">
                <div class="col">
                    <h4>To do List</h4>
                    <h6>Tarefas concluídas: {{ $tarefas_concluidas }}/{{ $total_tarefas }} </h6>
                    <hr />
          
                    <!-- Exibição dos alertas -->

                    @if($errors->any())
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible">{{ $error}}
                                @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif

                    @if(session('message'))
                        <div class="container-fluid">
                            <div class="row">
                                <div class="alert alert-success alert-dismissible">{{ session('message')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <!-- Fim exibição dos alertas -->

                    <form action="{{ route('tarefa.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="tarefa" placeholder="Cadastrar nova tarefa">
                            <div class="input-group-append" id="button-addon4">
                                <button class="btn btn-secondary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </form>

                    @foreach ($tarefas as $item)
                    <div class="row mb-3 d-flex align-items-center">
                        <div class="col-sm-9">
                           {{ $item->tarefa }}
                            <hr>
                        </div>

                        <div class="col-sm-3">
                            @if($item->status == 0)
                            <a href="{{ route('tarefa.concluir', $item->id)}}" style="text-decoration: none">
                                <button type="button" class="btn btn-success" title="Concluír tarefa">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            </a>
                           
                            <a href="#" style="text-decoration: none">
                                <button class="btn btn-primary" title="Editar tarefa"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>
                            @else
                                <button class="btn btn-dark" disabled>Tarefa concluída</button>
                            @endif

                            <a href="{{ route('tarefa.destroy', $item->id)}}">
                                <button class="btn btn-danger" title="Excluir tarefa"><i class="fa-solid fa-trash"></i></button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </body>
</html>