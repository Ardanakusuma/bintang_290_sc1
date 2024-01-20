<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Pendaftaran Mahasiswa</title>
    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Pendaftaran Mahasiswa</h1>
                    <hr>
                    <form action="" method="POST">

                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nim" name="nim" value="<?php echo e(old('nim')); ?>">
                            <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" <?php echo e(old('jenis_kelamin')=='L' ? 'checked': ''); ?> >
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" <?php echo e(old('jenis_kelamin')=='P' ? 'checked': ''); ?> >
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option value="Teknik Informatika" <?php echo e(old('jurusan')=='Teknik Informatika' ? 'selected': ''); ?> >
                                    Teknik Informatika
                                </option>
                                <option value="Sistem Informasi" <?php echo e(old('jurusan')=='Sistem Informasi' ? 'selected': ''); ?> >
                                    Sistem Informasi
                                </option>
                                <option value="Ilmu Komputer" <?php echo e(old('jurusan')=='Ilmu Komputer' ? 'selected': ''); ?> >
                                    Ilmu Komputer
                                </option>
                                <option value="Teknik Komputer" <?php echo e(old('jurusan')=='Teknik Komputer' ? 'selected': ''); ?> >
                                    Teknik Komputer
                                </option>
                                <option value="Teknik Telekomunikasi" <?php echo e(old('jurusan')=='Teknik Telekomunikasi' ? 'selected': ''); ?> >
                                    Teknik Telekomunikasi
                                </option>
                            </select>
                            <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"><?php echo e(old('alamat')); ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Daftar</button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/matakuliahweb/bintang_290_sc1/practice_laravel/resources/views/create.blade.php ENDPATH**/ ?>