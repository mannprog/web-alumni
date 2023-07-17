<!DOCTYPE html>
<html>

<head>
    <title>Laporan | Data Perusahaan</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 10px;
        }

        th {
            text-align: center;
            background-color: #04AA6D;
            border: 1px solid #000000;
            padding: 8px;
        }

        td {
            text-align: left;
            border: 1px solid #000000;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Data Perusahaan</h1>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Jenis Perusahaan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $row)
                    <tr>
                        <td style="text-align: center;">{{ $index + 1 }}</td>
                        <td>{{ $row->name }}</td>
                        <td style="text-align: center;">
                            @if ($row->perusahaanDetail->jenis === 'pt')
                                Perseroan Terbatas (PT)
                            @elseif ($row->perusahaanDetail->jenis === 'cv')
                                Commanditaire Vennootschap (CV)
                            @elseif ($row->perusahaanDetail->jenis === 'firma')
                                Firma
                            @elseif ($row->perusahaanDetail->jenis === 'koperasi')
                                Koperasi
                            @elseif ($row->perusahaanDetail->jenis === 'persero')
                                Persero
                            @elseif ($row->perusahaanDetail->jenis === 'umkm')
                                UMKM
                            @else
                                Belum Ditentukan
                            @endif
                        </td>
                        <td style="text-align: center;">{{ $row->perusahaanDetail->alamat }}</td>
                        <td>{{ $row->userKontak->no_handphone }}</td>
                        <td>{{ $row->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
