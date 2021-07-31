@extends('template')

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.common.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/lib/dxgrid/dx.light.compact.css" />
    <link type="text/css" href="{{ asset('assets') }}/lib/dxgrid/style.css" rel="stylesheet">
@endsection 

@section('content')
<div class="row">
    <div class="col">
        <div class="x_content">
            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card-header"> <h3 class=" fas fa-user">&nbsp; List Data Pasien</h3></div>
                        <div class="x_panel">
                            <div class="x_title"><br>
                                <div class="table-responsive">
                                    <table id="data" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No Register</th>
                                                <th scope="col">No Medrec</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Nama Poli</th>
                                                <th scope="col">Nama Dokter</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($pasien as $item)
                                                <tr>
                                                <td>{{$item->pasien_nomedrec}}</td>
                                                <td>{{$item->pasien_noird}}</td>
                                                <td>{{$item->pasien_nama}}</td>
                                                <td>{{$item->pasien_tgl_lahir}}</td>
                                                <td>{{$item->pasien_jk}}</td>
                                                <td>{{$item->dokter->poli->poli_nama}}</td>
                                                <td>{{$item->dokter->dokter_nama}}</td>
                                                <td>{{$item->pasien_status}}</td>
                                                    <td>
                                                        <a href="{{route('nurses.asses', $item->pasien_id)}}" class="btn btn-primary btn-sm"><i class="fas fa-file-medical"></i>&nbsp;Proses</a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var table = $('#data').DataTable( {
                "processing": true,
                "serverSide": false,
                "scrollX": true,
                "pageLength": 100,
                "ajax": {
                    "url": "{{url('data/pasien.json')}}",
                    "type": "GET",
                    "dataSrc":""
                },
                "columns":[
                    { "data": "pasien_noird" },
                    { "data": "pasien_nomedrec"},
                    { "data": "pasien_nama" },
                    { "data": "pasien_tgl_lahir" },
                    { "data": "pasien_jk" },
                    { "data": "poli_nama" },
                    { "data": "dokter_nama" },
                    { "data": "pasien_status" },
                    {
                        "ordertable":false,
                        "className":"text-center",
                        "render": function ( data, type, full, meta ) {
                            return '<a href="perawat/asesmen" class="btn btn-primary btn-sm"><i class="fas fa-file-medical"></i>&nbsp;Proses</a>'
                        }
                    },
                ],
                "order": [[1, 'desc']],
            } );
    </script>
@endsection 

