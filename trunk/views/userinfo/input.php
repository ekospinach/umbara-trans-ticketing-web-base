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
                <form name="form-userinfo" id="form-userinfo" action="<?php echo base_url()."/userinfo/".$url; ?>" method="POST" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">User Name</label>
                        <div class="controls">
                           <input type="text" placeholder="User Name" value="<?php if($Model != null) echo $Model->getUserName(); ?>" class="input-large" name="username" id="username" maxlength="25" />
                        </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Password</label>
                       <div class="controls">
                          <input type="password" placeholder="Password" value="" class="input-large" name="password" id="password" maxlength="25"/>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Level</label>
                       <div class="controls">
                          <input type="text" placeholder="Level"  value="<?php if($Model != null) echo $Model->getUserGroupCode(); ?>" class="input-large" name="level" id="level" maxlength="25"/>
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