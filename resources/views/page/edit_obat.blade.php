<x-template :title="'Edit | Website'">
    @section('navigation',"Edit Obat")
    @section('content')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-12 col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formulir Edit Obat</h3>
                            </div>
                            <div class="card-body">
                                <form action="/edit_obat/{{$data->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Obat:</label>
                                        <input type="text"
                                            class="form-control "
                                            name="edit_nama_obat" value="{{$data->nama_obat}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Diproduksi :</label>
                                        <input type="text"
                                            class="form-control"
                                            name="edit_diproduksi" value="{{$data->dibuat}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan:</label>
                                        <input name="edit_tgl_pembuatan" type="date" class="form-control " value="{{ date('Y-m-d',strtotime($data->tgl_pembuatan)) }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kadaluarsa:</label>
                                        <input name="edit_tgl_kadaluarsa" type="date" class="form-control " value="{{ date('Y-m-d',strtotime($data->tgl_kadaluarsa)) }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Dibuat oleh user :</label>
                                        <input type="text" class="form-control " readonly name="edit_created_user" value="{{auth()->user()->name}}" />
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('/image_obat/'.$data->image) }}"
                                        style="height: 100px; width: 150px;"alt=""><br>
                                        <label for="">Masukkan Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <input type="hidden" class="form-control" id="image1" name="image1" value="{{$data->image}} ">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Edit Obat</button>
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
