<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:52 GMT -->
<head><title>Register</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="asset/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="asset/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="asset/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="asset/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="asset/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="asset/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="asset/css/main5739.css?version=4.5.0" rel="stylesheet">
</head>
<body>
@include('flash-message')
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w wider">
        <div class="logo-w"><a href="index.html"><img alt="" src="asset/img/logo-big.png">Kabuku Restaurant</a></div>
        <h4 class="auth-header">Create new account</h4>
        <form action="{{route('Register')}}" method="post">
            @csrf
            <div class="form-group"><label for=""> Full Name</label><input class="form-control" name="name" placeholder="Enter Name" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>
            <div class="form-group"><label for=""> Email address</label><input class="form-control" name="email" placeholder="Enter email" type="email" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>
            <div class="form-group"><label for=""> Phone No.</label><input class="form-control" name="phone" placeholder="Enter Phone" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>
            <div class="form-group"><label for=""> Location</label><input class="form-control"  name="location" placeholder="Enter email" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group"><label for=""> Password</label><input class="form-control" name="password" placeholder="Password" type="password" required>
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><label for="">Confirm Password</label><input class="form-control" placeholder="Password" type="password" required></div>
                </div>
            </div>
            <div class="buttons-w">
                <button type="submit" class="btn btn-primary">Register Now</button>
                <span>Already have account? <a href="{{url('loginCustom')}}">Login</a> </span>

            </div>
        </form>
    </div>
</div>
</body>
<!-- Mirrored from light.pinsupreme.com/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:52 GMT -->
</html>
