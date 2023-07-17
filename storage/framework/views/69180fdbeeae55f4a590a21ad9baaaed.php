<!DOCTYPE html>
<html>

<head>
    <title>Laporan | Data Berita</title>

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
    <h1 style="text-align: center;">Data Berita</h1>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penulis</th>
                    <th>Judul</th>
                    <th>Isi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($row->user->name); ?></td>
                        <td><?php echo e($row->judul); ?></td>
                        <td><?php echo $row->isi; ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/laporan/pdf/berita.blade.php ENDPATH**/ ?>