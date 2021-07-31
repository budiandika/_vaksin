@extends('templates.layout')

@section('styles')
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class=" col-xs-12">
                    <div class="x_content">
                        <div class="card">
                            <h2>&nbsp;&nbsp;<i class="fa fa-user-md"></i> Data Pasien </h2>
                            <form>
                            <div class="row">
                                <div class="card-d">
                                <div class="col">
                                    <label>No Medical Record</label>
                                <input type="text" class="form-control"  placeholder="2134300309">
                                </div>
                                </div>
                                <div class="card-d">
                                <div class="col">
                                    <label>Nama Pasien</label>
                                    <input type="text" class="form-control" placeholder="ferdi">
                                </div>
                                </div>
                                <div class="card-d">
                                <div class="col">
                                    <label>Nama Poli</label>
                                    <input type="text" class="form-control" placeholder="Mata">
                                </div>
                                </div>
                            </div>
                            </form>
                            <div class="card-header"> 
                                <ul class="nav nav-tabs card-header-tabs">
                                    <div align="center" valign="middle">
                                        <a href="{{route('nurses.data')}}"><button class="btn btn-sm btn-warning">Riwayat Perawat</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('doctor.data')}}"><button class="btn btn-sm btn-warning">Riwayat Dokter</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('lab.data')}}"><button class="btn btn-sm btn-warning">Riwayat Laboraturium</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('rad.data')}}"><button class="btn btn-sm btn-warning">Riwayat Radiologi</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('PA.data')}}"><button class="btn btn-sm btn-warning">Riwayat Patologi Anatomi</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('far.data')}}"><button class="btn btn-sm btn-warning">Riwayat Farmasi</button></a>
                                    </div>
                                    <div align="center" valign="middle">
                                        <a href="{{route('tindakan.data')}}"><button class="btn btn-sm btn-warning">Riwayat Tindakan</button></a>
                                    </div> 
                                </ul><br>
                                </div>
                            </div>
                            <div class="card-deck">
                                <div class="card">
                                    <div class="x_title">
                                        <h2>&nbsp;<i class="fa fa-user-edit"></i> Asesmen <small>Perawat</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Kesadaran</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="compos" name="kesadaran">
                                                        <label class="custom-control-label" for="compos">Compos Mentis</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="somnolen" name="kesadaran">
                                                        <label class="custom-control-label" for="somnolen">Somnolen</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="koma" name="kesadaran">
                                                        <label class="custom-control-label" for="koma">Koma</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="derilium" name="kesadaran">
                                                        <label class="custom-control-label" for="derilium">Derilium</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="sopor" name="kesadaran">
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
                                                        <input type="radio" class="custom-control-input" id="baik" name="kondisi_umum">
                                                        <label class="custom-control-label" for="baik">Baik</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="sesak" name="kondisi_umum">
                                                        <label class="custom-control-label" for="sesak">Sesak</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="lemah" name="kondisi_umum">
                                                        <label class="custom-control-label" for="lemah">Lemah</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tampak_sakit" name="kondisi_umum">
                                                        <label class="custom-control-label" for="tampak_sakit">Tampak Sakit</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="pucat" name="kondisi_umum">
                                                        <label class="custom-control-label" for="pucat">Pucat</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tekanan Darah</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nadi</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">X/Menit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Suhu</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">Derajat</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Pernapasan</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">X/Menit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">Cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="email" class="form-control" id="inputEmail3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">Kg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Kebutuhan Khusus</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tidak_ada" name="kebutuhan_khusus">
                                                        <label class="custom-control-label" for="tidak_ada">Tidak Ada</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kaca_mata" name="kebutuhan_khusus">
                                                        <label class="custom-control-label" for="kaca_mata">Kaca Mata</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="gigi_palsu" name="kebutuhan_khusus">
                                                        <label class="custom-control-label" for="gigi_palsu">Gigi Palsu</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="alat_dengar" name="kebutuhan_khusus">
                                                        <label class="custom-control-label" for="alat_dengar">Alat Bantu Dengar</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tongkat" name="kebutuhan_khusus">
                                                        <label class="custom-control-label" for="tongkat">Tongkat</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Apakah Nyeri</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="ya" name="nyeri">
                                                        <label class="custom-control-label" for="ya">Ya</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tidak" name="nyeri">
                                                        <label class="custom-control-label" for="tidak">Tidak</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Durasi Waktu</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="akut" name="durasi_waktu">
                                                        <label class="custom-control-label" for="akut">Akut</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kronik" name="durasi_waktu">
                                                        <label class="custom-control-label" for="kronik">Kronik</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pencetus Nyeri</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Deskripsi Nyeri</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="ditekan" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="ditekan">Ditekan</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tajam" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="tajam">Tajam</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="disayat" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="disayat">Disayat</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tumpul" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="tumpul">Nyeri Tumpul</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="perih" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="perih">Perih</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="ngilu" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="ngilu">Ngilu</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="panas" name="deskripsi_nyeri">
                                                        <label class="custom-control-label" for="panas">Rasa Panas</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pencetus Nyeri</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Skala Ukur</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="nips" name="skala_ukur">
                                                        <label class="custom-control-label" for="nips">Nips</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="flacc" name="skala_ukur">
                                                        <label class="custom-control-label" for="flacc">Flacc</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="cpot" name="skala_ukur">
                                                        <label class="custom-control-label" for="cpot">Cpot</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="nrs" name="skala_ukur">
                                                        <label class="custom-control-label" for="nrs">Nrs</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Skala Nyeri</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Nyeri</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Berjalan Seimbang</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="berjalan_ya" name="berjalan">
                                                        <label class="custom-control-label" for="berjalan_ya">Ya</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="berjalan_tidak" name="berjalan">
                                                        <label class="custom-control-label" for="berjalan_tidak">Tidak</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Alat Bantu Duduk</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="alat_ya" name="duduk">
                                                        <label class="custom-control-label" for="alat_ya">Ya</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="alat_tidak" name="duduk">
                                                        <label class="custom-control-label" for="alat_tidak">Tidak</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Keluhan Nutrisi</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="mengunyah" name="keluhan_nutrisi">
                                                        <label class="custom-control-label" for="mengunyah">Gangguan Mengunyah</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="mual" name="keluhan_nutrisi">
                                                        <label class="custom-control-label" for="mual">Mual Muntah</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="menelan" name="keluhan_nutrisi">
                                                        <label class="custom-control-label" for="menelan">Gangguan Menelan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Rasa Haus Berlebihan</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="haus_ya" name="rasa_haus">
                                                        <label class="custom-control-label" for="haus_ya">Ya</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="haus_tidak" name="rasa_haus">
                                                        <label class="custom-control-label" for="haus_tidak">Tidak</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Mukosa Mulut</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kering" name="mukosa_mulut">
                                                        <label class="custom-control-label" for="kering">Kering</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="lembab" name="mukosa_mulut">
                                                        <label class="custom-control-label" for="lembab">Lembab</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Turgor Kulit</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="elastis" name="turgor_kulit">
                                                        <label class="custom-control-label" for="elastis">Elastis</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="tidak_elastis" name="turgor_kulit">
                                                        <label class="custom-control-label" for="tidak_elastis">Tidak Elastis</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Edema</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="edema_ya" name="edema">
                                                        <label class="custom-control-label" for="edema_ya">Ya</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="edema_tidak" name="edema">
                                                        <label class="custom-control-label" for="edema_tidak">Tidak</label>
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Status Emosional</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="stabil" name="status_emosional">
                                                        <label class="custom-control-label" for="stabil">Stabil</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="cemas" name="status_emosional">
                                                        <label class="custom-control-label" for="cemas">Cemas</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="marah" name="status_emosional">
                                                        <label class="custom-control-label" for="marah">Marah</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="takut" name="status_emosional">
                                                        <label class="custom-control-label" for="takut">Takut</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Kondisi Umum</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kdrt" name="kondisi_umum">
                                                        <label class="custom-control-label" for="kdrt">Psikologis KDRT</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="aniaya" name="kondisi_umum">
                                                        <label class="custom-control-label" for="aniaya">Aniaya Seksual</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Diagnosa Keperawatan</legend>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="jalan_nafas" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="jalan_nafas">Jalan Nafas Tidak efektif</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="pola_nafas" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="pola_nafas">Pola Nafas Tidak Efektif </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="nutrisi_seimbang" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="nutrisi_seimbang">Ketidakseimbangan Nutrisi </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kerusakan_kulit" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="kerusakan_kulit">Kerusakan Integritas Kulit </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="nyeri_akut" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="nyeri_akut">Nyeri Akut</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="nyeri_kronik" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="nyeri_kronik">Nyeri Kronik</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="diare" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="diare">Diare</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="konstipasi" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="konstipasi">Konstipasi </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="urine" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="urine">Retensi Urine </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="kecemasan" name="diagnosa_keperawatan">
                                                        <label class="custom-control-label" for="kecemasan">Kecemasan </label>
                                                    </div>
                                                </div>
                                            </div><br>
                                        </fieldset>
                                    </form>
                                </div>
                                </div>

                                <!-- Card Right -->
                                <div class="card1">
                                <div class="card">
                                    <div class="x_title">
                                        <h2>&nbsp;<i class="fa fa-user-edit"></i> Soap <small>Perawat</small></h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">SUBJECT</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">OBJECT</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">ASSESSESMENT</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">PLANNING</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
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