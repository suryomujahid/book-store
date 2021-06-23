<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Template.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <div class="card mt-3">
            <div class="card-body">
              <div class="card-body mb-3">
                <div class="card-header mb-3">
                  <h3>Input Distributor</h3>
                </div>

                <form action="{{route('simpanDistributor')}}" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <h6>Nama Distributor</h6>
                    <input type="text" id="nama" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <h6>Alamat</h6>
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <h6>Telepon</h6>
                    <input type="text" id="telepon" name="telepon" class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                  </div>
                </form>
              </div>

              <div class="card-body mt-3">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nama Distributor</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Telepon</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dtDistributor as $item)

                    <tr>
                      <th>{{$item->nama_distributor}}</th>
                      <td>{{$item->alamat}}</td>
                      <td>{{$item->telepon}}</td>
                      <td>
                        <a href="{{url('editDistributor',$item->id_distributor)}}"><i class="far fa-edit"></i></a> | <a href="{{url('deleteDistributor',$item->id_distributor)}}"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                      </td>
                    </tr>

                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>


    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->


  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('Template.script')

  @include('sweetalert::alert')
  <script>
    $(document).ready(function() {
      $('table').dataTable();
    });
  </script>
</body>

</html>