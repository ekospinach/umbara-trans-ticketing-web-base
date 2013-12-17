<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-plus"></i>Tambah Function Info</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content" id="dialog-inputAdmin" title="Tambah Data Admin">
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
                <form name="form-inputAdmin" id="form-inputAdmin" action="<?php echo base_url()."/functioninfo/".$url; ?>" method="POST" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Id</label>
                        <div class="controls">
                           <input type="text" placeholder="Id" value="<?php if($Model != null) echo $Model->getId(); ?>" class="input-large" name="id" id="id" maxlength="25" />
                        </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Name</label>
                       <div class="controls">
                          <input type="text" placeholder="Name" value="<?php if($Model != null) echo $Model->getName(); ?>" class="input-large" name="name" id="name" maxlength="25"/>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Sequence</label>
                       <div class="controls">
                          <input type="text" placeholder="Sequence"  value="<?php if($Model != null) echo $Model->getSequence(); ?>" class="input-large" name="sequence" id="sequence" maxlength="25"/>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">URL</label>
                       <div class="controls">
                          <input type="text" placeholder="URL"  value="<?php if($Model != null) echo $Model->getUrl(); ?>" class="input-large" name="url" id="url" maxlength="100"/>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Module</label>
                       <div class="controls">
                          <input type="text" placeholder="Module"  value="<?php if($Model != null) echo $Model->getModule(); ?>" class="input-large" name="module" id="module" maxlength="25"/>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Is Show</label>
                       <div class="controls">
                           <select name="is_show" id="IsShow" class="input-large" tabindex="1">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                           </select>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Is Enabled</label>
                       <div class="controls">
                           <select name="is_enabled" id="IsEnabled" class="input-large" tabindex="1">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                           </select>
                       </div>
                    </div>
                    <div class="control-group">
                       <label class="control-label">Module Icon</label>
                       <div class="controls">
                           <input type="text" placeholder="Module Icon"  value="<?php if($Model != null) echo $Model->getIconModule(); ?>" class="input-large" name="module_icon" id="module_icon" maxlength="25"/>
                       </div>
                    </div>
                    <div class="form-actions">
                       <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
                       <button type="reset" class="btn btn-primary">Reset</button>
                       <button type="button" onclick='window.location.href="<?php echo base_url()."/functioninfo/"; ?>"' class="btn btn-primary">Batal</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</div>