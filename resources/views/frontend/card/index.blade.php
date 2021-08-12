<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Koperasi PT. ISP</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <style>
        .post-content {
            background: none repeat scroll 0 0 #ffffff00;
            /* opacity: 0.5; */
            top: 36%;
            left: 25%;
            position: absolute;
        }

        .thumbnail {
            position: relative;

        }

        .header {
            background-image:url("{{asset('images/card.jpg')}}");
            width: 480px;
            height: 300px;
            position: relative;
            background-size: contain;
            display: block;
            margin: 0 auto;
            /* margin-left: 30px; */
        }

        .nama {
            font-size: 14px;
            color: black;
            position: absolute;
            left: 28%;
            font-weight: bold;
            top: 37%;
        }

        .koperasi {
            font-size: 14px;
            color: black;
            position: absolute;
            left: 28%;
            font-weight: bold;
            top: 43%;
        }


        .kode {
            font-size: 14px;
            color: black;
            position: absolute;
            left: 28%;
            font-weight: bold;
            top: 58%;
        }

        .btn-xl {

            border-radius: 10px;
            width: 200px; //Specify your width here
        }
    </style>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row" style="margin-top: 120px">
                    <div class="col-12 col-sm-8 col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header">
                                    <span class="nama">{{$anggota->Nama}}</span>
                                    <span class="koperasi">-</span>
                                    <span class="kode">{{$anggota->Kode}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{url('/login?id='.$noekop)}}" class="btn btn-primary btn-xl">Login</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <a href="#" class="btn btn-primary btn-xl closebtn">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.closebtn').on('click',function () {
                var win = window.open("about:blank", "_self");
                win.close();
             })
         })
    </script>
</body>

</html>
