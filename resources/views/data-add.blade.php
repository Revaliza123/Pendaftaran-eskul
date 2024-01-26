<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Insert | Data</title>
</head>
<body>
    <div class="mt-5 col-6 m-auto">
        <form action="data" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            
            <div class="mb-3">
                <label for="id_kelas">Kelas</label>
                <select name="id_kelas" id="id_kelas" class="form-control">
                    <option value="">Pilih kelas</option>
                    @foreach ($kelas as $item) 
                    <option value="{{ $item-> id }}">{{ $item->kelas }}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="id_jurusan">Jurusan</label>
                <select name="id_jurusan" id="id_jurusan" class="form-control">
                    <option value="">Pilih Jurusan</option>
                    @foreach($jurusan as $jrs)
                    <option value="{{ $jrs -> id_jurusan }}">{{ $jrs->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_eskul">Eskul</label>
                <select name="id_eskul" id="id_eskul" class="form-control">
                    <option value="">Pilih Eskul</option>
                    @foreach ($eskul as $item)
                        <option value="{{ $item-> id }}">{{ $item->nama_eskul }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value=""></option>
                    <option value="Laki - laki">laki-laki</option>
                    <option value="Perempuan">perempuan</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="handphone">No Handphone</label>
                <input type="number" class="form-control" name="handphone" id="handphone">
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
</body>
</html>