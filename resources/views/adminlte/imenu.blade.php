   @extends('adminlte.principal')
   @section('admincontent')
   <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingreso de Menú</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/ingreso/menu')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descrip" class="form-control" placeholder="ingrese el menú">
                  </div>
                  <div class="form-group">
                    <label>Ruta</label>
                    <input type="text" name="ruta" class="form-control" placeholder="Ingrese la ruta">
                  </div>
                   <div class="form-group">
                    <label>Orden</label>
                    <input type="number" name="orden" class="form-control" placeholder="número">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          

    </div>
    @endsection