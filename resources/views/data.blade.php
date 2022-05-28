@extends("layouts.main")

@section("content")


<div class="container-fluid">
    

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data</h1>
    <div class="row">
        <div class="col-lg">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Polygon
                    <a href="{{route('formtambahpolygon')}}" class="btn btn-sm btn-primary float-right">Tambah Polygon</a>
                   
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Koordinat 1</th>
                                <th>Koordinat 2</th>
                                <th>Koordinat 3</th>
                                <th>Koordinat 4</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($coords_polygon as $coords)
                            <tr>
                                
                                <td>{{$coords->id}}</td>
                                <td>{{$coords->nama}}</td>
                                <td>{{$coords->keterangan}}</td>
                                <td>{{$coords->coordinate1}}</td>
                                <td>{{$coords->coordinate2}}</td>
                                <td>{{$coords->coordinate3}}</td>
                                <td>{{$coords->coordinate4}}</td>
                                <td>
                                <a href="{{route('formeditpolygon',['id'=>$coords->id]) }}" class="btn btn-sm btn-warning">edit</a>
                                    <a href="{{route('hapuspolygon',['id'=>$coords->id])}} " class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" >delete</a>
                                </td>
                            
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table> 
                   
                </div>
            </div>


            {{-- polyline --}}
            <div class="card shadow mb-4">
                <div class="card-header">
                    Polyline
                    <a href="{{route('formtambahpolyline')}}" class="btn btn-sm btn-primary float-right">Tambah Polyline</a>
                   
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Koordinat 1</th>
                                <th>Koordinat 2</th>
                                <th>Koordinat 3</th>
                                <th>Koordinat 4</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($coords_polyline as $coords)
                            <tr>
                                
                                <td>{{$coords->id}}</td>
                                <td>{{$coords->nama}}</td>
                                <td>{{$coords->keterangan}}</td>
                                <td>{{$coords->coordinate1}}</td>
                                <td>{{$coords->coordinate2}}</td>
                                <td>{{$coords->coordinate3}}</td>
                                <td>{{$coords->coordinate4}}</td>
                                <td>
                                <a href="{{route('formeditpolyline',['id'=>$coords->id]) }}" class="btn btn-sm btn-warning">edit</a>
                                    <a href="{{route('hapuspolyline',['id'=>$coords->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" >delete</a>
                                </td>
                            
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table> 
                   
                </div>
            </div>
            
            {{-- point --}}
            <div class="card shadow mb-4">
                <div class="card-header">
                    point
                    <a href="{{route('formtambahpoint')}}" class="btn btn-sm btn-primary float-right">Tambah Point</a>
                   
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Koordinat</th>
                              
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($coords_point as $coords)
                            <tr>
                                
                                <td>{{$coords->id}}</td>
                                <td>{{$coords->nama}}</td>
                                <td>{{$coords->keterangan}}</td>
                                <td>{{$coords->coordinate1}}</td>
                             
                                <td>
                                <a href="{{route('formeditpoint',['id'=>$coords->id]) }}" class="btn btn-sm btn-warning">edit</a>
                                    <a href="{{route('hapuspoint',['id'=>$coords->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');" >delete</a>
                                </td>
                            
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table> 
                   
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

