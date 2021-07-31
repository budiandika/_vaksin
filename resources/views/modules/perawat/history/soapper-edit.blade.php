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
                                                <input type="text" class="form-control" value="{{$soapper->pasien->pasien_nomedrec}}" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Nama Pasien</label>
                                            <div class="input-group col-lg-12">
                                                <input type="text" class="form-control"  value="{{$soapper->pasien->pasien_nama}}" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Poli</label>
                                            <div class="input-group col-lg-12">
                                                <input type="text" class="form-control" value="{{$soapper->pasien->dokter->poli->poli_nama}}" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="x_title my-3">
                            <h2>&nbsp;<i class="fa fa-user-edit mr-1"></i>Riwayat SOAP Perawat |<small>{{date('d M Y', strtotime($soapper->created_at)) }}</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" id="FormSoapper" method="POST" action="{{route('historysoaper.update', $soapper->soaper_id)}}">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="pasien_id" value="{{$soapper->pasien_id}}">
                            <input type="hidden" value="{{$soapper->poli_id}}" name="poli_id">
                            <input type="hidden" name="dokter_id" value="{{$soapper->dokter_id}}">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">SUBJECT</label>
                            <textarea class="ckeditor" id="exampleFormControlTextarea1" name="soaper_subject" rows="3">{{$soapper->soaper_subject}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">OBJECT</label>
                                <textarea class="ckeditor" id="exampleFormControlTextarea1" name="soaper_object" rows="3">{{$soapper->soaper_object}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ASSESSESMENT</label>
                                <textarea class="ckeditor" id="exampleFormControlTextarea1" name="soaper_assesment" rows="3">{{$soapper->soaper_assesment}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">PLANNING</label>
                                <textarea class="ckeditor" id="exampleFormControlTextarea1" name="soaper_planning" rows="3">{{$soapper->soaper_planning}}</textarea>
                            </div>
                            <div style="text-align:right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        // $('#FormSoapper').prop('action', '{{route('asper.store')}}');

        // $('#FormSoapper textarea').attr('readonly', true);
        
        // $("#FormSoapper input[type='radio']").each(function(i) {
        //     jQuery(this).attr('disabled', 'disabled');
        // });

        // $("#FormSoapper input[type='date']").each(function(i) {
        //     jQuery(this).attr('disabled', 'disabled');
        // });
    </script>
@endsection