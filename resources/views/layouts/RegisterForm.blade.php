<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Chaitu | Login </title>
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
                 <strong><center><h3 class="font-bold"></h3>User Registration<br></center></strong>
                    <form class="m-t" role="form" action="{{ url('store') }}" method="post">
                    	 {{ csrf_field() }}
                        <div class="form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name" id="first" name="first" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name " id="last" name="last" class="form-control" required>
							</div>				
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address" rows="3" id="address" name="address" class="form-control" required|max:10></textarea>
						</div>	
						<div class="form-group">
							<label>Permanent Address</label>
							<textarea placeholder="Enter Permanant Address" rows="3" id="permanent" name="permanent" class="form-control"></textarea>
						</div>	
						<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="Phone Number" id="phone" name="phone" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address" id="email" name="email" class="form-control" required>
					</div>	
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" placeholder="Enter password" id="password" name="password" class="form-control" required>
                    </div>  
                        <button type="submit" class="btn btn-info block full-width m-b">Register</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
                </div>
            </body>
                </html>