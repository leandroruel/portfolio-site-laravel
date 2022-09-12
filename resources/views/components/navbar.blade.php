 @section('navbar')

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Depoimentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Parceiros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Galeria</a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i style="color:#000000;" class="fa fa-instagram fa-lg i-rede" target="_blank" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i style="color:#000000;" class="fa fa-facebook fa-lg i-rede" target="_blank" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511998962290" target="_blank">
                        <i style="color:#000000;" class="fa fa-whatsapp fa-lg i-rede" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

@endsection
