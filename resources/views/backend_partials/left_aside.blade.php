<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="">
                        <a href="{{ route('hometexts.edit') }}"><i class="menu-icon fa fa-laptop"></i>Home </a>
                    </li>
                    <li class="">
                        <a href="{{ route('about.edit') }}"><i class="menu-icon fa fa-laptop"></i>About </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Education</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('educations.create') }}">Add Degree</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('educations.index') }}">All Degrees</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Experience</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('experiences.create') }}">Add Experience</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('experiences.index') }}">All Experiences</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Skill</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('skills.create') }}">Add Skill</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('skills.index') }}">All Skills</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="">Add Category</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="">All Categories</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="">Add Product</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="">All Products</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Posts</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="">Add Post</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="">All Posts</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Admins</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-puzzle-piece"></i><a href="">Add Admin</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="">All Admins</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href=""><i class="menu-icon fa fa-laptop"></i>Site Settings </a>
                    </li>
                    {{-- <li class="">
                        <a href="{{ route('adminlogout') }}" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                            <i class="menu-icon fa fa-laptop"></i>Logout 
                        </a>
                        <form action="{{ route('adminlogout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </li> --}}
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>