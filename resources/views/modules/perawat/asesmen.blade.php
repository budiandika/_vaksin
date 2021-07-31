@extends('template')

@section('styles')
    <style>
        .range-wrap {
        position: relative;
        margin: 0 auto 3rem;
        }
        .range {
        width: 100%;
        }
        .bubble {
        background: red;
        color: white;
        padding: 4px 5px;
        position: absolute;
        border-radius: 4px;
        left: 50%;
        transform: translateX(-50%);
        }
        .bubble::after {
        content: "";
        position: absolute;
        width: 2px;
        height: 2px;
        background: red;
        top: -1px;
        left: 50%;
        }
    </style>
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
                                    <a href="{{url('perawat/soap')}}"><button class="btn btn-sm btn-warning">SOAP</button></a>
                                </div>
                                    <div class="float-right"><button id="resetAsses" type="reset" class="btn btn-sm btn-success">Buat Asesmen Baru</button></div>
                                    <div class="float-right"><button id="editAsses" data-id="" type="button" class="btn btn-sm btn-danger">Ubah Asesmen</button></div>
                            </ul>
                        </div>
                        <div class="x_title">
                                <h2 id="assestitle">&nbsp;<i class="fa fa-user-edit"></i> Asesmen <small>Perawat Terakhir |</small></h2>
                    </div>
                    <br>
                    <div class="card-body">
                        <form class="form-horizontal" id="FormAsper" method="POST">
                            @csrf
                            <input type="hidden" id="_method">
                            @include('modules.perawat.partials.asper')
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="asdok">
                        @include('modules.perawat.partials.asdok')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
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
    url: "{{url('data/assesmen.json')}}",
    type: "get",
    data: {id:"FormAsper"} ,
    success: function (response) {
        $('input:radio[name=asper_kesadaran][value='+response.asper_kesadaran+']')[0].checked = true    
        $('input:radio[name=asper_kondisi_umum][value='+response.asper_kondisi_umum+']')[0].checked = true
        $("#darah").val(response.asper_tekanan_darah)
        $("#nadi").val(response.asper_nadi)
        $("#suhu").val(response.asper_suhu)
        $("#napas").val(response.asper_pernapasan)
        $("#t-badan").val(response.asper_tinggi_bdn)
        $("#b-badan").val(response.asper_berat_bdn)
        $('input:checkbox[name=asper_kebutuhan_khusus]')[0].checked = true
        $('input:radio[name=nyeri][value='+response.asper_nyeri+']')[0].checked = true
        $('input:radio[name=nyeri_durasi_waktu][value='+response.nyeri_durasi_waktu+']')[0].checked = true
        $("#pencetus-nyeri").val(response.nyeri_penyebab)
        $("#lokasi-penjalaran").val(response.nyeri_penyebab_b)
        $('input:radio[name=nyeri_skala_ukur][value='+response.nyeri_skala_ukur+']')[0].checked = true
        $("#FormAsper input[type='range']").val('0');
        $("#skala").val(response.nyeri_skala)
        $("#waktu-nyeri").val(response.nyeri_waktu)
        $('input:radio[name=asper_brjln_seimbang][value='+response.asper_brjln_seimbang+']')[0].checked = true
        $('input:radio[name=asper_altban_khusus][value='+response.asper_altban_duduk+']')[0].checked = true
        $('input:radio[name=asper_haus_berlebih][value='+response.asper_haus_berlebih+']')[0].checked = true
        $('input:radio[name=asper_mukosa_mulut][value='+response.asper_mukosa_mulut+']')[0].checked = true
        $('input:radio[name=turgor_kulit][value='+response.asper_turgor_kulit+']')[0].checked = true
        $('input:radio[name=asper_edema][value='+response.asper_edema+']')[0].checked = true
        $('input:radio[name=kekerasan][value='+response.asper_kondisi_umum_b+']')[0].checked = true
        $("#lainnya").val(response.asper_lain)
        
    },
    error: function(jqXHR, textStatus, errorThrown) {
        alert()
    }
});

var table_asper = $('#data-asper').DataTable( {
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
                            return '<a href="#view" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>&nbsp;View</a>'
                        }
                    },
                ],
                "order": [[1, 'desc']],
            } );

            $.ajax({
                url: "{{url('data/asesmen-dokter.json')}}",
                type: "get",
                data: {id:"pills-asdok"} ,
                success: function (response) {
                    $('input:radio[name=asdok_amnesis][value='+response.asdok_amnesis+']')[0].checked = true
                    $("#kel-utama").val(response.asdok_keluhan_utama)
                    $("#penyakit-sekarang").val(response.asdok_penyakit_sekarang)
                    $("#penyakit-dulu").val(response.asdok_penyakit_dahulu)
                    $('input:radio[name=asdok_pengobatan][value='+response.asdok_pengobatan+']')[0].checked = true
                    $("#penyakit-keluarga").val(response.asdok_penyakit_dlm_klrg)
                    $("#pemeriksaan-organ").val(response.asdok_periksa_multiorgan)
                    $("#diagnosis").val(response.asdok_diagnosis_medik)
                    $("#instruksi").val(response.asdok_instruksi_awal)
                    $("#kontrol").val(response.asdok_kontrol_ulang_tgl)
                    $('input:radio[name=asdok_kontrol_ulang][value='+response.asdok_kontrol_ulang+']')[0].checked = true
                    $("#masuk-ri").val(response.asdok_rawat_inap_tgl)
                    $('input:radio[name=asdok_rawat_inap][value='+response.asdok_rawat_inap+']')[0].checked = true
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert()
                }
            });

            var table_asdok = $('#data-asdok').DataTable( {
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
                            return '<a href="#pills-r-asdok" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>&nbsp;View</a>'
                        }
                    },
                ],
                "order": [[1, 'desc']],
            } );
            
        $('#FormAsper').prop('action');
        $('#kebutuhan-blank').hide();
        $('#nyeri-blank').hide();
        $('#nutrisi-blank').hide();
        $('#emosi-blank').hide();
        $('#diagnosa-blank').hide();

        $('#editAsses').click(function(e){
            const id = $(this).data('id');
            $('#FormAsper').prop('action');
            $('#assestitle').html('<i class="fa fa-user-edit"></i>Ubah Asesmen <small>Perawat Terakhir</small>');
            $('#_method').attr('name', '_method').val('patch');
        });

        $('#asdok textarea').attr('readonly', true);
        
        $("#asdok input[type='radio']").each(function(i) {
            jQuery(this).attr('disabled', 'disabled');
        });

        $("#asdok input[type='date']").each(function(i) {
            jQuery(this).attr('disabled', 'disabled');
        });

        $('#resetAsses').on('click', function(e){
            e.preventDefault();
            $('#kebutuhan-fill').hide();
            $('#nyeri-fill').hide();
            $('#nutrisi-fill').hide();
            $('#emosi-fill').hide();
            $('#diagnosa-fill').hide();

            $('#kebutuhan-blank').show();
            $('#nyeri-blank').show();
            $('#nutrisi-blank').show();
            $('#emosi-blank').show();
            $('#diagnosa-blank').show();

            $("#FormAsper input[type='text']").val('');
            $("#FormAsper textarea").val('');
            $("#FormAsper input[type='range']").val('0');
            $("#FormAsper #skala").val('0');
            $("#FormAsper input[type='radio']").attr('checked', false);
            $("#FormAsper input[type='checkbox']").attr('checked', false);
        });
        $.ajax({
            url: "{{url('data/asesmen-dokter.json')}}",
            type: "get",
            data: {id:"pills-r-asper"} ,
            success: function (response) {
            e.preventDefault();
            $('#kebutuhan-fill').hide();
            $('#nyeri-fill').hide();
            $('#nutrisi-fill').hide();
            $('#emosi-fill').hide();
            $('#diagnosa-fill').hide();

            $('#kebutuhan-blank').show();
            $('#nyeri-blank').show();
            $('#nutrisi-blank').show();
            $('#emosi-blank').show();
            $('#diagnosa-blank').show();

            $("#FormAsper input[type='text']").val('');
            $("#FormAsper textarea").val('');
            $("#FormAsper input[type='range']").val('0');
            $("#FormAsper #skala").val('0');
            $("#FormAsper input[type='radio']").attr('checked', false);
            $("#FormAsper input[type='checkbox']").attr('checked', false);
        });

        function outputUpdate(vol) {
            document.querySelector('#skala').value = vol;
        }
    </script>
@endsection