<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bimbingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ URL::to('/') }}">Appointment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ URL::to('jadwal') }}">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL::to('dosen') }}">Dosen</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ URL::to('mahasiswa') }}">Mahasiswa</a></li>

                    </ul>
                    <div class="d-flex">
                        <a href="{{ URL::to('jadwal/create') }}">
                            <button class="btn btn-small btn-primary">
                                Create Jadwal
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="position-absolute top-50 start-50 translate-middle">
                <a href="{{URL::to('jadwal')}}" class="btn btn-primary" role="button">
                    Lihat Jadwal
                </a>
                <a href="{{URL::to('dosen')}}" class="btn btn-primary" role="button">
                    Lihat Dosen
                </a>
                <a href="{{URL::to('mahasiswa')}}" class="btn btn-primary" role="button">
                    Lihat Mahasiswa
                </a>
            </div>
        </main>
    </div>
</body>

</html>
