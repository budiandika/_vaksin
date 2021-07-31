@extends('template')

@section('styles')
@endsection
@section('content')
<div class="row">
    <div class="col">
        <div class="x_content">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2>&nbsp;&nbsp;<i class="fas fa-user"></i> Data Pasien </h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">No Medrec</label>
                                            <div class="input-group col-lg-12">
                                                <input id="medrec" type="text" class="form-control" value="" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Nama Pasien</label>
                                            <div class="input-group col-lg-12">
                                                <input id="nama" type="text" class="form-control"  value="" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Poli</label>
                                            <div class="input-group col-lg-12">
                                                <input id="poli" type="text" class="form-control" value="" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <div align="left" valign="middle">
                                    <a href="{{url('perawat/asesmen')}}"><button class="btn btn-sm btn-warning">ASSESMENT</button></a>
                                </div>
                                {{-- <div align="left" valign="middle">
                                    <a href="{{route('nurses.soap', $pasien->pasien_id)}}"><button class="btn btn-sm btn-warning">SOAP</button></a>
                                </div> --}}
                                    <div><button type="reset" id="resetSoap" class="btn btn-sm btn-success">Buat SOAP Baru</button></div>
                                    <div><button type="reset" data-id="" id="editSoap" class="btn btn-sm btn-danger">Ubah SOAP</button></div>
                                
                            </ul>
                        </div>
                        <div class="x_title">
                                <h2 id="soaptitle">&nbsp;<i class="fa fa-user-edit"></i> Soap <small>Perawat Terakhir | </small></h2>
                            {{-- @else
                                <h2>&nbsp;<i class="fa fa-user-edit"></i> Soap <small>Perawat Hari Ini</small></h2>
                            @endif --}}
                        </div>
                        <div class="clearfix"></div>
                        <div class="card-body"> 
                            <form action="" id="FormSoapper" method="post">
                                @csrf
                                <input type="hidden" id="_method">
                                @include('modules.perawat.partials.soaper')
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @include('modules.perawat.partials.soapdok')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $.ajax({
    url: "{{url('data/pasen.json')}}",
    type: "get",
    data: {id:"d-pasien"} ,
    success: function (response) {
        $("#medrec").val(response.pasien_nomedrec)
        $("#nama").val(response.pasien_nama)
        $("#poli").val(response.poli)
    },
    error: function(jqXHR, textStatus, errorThrown) {
        alert()
    }
});


    $.ajax({
        url: "{{url('data/soap.json')}}",
        type: "get",
        data: {id:"FormAsper"} ,
        success: function (response) {
            $("#subject").val(response.soaper_subject)
            $("#object").val(response.soaper_object)
            $("#asesmen").val(response.soaper_assesment)
            $("#planing").val(response.soaper_planning)
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert()
        }
    });

    $.ajax({
        url: "{{url('data/soaper.json')}}",
        type: "get",
        data: {id:"pills-soapdok"} ,
        success: function (response) {
            $("#subjectt").val(response.soaper_subjectt)
            $("#objectt").val(response.soaper_objectt)
            $("#assesmen").val(response.soaper_assesmentt)
            $("#obat").val(response.soaper_obat)
            $("#lab").val(response.soaper_lab)
            $("#rad").val(response.soaper_rad)
            $("#pa").val(response.soaper_pa)
            $("#mata").val(response.soaper_mata)
            $("#gigi").val(response.soaper_gigi)
            $("#radioterapi").val(response.soaper_radioterapi)
            $("#tind-poli").val(response.soaper_tindakan)
            $("#konsul").val(response.soaper_konsul)
            $("#gizi").val(response.soaper_gizi)
            $("#lainnya").val(response.soaper_lainnya)
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert()
        }
    });

    var table_soaper = $('#data-soaper').DataTable( {
        "processing": true,
        "serverSide": false,
        "scrollX": true,
        "pageLength": 100,
        "ajax": {
            "url": "{{url('data/histori.json')}}",
            "type": "GET",
            "dataSrc":""
            },
            "columns":[
                { "data": "created_at"},
                { "data": "pasien_noird" },
                { "data": "pasien_nama" },
                { "data": "poli_nama" },
                { "data": "dokter_nama" },
                {
                    "ordertable":false,
                    "className":"text-center",
                    "render": function ( data, type, full, meta ) {
                        return '<a href="perawat/partials/asper" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>&nbsp;View</a>'
                    }
                },
            ],
                "order": [[1, 'desc']],
        } );

            var table_soapdok = $('#data-soapdok').DataTable( {
                "processing": true,
                "serverSide": false,
                "scrollX": true,
                "pageLength": 100,
                "ajax": {
                    "url": "{{url('data/asdok.json')}}",
                    "type": "GET",
                    "dataSrc":""
                },
                "columns":[
                    { "data": "created_at"},
                    { "data": "pasien_noird" },
                    { "data": "pasien_nama" },
                    { "data": "poli_nama" },
                    { "data": "dokter_nama" },
                    {
                        "ordertable":false,
                        "className":"text-center",
                        "render": function ( data, type, full, meta ) {
                            return '<a href="perawat/partials/asdok" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>&nbsp;View</a>'
                        }
                    },
                ],
                "order": [[1, 'desc']],
            } );

        $('#resetSoap').on('click', function(e){
            e.preventDefault();
            // e.preventDefault();
            // CKEDITOR.replace('soaper_subject');
            // initiated = true;
            $("#subject").val('');
            $("#object").val('');
            $("#asesmen").val('');
            $("#planing").val('');
        });

        $('#editSoap').click(function(e){
            const id = $(this).data('id');
            $('#FormSoapper').prop('action');
            $('#soaptitle').html('<i class="fa fa-user-edit"></i>Ubah SOAP <small>Perawat Terakhir</small>');
            $('#_method').attr('name', '_method').val('patch');
        });
    </script>
@endsection