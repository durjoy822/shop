<style>
    .sidebar_card{
        height: 700px;
    }
</style>

<div class="card sidebar_card">
    <div class="card-body ">
        <div class="px-3 mt-3">
            <i class="fas fa-user-circle " ></i> &nbsp; &nbsp;
             <a href="{{route('customer.profile')}}" class="text-dark"> Profile</a>
        </div>

        <div class="px-3 mt-3">
            <i class="fa-solid fa-folder-open"></i> &nbsp; &nbsp;
            <a href="{{route('customer.order')}}" class="text-dark"> Orders</a>
            <span class="badge bg-primary rounded-pill">14</span>
        </div>

        <div class="px-3 mt-3">
            <i class="fa-solid fa-heart"></i>&nbsp; &nbsp;
             <a href="{{route('customer.wishlist')}}" class="text-dark"> Wishlist</a>
            <span class="badge bg-primary rounded-pill">14</span>
        </div>

        <div class="px-3 mt-3">
            <i class="fa-solid fa-lock"></i> &nbsp; &nbsp;
            <a href="{{route('customer.password')}}" class="text-dark"> Change password</a>
        </div>

        {{-- <div class="px-3 mt-3">
            <i class="fa-solid fa-gear"></i>  &nbsp; &nbsp; <a href="" class="text-dark"> Settings</a>
        </div> --}}

        <div class="px-3 mt-3">
            <i class="fa-solid fa-right-from-bracket"></i> &nbsp; &nbsp;
            <a href="{{route('customer.logout')}}" class="text-dark"> Logout</a>
        </div>
    </div>
</div>
