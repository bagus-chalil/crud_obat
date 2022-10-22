<x-template :title="'List | Website'">
    @section('navigation',"Data Obat")

    @section('content')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Obat</th>
                                        <th>Diproduksi</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Kadaluarsa</th>
                                        <th>Created By</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; ?>
                                  @foreach ($obat as $d)  
                                      <tr>
                                        <td>{{$i++}} </td>
                                        <td>{{$d->nama_obat}} </td>
                                        <td>{{$d->dibuat}} </td>
                                        <td>{{$d->tgl_pembuatan}}</td>
                                        <td>{{$d->tgl_kadaluarsa}}</td>
                                        <td>{{$d->created_by}}</td>
                                        <td>
                                            <img src="{{ asset('/image_obat/'.$d->image) }}"
                                            style="height: 100px; width: 150px;">
                                        </td>
                                        <td class="text-center">
                                          <a href="/edit_obat/{{$d->id}} " type="button" class="btn btn-primary">Update</a>
                                          <a type="button" class="btn btn-danger delete" id="delete" data-id="{{$d->id}}" data-name="{{$d->nama_obat}}">Delete</a>
                                      </td>
                                      </tr>
                                      @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Diproduksi</th>
                                    <th>Tanggal Pembuatan</th>
                                    <th>Tanggal Kadaluarsa</th>
                                    <th>Created By</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
