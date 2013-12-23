<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-plus"></i>Tambah User Info</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content" id="dialog-inputAdmin" title="Tambah Data User">
                <br class="all">
                <div>
                    <?php
                        if (count($errors) > 0) {
                            echo "<ul>";
                            foreach ($errors as $key => $value) {
                                echo "<li>".$value."</li>";
                            }
                            echo "</ul>";
                        }
                    ?>
                </div>
                <form name="form-userinfo" id="form-userinfo" action="<?php echo base_url()."/usergroup/".$url; ?>" method="POST" class="form-horizontal">
                    <div class="control-group" style="display: none">
                        <label class="control-label">Id</label>
                        <div class="controls">
                           <input type="hidden" placeholder="Id" value="<?php if($Model != null) echo $Model->getId(); ?>" class="input-large" name="id" id="id" maxlength="25" />
                        </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Name</label>
                       <div class="controls">
                          <input type="text" placeholder="Name" value="<?php if($Model != null) echo $Model->getName(); ?>" class="input-large" name="name" id="name" maxlength="25"/>
                       </div>
                    </div>
                    <div class="form-actions">
                       <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
                       <button type="reset" class="btn btn-primary">Reset</button>
                       <button type="button" onclick='window.location.href="<?php echo base_url()."/userinfo/"; ?>"' class="btn btn-primary">Batal</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</div>