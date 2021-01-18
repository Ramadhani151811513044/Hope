@extends('index')
    @section('extraheader')
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <li><a href="#">Tabel Aktor</a></li>
                <li><a href="#">Petani</a></li>
                <li><a href="#">Tambah Petani</a></li>
            </ol>
        </div>
    @endsection
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Petani</div>
                            <div class="card-body card-block">
                                <label for="" style="color:grey">Field dengan tanda * harus diisi</label>
                                <form action="{{url('/tabelpetani')}}" method="post">
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nama Lengkap (Sesuai KTP)*</label>
                                                <input type="text" class="form-control" name="NAMA_PETANI"
                                                    placeholder="" required>

                                                    <!-- /.inputan nama -->
                                            </div>

                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nama Perusahaan*</label>
                                                <input type="text" class="form-control" name="NAMA_PERUSAHAAN"
                                                    placeholder="" required>
                                                
                                            </div>    
                                                <!-- /.inputan nama perusahaan-->
                                        </div>
                                    </div>            

                                <div class="row form-group">
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Email*</label>
                                                <input type="email" class="form-control" name="EMAIL_PETANI"
                                                    placeholder="" required>
                                                <!-- /.inputan nama email-->
                                    </div>

                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1">No. Handphone*</label>
                                                <input type="text" class="form-control" name="NOHP_PETANI"
                                                    placeholder="" required>
                                                <!-- /.inputan NOHP-->
                                    </div>
                                </div>               

                                    <div class="form-group">
                                                <label for="exampleFormControlInput1">Alamat*</label>
                                                <input type="text" class="form-control" name="ALAMAT_PETANI"
                                                    placeholder="" required>
                                    </div>
                                        
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <!-- <label for="">Provinsi</label> -->
                                                <select class="form-control select-component select-provinsi" id="" name="provinsi" required>
                                                    <option>Pilih Provinsi ...</option>
                                                    @foreach ($provinsi as $key => $name)
                                                    <option value="{{ $key }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>   
                                        
                                            <div class="col-md-6">
                                                <!-- <label for="namakota">Nama Kota</label> -->
                                                <select class="form-control select-component select-kota" id="kota" name="kota" required>
                                                    <option>Pilih Kota ...</option>
                                                </select>
                                            </div>
                                        </div>    

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <!-- <label for="namakecamatan">Nama Kecamatan</label> -->
                                                <select class="form-control select select-kecamatan" id="kecamatan" name="kecamatan" required>
                                                    <option>Pilih Kecamatan ...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <label for="namakelurahan">Nama Kelurahan</label> -->
                                                <select class="form-control select select-kelurahan" id="kelurahan" name="kelurahan" required>
                                                    <option>Pilih Kelurahan ...</option>
                                                </select>
                                            </div>
                                        </div>

                                    <div class="form-actions form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </div>
@section('script')
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{asset('assets/js/customer-select.js')}}"></script>
@endsection
@endsection