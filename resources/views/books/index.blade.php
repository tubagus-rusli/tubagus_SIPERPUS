<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-center">
    <p>Halaman List Buku</p>
    @if(isset($data['books']))
    <table >
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Halaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book )
                <tr>
                    <td>{{$book['judul']}}</td>
                    <td>{{$book['penulis']}}</td>
                    <td>{{$book['halaman']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @if(isset($id))
        <p>Anda Mencari data : {{$id}}</p>
    @endif
</body>
</html>
