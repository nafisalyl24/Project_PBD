
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Master Barang</title>
</head>
<body>
    <h1>Daftar Barang Toko Alat Musik</h1>

    @if(count($barangs) > 0)
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    @foreach(array_keys((array) $barangs[0]) as $kolom)
                        <th>{{ $kolom }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                    <tr>
                        @foreach((array) $barang as $nilai)
                            <td>{{ $nilai }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada data barang.</p>
    @endif
</body>
</html>
