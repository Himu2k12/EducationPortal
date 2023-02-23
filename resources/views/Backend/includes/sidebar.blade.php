<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('asset/')}}/images/logo.png" width="60px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
@can('isSuper')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
@endcan
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Links
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @can('isSuper')

        <li class="nav-item {!! Request::is('view-add-role-page') ? 'active':'' !!}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Role</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Roles:</h6>
                <a class="collapse-item {!! Request::is('/add-role') ? 'active':'' !!}" href="{{url('/add-role')}}">Role</a>
            </div>
        </div>
    </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Employee</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Employee Related:</h6>
                    <a class="collapse-item {!! Request::is('/register-staffs') ? 'active':'' !!}" href="{{url('/register-staffs')}}">Employee Management</a>
                 </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCase" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Loan</span>
            </a>
            <div id="collapseCase" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Loan Related:</h6>
                    <a class="collapse-item {!! Request::is('/loan-request-admin') ? 'active':'' !!}" href="{{url('/loan-request-admin')}}">New Loan Applications</a>
                    <a class="collapse-item {!! Request::is('/approved-loans') ? 'active':'' !!}" href="{{url('/approved-loans')}}">Approved Loans</a>
                    <a class="collapse-item {!! Request::is('/admin-all-active-loans') ? 'active':'' !!}" href="{{url('/admin-all-active-loans')}}">Current Loans</a>
                    <a class="collapse-item {!! Request::is('/loan-statements') ? 'active':'' !!}" href="{{url('loan-statements')}}">Loan Statement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatient" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Savings</span>
            </a>
            <div id="collapsePatient" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Savings Related:</h6>
                    <a class="collapse-item {!! Request::is('/savings-withdraw-request-by-supervisor') ? 'active':'' !!}" href="{{url('/savings-withdraw-request-by-supervisor')}}">Savings Withdraw Requests</a>
                    <a class="collapse-item {!! Request::is('/approved-withdraws-admin') ? 'active':'' !!}" href="{{url('/approved-withdraws-admin')}}">Approved Withdraws</a>
                    <a class="collapse-item {!! Request::is('/withdraw-history') ? 'active':'' !!}" href="{{url('/withdraw-history')}}">Withdraw History</a>
                    {{--                <a class="collapse-item {!! Request::is('/all-cases') ? 'active':'' !!}" href="{{url('/all-cases')}}">All Cases</a>--}}
                </div>
            </div>
        </li>
    @endcan
    @can('isFieldMan')
    <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users-cog"></i>
                <span> Members Info</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Member Related:</h6>
                    <a class="collapse-item {!! Request::is('/fieldOfficer-included-members') ? 'active':'' !!}" href="{{url('/fieldOfficer-included-members')}}"> My Included Members</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSavings" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-piggy-bank"></i>
                <span> Savings </span>
            </a>
            <div id="collapseSavings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Savings Related:</h6>
                    <a class="collapse-item {!! Request::is('/savings-form') ? 'active':'' !!}" href="{{url('/savings-form')}}"> Savings Form</a>
                    <a class="collapse-item {!! Request::is('/today-saving-collection') ? 'active':'' !!}" href="{{url('/today-saving-collection')}}"> Daily Savings Collection</a>
                    <a class="collapse-item {!! Request::is('/withdraw-savings') ? 'active':'' !!}" href="{{url('/withdraw-savings')}}">Withdraw Savings Account</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoans" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span> Loans </span>
            </a>
            <div id="collapseLoans" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Loan Related:</h6>
                    <a class="collapse-item {!! Request::is('/new-loan-by-customer') ? 'active':'' !!}" href="{{url('/new-loan-by-customer')}}">My Loans</a>
                </div>
            </div>
        </li>
         @endcan
    @can('isCashier')
    <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Daily Collections</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Collection Related:</h6>
                    <a class="collapse-item {!! Request::is('/daily-field-officer-collection') ? 'active':'' !!}" href="{{url('/daily-field-officer-collection')}}">Officers Collection</a>
                    <a class="collapse-item {!! Request::is('/today-saving-collection') ? 'active':'' !!}" href="{{url('/today-saving-collection')}}">Collection</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSavings" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-piggy-bank"></i>
                <span> Savings Close </span>
            </a>
            <div id="collapseSavings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Savings Related:</h6>
                    <a class="collapse-item {!! Request::is('/despatch-savings-withdraw-money') ? 'active':'' !!}" href="{{url('/despatch-savings-withdraw-money')}}">Despatch Request</a>
                    <a class="collapse-item {!! Request::is('/despatched-savings-money') ? 'active':'' !!}" href="{{url('/despatched-savings-money')}}">Despatch History</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoans" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span> Loan Despatch</span>
            </a>
            <div id="collapseLoans" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Loan Related:</h6>
                    <a class="collapse-item {!! Request::is('loan-for-dispatch') ? 'active':'' !!}" href="{{url('loan-for-dispatch')}}">Loans for Despatch </a>
                    <a class="collapse-item {!! Request::is('/all-active-loans') ? 'active':'' !!}" href="{{url('/all-active-loans')}}">Active Loans </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesCost" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-money-check-alt"></i>
                <span>Additional Expenses</span>
            </a>
            <div id="collapseUtilitiesCost" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Expense Related:</h6>
                    <a class="collapse-item {!! Request::is('additional-cost-form') ? 'active':'' !!}" href="{{url('/additional-cost-form')}}">New Expense</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCollection" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-money-check-alt"></i>
                <span>Additional Collections</span>
            </a>
            <div id="collapseCollection" class="collapse @if(Request::is('additional-collection-form')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Collection Related:</h6>
                    <a class="collapse-item {!! Request::is('additional-collection-form') ? 'active':'' !!}" href="{{url('/additional-collection-form')}}">New Collection</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities34" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-file-pdf"></i>
                <span>Reports</span>
            </a>
            <div id="collapseUtilities34" class="collapse {!! Request::is('overall-report') ? 'show':'' !!}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Report Management:</h6>
                    <a class="collapse-item {!! Request::is('savings-report') ? 'active':'' !!}" href="{{url('savings-report')}}">Savings Collections</a>
                    <a class="collapse-item {!! Request::is('Loan-report') ? 'active':'' !!}" href="{{url('Loan-report')}}">Loan Collections</a>
                    <a class="collapse-item {!! Request::is('Expense-reports') ? 'active':'' !!}" href="{{url('Expense-reports')}}">Expense Report</a>
                    <a class="collapse-item {!! Request::is('Collection-reports') ? 'active':'' !!}" href="{{url('Collection-reports')}}">Additional Collection</a>
                    <a  class="collapse-item {!! Request::is('attendance-reports') ? 'active':'' !!}" href="{{url('attendance-reports')}}">Attendance</a>
                </div>
            </div>
        </li>
         @endcan
    @can('isStudent')
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item {!! Request::is('/new-member-requests') ? 'active':'' !!}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Personal</span>
            </a>
            <div id="collapseUtilities2" class="collapse {!! Request::is('/new-member-requests') ? 'show':'' !!}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Member Related:</h6>
                    <a class="collapse-item {!! Request::is('/profile') ? 'active':'' !!}" href="{{url('/new-member-requests')}}">Profile</a>
                </div>
            </div>
        </li>
        <li class="nav-item {!! Request::is('/daily-Collections') ? 'active':'' !!}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-coins"></i>
                <span>Daily Collections</span>
            </a>
            <div id="collapseUtilities3" class="collapse {!! Request::is('/daily-Collections') ? 'show':'' !!}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Collection Related:</h6>
                    <a class="collapse-item {!! Request::is('/daily-Collections') ? 'active':'' !!}" href="{{url('/daily-Collections')}}">Field-Officer Collections</a>
                    <a class="collapse-item {!! Request::is('/daily-all-Collections') ? 'active':'' !!}" href="{{url('/daily-all-Collections')}}">Total Collections</a>
                </div>
            </div>
        </li>
        <li class="nav-item {!! Request::is('/withdraw-requests') ? 'active':'' !!}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-piggy-bank"></i>
                <span>Savings Withdraw</span>
            </a>
            <div id="collapseUtilities4" class="collapse {!! Request::is('/withdraw-requests') ? 'show':'' !!}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Withdraw Related:</h6>
                    <a class="collapse-item {!! Request::is('/withdraw-requests') ? 'active':'' !!}" href="{{url('/withdraw-requests')}}">Withdraw Requests</a>
                    <a class="collapse-item {!! Request::is('/pending-withdraw-requests') ? 'active':'' !!}" href="{{url('/pending-withdraw-requests')}}">Pending For Release</a>
                </div>
            </div>
        </li>
        <li class="nav-item {!! Request::is('/withdraw-requests') ? 'active':'' !!}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>Loans</span>
            </a>
            <div id="collapseUtilities5" class="collapse {!! Request::is('/new-loan-request') ? 'show':'' !!}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Savings Related:</h6>
                    <a class="collapse-item {!! Request::is('/new-loan-request') ? 'active':'' !!}" href="{{url('/new-loan-request')}}">New Loan Applications</a>
                    <a class="collapse-item {!! Request::is('/new-loan-documents') ? 'active':'' !!}" href="{{url('/new-loan-documents')}}">Pending Loans</a>
                    <a class="collapse-item {!! Request::is('/All-current-loans') ? 'active':'' !!}" href="{{url('/All-current-loans')}}">All Loans</a>
                </div>
            </div>
        </li>
    @endcan
    @can('isIT')
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Slider</span>
            </a>
            <div id="collapseUtilities2" class="collapse @if(Request::is('slider-input')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Slide Related:</h6>
                    <a class="collapse-item {!! Request::is('slider-input') ? 'active':'' !!}" href="{{url('/slider-input')}}">Slide Settings</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities234" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Staff's Profile</span>
            </a>
            <div id="collapseUtilities234" class="collapse @if(Request::is('all-staffs')||Request::is('manage-staff-info')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Staff profile Related:</h6>
                    <a class="collapse-item {!! Request::is('all-staffs') ? 'active':'' !!}" href="{{url('all-staffs')}}">New Profile</a>
{{--                    <a class="collapse-item {!! Request::is('manage-staff-info') ? 'active':'' !!}" href="{{url('/manage-staff-info')}}">Manage Profiles</a>--}}
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities221" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>About Settings</span>
            </a>
            <div id="collapseUtilities221" class="collapse @if(Request::is('new-about-info')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">About ORG Related:</h6>
                    <a class="collapse-item {!! Request::is('new-about-info') ? 'active':'' !!}" href="{{url('new-about-info')}}">About Settings</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseUtilities2">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Event Settings</span>
            </a>
            <div id="collapseEvents" class="collapse @if(Request::is('all-event')) show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Event Related:</h6>
                    <a class="collapse-item {!! Request::is('all-event') ? 'active':'' !!}" href="{{url('all-event')}}">All Event</a>
                </div>
            </div>
        </li>
    @endcan
    <!-- Divider -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
