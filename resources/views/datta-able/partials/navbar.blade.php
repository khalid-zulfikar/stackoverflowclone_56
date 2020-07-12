1<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
           <a href="index.html" class="b-brand">
               <div class="b-bg">
                   <i class="feather icon-zap"></i>
               </div>
               <span class="b-title">StackOverflow_56</span>
           </a>
           <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
       </div>
       <div class="navbar-content scroll-div">
        <ul class="nav pcoded-inner-navbar">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
                <!-- Note: untuk feather icon bisa liat di website dibawah ini : -->
                <!-- https://dropways.github.io/feathericons/ -->
            </li>
            <li class="nav-item active">
                <a href="index.html" class="nav-link ">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.html" class="nav-link ">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Profile</span>
                </a>
            </li>
            <li data-username="Disabled Menu" class="nav-item">
                <a href="/quest" class="nav-link"><span class="pcoded-micon">
                    <i class="feather icon-layout"></i></span>
                    <span class="pcoded-mtext">Pertanyaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.html" class="nav-link ">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">My-Answer</span>
                </a>
            </li>
            @if(Auth::user())

            <li data-username="Disabled Menu" class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                <button type="submit" class="btn btn-none"><span class="pcoded-micon">
                <i class="feather icon-power"></i></span>
                <span class="pcoded-mtext">Logout</span>
                </button>
            </form>
            </li>
            @else
            <li data-username="Disabled Menu" class="nav-item">
                <a href="{{ route('login') }}">
                <button type="submit" class="btn btn-none"><span class="pcoded-micon">
                <i class="feather icon-power"></i></span>
                <span class="pcoded-mtext">Login</span>
                </button>
                </a>
            
            </li>
            @endif
        </ul>
    </div>
    </div>
</nav>