<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Tamu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Tamu</h1>

        <!-- Logout Button -->
        <form action="{{ url('/sesi/logout') }}" method="GET" class="mb-4">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Asal Tamu</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guests as $guest)
                    <tr>
                        <td>{{ $guest->id }}</td>
                        <td>{{ $guest->nama }}</td>
                        <td>{{ $guest->asal_tamu }}</td>
                        <td>{{ $guest->tanggal }}</td>
                        <td>{{ $guest->uraian }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
