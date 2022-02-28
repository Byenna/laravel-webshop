
    <body class="antialiased">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          
 


    <div class="container-fluid">

               

        <nav id="app" class="container-fluid" class="navlinks">
           <h2 class="cherk_title"  >&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;</h2>
          
        </nav>
        </div>