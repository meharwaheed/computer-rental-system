<nav class="side-navbar box-scroll sidebar-scroll" tabindex="1" style="overflow: hidden; outline: none;">
    <!-- Begin Main Navigation -->
    <ul class="list-unstyled">
        <li class="">
            <a href="{{route('home_page')}}"><i class="la la-columns"></i><span>Website</span></a>
        </li>
        <li class="">
            <a href="{{route('dashboard')}}"><i class="la la-columns"></i><span>Dashboard</span></a>
        </li>
        <li class="">
            <a href="{{route('edit_profile')}}"><i class="la la-columns"></i><span>Change Profile</span></a>
        </li>
        <li class="">
            <a href="{{route('rent_requests')}}"><i class="la la-columns"></i><span>Rental Requests</span></a>
        </li>
        <li class="">
            <a href="{{route('rent_return_requests')}}"><i class="la la-columns"></i><span>Rental Return Request</span></a>
        </li>
        <li class="">
            <a href="{{route('all_rental_services')}}"><i class="la la-columns"></i><span>Rental Item List</span></a>
        </li>
        <li>
            <a href="{{route('users.create')}}"><i class="la la-plus"></i><span>Create User</span></a>
        </li>
        <li>
            <a href="{{route('users.index')}}"><i class="la la-list"></i><span>Customers List</span></a>
        </li>
        @if(auth()->user()->role != 'UCR Staff')
        <li>
            <a href="{{route('view_all_staff')}}"><i class="la la-list"></i><span>UCR Staff List</span></a>
        </li>
        <li>
            <a href="{{route('web_managers')}}"><i class="la la-list"></i><span>Web Managers List</span></a>
        </li>
        @endif
        <li>
            <a href="{{route('products.create')}}"><i class="la la-plus"></i><span>Add New Computer</span></a>
        </li>
        <li>
            <a href="{{route('products.index')}}"><i class="la la-list"></i><span>Computers List</span></a>
        </li>
        <li>
            <a href="{{route('recharges.create')}}"><i class="la la-plus"></i><span>Recharge an Account</span></a>
        </li>
        <li>
            <a href="{{route('recharges.index')}}"><i class="la la-list"></i><span>Recharge History</span></a>
        </li>
        <li class=""><a href="{{route('logout')}}"><i class='la la-unlock'></i><span>Logout</span></a></li>
    </ul>
    <!-- End Main Navigation -->
</nav>
