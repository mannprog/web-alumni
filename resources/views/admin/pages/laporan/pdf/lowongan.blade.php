<!DOCTYPE html>
<html>

<head>
    <title>Laporan | Data Lowongan Kerja</title>

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
    <h1 style="text-align: center;">Data Lowongan Kerja</h1>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Nama Lowongan</th>
                    <th>Kategori</th>
                    <th>Isi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $row)
                    <tr>
                        <td style="text-align: center;">{{ $index + 1 }}</td>
                        <td>{{ $row->user->name }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->kategori->nama }}</td>
                        <td>{!! $row->isi !!}</td>
                        <td style="text-align: center;">{{ \Carbon\Carbon::parse($row->tanggal_mulai)->format('d M Y') }}
                        </td>
                        <td style="text-align: center;">{{ \Carbon\Carbon::parse($row->tanggal_akhir)->format('d M Y') }}
                        </td>
                        <td>{{ $row->lokasi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
