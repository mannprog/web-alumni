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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($row->name); ?></td>
                        <td style="text-align: center;">
                            <?php if($row->perusahaanDetail->jenis === 'pt'): ?>
                                Perseroan Terbatas (PT)
                            <?php elseif($row->perusahaanDetail->jenis === 'cv'): ?>
                                Commanditaire Vennootschap (CV)
                            <?php elseif($row->perusahaanDetail->jenis === 'firma'): ?>
                                Firma
                            <?php elseif($row->perusahaanDetail->jenis === 'koperasi'): ?>
                                Koperasi
                            <?php elseif($row->perusahaanDetail->jenis === 'persero'): ?>
                                Persero
                            <?php elseif($row->perusahaanDetail->jenis === 'umkm'): ?>
                                UMKM
                            <?php else: ?>
                                Belum Ditentukan
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;"><?php echo e($row->perusahaanDetail->alamat); ?></td>
                        <td><?php echo e($row->userKontak->no_handphone); ?></td>
                        <td><?php echo e($row->email); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/laporan/pdf/perusahaan.blade.php ENDPATH**/ ?>