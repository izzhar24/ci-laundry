<div class="card">
    <div class="card-header">
        <div class="card-title">
            Supplier List
        </div>
    </div>
    <div class="card-body">
        <div style="margin-top: 4px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
        <table class="table table-bordered table-striped table-sm" id="mytable" style="width: 100%;">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Desciption</th>
                    <th>Active</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>

        </table>
    </div>
    <div class="card-footer">
        <a class="btn btn-sm btn-primary" href="<?= base_url('supplier/create') ?>">
            <i class="fa fa-dot-circle-o"></i> Create Supplier</a>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.dataTables_filter').addClass('pull-right');
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
            "url": "<?= base_url() ?>supplier/json",
            "type": "POST"
        },
        columns: [{
                "data": "id",
                "orderable": false
            }, {
                "data": "name"
            }, {
                "data": "address"
            }, {
                "data": "telp_number"
            }, {
                "data": "description"
            }, {
                "data": "icon"
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