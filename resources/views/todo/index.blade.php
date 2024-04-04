<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Laravel first project</title>
</head>

<body>
    <div class="container px-12 py-4">
        <h1 class="text-3xl font-semibold mb-6">Lista de Afazeres</h1>

        <ul class="ml-6">
            @foreach ($listaDeTarefas as $item)
                <li class="border-2 pl-4 pr-2 h-14 flex justify-between items-center">
                    {{ $item->id }} - {{ $item->descricao }}
                    <small class="self-end">{{$item->updated_at}}</small>
                </li>
            @endforeach
        </ul>
    </div>

</body>

</html>
