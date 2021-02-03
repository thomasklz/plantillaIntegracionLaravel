   @extends('adminlte.principal')
   @section('admincontent')
   <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingreso de productos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/ingreso/productos')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="ingrese el menú">
                  </div>
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Ingrese la ruta">
                  </div>
                  <div class="form-group">
                    <label>Imagen</label>
                    <input type="text" name="imagen" class="form-control" placeholder="Ingrese la ruta">
                  </div>
           <!--         <div class="form-group">
                    <label for="exampleInputFile">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Seleccionar</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div> -->
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