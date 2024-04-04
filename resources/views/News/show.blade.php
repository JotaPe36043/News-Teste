<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Detalhes da Notícia</title>
</head>

<body>
    <div class="px-12 py-4 h-full w-full flex flex-col gap-4 items-center">
        <a href="/"
            class="bg-white border-2 px-4 py-2 mb-4 self-start border-black rounded-lg hover:scale-95 transition-all">Voltar
            a
            Pagina principal</a>
        <h1 class="text-5xl font-extrabold">{{ $noticia->title }}</h1>
        <h2 class="text-3xl font-bold mb-14">{{ $noticia->subtitle }}</h2>
        <div class="max-h-full max-w-2xl shadow-xl rounded-lg bg-black/40">
            <img class="max-h-full max-w-2xl shadow-xl rounded-lg -translate-x-4 -translate-y-4 border-2 border-black"
                src="https://img.freepik.com/vetores-gratis/conceito-de-noticias-para-a-pagina-de-destino_52683-18565.jpg?size=626&ext=jpg&ga=GA1.1.1448711260.1706313600&semt=ais"
                alt="">
        </div>
        <p class=" text-lg p-8 px-16 text-center">{{ $noticia->text }}</p>
        <p class="mt-4 font-light self-end">Escrito por: {{ $noticia->journalist }}</p>
    </div>
</body>

</html>
