<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Insert | Data Eskul</title>
</head>
<body>
    <div class="mt-5 col-6 m-auto">
        <form action="eskuls" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_eskul">Nama Eskul</label>
                <input type="text" class="form-control" name="nama_eskul" id="nama_eskuls">
            </div>
            
            <div class="mb-3">
                <label for="id_kategori">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item-> id_kategori }}">{{ $item->jenis_kategori }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_pembina">Pembina</label>
                <select name="id_pembina" id="id_pembina" class="form-control">
                <option value="">Pilih Pembina</option>
                @foreach ($pembina as $item)
                    <option value="{{ $item-> id_pembina }}">{{ $item->nama_pembina }}</option>
                @endforeach
                </select>
            </div>
            
            <label for="jadwal_latihan">Jadwal Latihan</label><br>
            <div class="card">
                <div class="card-body">
                <input type="checkbox" class="form-check-input" id="senin" name="jadwal_latihan" value="senin">senin <br>
                <input type="checkbox" class="form-check-input" id="selasa" name="jadwal_latihan" value="selasa">Selasa <br>
                <input type="checkbox" class="form-check-input" id="rabu" name="jadwal_latihan" value="rabu">Rabu <br>
                <input type="checkbox" class="form-check-input" id="kamis" name="jadwal_latihan" value="kamis">Kamis <br>
                <input type="checkbox" class="form-check-input" id="jumat" name="jadwal_latihan" value="jumat">Jumat
            </div>
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