<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e(empty($result) ? 'Tambah' : 'Edit'); ?> Data Siswa
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('siswa')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Data Siswa</li>
        <li class="active"><?php echo e(empty($result) ? 'Tambah' : 'Edit'); ?> Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $__env->make('templates/feedback', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="<?php echo e(url('siswa')); ?>" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo e(empty($result) ? url('siswa/add') : url("siswa/$result->nis/edit")); ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              
              <?php if(!empty($result)): ?>
                <?php echo e(method_field('patch')); ?>

              <?php endif; ?>
              <div class="form-group">
                <label class="control-label col-sm-2">NIS</label>    
                  <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS"
                           value="<?php echo e(@$result->nis); ?>"/>
                  </div>
              </div>      
              
              <div class="form-group">
                <label class="control-label col-sm-2">Nama Lengkap</label>    
                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo e(@$result->nama_lengkap); ?>"/>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Jenis Kelamin</label>    
                  <div class="col-sm-10">
                    <div class="checkbox">
                        <label><input type="radio" name="jenis_kelamin" value="L" <?php echo e(@$result->jenis_kelamin == 'L' ? 'checked' : ''); ?> />L</label>
                        <label><input type="radio" name="jenis_kelamin" value="P" <?php echo e(@$result->jenis_kelamin == 'P' ? 'checked' : ''); ?> />P</label>
                    </div>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Alamat</label>    
                  <div class="col-sm-10">
                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap"><?php echo @$result->alamat; ?></textarea>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">No Telp</label>    
                  <div class="col-sm-10">
                    <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon" value="<?php echo e(@$result->no_telp); ?>"/>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Kelas</label>    
                  <div class="col-sm-10">
                    <select name="id_kelas" class="form-control">
                      <?php $__currentLoopData = \App\Kelas::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($kelas->id_kelas); ?>" <?php echo e(@$result->id_kelas == $kelas->id_kelas ? 'selected' : ''); ?>><?php echo e($kelas->nama_kelas); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                      </select>
                  </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Foto</label>    
                  <div class="col-sm-10">
                    <input type="file" name="foto"/>
                  </div>
              </div>
              
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                  </div>
              </div>      
              
              
              </div>      
              </div>      
              
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>