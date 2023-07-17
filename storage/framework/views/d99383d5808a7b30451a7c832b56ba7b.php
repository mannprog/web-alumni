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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($row->name); ?></td>
                        <td style="text-align: center;"><?php echo e($row->petugasDetail->nip); ?></td>
                        <td style="text-align: center;"><?php echo e($row->petugasDetail->nuptk); ?></td>
                        <td style="text-align: center;">
                            <?php if($row->petugasDetail->jenis_kelamin === 'l'): ?>
                                Laki-laki
                            <?php else: ?>
                                Perempuan
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($row->petugasDetail->alamat); ?></td>
                        <td style="text-align: center;">
                            <?php if($row->roles[0]->name === 'admin'): ?>
                                Admin
                            <?php elseif($row->roles[0]->name === 'kepalasekolah'): ?>
                                Kepala Sekolah
                            <?php else: ?>
                                Petugas
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php if($row->petugasDetail->status === 'pns'): ?>
                                PNS
                            <?php else: ?>
                                Non PNS
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($row->userKontak->no_handphone); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/laporan/pdf/petugas.blade.php ENDPATH**/ ?>