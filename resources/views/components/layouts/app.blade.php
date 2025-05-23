<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>{{ $title ?? 'Lanchonete' }}</title>

    @livewireStyles
</head>

<body style="background-color: #FFFFFF"  style="bg-gradient">
    <nav class="navbar navbar-expand-lg" style="#2980b9" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Vibe & Lanche</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cadastre-se/a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Entre/a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Pesquisar...</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container" >
        {{ $slot }} <!--recebe o arquivo create.php para ser redenrizado na tela-->
        <div>
            @livewireScripts <!--Java Fica sempre no fim da página, pois precisa processar dps do css -->

            <!--JANELA Modal: JANELA SOBREPOSTA-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>

</body>

</html>