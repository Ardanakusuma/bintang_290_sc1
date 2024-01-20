<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Biodata <?php echo e($student->name); ?></title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-between align-items-center">
                        <h1 class="h2 mr-auto">Biodata <?php echo e($student->name); ?></h1>
                        <div class="d-flex">
                            <a href="<?php echo e(route('student.edit',['student' => $student->id])); ?>" class="btn btn-primary">
                                Edit
                            </a>
                            <form action="<?php echo e(route('student.destroy',['student'=>$student->id])); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                            </form>
                        </div>
                    </div>

                    <hr>
                    
                    <?php if(session()->has('pesan')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('pesan')); ?>

                        </div>
                    <?php endif; ?>

                    <ul>
                        <li>NIM: <?php echo e($student->nim); ?> </li>
                        <li>Nama: <?php echo e($student->name); ?> </li>
                        <li>Jenis Kelamin:
                        <?php echo e($student->gender == 'P' ? 'Perempuan' : 'Laki-laki'); ?>

                        </li>
                        <li>Jurusan: <?php echo e($student->departement); ?> </li>
                        <li>Alamat:
                        <?php echo e($student->address == '' ? 'N/A' : $student->address); ?>

                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/matakuliahweb/bintang_290_sc1/practice_laravel/resources/views/student/show.blade.php ENDPATH**/ ?>