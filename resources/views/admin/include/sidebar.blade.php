<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item active">
            <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                <i data-feather="home"></i>
                <span class="menu-title text-truncate">Dashboards</span>
            </a>
        </li>

        <li class="nav-item  ">
            <a href="{{ route('contacts.list') }}" class="d-flex align-items-center" target="_self" id="contactList">
                <i data-feather="home"></i>
                <span class="menu-title text-truncate">Contacts</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="#" class="d-flex align-items-center" target="_self">
                <i data-feather="file-text"></i>
                <span class="menu-title text-truncate">Menu</span>
            </a>
            <ul class="menu-content">
             
                
                <li>
                    <a href="{{route('admin.menu.add')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Add/View Menu</span>
                    </a>
                </li>
            </ul>

            <ul class="menu-content">
             
                
                <li>
                    <a href="{{route('admin.submenu.add')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Add/View SubMenu</span>
                    </a>
                </li>
            </ul>
        </li>

{{-- what we do sidebar menu start  --}}
<li class="nav-item">
    <a href="#" class="d-flex align-items-center" target="_self">
        <i data-feather="file-text"></i>
        <span class="menu-title text-truncate">What We Do</span>
    </a>
    <ul class="menu-content">
     
        
        <li>
            <a href="{{route('whatWeDo.create')}}" class="d-flex align-items-center" target="_self">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate">Add Content</span>
            </a>
        </li>
    </ul>

    <ul class="menu-content">
     
        
        <li>
            <a href="{{route('whatWeDo.index')}}" class="d-flex align-items-center" target="_self">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate">Show Content</span>
            </a>
        </li>
    </ul>
</li>

{{-- what we do sidebar menu end  --}}
{{-- add service sidebar menu start  --}}
<li class="nav-item">
    <a href="#" class="d-flex align-items-center" target="_self">
        <i data-feather="file-text"></i>
        <span class="menu-title text-truncate">Services</span>
    </a>
    <ul class="menu-content">
     
        
        <li>
            <a href="{{route('service.add')}}" class="d-flex align-items-center" target="_self">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate">Add Service</span>
            </a>
        </li>
    </ul>

    <ul class="menu-content">
     
        
        <li>
            <a href="{{route('service.index')}}" class="d-flex align-items-center" target="_self">
                <i data-feather="circle"></i>
                <span class="menu-item text-truncate">Show Service</span>
            </a>
        </li>
    </ul>
</li>

{{-- service sidebar menu end  --}}

        <li class="nav-item  ">
            <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                <i data-feather="file-text"></i>
                <span class="menu-title text-truncate">Invoice</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="app/invoice/list.html" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">List</span>
                    </a>
                </li>
                <li>
                    <a href="app/invoice/preview.html" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Preview</span>
                    </a>
                </li>
                <li>
                    <a href="app/invoice/edit.html" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Edit</span>
                    </a>
                </li>
                <li>
                    <a href="app/invoice/add.html" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Add</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item  ">
            <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                <i data-feather="file-text"></i>
                <span class="menu-title text-truncate">Projects</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{ route('project.create') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Create</span>
                    </a>
                </li>
                <li>
                    <a href="app/invoice/preview.html" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Manage</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item  ">
            <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                <i data-feather="file-text"></i>
                <span class="menu-title text-truncate">Sliders</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{route('slider.view') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate">Create</span>
                    </a>
                </li>
               
            </ul>
        </li>
    </ul>
</div>