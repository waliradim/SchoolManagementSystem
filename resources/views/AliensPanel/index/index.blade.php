<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('../../../../public/AliensPanel/css/AliensPanel.css')}}">
    <link rel="stylesheet" href="{{asset('../../../../public/AliensPanel/css/bootstrap.css')}}">
    <script src="{{asset('../../../../public/AliensPanel/js/bootstrap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="">

            @include('AliensPanel.header.header')
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div>
            @include('AliensPanel.menuBar.menubar')
        </div>
        <div class="">
            @yield('mainContent')
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="">
            @include('AliensPanel.footer.footer')
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class=""></div>
    </div>
</div>
</body>
</html>