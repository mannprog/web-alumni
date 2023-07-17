<!DOCTYPE html>
<html>

<head>
    <title>Laporan | Data Alumni</title>

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
    <h1 style="text-align: center;">Data Alumni</h1>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Alamat</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $row)
                    <tr>
                        <td style="text-align: center;">{{ $index + 1 }}</td>
                        <td>{{ $row->name }}</td>
                        <td style="text-align: center;">{{ $row->alumniAkademik->nis }}</td>
                        <td style="text-align: center;">{{ $row->alumniAkademik->nisn }}</td>
                        <td style="text-align: center;">
                            @if ($row->alumniDetail->jenis_kelamin === 'l')
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                        </td>
                        <td style="text-align: center;">
                            @if ($row->alumniAkademik->jurusan === 'tkj')
                                Teknik Komputerisasi Jaringan
                            @else
                                Rekayasa Perangkat Lunak
                            @endif
                        </td>
                        <td style="text-align: center;">
                            @if ($row->alumniAkademik->angkatan)
                                {{ $row->alumniAkademik->angkatan }}
                            @else
                                Belum Ditentukan
                            @endif
                        </td>
                        <td>{{ $row->alumniDetail->alamat }}</td>
                        <td>{{ $row->alumniKeluarga->ayah }}</td>
                        <td>{{ $row->alumniKeluarga->ibu }}</td>
                        <td>{{ $row->userKontak->no_handphone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
