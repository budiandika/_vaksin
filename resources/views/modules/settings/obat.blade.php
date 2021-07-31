@extends('template')

@section('styles')
      <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.common.css" />
      <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.light.compact.css" />
      <link type="text/css" href="{{ asset('assets') }}/lib/dxgrid/style.css" rel="stylesheet">
@endsection


@section('content')
<div class="panel panel-full">
	<div class="panel-heading ">
		<h4>Pengaturan <span id="x-title">Obat</span></h4>
		<br/>
		<small>Pengaturan \ Obat</small>
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
                var title = $("#x-title").html() +" ";
                var $data = getData("{{url('api/settings/obat')}}/","obat_id");
                var $satuan = getData("{{url('api/settings/satuan')}}/","satuan_id");
                var $bentuk = getData("{{url('api/settings/obat/bentuk')}}/","bentuk_id");
                $("#x-data").dxDataGrid({
                    dataSource: $data,
                    columns: [
                            {dataField: "obat_kode", caption: "Kode", alignment:"center",validationRules: [{ type: "required" }]},
                            {dataField: "obat_nama", caption: "Nama Obat",validationRules: [{ type: "required" }]},                             
                            {dataField: "obat_sediaan", caption: "Bentuk Obat", lookup: {dataSource: $bentuk,displayExpr: "bentuk_nama",valueExpr: "bentuk_id"}},
                            {dataField: "obat_satuan_besar", caption: "Satuan Besar", lookup: {dataSource: $satuan,displayExpr: "satuan_nama",valueExpr: "satuan_id"}},
                            {dataField: "obat_satuan_kecil", caption: "Satuan Kecil", lookup: {dataSource: $satuan,displayExpr: "satuan_nama",valueExpr: "satuan_id"}},
                            {dataField: "obat_kelompok1", caption: "Kelompok 1", dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["Non-Fornas", "Fornas"]}},     
                            {dataField: "obat_kelompok2", caption: "Kelompok 2", dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["Non-Katalog", "Katalog"]}},
                            {dataField: "obat_type_item", caption: "Tipe Obat"},

                            {dataField: "obat_kadar", caption: "Kadar Obat"},       
                            {dataField: "obat_kadar_satuan", caption: "Kadar Satuan", lookup: {dataSource: $satuan,displayExpr: "satuan_nama",valueExpr: "satuan_id"}},
                            {dataField: "antibiotik", caption: "Antibiotik"},  
                            {dataField: "obat_askesnon", caption: "Askesnon",  dataType:"boolean", alignment:"center",
                                lookup: {dataSource: [0, 1],displayExpr: function (t) {return t == 0 ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == 0) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == 1) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },  
                            {dataField: "narkotika", caption: "Narkotika",  dataType:"boolean", alignment:"center",
                                lookup: {dataSource: [0, 1],displayExpr: function (t) {return t == 0 ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == 0) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == 1) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },  
                            {dataField: "psikotropika", caption: "Psikotropika",  dataType:"boolean", alignment:"center",
                                lookup: {dataSource: [0, 1],displayExpr: function (t) {return t == 0 ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == 0) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == 1) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },  
                            {dataField: "kronis_kemo", caption: "Kronis Kemo",  dataType:"boolean", alignment:"center",
                                lookup: {dataSource: [0, 1],displayExpr: function (t) {return t == 0 ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == 0) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == 1) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },  
                            {dataField: "karantina", caption: "Karantina",  dataType:"boolean", alignment:"center",
                                lookup: {dataSource: [0, 1],displayExpr: function (t) {return t == 0 ? "Tidak" : "Ya"}},
                                cellTemplate: function (container, options) {
                                    if (options.value == 0) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-times text-danger" }).html(""))
                                            .appendTo(container);
                                    } else if (options.value == 1) {
                                        $("<div>")
                                            .append($("<i>", { "class": "fa fa-check text-success" }).html(""))
                                            .appendTo(container);
                                    }
                                }
                            },  

                            {dataField: "obat_namagenerik", caption: "Generik",  dataType:"bolean", validationRules: [{ type: "required" }], alignment:"center",
                                lookup: {dataSource: ["0", "1"],displayExpr: function (t) {return t == "0" ? "Non-Generik" : "Generik"}},
                                cellTemplate: function (container, options) {
                                    if(options.value=="1"){
                                        $("<div>")
                                                .append($("<span>", { "class": "dx-active" }).html("Generik"))
                                                .appendTo(container);
                                    }else{
                                        $("<div>")
                                             .append($("<span>", { "class": "dx-inactive" }).html("Non-Generik"))
                                             .appendTo(container);
                                    }
                                }
                            }, 
                            {dataField: "obat_harga_rata", caption: "Harga Rata-Rata",dataType:"number", format: {type: "currency",currency: "IDR"},},
                            {dataField: "obat_hna", caption: "Harga Ke Pasien",dataType:"number", format: {type: "currency",currency: "IDR"},validationRules: [{ type: "required" }]},
                            {dataField: "obat_harga_beli", caption: "Harga Beli",dataType:"number", format: {type: "currency",currency: "IDR"}},
                            {dataField: "obat_harga_jual", caption: "Harga Jual",dataType:"number", format: {type: "currency",currency: "IDR"},validationRules: [{ type: "required" }]},
                            
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
                            height: 550,
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



