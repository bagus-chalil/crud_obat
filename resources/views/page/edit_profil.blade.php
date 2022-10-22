<x-template :title="'Edit | Website'">
    @section('navigation',"Edit Profil")
    @section('content')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-12 col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formulir Edit Profil</h3>
                            </div>
                            <div class="card-body">
                                <form action="/edit_profil/{{auth()->user()->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Lengkap:</label>
                                        <input type="text"
                                            class="form-control "
                                            name="edit_name" value="{{auth()->user()->name}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="text" readonly
                                            class="form-control"
                                            name="edit_email" value="{{auth()->user()->email}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone :</label>
                                        <input type="number"
                                            class="form-control"
                                            name="edit_telephone" value="{{auth()->user()->telephone}}" />
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">Picture</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="{{ asset('/image_user/'.auth()->user()->image) }}" class="img-thumbnail" alt="">
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="image" name="image">
                                                    <input type="hidden" name="image1" class="custom-file-input" id="customFile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
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
