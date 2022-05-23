    <!DOCTYPE html>
    <html>
    <head>
        <title>Data Beasiswa  </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('mahas.index') }}">Esa Unggul</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('mahas.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('mahas.index') }}">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('mahas.index') }}">Data Beasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        @yield('content')
    </div>

    </body>
    </html>