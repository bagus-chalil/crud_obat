<x-template :title="'Edit | Website'">
    @section('navigation',"Profil user")
    @section('content')
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-12 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="{{ asset('/image_user/'.auth()->user()->image) }}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Profil User</h5>
                                  <p class="card-text mt-3">Name : {{auth()->user()->name}}</p>
                                  <p class="card-text mt-3">Email : {{auth()->user()->email}}</p>
                                  <p class="card-text">Telephone : {{auth()->user()->telephone}}</p>
                                  <p class="card-text"><small class="text-muted">Member Since {{auth()->user()->created_at}}</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
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
