
<!DOCTYPE html>
<html>
 <head>
  <title>Send an Email TO Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    background-color:white;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body style="background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB">
   <div>
       <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg,#00897B,#0081bf);">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <a  style="color: white;" class="navbar-brand" href="{{ route('home') }}">
                  HOME
                </a>
      
      
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
                                <a  style="color: white;margin-left: 1200px;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">Send an Email To The Admin</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Student_id</label>
     <input type="text" name="student_id" class="form-control" value="{{Auth::user()->student_id}}" required autocomplete="student_id" autofocus />
    </div>
    <div class="form-group">
     <label>Message</label>
     <textarea name="description_of_complaint" class="form-control" value="{{ $complaint_tbl->description_of_complaint}}" type="text">{{ $complaint_tbl->description_of_complaint}}</textarea>
    </div>
     <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
   
  </div>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>
 </body>
</html>
