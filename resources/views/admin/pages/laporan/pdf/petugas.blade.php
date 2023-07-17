<!DOCTYPE html>
<html>

<head>
    <title>Laporan | Data Petugas</title>

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
    <h1 style="text-align: center;">Data Petugas</h1>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIP</th>
                    <th>NUPTK</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $row)
                    <tr>
                        <td style="text-align: center;">{{ $index + 1 }}</td>
                        <td>{{ $row->name }}</td>
                        <td style="text-align: center;">{{ $row->petugasDetail->nip }}</td>
                        <td style="text-align: center;">{{ $row->petugasDetail->nuptk }}</td>
                        <td style="text-align: center;">
                            @if ($row->petugasDetail->jenis_kelamin === 'l')
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                        </td>
                        <td>{{ $row->petugasDetail->alamat }}</td>
                        <td style="text-align: center;">
                            @if ($row->roles[0]->name === 'admin')
                                Admin
                            @elseif ($row->roles[0]->name === 'kepalasekolah')
                                Kepala Sekolah
                            @else
                                Petugas
                            @endif
                        </td>
                        <td style="text-align: center;">
                            @if ($row->petugasDetail->status === 'pns')
                                PNS
                            @else
                                Non PNS
                            @endif
                        </td>
                        <td>{{ $row->userKontak->no_handphone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
