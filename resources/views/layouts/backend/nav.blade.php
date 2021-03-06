<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('http://placehold.jp/150x150.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
        </span>
    </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="#"><i class="fa fa-inbox"></i> <span>Orders</span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-cubes"></i> <span>Products</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="/admin/products">All Products</a></li>
            <li><a href="/admin/products/create">Add New</a></li>
            <li><a href="/admin/category">All Categories</a></li>            
            <li><a href="/admin/category/create">Add new Category</a></li>                            
        </ul>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">All Users</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Add User</a></li>            
            <li><a href="#">Manage Roles</a></li>                            
        </ul>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">All Messages</a></li>
            <li><a href="#">Inbox</a></li>                
            <li><a href="#">Sent</a></li>                          
        </ul>
    </li>
    <li><a href="{{ route('gallery.index') }}"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>  
    <li><a href="#"><i class="fa fa-bar-chart"></i> <span>Reports</span></a></li>        
    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>                      
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>