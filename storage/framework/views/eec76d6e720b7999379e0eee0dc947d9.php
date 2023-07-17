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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($row->name); ?></td>
                        <td style="text-align: center;"><?php echo e($row->alumniAkademik->nis); ?></td>
                        <td style="text-align: center;"><?php echo e($row->alumniAkademik->nisn); ?></td>
                        <td style="text-align: center;">
                            <?php if($row->alumniDetail->jenis_kelamin === 'l'): ?>
                                Laki-laki
                            <?php else: ?>
                                Perempuan
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php if($row->alumniAkademik->jurusan === 'tkj'): ?>
                                Teknik Komputerisasi Jaringan
                            <?php else: ?>
                                Rekayasa Perangkat Lunak
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php if($row->alumniAkademik->angkatan): ?>
                                <?php echo e($row->alumniAkademik->angkatan); ?>

                            <?php else: ?>
                                Belum Ditentukan
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($row->alumniDetail->alamat); ?></td>
                        <td><?php echo e($row->alumniKeluarga->ayah); ?></td>
                        <td><?php echo e($row->alumniKeluarga->ibu); ?></td>
                        <td><?php echo e($row->userKontak->no_handphone); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/laporan/pdf/alumni.blade.php ENDPATH**/ ?>