<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e(empty($result) ? 'Tambah' : 'Edit'); ?> Data Kelas
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo e(empty($result) ? 'Tambah' : 'Edit'); ?> Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $__env->make('templates/feedback', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="<?php echo e(url('/')); ?>" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo e(empty($result) ? url('kelas/add') : url("kelas/$result->id_kelas/edit")); ?>" class="form-horizontal" method="POST">
              <?php echo e(csrf_field()); ?>

              
              <?php if(!empty($result)): ?>
                <?php echo e(method_field('patch')); ?>

              <?php endif; ?>
              <div class="form-group">
                <label class="control-label col-sm-2">Nama Kelas</label>    
                  <div class="col-sm-10">
                    <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas"
                           value="<?php echo e(@$result->nama_kelas); ?>"/>
                  </div>
              </div>      
              
              <div class="form-group">
                <label class="control-label col-sm-2">Jurusan</label>    
                  <div class="col-sm-10">
                    <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" value="<?php echo e(@$result->jurusan); ?>"/>
                  </div>
              </div>      
              
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
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