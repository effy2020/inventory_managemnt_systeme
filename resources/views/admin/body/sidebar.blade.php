 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <!-- traiter le cas du lien -->
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Tableau de bord</span>
                                </a>
                            </li>

                           
                
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Home Slide Setup</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
              
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>About Page Setup</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.page') }}">About Page</a></li>
          
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Customers</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">All Customers</a></li>
               
            </ul>
        </li>

  
<li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Footer Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                     
                    
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Contact Message </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('contact.message') }}">Contact Message</a></li>
                     
                    
                </ul>
            </li>
                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>