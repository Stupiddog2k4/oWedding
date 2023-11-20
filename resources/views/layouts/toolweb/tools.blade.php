<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,700&family=Sigmar+One&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('toolweb/reset.css') }}" />

    <link rel="stylesheet" href="{{ asset('toolweb/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('budget-tool/tailwindcss.css') }}">
    <link rel="stylesheet" href="{{ asset('todolist/style.css')}}">
    <link rel="stylesheet" href="{{ asset('progress-spinner/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="header_logo">
            <a href="/owedding">
                <img class="logo-white" width="229" height="93" src="{{ asset('image\Picture2.png') }}" />
            </a>
        </div>
        <nav class="header_nav">
            <ul class="header_ul">
                <li class="header_menuitem">
                    <a href="#">Xem hướng dẫn</a>
                </li>
                <li class="header_menuitem">
                    <a href="#">Công cụ lập kế hoạch</a>
                </li>
                <li class="header_menuitem">
                    <a href="#">Cặp đôi đã tạo</a>
                </li>
                <li class="header_menuitem">
                    <a href="#">Điểm nổi bật</a>
                </li>
                <li class="header_menuitem"><a href="#">Bảng giá</a></li>
            </ul>
        </nav>
        <button class="Button">Đăng Xuất</button>
    </div>
    <div class="headline">
        <div class="headline-broom">
            <span class="headline_name">Trung bui</span>
            <div class="headline_img">
                <img src="{{ asset('image\wedd3.jpg') }}" alt="">
            </div>
        </div>
        <div class="headline-heart"><i class="fa fa-heart" aria-hidden="true"></i></div>
        <div class="headline-bride">
            <div class="headline_img">
                <img src="{{ asset('image\wedd3.jpg') }}" alt="">
            </div>
            <span class="headline_name">Trung bui</span>
        </div>
    </div>
    <div class="viewline">
        <div class="viewline-website">
            <i class="fas fa-globe"></i>
            <span>Xem Website</span>
        </div>
        <i class="fa fa-dot-circle" aria-hidden="true"></i>
        <div class="viewline-album">
            <i class="fas fa-images"></i>
            <span>Xem Album</span>
        </div>
    </div>
    <div class="btnline">
        <a href="#" class="btnchoice">
            <h5 class="btnchoice-top">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>DANH SÁCH KHÁCH MỜI</span>
            </h5>
            <span class="btnchoice-sub">Bạn có 0 khách mời</span>
        </a>
        <a href="{{ route('tasks.index') }}" class="btnchoice green">
            <h5 class="btnchoice-top">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span>Kế hoạch cưới</span>
            </h5>
            <span class="btnchoice-sub">Đã hoàn thành 0%</span>
        </a>
        <a href="{{ route('budgetCategories.index') }}" class="btnchoice blue">
            <h5 class="btnchoice-top">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Ngân sách cưới</span>
            </h5>
            <span class="btnchoice-sub">Đã chi 0 đ</span>
        </a>
        <a href="#" class="btnchoice gray">
            <h5 class="btnchoice-top">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Tạo mã QR</span>
            </h5>
            <span class="btnchoice-sub">Mã QR cho website</span>
        </a>
    </div>
    <div class="line">
        !!! Những công cụ hỗ trợ cho website của bạn dễ dàng hơn !!!
    </div>
    <div style="width: 70%">
        @yield('content')
    </div>
</body>

</html>
