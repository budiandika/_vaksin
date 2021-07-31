


<div class="container card shadow d-flex justify-content-center">
    <!-- nav options -->
    <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" id="pills-soapdok-tab" data-toggle="pill" href="#pills-soapdok" role="tab" aria-controls="pills-soapdok" aria-selected="true">SOAP Dokter</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-soaper-tab" data-toggle="pill" href="#pills-soaper" role="tab" aria-controls="pills-soaper" aria-selected="false">Riwayat SOAP Perawat</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-r-soapdok-tab" data-toggle="pill" href="#pills-r-soapdok" role="tab" aria-controls="pills-r-soapdok" aria-selected="false">Riwayat SOAP Dokter</a> </li>
    </ul> <!-- content -->
    <div class="tab-content" id="pills-tabContent p-3">
        <!-- 1st card -->
        <div class="tab-pane fade show active" id="pills-soapdok" role="tabpanel" aria-labelledby="pills-soapdok-tab">
            <div class="px-3">
                <div class="forms">
                    <h5 class="d-flex justify-content-center">SOAP Dokter Hari Ini | </h5>
                    <div class="form-group">
                        <label for="subjectt">SUBJECT</label> 
                    <textarea class="form-control" id="subjectt" rows="3" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="objectt">OBJECT</label>
                        <textarea class="form-control" id="objectt" rows="3" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="assesmen" >ASSESSESMENT</label>
                        <textarea class="form-control" id="assesmen" rows="3" readonly></textarea>
                    </div>
                    <table class="table table-bordered" border="0">
                        <tr>
                            <td colspan="3" valign="middle" align="center">
                                <h3 class="card-header1"><strong>PLANING</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>OBAT</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="obat" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>LAB</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="lab" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>RAD</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="rad" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>PA</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="pa" readonly class="form-control" cols="50" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Mata</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="mata" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Gigi</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="gigi" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Radioterapi</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="radioterapi" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Tind Poli</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="tind-poli" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Konsul</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="konsul" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Gizi</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="gizi" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  align="center" valign="middle"><font size="+1"><strong>Lainnya</strong></font>
                            <td colspan="2">
                                <textarea name="textarea5" id="lainnya" readonly class="form-control" cols="50" rows="3" readonly></textarea>
                            </td>
                        </tr>
                    </table>
                    {{-- @else
                        <div class="d-flex justify-content-center">Belum ada data SOAP dokter untuk hari ini !</div>
                    @endif --}}
                </div>
            </div>
        </div> 
        
        <!-- 2nd card -->
        <div class="tab-pane fade" id="pills-soaper" role="tabpanel" aria-labelledby="pills-soaper-tab">
            <div class="mx-2">
                <div class="table-responsive">
                    <table id="data-soaper" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="" width="100%">
                        <thead>
                            <tr>
                                <th scope="col-2">Tanggal Kunjungan</th>
                                <th scope="col-2">No Register</th>
                                <th scope="col-2">Nama Pasien</th>
                                <th scope="col">Poliklinik</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($soapall as $item)
                                <tr>
                                    <td>{{date('d M Y', strtotime($item->created_at)) }}</td>
                                    <td>{{$item->pasien->pasien_nama}}</td>
                                    <td>{{$item->pasien->dokter->poli->poli_nama}}</td>
                                    <td>{{$item->pasien->dokter->dokter_nama}}</td>
                                    <td>
                                        <a href="{{Route('soapper.view', $item->soaper_id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                        @if (auth()->user()->role_id == 3)
                                            <a href="{{Route('soapper.edit', $item->soaper_id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                        @else
                                            
                                        @endif
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
        
        <!-- 3nd card -->
        <div class="tab-pane fade third" id="pills-r-soapdok" role="tabpanel" aria-labelledby="pills-r-soapdok-tab">
            <div class="table-responsive">
                <table id="data-soapdok" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="" width="100%">
                    <thead>
                        <tr>
                            <th scope="col-2">Tanggal Kunjungan</th>
                            <th scope="col-2">No Register</th>
                            <th scope="col-2">Nama Pasien</th>
                            <th scope="col">Poliklinik</th>
                            <th scope="col">Dokter</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($soaps as $item)
                            <tr>
                                <td>{{date('d M Y', strtotime($item->created_at)) }}</td>
                                <td>{{$item->pasien->pasien_nama}}</td>
                                <td>{{$item->pasien->dokter->poli->poli_nama}}</td>
                                <td>{{$item->pasien->dokter->dokter_nama}}</td>
                                <td>
                                    <a href="{{Route('soapdok.view',$item->soapdok_id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

