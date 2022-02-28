@section('side_nav_home')


<div class="block">

        <div class="sidenav">
            <div id="homeNav">

                <div class="sideBtn"><a href="{{ url('frontend/machines') }}" class="btn btn-primary">Coffee Machines</a></div>

                <div class="sideBtn"><a href="{{ url('frontend/beans') }}" class="btn btn-primary">Coffee Beans</a></div>

                <div class="sideBtn"><a href="{{ url('frontend/cups') }}" class="btn btn-primary">Coffee Cups</a></div>

                <div class="sideBtn"><button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#footer" style="color:#cad2c5"> Contact us</a></li>
                        <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Coffeemaker"
                                style="color:#cad2c5">About</a></li>
                    </ul>

                </div>
            </div>
        </div>
    
        <div class="container-fluid">
        <img id="homeImg" src="/assets/images/coffeeGif1.gif" alt="animated coffee cup">
    </div>

 </div>
@endsection