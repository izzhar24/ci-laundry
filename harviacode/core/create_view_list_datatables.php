<?php

$string = "<div class=\"card\">
    <div class=\"card-header\">
        <div class=\"card-title\">
            List " . ucfirst($table_name) . "
        </div>
    </div>
    <div class=\"card-body\">
     <?php
     if (\$message) {
        ?>
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"infoMessage\">
    <strong>
        <?php echo \$message; 
            ?>
    </strong>
    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">×</span>
    </button>
</div>
<?php
    }
    ?>
<table class=\"table table-bordered table-sm table-striped\" id=\"mytable\" style=\"width:100%\">
    <thead>
        <tr>
            <th width=\"80px\">No</th>";
            foreach ($non_pk as $row) {
            $string .= "\n\t\t <th>" . label($row['column_name']) . "</th>";
            }
            $string .= "\n\t\t <th width=\"200px\">Action</th>
        </tr>
    </thead>";

    $column_non_pk = array();
    foreach ($non_pk as $row) {
    $column_non_pk[] .= "{\"data\": \"" . $row['column_name'] . "\"}";
    }
    $col_non_pk = implode(',', $column_non_pk);

    $string .= "\n\t
</table>
</div>
<div class=\"card-footer\">
    <?php echo anchor(site_url('" . $c_url . "/create'), 'Create', 'class=\"btn btn-primary btn-sm\"', '<i class=\"fa fa-dot-circle-o\"></i>'); ?>";
    if ($export_excel == '1') {
    $string .=
    "\n\t\t<?php echo anchor(site_url('" . $c_url . "/excel'), 'Excel', 'class=\"btn btn-primary btn-sm\"'); ?>";
    }
    if ($export_word == '1') {
    $string .=
    "\n\t\t<?php echo anchor(site_url('" . $c_url . "/word'), 'Word', 'class=\"btn btn-primary btn-sm\"'); ?>";
    }
    if ($export_pdf == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('" . $c_url . "/pdf'), 'PDF', 'class=\"btn btn-primary btn-sm\"'); ?>";
    }

    $string .= "\n\t </div>
</div>
<script type=\"text/javascript\"> $(document).ready(function() { $.fn.dataTableExt.oApi.fnPagingInfo=function(oSettings)
    { return { \"iStart\": oSettings._iDisplayStart, \"iEnd\": oSettings.fnDisplayEnd(), \"iLength\":
    oSettings._iDisplayLength, \"iTotal\": oSettings.fnRecordsTotal(), \"iFilteredTotal\": oSettings.fnRecordsDisplay(),
    \"iPage\": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength), \"iTotalPages\":
    Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength) }; }; var t=$(\"#mytable\").dataTable({
    initComplete: function() { var api=this.api(); $('#mytable_filter input') .off('.DT') .on('keyup.DT', function(e) {
    if (e.keyCode==13) { api.search(this.value).draw(); } }); }, oLanguage: { sProcessing: \"loading...\" }, processing:
    true, serverSide: true, ajax: {\"url\": \"" . $c_url . "/json\" , \"type\": \"POST\"}, columns: [ { \"data\":
    \"$pk\", \"orderable\": false }," . $col_non_pk . ", { \" data\" : \"action\", \"orderable\": false, \"className\" :
    \"text-center\" } ], order: [[0, 'desc' ]], rowCallback: function(row, data, iDisplayIndex) { var
    info=this.fnPagingInfo(); var page=info.iPage; var length=info.iLength; var index=page * length + (iDisplayIndex +
    1); $('td:eq(0)', row).html(index); } }); }); </script> </body> </html>"; $hasil_view_list=createFile( $string,
    $target . "views/" . $c_url . "/" . $v_list_file );