@extends('layouts.partials.header')
@section('content')
<div class="grey lighten-3">
    <header>
        <div class="sidebar-fixed position-fixed">
           <a class="logo-wrapper waves-effect">
                <img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="{{url('/customeradd')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>ADD</a>
                <a href="{{url('/customerlist')}}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-table mr-3"></i>LIST</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i></a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-money-bill-alt mr-3"></i></a>
            </div>
        </div>
    </header>
     
 

    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</div>
@endsection






