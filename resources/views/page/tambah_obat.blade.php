<x-template :title="'Tambah | Website'">
    @section('navigation',"Tambah Obat")
    @section('content')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-12 col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formulir Tambah Obat</h3>
                            </div>
                            <div class="card-body">
                                <form action="/tambah_obat" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Obat:</label>
                                        <input type="text"
                                            class="form-control 
                                            @error('nama_obat')
                                                is-invalid
                                            @enderror"
                                            name="nama_obat" value="{{ old('nama_obat') }}" />
                                        @error('nama_obat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Diproduksi :</label>
                                        <input type="text"
                                            class="form-control 
                                            @error('diproduksi')
                                                is-invalid
                                            @enderror"
                                            name="diproduksi" value="{{ old('diproduksi') }}" />
                                        @error('diproduksi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan:</label>
                                        <div class="input-group date" id="reservationdateproduk" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input
                                            @error('tgl_pembuatan')
                                                is-invalid
                                            @enderror"
                                                data-target="#reservationdateproduk" name="tgl_pembuatan" value="{{ old('tgl_pembuatan') }}"/>
                                            <div class="input-group-append" data-target="#reservationdateproduk"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            @error('tgl_pembuatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kadaluarsa:</label>
                                        <div class="input-group date" id="reservationdatekadaluarsa" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input
                                            @error('tgl_kadaluarsa')
                                                is-invalid
                                            @enderror"
                                                data-target="#reservationdatekadaluarsa" name="tgl_kadaluarsa" value="{{ old('tgl_kadaluarsa') }}"/>
                                            <div class="input-group-append" data-target="#reservationdatekadaluarsa"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            @error('tgl_kadaluarsa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Dibuat oleh user :</label>
                                        <input type="text" readonly class="form-control " name="created_user" value="{{auth()->user()->name}} " />
                                    </div>
                                    <div class="form-group">
                                    <label for="">Masukkan Gambar</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Tambah Obat</button>
                                    </div>
                                </form>

                            </div>
                            <div class="card-footer">
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection

</x-template>
