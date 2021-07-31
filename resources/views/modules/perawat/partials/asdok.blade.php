<div class="container card shadow d-flex justify-content-center">
    <!-- nav options -->
    <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" id="pills-asdok-tab" data-toggle="pill" href="#pills-asdok" role="tab" aria-controls="pills-asdok" aria-selected="true">Asesmen Dokter</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-r-asper-tab" data-toggle="pill" href="#pills-r-asper" role="tab" aria-controls="pills-r-asper" aria-selected="false">Riwayat Asesmen Perawat</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-r-asdok-tab" data-toggle="pill" href="#pills-r-asdok" role="tab" aria-controls="pills-r-asdok" aria-selected="false">Riwayat Asesmen Dokter</a> </li>
    </ul> <!-- content -->
    <div class="tab-content" id="pills-tabContent p-3">
        <!-- 1st card -->
        <div class="tab-pane fade show active" id="pills-asdok" role="tabpanel" aria-labelledby="pills-asdok-tab">
            <div class="px-3">
                <h5 class="d-flex justify-content-center">Asesmen Dokter Hari Ini | </h5>

                <div class="form-group">
                    <fieldset class="form-group">
                        <label for="exampleFormControlTextarea1">Anamnesis</label>
                        <div class="row">
                            <div class="col">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="ortu" name="asdok_amnesis" value="Orang tua" >
                                    <label class="custom-control-label" for="ortu" >Orang Tua</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="pasien" name="asdok_amnesis" value="Pasien" >
                                    <label class="custom-control-label" for="pasien">Pasien</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="lainnya" name="asdok_amnesis" value="Lainnya" >
                                    <label class="custom-control-label" for="lainnya">Lainnya</label>
                                </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <label for="kel-utama">Keluhan Utama</label>
                <textarea class="form-control"  id="kel-utama" rows="3" name="asdok_keluhan_utama"></textarea>
                </div>
                <div class="form-group">
                    <label for="penyakit-sekarang">Riwayat Penyakit Sekarang</label>
                    <textarea class="form-control" id="penyakit-sekarang" rows="3" name="asdok_penyakit_sekarang"></textarea>
                </div>
                <div class="form-group">
                    <label for="penyakit-dulu">Riwayat Penyakit Dahulu</label>
                    <textarea class="form-control" id="penyakit-dulu" rows="3" name="asdok_penyakit_dahulu"></textarea>
                </div>
                <fieldset class="form-group">
                    <label for="exampleFormControlTextarea1">Riwayat Pengobatan</label>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="p-ya" value="Ya" name="asdok_pengobatan" >
                                <label class="custom-control-label" for="p-ya">Ya</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="p_tidak" value="Tidak" name="asdok_pengobatan" >
                                <label class="custom-control-label" for="p_tidak">Tidak</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="penyakit-keluarga">Riwayat penyakit Dalam Keluarga</label>
                    <textarea class="form-control" id="penyakit-keluarga" rows="3" name="asdok_penyakit_dlm_klrg"></textarea>
                </div>
                <div class="form-group">
                    <label for="pemeriksaan-organ">Pemeriksaan Multi Organ</label>
                    <textarea class="form-control" id="pemeriksaan-organ" rows="3" name="asdok_periksa_multiorgan"></textarea>
                </div>
                <div class="form-group">
                    <label for="diagnosis">Daftra Masalah / Diagnosis Medik</label>
                    <textarea class="form-control" id="diagnosis" rows="3" name="asdok_diagnosis_medik"></textarea>
                </div>
                <div class="form-group">
                    <label for="instruksi">Instruksi Awal</label>
                    <textarea class="form-control" id="instruksi" rows="3" name="asdok_instruksi_awal"></textarea>
                </div>
                <fieldset class="form-group">
                    <label for="exampleFormControlTextarea1">Kontrol Ulang</label>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="kontrol-ya" value="Ya" name="asdok_kontrol_ulang" >
                                <label class="custom-control-label" for="kontrol-ya">Ya</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="kontrol_tidak" value="Tidak" name="asdok_kontrol_ulang" >
                                <label class="custom-control-label" for="kontrol_tidak">Tidak</label>
                            </div>
                    </div>
                </fieldset>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                    <input placeholder="Select date" type="date" id="kontrol" class="form-control" name="asdok_kontrol_ulang_tgl" value="">
                </div>
                <fieldset class="form-group">
                    <label for="exampleFormControlTextarea1">Masuk Rawat Inap</label>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="inap-ya" value="Ya" name="asdok_rawat_inap" >
                                <label class="custom-control-label" for="inap-ya">Ya</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="inap_tidak" value="Tidak" name="asdok_rawat_inap" >
                                <label class="custom-control-label" for="inap_tidak">Tidak</label>
                            </div>
                    </div>
                </fieldset>
                <div class="md-form md-outline input-with-post-icon datepicker" id="firstDisable">
                <input placeholder="Select date" type="date" id="masuk-ri" class="form-control" name="asdok_rawat_inap_tgl" value="">
                </div>
            </div>
        </div> 
        
        <!-- 2nd card -->
        <div class="tab-pane fade" id="pills-r-asper" role="tabpanel" aria-labelledby="pills-r-asper-tab">
            <div class="mx-2">
                <div class="table-responsive">
                    <table id="data-asper" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="" width="100%">
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
                    </table>
                </div>
            </div>
        </div> <!-- 3nd card -->
        <div class="tab-pane fade third" id="pills-r-asdok" role="tabpanel" aria-labelledby="pills-r-asdok-tab">
            <div class="table-responsive">
                <table id="data-asdok" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="" width="100%">
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
                </table>
            </div>
        </div>
    </div>
</div>
