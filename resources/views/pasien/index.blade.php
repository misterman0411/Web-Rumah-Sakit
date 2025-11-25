<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h3>Data Pasien</h3>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $pasien)
                <tr>
                    <td>{{ $pasien->id_pasien }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $pasien->id_pasien) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pasien.destroy', $pasien->id_pasien) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
