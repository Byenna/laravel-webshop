@section('category')

<div class="category_buttons container-fluid" class="navlinks">
           
           <!-- shoppingcart -->
            <!-- end shoppingcart -->


           <select @change="filterBean()" v-model="bean_filter" class="btn btn-primary">
               <option selected value="all">All</option>
               <option value="dark">Dark</option>
               <option value="medium">Medium</option>
               <option value="blond">blond</option>
           </select>

           <button class="btn btn-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
               aria-expanded="false">Other Products &#9662;
           </button>
           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li><a class="dropdown-item" href="/coffeeMachines.html" style="color:#cad2c5">Coffee Machines</a></li>
               <li><a class="dropdown-item" href="/coffeeCups.html" style="color:#cad2c5">Coffee Cups</a></li>
           </ul>

           <a href="{{ asset('/') }}" class="btn btn-primary">Home</a>

       </div>

@endsection
