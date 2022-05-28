<header class="navbar" style="background-color: rgb(221, 221, 221);"> 

    <div class="container justify-content-center ">
        <nav class="navbar navbar-expand-md  navbar-dark" >
            <div class="navbar-nav d-flex flex-row  " style="background-color: #888888;">
                {{-- <a class="nav-link fs-4 p-3 px-4  " style= "background-color: {{ Route::is('landing') ? '#6C6767' : '' }};" href="{{ route('landing')}}">Beranda</a>       
                <a class="nav-link fs-4 p-3 px-4" style= "background-color: {{ Route::is('menu_satuan') || Route::is('menu_paketan') ? '#6C6767' : '' }};" href="{{ route('menu_satuan')}}">Menu</a> --}}
                <a class="nav-link fs-4 py-1 mx-3" href="{{ route('all') }}">Semua</a>
                
            </div> 
            <div class="navbar-nav d-flex flex-row  mx-3" style="background-color: #888888;">
                <a class="nav-link fs-4 py-1 mx-3" href="{{ route('polygon') }}">Polygon</a>
            </div> 
            <div class="navbar-nav d-flex flex-row  mx-3" style="background-color: #888888;">
                <a class="nav-link fs-4 py-1 mx-3" href="{{ route('polyline') }}">Polyline</a>
            </div> 
            <div class="navbar-nav d-flex flex-row  mx-3" style="background-color: #888888;">
                <a class="nav-link fs-4 py-1 mx-3" href="{{ route('point') }}">Point</a>
            </div> 
            <div class="navbar-nav d-flex flex-row  mx-3" style="background-color: #888888;">
                <a class="nav-link fs-4 py-1 mx-3" href="{{ route('data') }}">Data</a>
            </div> 
        </nav>
    </div>
    
    
    
    </header>