 <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ isActiveRoute('admin.dashboard') }}">
              <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

             <!-- Category -->
            <li class="menu-item {{ isActiveRoute('admin.category.show') }}">
              <a href="{{ route('admin.category.show') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-qr"></i>
                <div data-i18n="Analytics">Category</div>
              </a>
            </li>

            <!-- products -->
            <li class="menu-item {{ isActiveRoute('admin.product.*') }}  ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Layouts">Product</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ isActiveRoute('admin.product.add') }} ">
                  <a href="{{ route('admin.product.add') }}" class="menu-link">
                    <div data-i18n="Without menu">Add Product</div>
                  </a>
                </li>
                <li class="menu-item {{ isActiveRoute('admin.product.list') }}">
                  <a href="{{ route('admin.product.list') }}" class="menu-link">
                    <div data-i18n="Without navbar">Product List</div>
                  </a>
                </li>
               
              </ul>
            </li>

</ul>