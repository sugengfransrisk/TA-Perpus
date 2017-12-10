<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i>  Edit Anggota</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $row->FULL_NAME; ?></h2>
                    <?php if($this->session->userdata('role')=='superadmin'){echo '<h2 class="pull-right" style="color: #E0E0E0">created at '.$row->D_CREATED.' </h2>';} ?>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <form method="post" action="<?php echo base_url() ?>anggota/submits" id="demo-form2" data-parsley-validate class="">
                        <div class="col-md-3">
                            <img class="pull-right" style="height: 320px;width: 250px" src="<?php echo base_url(); ?>assets/images/upload/anggota/<?php echo $row->FOTO; ?>">
                            <input type="file" name="foto" class=" col-md-7 col-xs-12" >
                        </div>
                        <div class="col-md-6">
                            <?php
                                $jenkel = $row->GENDER;
                                if($jenkel == 'L'){
                                    $jenkel = 'Laki-laki';
                                }else{
                                    $jenkel = 'Perempuan';
                                }
                            ?>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="<?php echo $row->FULL_NAME ?>" class="form-control col-md-7 col-xs-12">
                            <input type="hidden" name="id" value="<?php echo $row->ID_ANGGOTA ?>" class="form-control col-md-7 col-xs-12">

                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" value="<?php echo $row->TMP_LAHIR ?>" class="form-control col-md-7 col-xs-12">

                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" value="<?php echo $row->TGL_LAHIR ?>" id="single_cal1" class="form-control col-md-7 col-xs-12">

                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Jenis Kelamin</label>
                            <div class="">
                                <select class="form-control" value="" name="gender">
                                         <option value=""><?php echo $jenkel ?> </option> 
                                         <option value="<?php echo $row->GENDER ?>">-PILIH-</option>
                                         <option value="L">Laki-Laki</option>
                                         <option value="P">Perempuan</option>
                                </select>
                            </div>
                             <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Alamat</label>
                             <input type="text" name="alamat" value="<?php echo $row->ALAMAT ?>" class="form-control col-md-7 col-xs-12">

                             <label class="control-label col-md-3 col-sm-3 col-xs-12"  >No. Telepon</label>
                             <input type="text" name="telp" value="<?php echo $row->TELP ?>" class="form-control col-md-7 col-xs-12">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12"  ></label>
                            
                             </div>
                             <div class="ln_solid"></div>
                             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                 <a class="btn btn-primary" href="<?php echo base_url('anggota') ?>">Kembali</a>
                                 <button class="btn btn-primary" type="reset">Reset</button>
                                 <input type="submit" class="btn btn-success" name="t" value="Simpan">
                             </div>
                         </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
