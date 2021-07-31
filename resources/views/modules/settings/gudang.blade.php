@extends('template')

@section('styles')
      <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.common.css" />
      <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.light.compact.css" />
      <link type="text/css" href="{{ asset('assets') }}/lib/dxgrid/style.css" rel="stylesheet">
@endsection


@section('content')
<div class="panel panel-full">
	<div class="panel-heading ">
		<h4>Pengaturan <span id="x-title">Gudang</span></h4>
		<br/>
		<small>Pengaturan \ Gudang</small>
		<div class="pull-right">
			Jumlah Data: <span id="jumlah" class="x-num"></span>
		</div>
	</div>
	<div class="panel-body" style="padding:0">
        <div id="x-data" class="x-table"></div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets') }}/lib/cldr.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/cldr/event.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/cldr/supplemental.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/globalize.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/globalize/message.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/globalize/number.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/globalize/currency.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/globalize/date.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/dxgrid/jszip.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/lib/dxgrid/dx.web.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/extra.js"></script>
    <script src="{{ asset('assets/js/DataController.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    	$('.s_parkir').addClass("active");
    	$('.s_parkir').parent().parent().addClass("active");

                var title = $("#x-title").html() +" ";
                var $data = getData("{{url('api/settings/gudang')}}/","gudang_id");
                $("#x-data").dxDataGrid({
                    dataSource: $data,
                    columns: [
                            {dataField: "gudang_kode", caption: "Kode", alignment:"center",validationRules: [{ type: "required" }]},
                            {dataField: "gudang_nama", caption: "Nama Gudang",validationRules: [{ type: "required" }]},
                            {dataField: "gudang_lokasi", caption: "Lokasi Gudang",validationRules: [{ type: "required" }]},
                            {dataField: "gudang_tipe_bt", caption: "Tipe BT", alignment:"center",validationRules: [{ type: "required" }]}, 
                            {dataField: "gudang_pelayanan", caption: "Pelayanan", dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["N", "Y"],displayExpr: function (t) {return t == "N" ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == "N") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == "Y") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },                         
                            {dataField: "gudang_aktif", caption: "Status", dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["N", "Y"],displayExpr: function (t) {return t == "N" ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == "N") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == "Y") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },                    
                            {dataField: "gudang_pemesanan", caption: "Pemesanan",  dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["N", "Y"],displayExpr: function (t) {return t == "N" ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == "N") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == "Y") {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },
                    ],
                    allowColumnResizing: true,
                    columnMinWidth: 50,
                    columnAutoWidth: true,
                    showRowLines: true,
                    rowAlternationEnabled: true,
                    export:{enabled:true,fileName: title},
                    sorting: {mode: "multiple"},
                    selection: {mode: "single"},
                    filterRow:{visible:true},
                    paging: {pageSize: 50},
                    pager: {showPageSizeSelector: true,allowedPageSizes: [50, 100, 150],showInfo: true},
                    searchPanel:{visible:true,placeholder:"Pencarian...",searchVisibleColumnsOnly:true,},
                    editing: {mode: "popup",allowUpdating:true, allowDeleting:true,
                        popup: {
                            closeOnOutsideClick: true,
                            title:"Ubah "+title,
                            showTitle:true,
                            width: 700,
                            height: 250,
                            shadingColor: "rgba(0,0,0,0.18)",
                            position: {my: "center",at: "center",of: window},
                        }
                    },
                    summary: {
                        totalItems: [{
                            name: "Count",
                            displayFormat: "{0}",
                            valueFormat: "number",
                            summaryType: "custom"
                        }],
                        calculateCustomSummary: function (options) {
                                    if (options.name === "Count") {
                                                if (options.summaryProcess === "start") {
                                                        options.totalValue = 0;
                                                }
                                                if (options.summaryProcess === "calculate") {
                                                    options.totalValue++;
                                                }
                                                if (options.summaryProcess == 'finalize') {
                                                        console.log(options.totalValue);
                                                        $("#jumlah").html(options.totalValue);
                                                }
                                        }
                        },
                    },

                    onContentReady: function(e){
                        moveEditColumnToLeft(e.component);
                    },
                    onCellPrepared: function(e) {
                        if(e.rowType === "data" && e.column.command === "edit") {
                             var isEditing = e.row.isEditing,
                                 $links = e.cellElement.find(".dx-link");

                             $links.text("");

                             if(isEditing){
                                 $links.filter(".dx-link-save").addClass("dx-icon-save");
                                 $links.filter(".dx-link-cancel").addClass("dx-icon-revert");
                             } else {
                                 $links.filter(".dx-link-edit").addClass("dx-icon-edit dx-color-yellow");
                                 $links.filter(".dx-link-delete").addClass("dx-icon-trash dx-color-red");
                             }
                         }
                        },
                        onToolbarPreparing: function(e) {
                            var toolbarItems = e.toolbarOptions.items;
                            $.each(toolbarItems, function(_, item) {
                                if(item.name === "exportButton") {
                                    item.location="before";
                                }else if(item.name === "saveButton") {
                                    item.location="before";
                                }
                            });

                            dataGrid = e.component;
                            e.toolbarOptions.items.unshift(
                            {
                                location: "before",
                                widget: "dxButton",
                                options: {
                                    icon: "add",
                                    hint: "Tambah Data",
                                    onClick: function() {
                                        dataGrid.addRow();
                                        $(".dx-popup-normal .dx-toolbar-before .dx-toolbar-item-content>div").html("Tambah " + title);
                                    }
                                }
                            },
                            {
                                location: "after",
                                widget: "dxButton",
                                options: {
                                    icon: "refresh",
                                    hint: "Refresh & Reset",
                                    onClick: function() {
                                        dataGrid.refresh();
                                    }
                                }
                            }
                        );
                    }
                });
    </script>
@endsection



