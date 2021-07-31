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
                                                <input type="text" class="form-control" value="{{$asper->pasien->pasien_nomedrec}}" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Nama Pasien</label>
                                            <div class="input-group col-lg-12">
                                                <input type="text" class="form-control"  value="{{$asper->pasien->pasien_nama}}" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col col-form-label">Poli</label>
                                            <div class="input-group col-lg-12">
                                                <input type="text" class="form-control" value="{{$asper->pasien->dokter->poli->poli_nama}}" readonly>
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
                            <h2>&nbsp;<i class="fa fa-user-edit"></i>Ubah Riwayat Asesmen Perawat |<small>{{date('d M Y', strtotime($asper->created_at)) }}</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('historyasper.update', $asper->asper_id)}}" id="FormAsper" method="POST">
                            @csrf
                            @method('patch')
                            <input type="hidden" value="{{$asper->dokter_id}}" name="dokter_id">
                            <input type="hidden" value="{{$asper->pasien_id}}" name="pasien_id">
                            <input type="hidden" value="{{$asper->dokter->poli_id}}" name="poli_id">
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Kesadaran</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="compos" value="Compos Mentis" name="asper_kesadaran" {{ $asper->asper_kesadaran == 'Compos Mentis' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="compos">Compos Mentis</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="somnolen" value="Somnolen" name="asper_kesadaran" {{ $asper->asper_kesadaran == 'Somnolen' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="somnolen">Somnolen</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="koma" value="Koma" name="asper_kesadaran" {{ $asper->asper_kesadaran == 'Koma' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="koma">Koma</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="derilium" value="Derilium" name="asper_kesadaran" {{ $asper->asper_kesadaran == 'Derilium' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="derilium">Derilium</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="sopor" value="Sopor" name="asper_kesadaran" {{ $asper->asper_kesadaran == 'Sopor' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="sopor">Sopor</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Kondisi Umum</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="baik" value="Baik" name="asper_kondisi_umum" {{ $asper->asper_kondisi_umum == 'Baik' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="baik">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="sesak" value="Sesak" name="asper_kondisi_umum" {{ $asper->asper_kondisi_umum == 'Sesak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="sesak">Sesak</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="lemah" value="Lemah" name="asper_kondisi_umum" {{ $asper->asper_kondisi_umum == 'Lemah' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="lemah">Lemah</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="tampak_sakit" value="Tampak Sakit" name="asper_kondisi_umum" {{ $asper->asper_kondisi_umum == 'Tampak Sakit' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="tampak_sakit">Tampak Sakit</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="pucat" value="Pucat" name="asper_kondisi_umum" {{ $asper->asper_kondisi_umum == 'Pucat' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="pucat">Pucat</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tekanan Darah</label>
                                    <div class="input-group col-sm-9">
                                    <input type="text" class="form-control" name="asper_tekanan_darah" value="{{$asper->asper_tekanan_darah}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">mmHg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nadi</label>
                                    <div class="input-group col-sm-9">
                                        <input type="text" class="form-control" name="asper_nadi" value="{{$asper->asper_nadi}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">X/Menit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Suhu</label>
                                    <div class="input-group col-sm-9">
                                        <input type="text" class="form-control" name="asper_suhu" value="{{$asper->asper_suhu}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Derajat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pernapasan</label>
                                    <div class="input-group col-sm-9">
                                        <input type="text" class="form-control" name="asper_pernapasan" value="{{$asper->asper_pernapasan}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">X/Menit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                    <div class="input-group col-sm-9">
                                        <input type="text" class="form-control" name="asper_tinggi_bdn" value="{{$asper->asper_tinggi_bdn}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Cm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                                    <div class="input-group col-sm-9">
                                        <input type="text" class="form-control" name="asper_berat_bdn" value="{{$asper->asper_berat_bdn}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Kebutuhan Khusus</legend>
                                    <div class="col-sm-10">
                                        <div id="kebutuhan-fill">
                                            @foreach ($asper->asper_kbthn_khusus as $item)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="{{$item}}" value="{{$item}}" name="asper_kbthn_khusus[]" {{ $item == $item ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="kebutuhan-blank">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="tidak_ada" value="Tidak Ada" name="asper_kbthn_khusus[]">
                                                <label class="custom-control-label" for="tidak_ada">Tidak Ada</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="kaca_mata" value="Kaca Mata" name="asper_kbthn_khusus[]">
                                                <label class="custom-control-label" for="kaca_mata">Kaca Mata</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="gigi_palsu" value="Gigi Palsu" name="asper_kbthn_khusus[]">
                                                <label class="custom-control-label" for="gigi_palsu">Gigi Palsu</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="alat_dengar" value="Alat Bantu Dengar" name="asper_kbthn_khusus[]">
                                                <label class="custom-control-label" for="alat_dengar">Alat Bantu Dengar</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="tongkat" value="Tongkat" name="asper_kbthn_khusus[]">
                                                <label class="custom-control-label" for="tongkat">Tongkat</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Apakah Nyeri</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="nyeri_ya" value="Ya" name="nyeri" {{ $asper->nyeri->nyeri == 'Ya' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="nyeri_ya">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="nyeri_tidak" value="Tidak"  name="nyeri" {{ $asper->nyeri->nyeri == 'Tidak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="nyeri_tidak">Tidak</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Durasi Waktu</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="akut" value="Akut" name="nyeri_durasi_waktu" {{ $asper->nyeri->nyeri_durasi_waktu == 'Akut' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="akut" >Akut</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="kronik" value="Kronik" name="nyeri_durasi_waktu" {{ $asper->nyeri->nyeri_durasi_waktu == 'Kronik' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="kronik">Kronik</label>
                                        </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-2 col-form-label">Pencetus Nyeri</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nyeri_penyebab" value="{{$asper->nyeri->nyeri_penyebab}}">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Deskripsi Nyeri</legend>
                                    <div class="col-sm-10">
                                        <div id="nyeri-fill">
                                            @foreach ($asper->nyeri->nyeri_deskripsi as $item)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="{{$item}}" value="{{$item}}" name="nyeri_deskripsi[]" {{ $item == $item ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                                                </div> 
                                            @endforeach
                                        </div>
                                        <div id="nyeri-blank">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="nyeri" value="ditekan" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="nyeri">Ditekan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="tajam" value="tajam" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="tajam">Tajam</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="disayat" value="disayat" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="disayat">Disayat</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="tumpul" value="tumpul" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="tumpul">Nyeri Tumpul</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="perih" value="perih" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="perih">Perih</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="ngilu" value="ngilu" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="ngilu">Ngilu</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="panas" value="panas" name="nyeri_deskripsi[]">
                                                <label class="custom-control-label" for="panas">Rasa Panas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-2 col-form-label">Pencetus Nyeri</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nyeri_penyebab_b" value="{{$asper->nyeri->nyeri_penyebab_b}}">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Skala Ukur</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="nips" value="nips" name="nyeri_skala_ukur" {{ $asper->nyeri->nyeri_skala_ukur == 'nips' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="nips">Nips</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="flacc" value="flacc" name="nyeri_skala_ukur" {{ $asper->nyeri->nyeri_skala_ukur == 'flacc' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="flacc">Flacc</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="cpot" value="cpot" name="nyeri_skala_ukur" {{ $asper->nyeri->nyeri_skala_ukur == 'cpot' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="cpot">Cpot</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="nrs" value="nrs" name="nyeri_skala_ukur" {{ $asper->nyeri->nyeri_skala_ukur == 'nrs' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="nrs">Nrs</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Skala Nyeri</legend>
                                    <div class="col-sm-10">
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/1.jpg')}}" width="50px">
                                        </label>
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/2.jpg')}}" width="50px">
                                        </label>
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/3.jpg')}}" width="50px">
                                        </label>
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/4.jpg')}}" width="50px">
                                        </label>
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/5.jpg')}}" width="50px">
                                        </label>
                                        <label>
                                            {{-- <input type="radio" class="custom-control-input" id="no" value="no" name="nyeri_skala"> --}}
                                            <img src="{{asset('assets/images/6.jpg')}}" width="50px">
                                        </label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="range-wrap">
                                                    <input type="range" class="range" name="nyeri_skala" min="0" max="10" value="{{$asper->nyeri->nyeri_skala}}" id="fader" 
                                                    step="1" oninput="outputUpdate(value)">
                                                    <br>
                                                    <output class="bubble" for="fader" id="skala" value="">{{$asper->nyeri->nyeri_skala}}</output>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-2 col-form-label">Waktu Nyeri</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nyeri_waktu" value="{{$asper->nyeri->nyeri_waktu}}">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Berjalan Seimbang</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="berjalan_ya" value="Ya" name="asper_brjln_seimbang" {{ $asper->asper_brjln_seimbang == 'Ya' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="berjalan_ya">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="berjalan_tidak" value="Tidak" name="asper_brjln_seimbang" {{ $asper->asper_brjln_seimbang == 'Tidak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="berjalan_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Alat Bantu Duduk</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="alat_ya" value="Ya" name="asper_altban_khusus" {{ $asper->asper_altban_duduk== 'Ya' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="alat_ya">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="alat_tidak" value="Tidak" name="asper_altban_khusus" {{ $asper->asper_altban_duduk == 'Tidak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="alat_tidak">Tidak</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Keluhan Nutrisi</legend>
                                    <div class="col-sm-10">
                                        <div id="nutrisi-fill">
                                            @foreach ($asper->asper_keluhan_nutrisi as $item)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="{{$item}}" value="{{$item}}" name="asper_keluhan_nutrisi[]" {{ $item == $item ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="nutrisi-blank">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="mengunyah" value="mengunyah" name="asper_keluhan_nutrisi[]">
                                                <label class="custom-control-label" for="mengunyah">Gangguan Mengunyah</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="mual" value="mual" name="asper_keluhan_nutrisi[]">
                                                <label class="custom-control-label" for="mual">Mual Muntah</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="menelan" value="menelan" name="asper_keluhan_nutrisi[]">
                                                <label class="custom-control-label" for="menelan">Gangguan Menelan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Rasa Haus Berlebihan</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="haus_ya" value="Ya" name="asper_haus_berlebih" {{ $asper->asper_haus_berlebih == 'Ya' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="haus_ya">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="haus_tidak" value="Tidak" name="asper_haus_berlebih" {{ $asper->asper_haus_berlebih == 'Tidak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="haus_tidak">Tidak</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Mukosa Mulut</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="kering" value="kering" name="asper_mukosa_mulut" {{ $asper->asper_mukosa_mulut == 'kering' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="kering">Kering</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="lembab" value="lembab" name="asper_mukosa_mulut" {{ $asper->asper_mukosa_mulut == 'lembab' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="lembab">Lembab</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Turgor Kulit</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="elastis" value="elastis" name="asper_turgor_kulit" {{ $asper->asper_turgor_kulit == 'elastis' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="elastis">Elastis</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="tidak_elastis" value="tidak elastis" name="asper_turgor_kulit" {{ $asper->asper_turgor_kulit == 'tidak elastis' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="tidak_elastis">Tidak Elastis</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Edema</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="edema_ya" value="Ya" name="asper_edema" {{ $asper->asper_edema == 'Ya' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="edema_ya">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="edema_tidak" value="Tidak" name="asper_edema" {{ $asper->asper_edema == 'Tidak' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="edema_tidak">Tidak</label>
                                        </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Status Emosional</legend>
                                    <div class="col-sm-10">
                                        <div id="emosi-fill">
                                            @foreach ($asper->asper_status_emosi as $item)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="{{$item}}" value="{{$item}}" name="asper_status_emosi[]" {{ $item == $item ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="emosi-blank">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="emosi" value="stabil" name="asper_status_emosi[]">
                                                <label class="custom-control-label" for="emosi">Stabil</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="cemas" value="cemas" name="asper_status_emosi[]">
                                                <label class="custom-control-label" for="cemas">Cemas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="marah" value="marah" name="asper_status_emosi[]">
                                                <label class="custom-control-label" for="marah">Marah</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="takut" value="takut" name="asper_status_emosi[]">
                                                <label class="custom-control-label" for="takut">Takut</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Kondisi Umum</legend>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="kdrt" value="Psikologis KDRT" name="asper_kondisi_umum_b" {{ $asper->asper_kondisi_umum_b == 'Psikologis KDRT' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="kdrt">Psikologis KDRT</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="aniaya" value="Aniaya Seksual" name="asper_kondisi_umum_b" {{ $asper->asper_kondisi_umum_b == 'Aniaya Seksual' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="aniaya">Aniaya Seksual</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Diagnosa Keperawatan</legend>
                                    <div class="col-sm-10">
                                        <div id="diagnosa-fill">
                                            @foreach ($asper->asper_diagnosa_kprwtn as $item)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="{{$item}}" value="{{$item}}" name="asper_diagnosa_kprwtn[]" {{ $item == $item ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="diagnosa-blank">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="jalan_nafas" value="Jalan Nafas Tidak Efektif" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="jalan_nafas">Jalan Nafas Tidak efektif</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="pola_nafas" value="Pola Nafas Tidak Efektif" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="pola_nafas">Pola Nafas Tidak Efektif </label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="nutrisi_seimbang" value="Ketidakseimbangan Nutrisi" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="nutrisi_seimbang">Ketidakseimbangan Nutrisi </label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="kerusakan_kulit" value="Kerusakan Integritas Kulit" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="kerusakan_kulit">Kerusakan Integritas Kulit </label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="nyeri_akut" value="Nyeri Akut" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="nyeri_akut">Nyeri Akut</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="nyeri_kronik" value="Nyeri Kronik" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="nyeri_kronik">Nyeri Kronik</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="diare" value="Diare" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="diare">Diare</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="konstipasi" value="Konstipasi" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="konstipasi">Konstipasi </label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="urine" value="Retensi Urine" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="urine">Retensi Urine </label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="kecemasan" value="Kecemasan" name="asper_diagnosa_kprwtn[]">
                                                <label class="custom-control-label" for="kecemasan">Kecemasan </label>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Lainnya</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="asper_lain" value="{{$asper->asper_lain}}">
                                    </div>
                                </div> <br>
                                <div style="text-align:right">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </fieldset> 
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
        // $('#FormAsper').prop('action', '{{route('asper.store')}}');
        // $('#FormAsper input').attr('readonly', true);
        // $("#FormAsper input[type='checkbox']").attr('disabled', true);
        // $("#FormAsper input[type='range']").attr('disabled', true);
        // $("#FormAsper input[type='radio']").attr('disabled', true);
        // $('#FormAsper textarea').attr('readonly', true);
        $('#kebutuhan-blank').hide();
        $('#nyeri-blank').hide();
        $('#nutrisi-blank').hide();
        $('#emosi-blank').hide();
        $('#diagnosa-blank').hide();

        // $('#asdok textarea').attr('readonly', true);
        
        // $("#asdok input[type='radio']").each(function(i) {
        //     jQuery(this).attr('disabled', 'disabled');
        // });

        // $("#asdok input[type='date']").each(function(i) {
        //     jQuery(this).attr('disabled', 'disabled');
        // });
    </script>
@endsection