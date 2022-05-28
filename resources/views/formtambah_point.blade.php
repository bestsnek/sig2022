@extends("layouts.main")

@section("content")
<div class="container-fluid">
    
<h1 class ="h3 mb-4 text-gray-800">Tambah Point</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
            <div class="card-header">
                <a href="{{route("data")}}" class="btn btn-sm btn-primary float-right">Kembali</a>
            </div>
            
                <div class="card-body">
                    <p>Dapatkan koordinat dari </p>
                       <a href="https://www.openstreetmap.org/">Openstreetmap</a> 
                       <p> atau </p>
                         <a href="https://www.google.com/maps">Google Maps</a> 
                         <p> </p>

                    <form action="{{ route("tambahpoint") }}" method="post"enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" >
                        </div>

                        <div class="form-group">
                            <label for ="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" >
                        </div>

                        <div class="form-group">
                            <label for ="coordinate1">Koordinat 1</label>
                            <input type="integer" class="form-control" name="coordinate1" >
                        </div>
                       
                        
                       
                        <input type="submit" class="btn btn-primary" value="Tambah">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

