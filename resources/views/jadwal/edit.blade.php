<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jadwal Bimbingan</title>
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
        <div class="w-50 mw-100">

            <h1>Edit {{ $jadwal->judul }}</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::model($jadwal, array('route' => array('jadwal.update', $jadwal->id), 'method' => 'PUT')) }}

            <div class="form-group py-3">
                {{ Form::label('judul', 'Judul') }}
                {{ Form::text('judul', Input::old('judul'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('deskripsi', 'Deskripsi') }}
                {{ Form::textarea('deskripsi', Input::old('deskripsi'), array('class' => 'form-control', 'rows' => '3')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('mahasiswa', 'Mahasiswa') }}
                {{ Form::select('mahasiswa', $mahasiswa, $jadwal->mahasiswa_id, array('class' => 'form-control')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('dosen', 'Dosen') }}
                {{ Form::select('dosen', $dosen, $jadwal->dosen_id, array('class' => 'form-control')) }}
            </div>


            <div class="form-group py-3">
                {{ Form::label('awal', 'Awal Bimbingan') }}
                {{ Form::date('awal', $jadwal->awal, ['class' => 'form-control']) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('akhir', 'Akhir Bimbingan') }}
                {{ Form::date('akhir', $jadwal->akhir, ['class' => 'form-control']) }}
            </div>

            {{ Form::submit('Submit', array('class' => 'btn btn-primary py-2 px-4')) }}

            {{ Form::close() }}

        </div>
    </div>
</body>

</html>
