<!DOCTYPE html>
<html>
<head>
    <title>Complain Catagory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.popper.min.js"></script>
    
</head>
<body style="background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB">
  
    <div>
       <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg,#00897B,#0081bf);">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b style="color: white;">Complaint</b> 
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
          <a class="dropdown-item" href="{{route('complaint')}}">Make Complain</a>
          <a class="dropdown-item" href="{{route('newcomplaint1')}}">Status of complaint</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      
      <li class="nav-item active">
        <!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
        <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Profile
  </a>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
                  <div style="color:red">{{Auth::user()->name}}'s profiles</div><br>
                  <strong>
                    <div>
                    <p>Name        :{{Auth::user()->name}}<br>
                    Email :{{Auth::user()->email}}<br>
                    Id :{{Auth::user()->student_id}}</p>
                   </div>
                  </strong>
                  </div>
  </div>
</div>
      </li>
     
         <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="color: white;"  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  style="color: white;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


   
    </ul>
  </div>
</nav> 
 </div>
  
    
    <div class="container">
      <div class="row">
          <div class="col-md-4">
          <div class="card" style="width: 22rem;">
         <img style="height: 230px;" src="img/transport1.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Academic</h5>
         <a href="{{route('complaint')}}"class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem;">
         <img src="img/lab.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Lab/Classroom</h5>
         <a href="{{route('complaint2')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem;">
         <img src="img/lib.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Library</h5>
         <a href="{{route('library')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem; margin-top: 15px;">
         <img src="img/bus.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Transport</h5>
         <a href="{{route('transport')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem;  margin-top: 15px;">
         <img src="img/canteen.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Canteen</h5>
         <a href="{{route('canteen')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem;  margin-top: 15px;">
         <img  style="height: 210px;" src="img/account.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Accounts</h5>
         <a href="{{route('account')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 22rem;  margin-top: 10px;">
         <img src="img/hostel.jpg" class="card-img-top" alt="...">
         <div class="card-body">
         <h5 class="card-title">Hostel</h5>
         <a href="{{route('hostel')}}" class="btn btn-primary">Make Complaint</a>
        </div>
        </div>
        </div>

       </div>
      </div>
      </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>
</body>
</html>
