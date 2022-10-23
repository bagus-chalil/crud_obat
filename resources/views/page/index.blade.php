<x-template :title="'Home | Website'">
@section("content")
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <!-- /.col (left) -->
          <div class="col-md-12 col-12">
              <div class="card card-primary">
                  <div class="card-body">
                    <h4>
                      Selamat Datang {{auth()->user()->name}}
                    </h4>  

                      <p>
                        Ini merupakan website yang dapat digunakan untuk mensimulasikan CRUD pada obat. Atas perhatiaanya
                        terima kasih. 
                      </p>
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