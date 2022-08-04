
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tiketing Event</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('tampilandepan/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('tampilandepan/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('tampilandepan/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('tampilandepan/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('tampilandepan/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                       
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">About </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Screenshort</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact</a>
                              </li>
                           </ul>
                           <div class="Call"><a href="#"> <span class="yellow">Call Us : </span>12345677890</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
                  <h1>Tiketing Event Live Music</h1>
                  
                  <a class="read_more" href="{{route('login')}}">login</a>
               </div>
            </div>
            <div class="col-md-6">
               <form id="request" class="main_form" method="post" action="{{route('pesanTiket')}}">
                    @csrf
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Nama" type="text" name="nama"> 
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Nomer Handphone" type="text" name="no_hp"> 
                     </div>
                     <div class="col-md-12">
                        <select class="contactus" placeholder=" Jenis Tiket" name="jenis_tiket">
                            @foreach($jenisTiket as $jt)
                            <option value="{{$jt->id}}">{{$jt->jenis_tiket}}</option>
                            @endforeach
                        </select>
                     </div>
                     
                        <button type="submit" class="send_btn">Send</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
     
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('tampilandepan/js/jquery.min.js')}}"></script>
      <script src="{{asset('tampilandepan/js/popper.min.js')}}"></script>
      <script src="{{asset('tampilandepan/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('tampilandepan/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('tampilandepan/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('tampilandepan/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

