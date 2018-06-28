<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "{{ url('img/favicon.png')}}" rel = "icon"  type = "image/png" />
    <title>Nprodax | Login </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}"> 
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"> 
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> 

</head>

<body class="gray-bg">
    
<div class="col-md-2"></div>
    
            <div class="col-md-8" style="margin-top:20px;">
               <div class="ibox-content">
                 <strong><center><h3 class="font-bold"></h3>User Profile<br></center></strong>
                    <form class="m-t" role="form" action="{{ url('store') }}" method="post">
                         {{ csrf_field() }}
                        <div class="form-group">
                                <label>First Name&nbsp&nbsp:&nbsp{{ $user->first }}</label>
                                
                            </div>
                            <div class="form-group">
                                <label>Last Name&nbsp&nbsp:&nbsp{{ $user->last }}</label>
                                
                            </div>              
                        <div class="form-group">
                            <label>Address&nbsp:&nbsp{{ $user->address }}</label>
                            
                        </div>  
                        <div class="form-group">
                            <label>Permanent Address&nbsp&nbsp:&nbsp{{ $user->permanent }}</label>
                            
                        </div>     
                    <div class="form-group">
                        <label>Email Address&nbsp&nbsp:&nbsp{{ $user->email }}</label>
                    </div>  
                    
                        
                    </form>
                </div>
                <div class="col-md-2"><a href="../send/{{ $user->email }}"><button type="button" class="btn btn-info block  m-b">Accept</button></a></div>
                </div>
            </body>
                </html>
							