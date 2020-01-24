<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg"
                        alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{$com_user['first_name'] }} {{ $com_user['last_name']}}</p>
                    <p class="designation"> {{$com_user['group_name'] }}</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{base_url($com_user['default_page'])}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Documentation</li>
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template">
                <i class="menu-icon ni ni-single-copy-04"></i> <span class="menu-title"> StarAdmin Docs </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/avenirer/CodeIgniter-MY_Model">
                <i class="menu-icon ni ni-single-copy-04"></i> <span class="menu-title">ORM MY_Model Docs </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/GustMartins/Slice-Library">
                <i class="menu-icon ni ni-single-copy-04"></i> <span class="menu-title">Slice Library Docs </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/benedmunds/CodeIgniter-Ion-Auth">
                <i class="menu-icon ni ni-single-copy-04"></i> <span class="menu-title">Ion Auth Docs </span>
            </a>
        </li>
        
    </ul>
</nav>