<div class="card">
    <div class="card-header">
        <div class="card-title">
            Konsumen List
        </div>
    </div>
    <div class="card-body">
        <div id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
        <table class="table table-bordered table-striped" id="mytable" style="width:100%">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>

        </table>
    </div>
    <div class="card-footer">
        <?php echo anchor(site_url('konsumen/create'), 'Create', 'class="btn btn-primary"'); ?>
    </div>
</div>

<style>
.dataTables_filter {
    text-align: right !important;
}

.dataTables_paginate {
    display: right !important;
    display: inline-flex;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var t = $("#mytable").dataTable({
        initComplete: function() {
            var api = this.api();
            $('#mytable_filter input')
                .off('.DT')
                .on('keyup.DT', function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {
            "url": "konsumen/json",
            "type": "POST"
        },
        columns: [{
                "data": "id",
                "orderable": false
            }, {
                "data": "nama"
            }, {
                "data": "alamat"
            }, {
                "data": "telp"
            },
            {
                "data": "action",
                "orderable": false,
                "className": "text-center"
            }
        ],
        order: [
            [0, 'desc']
        ],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });
});
</script>