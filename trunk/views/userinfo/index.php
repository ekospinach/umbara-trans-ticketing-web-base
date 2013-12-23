<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-table"></i>Tabel Jadwal Keberangkatan</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="clearfix"></div>
                <a class='btn show-tooltip' style='margin-bottom:10px !important;' title='Create' href='<?php echo base_url()."/userinfo/create/"; ?>' ><i class='icon-plus'> Create</i></a>
                <?php if (!is_null($Model) && count($Model) > 0) {?>
                <table class="table table-advance" id="table1">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Level</th>
                            <th style="width:100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($Model as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item->getUserName(); ?></td>
                            <td><?php echo $item->getUserGroupCode(); ?></td>
                            <td class='action-bar' align='center'>
                                <a class='btn btn-small show-tooltip' title='Edit' href='<?php echo base_url()."/userinfo/edit?id=".$item->getUserName(); ?>'><i class='icon-edit'></i></a>
                                <a class='btn btn-small btn-danger show-tooltip' title='Delete' href='<?php echo base_url()."/userinfo/delete?id=".$item->getUserName(); ?>'><i class='icon-trash'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <h3>Tidak ada data di dalam database</h3>
                <?php } ?>
                <a class='btn show-tooltip' style='margin-top:10px !important;' title='Create' href='<?php echo base_url()."/userinfo/create/"; ?>'><i class='icon-plus'> Create</i></a>
            </div>
        </div>
    </div>
</div>