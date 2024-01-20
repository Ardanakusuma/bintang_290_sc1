<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-between align-items-center">
                        <h2 class="mr-auto">Tabel Mahasiswa</h2>
                        <a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary">
                            Tambah Mahasiswa
                        </a>
                    </div>

                    <?php if(session()->has('pesan')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('pesan')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th>Alamat</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th><?php echo e($loop->iteration); ?></th>
                                <td><a href="<?php echo e(route('student.show',['student' => $mahasiswa->id])); ?>"><?php echo e($mahasiswa->nim); ?></a></td>
                                <td><img height="30px" src="<?php echo e(url('')); ?>/<?php echo e($mahasiswa->image); ?>" class="rounded" alt=""></td>
                                <td><?php echo e($mahasiswa->name); ?></td>
                                <td><?php echo e($mahasiswa->gender == 'P'?'Perempuan':'Laki-laki'); ?></td>
                                <td><?php echo e($mahasiswa->departement); ?></td>
                                <td><?php echo e($mahasiswa->address == '' ? 'N/A' : $mahasiswa->address); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td colspan="7" class="text-center">Tidak ada data...</td>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
    <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/matakuliahweb/bintang_290_sc1/practice_laravel/resources/views/student/index.blade.php ENDPATH**/ ?>