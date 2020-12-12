<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đăng nhập</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    
</head><!--/head-->

<body>
    <section id="form"><!--form-->
        
	<div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <form action="{{URL::to('/login-customer')}}" method="POST">
                            {{csrf_field()}}

            			<h1>Đăng Nhập</h1>

        			<div class="taikhoan">
            			<label for="username"><b>Email</b></label>
            			<input type="text" placeholder="Nhập địa chỉ email" name="email_account" required>
        			</div>
        		<div class="matkhau">
            		<label for="password"><b>Mật Khẩu</b></label>
           		 	<input type="password" placeholder="Nhập mật khẩu" name="password_account" required>
        		</div>

            		<button type="submit">Đăng Nhập</button>
            		
        			</div>
                        </form>

                    </div><!--/login form-->
                    <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký</h2>
                        <form action="{{URL::to('/add-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="customer_name" placeholder="Họ và tên"/>
                            <input type="email" name="customer_email" placeholder="Địa chỉ email"/>
                            <input type="password" name="customer_password" placeholder="Mật khẩu"/>
                            <input type="text" name="customer_phone" placeholder="Phone"/>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                </div>
            </div>
        </div>
    </section>

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>