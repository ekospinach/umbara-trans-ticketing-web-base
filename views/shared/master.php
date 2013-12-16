<!DOCTYPE html>
<html>
    <head>
        <title>Travel Management System</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/res/css/jeasyui_themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/res/css/jeasyui_themes/icon.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/jeasyui/jquery.easyui.min.js"></script>
        <style type="text/css">
            html, body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .easyui-layout {
                margin: 0;
                min-height: 100%;
                min-width: 100%;
            }
        </style>
    </head>
    <body>
    <div class="easyui-layout">
        <div data-options="region:'north'" style="height:100px;vertical-align: middle">
            <h1>Travel Management System</h1>
        </div>
        <div data-options="region:'south',split:true" style="height:50px;"></div>
        <div data-options="region:'west',split:true" title="Menu" style="width:200px;"></div>
        <div data-options="region:'center',title:'Main Title',iconCls:'icon-ok'">
            <?php require_once $content; ?>
        </div>
    </div>
    </body>
</html>
    