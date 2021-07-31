@extends('template')

@section('styles')
    
@endsection
@section('content')
<div class="x_content">
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card-header"> <h3 class=" fas fa-user">&nbsp; Riwayat SOAP Perawat</h3></div>
            <div class="x_panel">
            <div class="x_title"><br>
                    <div class="table-responsive">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal Kunjungan</th>
                                <th scope="col">No Register</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soapper as $item)
                                <tr>
                                    <td>{{date('d M Y', strtotime($item->pasien->created_at)) }}</td>
                                    <td>{{$item->pasien->pasien_noird}}</td>
                                    <td>{{$item->pasien->pasien_nama}}</td>
                                    <td>{{$item->pasien->dokter->poli->poli_nama}}</td>
                                    <td>{{$item->pasien->dokter->dokter_nama}}</td>
                                    <td>
                                        <a href="{{route('soapper.view', $item->soaper_id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>&nbsp;View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection