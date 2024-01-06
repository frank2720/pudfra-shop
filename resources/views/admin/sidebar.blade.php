  <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">main</p>

      <!-- link -->
    <a href="{{route('analysis')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fa-solid fa-house text-xs mr-2"></i>                
       Dashboard
    </a>
     
      <!-- end link -->
      <!-- dropdown-link -->
      <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
        <button class="menu-btn flex flex-wrap items-center">
        <i class="fa-brands fa-product-hunt text-xs mr-2"></i>
        Product Management
        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
        </button>
        
        <ul class="text-gray-700 menu hidden md:mt-10">
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">add product</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Categories</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Products Import</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Products Export</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Products</a>
            </li>
        </ul>
    </div>
      <!-- end dropdown-link -->

      <!-- dropdown-link -->
    <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
        <button class="menu-btn flex flex-wrap items-center">
            <i class="fa-solid fa-basket-shopping text-xs mr-2"></i>
        Order Management
        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
        </button>
        
        <ul class="text-gray-700 menu hidden md:mt-10">
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">All orders</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">pending orders</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">delivered orders</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">shipped orders</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">cancelled orders</a>
            </li>
        </ul>
    </div>
      <!-- end dropdown-link -->

      <!-- dropdown-link -->
      <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
        <button class="menu-btn flex flex-wrap items-center">
            <i class="fa-solid fa-truck text-xs mr-2"></i>
        Shipping Management
        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
        </button>
        
        <ul class="text-gray-700 menu hidden md:mt-10">
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">All shipments</a>
            </li>
        </ul>
    </div>
      <!-- end dropdown-link -->

        <!-- dropdown-link -->
    <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
      <button class="menu-btn flex flex-wrap items-center">
        <i class="fa-regular fa-image text-xs mr-2"></i>
      Banners Management
      <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
      </button>
      
      <ul class="text-gray-700 menu hidden md:mt-10">
          <li class="mt-2">
              <i class="fa-solid fa-location-pin text-xs ml-4"></i>
              <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Home banner</a>
          </li>
          <li class="mt-2">
              <i class="fa-solid fa-location-pin text-xs ml-4"></i>
              <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Promo banners</a>
          </li>
      </ul>
  </div>
    <!-- end dropdown-link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">users</p>

            <!-- dropdown-link -->
    <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
        <button class="menu-btn flex flex-wrap items-center">
        <i class="fa-solid fa-user text-xs mr-2"></i>
        Staff Management
        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
        </button>
        
        <ul class="text-gray-700 menu hidden md:mt-10">
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">staffs</a>
            </li>
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">staffs permissions</a>
            </li>
        </ul>
    </div>
      <!-- end dropdown-link -->

                <!-- dropdown-link -->
    <div class="dropdown relative md:static mb-3 capitalize font-medium text-sm">
        <button class="menu-btn flex flex-wrap items-center">
            <i class="fa-solid fa-people-group text-xs mr-2"></i>
        Customer Management
        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
        </button>
        
        <ul class="text-gray-700 menu hidden md:mt-10">
            <li class="mt-2">
                <i class="fa-solid fa-location-pin text-xs ml-4"></i>
                <a href="" class="ml-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">Customer Index</a>
            </li>
        </ul>
    </div>
      <!-- end dropdown-link -->
    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->