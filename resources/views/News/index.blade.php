<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Laravel first project</title>
</head>

<body>
    <div class="px-12 py-4 w-full flex flex-col items-center h-full">
        <h1 class="text-5xl font-bold mb-14 text-center w-full">Ultimas Noticias</h1>

        <div class=" flex flex-wrap justify-center gap-8">
            @foreach ($listaDeNoticias as $noticia)
                <a href="{{'/news/'.$noticia->id }}" class=" bg-white shadow-lg rounded-md border-2 p-5 w-full px-16 lg:h-96 gap-4 flex flex-col cursor-pointer items-center transition-all hover:scale-105 lg:flex-row {{ $noticia -> id % 2 == 0 ? '!flex-row-reverse' : '' }}">
                    <img class="max-h-full max-w-md" src="https://img.freepik.com/vetores-gratis/conceito-de-noticias-para-a-pagina-de-destino_52683-18565.jpg?size=626&ext=jpg&ga=GA1.1.1448711260.1706313600&semt=ais" alt="">
                    <div class="flex flex-col items-center gap-4">
                        <h2 class="text-3xl font-extrabold text-center">{{ $noticia->title }}</h2>
                        <h4 class="text-xl font-semibold text-center">{{ $noticia->subtitle }}</h4>
                        <p class="font-light overflow-hidden text-center px-6 py-2 max-h-48">{{ $noticia->text }}</p>
                        <small class="self-end font-extralight"> Escrito por {{$noticia->journalist}}</small>
                    </div>

                </a>
            @endforeach
            </div>
    </div>

</body>

</html>
