<!DOCTYPE html >
<html lang="fa" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jodit.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jodit.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        let url="{{ url('/') }}/"
        let api="{{ url('/api') }}/"
        let storage="{{ asset('/storage') }}/"
        let assets="{{ asset('/assets') }}/"
        let userLoggedIn = "{{ Auth::check() }}"
    </script>
    <style>
        /* ===== پالت رنگی مترونیک ===== */
        :root {
            --metronic-sidebar: #0D0E12;
            --metronic-bg-content: #FCFCFC;
            --metronic-bg-form: #FFFFFF;
            --metronic-shadow-form: #F5F5F5;
            --metronic-border: #DBDFE9;
            --metronic-text: #9A9CAE;
            --metronic-primary: #FFFFFF;
            --metronic-primary-dark: #0a6fd6;
            --metronic-primary-light: #4a9fff;
            
            --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
            --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
            --shadow-lg: 0 8px 40px rgba(27, 132, 255, 0.14);
            --shadow-xl: 0 12px 60px rgba(27, 132, 255, 0.18);
        }

        * {
            font-family: 'Vazirmatn', 'Tahoma', sans-serif;
        }
        
        body {
            background: var(--metronic-bg-content);
            min-height: 100vh;
        }
        
        .transition-all {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* ===== کارت‌ها ===== */
        .stat-card {
            transition: all 0.3s ease;
            border-right: 4px solid transparent;
            background: var(--metronic-bg-form);
            border-radius: 16px;
            padding: 20px;
            box-shadow: var(--shadow-sm);
        }
        
        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
        }
        
        .stat-card.blue {
            border-right-color: var(--metronic-primary);
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.green {
            border-right-color: #059669;
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.sky {
            border-right-color: var(--metronic-primary-light);
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        .stat-card.aqua {
            border-right-color: #7dd3fc;
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-shadow-form));
        }
        
        /* ===== سایدبار ===== */
        .sidebar-link {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .sidebar-link::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            transform: scaleY(0);
            transition: transform 0.3s ease;
            border-radius: 0 4px 4px 0;
        }
        
        .sidebar-link:hover::before,
        .sidebar-link.active::before {
            transform: scaleY(1);
        }
        
        .sidebar-link.active {
            background: rgba(27, 132, 255, 0.08);
            color: var(--metronic-primary);
        }
        
        .sidebar-link:hover:not(.active) {
            background: rgba(27, 132, 255, 0.04);
        }
        
        /* ===== منو آیتم‌ها ===== */
        .menu-item {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .menu-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateX(-4px);
        }
        
        .menu-item.active {
            background: rgba(27, 132, 255, 0.05);
            box-shadow: var(--shadow-md);
        }
        
        /* ===== زیرمنو ===== */
        .sub-menu-item {
            transition: all 0.25s ease;
            padding: 6px 12px;
        }
        
        /* ===== اصلاح هاور متن ===== */
        .sub-menu-item a {
            transition: color 0.3s ease;
        }
        
        .sub-menu-item a:hover {
            /* color: var(--metronic-primary) ; */
            background: transparent !important;
        }
        
        .element a {
            transition: color 0.3s ease;
        }
        
        .element a:hover {
            color: var(--metronic-primary) ;
            background: transparent !important;
        }
        
        .sub-menu-item:hover {
            background: transparent !important;
            transform: none !important;
            box-shadow: none !important;
        }
        
        .mt-6 a:hover {
            background: transparent !important;
            color: #dc2626 !important;
        }
        
        /* ===== هدر ===== */
        .header-gradient {
            background: linear-gradient(135deg, var(--metronic-bg-form), var(--metronic-bg-content));
            box-shadow: 0 4px 30px rgba(27, 132, 255, 0.06);
        }
        
        /* ===== دکمه‌ها ===== */
        .btn-soft {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .btn-soft:hover {
            background: var(--metronic-primary);
            color: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }
        
        .btn-soft-green {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .btn-soft-green:hover {
            background: #059669;
            color: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }
        
        /* ===== جستجو ===== */
        .search-box {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .search-box:focus-within {
            box-shadow: var(--shadow-md);
            transform: scale(1.01);
        }
        
        .search-box input {
            background: transparent;
        }
        
        /* ===== بخش‌ها ===== */
        .section-divider {
            background: linear-gradient(to right, transparent, var(--metronic-border), transparent);
            height: 2px;
            border: none;
            margin: 20px 0;
            opacity: 0.3;
        }
        
        .section-title {
            color: var(--metronic-text);
            font-weight: 700;
            position: relative;
            padding-right: 16px;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 24px;
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            border-radius: 4px;
        }
        
        /* ===== اوورلی ===== */
        .overlay-bg {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(4px);
        }
        
        /* ===== اسکرول ===== */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--metronic-bg-content);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--metronic-primary), var(--metronic-primary-dark));
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--metronic-primary);
        }
        
        .section-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }
        
        /* ===== ریسپانسیو ===== */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(100%);
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                z-index: 1000;
                width: 280px;
                transition: transform 0.3s ease;
                background: white !important;
                box-shadow: var(--shadow-xl);
            }
            .sidebar.open {
                transform: translateX(0);
            }

            .overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.4);
                backdrop-filter: blur(4px);
                z-index: 998;
            }
            .overlay.active {
                display: block;
            }
        }
        
        @media (min-width: 1024px) {
            .sidebar {
                transform: translateX(0) !important;
                position: sticky !important;
                top: 0;
                height: 100vh;
                background: #142033 !important;
                box-shadow: var(--shadow-md);
            }
            .mobile-menu-btn {
                display: none !important;
            }
        }
        
        /* ===== لوگو ===== */
        .logo-gradient {
            background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark), var(--metronic-primary-light));
            box-shadow: 0 4px 20px rgba(27, 132, 255, 0.25);
        }
        
        /* ===== فوتر ===== */
        .footer-divider {
            background: linear-gradient(to right, transparent, var(--metronic-border), transparent);
            height: 2px;
            border: none;
            opacity: 0.2;
        }
        
        /* ===== هدر پروفایل ===== */
        .avatar-gradient {
            background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
            box-shadow: 0 4px 20px rgba(27, 132, 255, 0.20);
        }
        
        .badge-dot {
            background: linear-gradient(135deg, #dc2626, #f87171);
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.15);
        }
        
        /* ===== منو باز شده ===== */
        .menu-open {
            background: rgba(27, 132, 255, 0.04);
            border-radius: 14px;
        }
        
        /* ===== آیتم‌های منو ===== */
        .nav-item {
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-sm);
        }
        
        .nav-item.active {
            background: var(--metronic-bg-form);
            box-shadow: var(--shadow-md);
        }

        /* ===== منوهای سایدبار ===== */
        .sidebar-menu-item {
            background: var(--metronic-bg-form);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        
        .sidebar-menu-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateX(-4px);
        }
        
        .sidebar-menu-item.active {
            background: rgba(27, 132, 255, 0.04);
            box-shadow: var(--shadow-md);
        }

        .menu-icon-blue {
            color: var(--metronic-primary);
        }
        .menu-icon-green {
            color: #059669;
        }
        .menu-icon-sky {
            color: var(--metronic-primary-light);
        }
        .menu-icon-aqua {
            color: #7dd3fc;
        }


        





/* ===============================
   Sidebar - Baskool Derakhti
================================ */
/* 
#sidebar {
    background: #142033 !important;
    border-left: 1px solid rgba(255, 255, 255, 0.06);
    box-shadow: -8px 0 30px rgba(0, 0, 0, 0.12);
    scrollbar-width: none;
}

#sidebar::-webkit-scrollbar {
    display: none;
}

#sidebar > div:first-child {
    background: linear-gradient(
        135deg,
        #192b43,
        #142033
    ) !important;

    padding: 26px 22px !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}

#sidebar .logo-gradient {
    background: linear-gradient(
        135deg,
        #1B84FF,
        #0755b5
    ) !important;

    border-radius: 14px !important;
    box-shadow: 0 5px 18px rgba(27, 132, 255, 0.25);
}

#sidebar h1 {
    font-size: 17px;
    letter-spacing: -0.4px;
}

#sidebar p {
    color: #8998ad !important;
}

#sidebar nav {
    padding: 22px 14px !important;
}

#sidebar nav > a:first-child {
    height: 48px !important;
    background: rgba(27, 132, 255, 0.12) !important;
    color: #65aaff !important;
    border: 1px solid rgba(27, 132, 255, 0.16);
    border-radius: 11px !important;
    margin-bottom: 22px !important;
    transition: all 0.25s ease;
}

#sidebar nav > a:first-child:hover {
    background: #1B84FF !important;
    color: white !important;
}

#sidebar nav > a:first-child svg {
    fill: currentColor !important;
}

#sidebar .element {
    background: transparent !important;
    border: 1px solid transparent;
    border-radius: 11px !important;
    padding: 13px 12px !important;
    margin-bottom: 5px !important;
    box-shadow: none !important;
    transition: all 0.25s ease;
}

#sidebar .element:hover {
    background: rgba(255, 255, 255, 0.045) !important;
    border-color: rgba(255, 255, 255, 0.055);
}

#sidebar .element span {
    color: #aab7c8 !important;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.2s ease;
}

#sidebar .element:hover > div:first-child span {
    color: #ffffff !important;
}

#sidebar .section-icon {
    width: 22px !important;
    height: 22px !important;
    fill: #8998ad !important;
    transition: all 0.25s ease;
}

#sidebar .element:hover .section-icon {
    fill: #1B84FF !important;
}

#sidebar .element > div:first-child > svg:last-child {
    fill: #718198 !important;
    transition: all 0.3s ease;
}

#sidebar .element:hover > div:first-child > svg:last-child {
    fill: #1B84FF !important;
}

#sidebar .element > div:last-child {
    margin-top: 5px;
    padding: 5px 0 0;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
}

#sidebar .sub-menu-item {
    padding: 10px 9px !important;
    border-radius: 8px;
    transition: all 0.2s ease;
}

#sidebar .sub-menu-item:hover {
    background: rgba(27, 132, 255, 0.10);
}

#sidebar .sub-menu-item a {
    color: #8998ad !important;
    font-size: 13px;
    transition: all 0.2s ease;
}

#sidebar .sub-menu-item:hover a {
    color: #65aaff !important;
}

#sidebar .sub-menu-item svg {
    flex-shrink: 0;
}

#sidebar .element span.text-xs {
    color: #65aaff !important;
    padding: 5px 8px;
}

#sidebar .element .border-t {
    border-color: rgba(255, 255, 255, 0.08) !important;
}

#sidebar nav > div:last-child {
    border-color: rgba(255, 255, 255, 0.08) !important;
}

#sidebar nav > div:last-child a {
    background: rgba(220, 38, 38, 0.08) !important;
    border: 1px solid rgba(220, 38, 38, 0.12);
    border-radius: 10px !important;
    color: #f87171 !important;
    transition: all 0.25s ease;
}

#sidebar nav > div:last-child a:hover {
    background: rgba(220, 38, 38, 0.16) !important;
    border-color: rgba(220, 38, 38, 0.25);
}

@media (max-width: 1024px) {
    #sidebar {
        background: #142033 !important;
    }

    #sidebar .element,
    #sidebar nav > a:first-child,
    #sidebar nav > div:last-child a {
        background-color: transparent !important;
    }
}
 */

   

/* ===============================
   METRONIC SIDEBAR STYLE
================================ */

#sidebar {
    width: 260px;
    background: #151c2c !important;
    border-left: 1px solid #252f43;
    box-shadow: 5px 0 25px rgba(0, 0, 0, 0.12);
    padding: 0;
    direction: rtl;
    scrollbar-width: none;
}

#sidebar::-webkit-scrollbar {
    display: none;
}

/* Logo */
#sidebar > div:first-child {
    min-height: 85px;
    padding: 20px 22px;
    background: #151c2c !important;
    border-bottom: 1px solid #252f43;
}

#sidebar .logo-gradient {
    background: linear-gradient(135deg, #1b84ff, #056ee9);
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(27, 132, 255, .2);
}

/* Navigation */
#sidebar nav {
    padding: 20px 14px;
}

/* Home link */
#sidebar nav > a:first-child {
    height: 46px;
    margin-bottom: 24px;
    padding: 0 13px;
    border-radius: 8px;
    background: #1b84ff !important;
    color: #fff !important;
    font-size: 13px;
    transition: .2s ease;
}

#sidebar nav > a:first-child svg {
    fill: #fff;
    width: 21px;
}

#sidebar nav > a:first-child:hover {
    background: #056ee9 !important;
}

/* Menu groups */
#sidebar .element {
    width: 100%;
    padding: 0;
    margin-bottom: 5px;
    gap: 0;
    border-radius: 8px;
    background: transparent !important;
    box-shadow: none !important;
    transition: background .2s ease;
}

/* Main menu row */
#sidebar .element > div:first-child {
    min-height: 45px;
    padding: 0 12px;
    border-radius: 8px;
    transition: .2s ease;
}

/* Menu hover */
#sidebar .element > div:first-child:hover {
    background: #1d2638;
}

/* Menu icons */
#sidebar .section-icon {
    width: 21px !important;
    height: 21px !important;
    fill: #929db1 !important;
    transition: .2s ease;
}

/* Menu titles */
#sidebar .element span {
    color: #a1a9b8 !important;
    font-size: 13px;
    font-weight: 500;
    transition: .2s ease;
}

#sidebar .element > div:first-child:hover span {
    color: #fff !important;
}

#sidebar .element > div:first-child:hover .section-icon {
    fill: #fff !important;
}

/* Arrow */
#sidebar .element > div:first-child > svg:last-child {
    width: 13px;
    height: 13px;
    fill: #7e8a9f;
}

/* Submenu */
#sidebar .element > div:nth-child(2) {
    padding: 5px 12px 10px 5px;
    margin-right: 18px;
    width: calc(100% - 18px);
}

/* Submenu items */
#sidebar .sub-menu-item {
    padding: 9px 10px;
    border-radius: 6px;
    gap: 10px;
    transition: .2s ease;
}

#sidebar .sub-menu-item:hover {
    background: #1d2638;
}

#sidebar .sub-menu-item svg {
    width: 7px;
    height: 7px;
    fill: #1b84ff !important;
}

#sidebar .sub-menu-item a {
    color: #929db1 !important;
    font-size: 12px;
    transition: .2s ease;
}

#sidebar .sub-menu-item:hover a {
    color: #fff !important;
}

/* Role and permission headings */
#sidebar .element span.text-xs {
    color: #1b84ff !important;
    padding: 8px 10px 3px;
}

/* Divider */
#sidebar .element .border-t {
    border-color: #303b50 !important;
}

/* Logout */
#sidebar nav > div:last-child {
    border-color: #303b50 !important;
    margin-top: 25px;
}

#sidebar nav > div:last-child a {
    min-height: 43px;
    background: transparent !important;
    border: 1px solid #3b2935;
    border-radius: 8px;
    color: #f1416c !important;
    font-size: 13px;
}

#sidebar nav > div:last-child a:hover {
    background: rgba(241, 65, 108, .1) !important;
}

/* Responsive */
@media (max-width: 1024px) {
    #sidebar {
        width: 260px;
    }
}


</style>

    
    
    @stack('styles')
</head>
<body>

  
    <div class="w-12/12 flex min-h-screen transition-all">
        
        <!-- ===== اوورلی ===== -->
        <div id="overlay" class="overlay" onclick="closeSidebar()"></div>

        <!-- ============================================================ -->
        <!-- ===== سایدبار ===== -->
        <!-- ============================================================ -->
        <aside id="sidebar" class="w-2/12 sidebar fixed top-0 right-0 h-full bg-red-500 shadow-xl transition-all z-999 overflow-y-auto [&::-webkit-scrollbar]:hidden [scrollbar-width:none]">
            
            <!-- لوگو -->
            <div class="flex items-center gap-3 px-6 py-6 bg-gradient-to-r from-[#142033] to-[#142033]">
                <div class="w-11 h-11 rounded-2xl logo-gradient flex items-center justify-center text-white text-xl shadow-lg shadow-[#1B84FF]/25">
                    <i class="fas fa-weight-scale"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-white">باسکول درختی </h1>
                    <p class="text-xs text-[#9A9CAE]">ترازو و باسکول</p>
                </div>
            </div>

            <!-- منو -->
            <nav class="px-4 py-6">
                <a href="{{url('/')}}" class="text-md font-semibold w-full h-14 rounded-[13px] bg-red-500 max-lg:bg-white hover:bg-white/5 text-[#9A9CAE] uppercase tracking-wider px-3 mb-4 flex gap-1 text-center items-center"> 
                    <svg class='w-7 fill-[#9CA3AF]' viewBox="-1.6 -1.6 19.20 19.20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1fd699" stroke-width="0.00016" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.032"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z"></path> </g></svg>
                    <span>رفتن به خانه</span>
                </a>


                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-red-500 max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                              <svg  class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                <span class="text-[#9A9CAE]">آدرس</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center' >
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('address.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد آدرس جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('address.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست آدرس ها</a>
                            </div>
                        </div>
                    </div>
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#1B84FF">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">سفارش</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('order.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست سفارش ها</a>
                            </div>
                        </div>
                    </div>


                @can('admin_dashboard',['admin1','admin2'])

                    <!-- =====  محصولات ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                               <!-- <svg class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256 0c-4.7 0-9.4 1-13.7 3L28.6 82.4C11.4 89.2 0 105.9 0 124.6V387.4c0 18.7 11.4 35.4 28.6 42.2l213.7 79.4c4.3 2 9 3 13.7 3s9.4-1 13.7-3l213.7-79.4C500.6 422.8 512 406.1 512 387.4V124.6c0-18.7-11.4-35.4-28.6-42.2L269.7 3C265.4 1 260.7 0 256 0zM48 152.6l184-68.4v144.4L48 297V152.6zm232-68.4l184 68.4V297l-184-68.4V84.2zM232 472.2L48 403.8V312l184 68.4v91.8zm48 0v-91.8L464 312v91.8l-184 68.4z"/>
                                </svg> -->
                                <svg class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: #000000;overflow: hidden;" version="1.1" viewBox="0 0 1024 1024"><path d="M34.014 383.659l459.588 280.303a35.328 35.328 0 0 0 36.83 0l459.554-280.303a35.31 35.31 0 0 0 0-60.365L530.398 43.059a35.396 35.396 0 0 0-36.796 0L34.014 323.294a35.362 35.362 0 0 0 0 60.365zM953.805 483.499L512 752.896 70.195 483.499a34.133 34.133 0 1 0-35.533 58.3l459.572 280.234a34.236 34.236 0 0 0 35.532 0l459.589-280.235a34.15 34.15 0 0 0-35.55-58.3zM953.805 642.577L512 911.974 70.195 642.577a34.133 34.133 0 1 0-35.533 58.3L494.234 981.11a34.236 34.236 0 0 0 35.532 0l459.589-280.234a34.15 34.15 0 0 0-35.55-58.3z" /></svg>
                                <span class="text-[#9A9CAE]">محصولات</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('product.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد محصول جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('product.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست محصولات</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  دسته بندی ها ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#059669">
                                    <path d="M184.1 59.8c-7.7-9.4-19.5-11.7-29.9-5.4L8.6 132.8c-8 5.1-13.3 14.3-13.3 24.5v198.2c0 10.2 5.3 19.4 13.3 24.5l145.6 78.3c10.4 6.3 22.2 3.9 29.9-5.4L306.7 256 184.1 59.8zM344 349.8L366.5 304H472V208H366.5L344 162.2 472 80V48H344.4L296 16 247.6 48H128v32h64.4L344 128v221.8zM306.7 256L418.5 460.2c7.7 9.4 19.5 11.7 29.9 5.4l145.6-78.3c8-5.1 13.3-14.3 13.3-24.5V164.5c0-10.2-5.3-19.4-13.3-24.5L448.4 61.8c-10.4-6.3-22.2-3.9-29.9 5.4L306.7 256z"/>
                                </svg> -->
                                <svg class='section-icon fill-[#9CA3AF]'  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-[#9A9CAE]">دسته بندی ها</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('category.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE] ">ایجاد دسته بندی جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('category.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست دسته بندی ها</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  برند ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#d97706">
                                    <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">برند</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('brand.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد برند جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('brand.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست برند</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  تنظیمات ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <!-- <svg class='size-4 fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M256 0c17 0 33.6 1.7 49.8 4.8c7.9 1.5 21.8 6.1 29.4 20.1c2 3.7 3.6 7.6 4.6 11.8l9.3 38.5C350.5 81 360.3 86.7 366 85l38-11.2c4-1.2 8.1-1.8 12.2-1.9c16.1-.5 27 9.4 32.3 15.4c22.1 25.1 39.1 54.6 49.9 86.3c2.6 7.6 5.6 21.8-2.7 35.4c-2.2 3.6-4.9 7-8 10L459 246.3c-4.2 4-4.2 15.5 0 19.5l28.7 27.3c3.1 3 5.8 6.4 8 10c8.2 13.6 5.2 27.8 2.7 35.4c-10.8 31.7-27.8 61.1-49.9 86.3c-5.3 6-16.3 15.9-32.3 15.4c-4.1-.1-8.2-.8-12.2-1.9L366 427c-5.7-1.7-15.5 4-16.9 9.8l-9.3 38.5c-1 4.2-2.6 8.2-4.6 11.8c-7.7 14-21.6 18.5-29.4 20.1C289.6 510.3 273 512 256 512s-33.6-1.7-49.8-4.8c-7.9-1.5-21.8-6.1-29.4-20.1c-2-3.7-3.6-7.6-4.6-11.8l-9.3-38.5c-1.4-5.8-11.2-11.5-16.9-9.8l-38 11.2c-4 1.2-8.1 1.8-12.2 1.9c-16.1 .5-27-9.4-32.3-15.4c-22-25.1-39.1-54.6-49.9-86.3c-2.6-7.6-5.6-21.8 2.7-35.4c2.2-3.6 4.9-7 8-10L53 265.7c4.2-4 4.2-15.5 0-19.5L24.2 218.9c-3.1-3-5.8-6.4-8-10C8 195.3 11 181.1 13.6 173.6c10.8-31.7 27.8-61.1 49.9-86.3c5.3-6 16.3-15.9 32.3-15.4c4.1 .1 8.2 .8 12.2 1.9L146 85c5.7 1.7 15.5-4 16.9-9.8l9.3-38.5c1-4.2 2.6-8.2 4.6-11.8c7.7-14 21.6-18.5 29.4-20.1C222.4 1.7 239 0 256 0zM218.1 51.4l-8.5 35.1c-7.8 32.3-45.3 53.9-77.2 44.6L97.9 120.9c-16.5 19.3-29.5 41.7-38 65.7l26.2 24.9c24 22.8 24 66.2 0 89L59.9 325.4c8.5 24 21.5 46.4 38 65.7l34.6-10.2c31.8-9.4 69.4 12.3 77.2 44.6l8.5 35.1c24.6 4.5 51.3 4.5 75.9 0l8.5-35.1c7.8-32.3 45.3-53.9 77.2-44.6l34.6 10.2c16.5-19.3 29.5-41.7 38-65.7l-26.2-24.9c-24-22.8-24-66.2 0-89l26.2-24.9c-8.5-24-21.5-46.4-38-65.7l-34.6 10.2c-31.8 9.4-69.4-12.3-77.2-44.6l-8.5-35.1c-24.6-4.5-51.3-4.5-75.9 0zM208 256a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 96a96 96 0 1 1 0-192 96 96 0 1 1 0 192z"/></svg> -->
                                    <svg class='size-5 fill-[#9CA3AF]'  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                        <g id="style=stroke">
                                        <g id="setting">
                                        <path id="vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M12 9.75C10.7574 9.75 9.75 10.7574 9.75 12C9.75 13.2426 10.7574 14.25 12 14.25C13.2426 14.25 14.25 13.2426 14.25 12C14.25 10.7574 13.2426 9.75 12 9.75ZM8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12Z" />
                                        <path id="vector (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M9.60347 3.77018C9.3358 3.32423 8.77209 3.18551 8.35347 3.43457L8.34256 3.44105L6.61251 4.43096C6.06514 4.74375 5.8763 5.45289 6.1894 5.9948L5.54 6.37001L6.18888 5.99391C6.72395 6.91704 6.86779 7.92882 6.38982 8.75823C5.91192 9.58753 4.96479 9.97001 3.9 9.97001C3.26678 9.97001 2.75 10.4917 2.75 11.12V12.88C2.75 13.5084 3.26678 14.03 3.9 14.03C4.96479 14.03 5.91192 14.4125 6.38982 15.2418C6.86773 16.0711 6.72398 17.0827 6.18909 18.0058C5.87642 18.5476 6.06491 19.2561 6.6121 19.5688L8.35352 20.5654C8.77214 20.8144 9.33577 20.6758 9.60345 20.2299L9.71093 20.0442C10.2458 19.1214 11.052 18.4925 12.0087 18.4925C12.9662 18.4925 13.77 19.1219 14.3 20.0458C14.3002 20.0462 14.3004 20.0466 14.3007 20.047L14.4065 20.2298C14.6742 20.6758 15.2379 20.8145 15.6565 20.5655L15.6674 20.559L17.3975 19.5691C17.9434 19.2571 18.1351 18.5578 17.8198 18.0038C17.2858 17.0813 17.1426 16.0705 17.6202 15.2418C18.0981 14.4125 19.0452 14.03 20.11 14.03C20.7432 14.03 21.26 13.5084 21.26 12.88V11.12C21.26 10.4868 20.7384 9.97001 20.11 9.97001C19.0452 9.97001 18.0981 9.58753 17.6202 8.75824C17.1423 7.92899 17.286 6.91744 17.8208 5.99445C18.1336 5.45258 17.9451 4.74391 17.3979 4.43119L15.6565 3.43466C15.2379 3.1856 14.6742 3.32423 14.4065 3.77019L14.2991 3.95579C13.7642 4.8786 12.958 5.50751 12.0012 5.50751C11.0439 5.50751 10.2402 4.87825 9.71021 3.95455C9.70992 3.95403 9.70962 3.95352 9.70933 3.95301L9.60347 3.77018ZM7.59248 2.14193C8.75191 1.45656 10.2226 1.87704 10.8946 3.00654L10.8991 3.01421L11.0091 3.20423L11.0107 3.20701C11.3807 3.85247 11.7666 4.00751 12.0012 4.00751C12.237 4.00751 12.6259 3.85115 13.0009 3.20423C13.001 3.20412 13.0009 3.20434 13.0009 3.20423L13.1154 3.00651C13.7874 1.877 15.2581 1.45656 16.4175 2.14193L18.1421 3.12883C19.4147 3.85604 19.8463 5.48713 19.1194 6.74522L19.1189 6.74611C18.7439 7.39298 18.8028 7.8062 18.9198 8.00929C19.0369 8.21249 19.3648 8.47001 20.11 8.47001C21.5616 8.47001 22.76 9.65323 22.76 11.12V12.88C22.76 14.3317 21.5768 15.53 20.11 15.53C19.3648 15.53 19.0369 15.7875 18.9198 15.9907C18.8028 16.1938 18.7439 16.607 19.1189 17.2539L19.1212 17.2579C19.8444 18.5235 19.4157 20.1431 18.1425 20.871C18.1424 20.871 18.1426 20.8709 18.1425 20.871L16.4174 21.8581C15.258 22.5434 13.7874 22.123 13.1154 20.9935L13.1109 20.9858L13.0009 20.7958L12.9993 20.793C12.6293 20.1476 12.2434 19.9925 12.0087 19.9925C11.773 19.9925 11.3841 20.1489 11.0091 20.7958C11.009 20.7959 11.0091 20.7957 11.0091 20.7958L10.8946 20.9935C10.2226 22.123 8.75199 22.5434 7.59257 21.8581L5.8679 20.8712C5.86776 20.8711 5.86803 20.8713 5.8679 20.8712C4.59558 20.1439 4.16378 18.5128 4.8906 17.2548L4.89112 17.2539C5.26605 16.607 5.20721 16.1938 5.09018 15.9907C4.97308 15.7875 4.64521 15.53 3.9 15.53C2.43322 15.53 1.25 14.3317 1.25 12.88V11.12C1.25 9.66837 2.43322 8.47001 3.9 8.47001C4.64521 8.47001 4.97308 8.21249 5.09018 8.00929C5.20721 7.8062 5.26605 7.39298 4.89112 6.74611L4.8906 6.74522C4.16378 5.48726 4.59518 3.85639 5.86749 3.12906L7.59248 2.14193Z"/>
                                        </g>
                                        </g>
                                    </svg>
                                <span class="text-[#9A9CAE]">تنظیمات</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('main_store.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE] text-nowrap">ایجاد استوری</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('store.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE] text-nowrap">ایجاد محتوا برای استوری</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('store.index')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE] text-nowrap text-[14px]">لیست محتوای استوری ها</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('main_store.index')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE] text-nowrap">لیست استوری ها</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  کاربر ===== -->
                    <div class='element flex flex-col items-center gap-2 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white hover:bg-white/5 shadow-sm hover:shadow-md transition-all mb-3'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-white text-base font-medium'>
                                <svg class='section-icon fill-[#9CA3AF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#059669">
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                </svg>
                                <span class="text-[#9A9CAE]">کاربر</span>
                            </div>
                            <svg class='size-4 fill-[#9A9CAE] transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg> -->
                                <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('user.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد کاربر جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-white flex p-2 text-base gap-2 sub-menu-item items-center'>
                            <svg class = "size-4 fill-[#059669]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                                <a href="{{route('user.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست کاربر</a>
                            </div>
                            @can('role_permision',['admin1'])
                                <div class="w-full border-t border-[#DBDFE9] my-2"></div>
                                <span class='text-xs font-semibold text-[#1B84FF] text-start mt-1'>نقش</span>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item items-center'>
                                    <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="{{route('role.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد نقش</a>
                                </div>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item items-center'>
                                    <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="{{route('role.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست نقش ها</a>
                                </div>
                                <span class='text-xs font-semibold text-[#1B84FF] text-start mt-1'>دسترسی</span>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item items-center'>
                                    <svg class='size-4 fill-[#059669]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="{{route('permision.create')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">ایجاد دسترسی</a>
                                </div>
                                <div class='w-12/12 justify-start text-white mr-3 flex p-2 text-base gap-2 sub-menu-item items-center'>
                                    <svg class='size-4 fill-[#1B84FF]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="{{route('permision.list')}}" class="hover:text-white transition-colors font-medium text-[#9A9CAE]">لیست دسترسی ها</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endcan

                <!-- ===== دکمه خروج ===== -->
                <div class="mt-6 pt-4 ">
                    <a href="{{ route('user.logOut')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#142033] max-lg:bg-white shadow-sm text-[#dc2626] hover:text-[#ff4444] transition-all">
                        <svg class='size-5 fill-[#dc2626]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>
                        <span class="font-medium">خروج از حساب</span>
                    </a>
                </div>
                
            </nav>
        </aside>

        <!-- ============================================================ -->
        <!-- =====  اصلی ===== -->
        <!-- ============================================================ -->
        <main class="main-content w-full lg:w-10/12 transition-all bg-[#FCFCFC]">
 
<header dir="rtl"
    class="sticky top-0 z-10 w-full bg-white/95 backdrop-blur-xl border-b border-slate-100">

    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-10">

        <div class="min-h-[78px] flex items-center justify-between gap-4">

            {{-- سمت راست: لوگو و منو --}}
            <div class="flex items-center gap-3 lg:gap-9 shrink-0">


                   {{-- همبرگر موبایل --}}
                <button type="button"
                    onclick="toggleSidebar()"
                    id="menuBlockliet"
                    aria-label="باز کردن منو"
                    class="lg:hidden size-10 rounded-xl flex flex-col
                           items-center justify-center gap-[5px]
                           border border-slate-200 bg-white
                           hover:border-[#FF9018] hover:bg-orange-50
                           transition-all duration-200">

                    <span class="w-[19px] h-[2px] rounded-full bg-[#142033]
                                 transition-all duration-300"></span>

                    <span class="w-[19px] h-[2px] rounded-full bg-[#142033]
                                 transition-all duration-300"></span>

                    <span class="w-[19px] h-[2px] rounded-full bg-[#142033]
                                 transition-all duration-300"></span>

                </button>

                <a href=""
                    class="flex items-center shrink-0 max-lg:hidden">
                    <img src="{{ asset('assets/img/file_00000000527881f4835e03acef97b338.png') }}"
                        alt="باسکول درختی"
                        class="w-[105px] sm:w-[120px] max-h-[55px] object-contain ">
                </a>
               

             

              

            </div>


             <a href=""
                    class="flex items-center shrink-0 lg:hidden">
                    <img src="{{ asset('assets/img/file_00000000527881f4835e03acef97b338.png') }}"
                        alt="رینسو"
                        class="w-[105px] sm:w-[120px] max-h-[55px] object-contain">
                </a>

            {{-- وسط: جستجوی دسکتاپ --}}
            <form action=""
                method="GET"
                dir="rtl"
                class="hidden md:flex flex-1 max-w-[420px] mx-4">

                <div class="group w-full h-[46px] flex items-center gap-3
                    px-4 rounded-2xl bg-slate-50
                    border border-slate-100
                    hover:border-slate-200
                    focus-within:bg-white
                    focus-within:border-[#FF9018]
                    focus-within:shadow-[0_0_0_4px_rgba(255,144,24,0.08)]
                    transition-all duration-200">

                    <svg viewBox="0 0 24 24"
                        class="size-5 shrink-0 text-slate-400 group-focus-within:text-[#FF9018]"
                        fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m16 16 4 4"/>
                    </svg>

                    <input type="text"
                        name="search"
                        dir="rtl"
                        value="{{ $searchTitle ?? '' }}"
                        placeholder="دنبال چه چیزی می‌گردی؟"
                        class="w-full min-w-0 bg-transparent outline-none
                            text-sm text-[#142033]
                            placeholder:text-slate-400">

                    <button type="submit"
                        class="text-xs font-bold text-[#FF9018]
                            hover:text-[#142033] transition-colors shrink-0">
                        جستجو
                    </button>

                </div>
            </form>


            {{-- سمت چپ: حساب کاربری و جستجوی موبایل --}}
            <div class="flex items-center gap-2 shrink-0  ">

                {{-- جستجوی موبایل --}}
                <button type="button"
                    onclick="searchPopup('open')"
                    aria-label="جستجو"
                    class="md:hidden size-10 rounded-xl flex items-center
                        justify-center bg-slate-50 border border-slate-100
                        hover:border-orange-200 hover:bg-orange-50
                        transition-all duration-200">

                    <svg viewBox="0 0 24 24"
                        class="size-5"
                        fill="none" stroke="#142033"
                        stroke-width="1.8" stroke-linecap="round">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m16 16 4 4"/>
                    </svg>

                </button>


                @if(Auth::check())

                    {{-- پروفایل کاربر --}}
                    <div class="relative group">

                        <button type="button"
                            class="flex items-center gap-2 p-1.5
                                rounded-xl border border-transparent
                                hover:border-slate-200 hover:bg-slate-50
                                transition-all duration-200">

                                <img src="{{asset('assets/img/file_0000000032ac81f499cdabd6758572c0.png')}}"
                                    class="size-9 rounded-xl object-cover"
                                    alt="پروفایل">
                            <!-- @if(!Auth::user()->main_image)
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->main_image) }}"
                                    class="size-9 rounded-xl object-cover"
                                    alt="پروفایل">
                            @endif -->

                            <div class="hidden sm:block text-right">
                                <span class="block text-xs font-bold text-[#142033]">
                                    {{ Auth::user()->name }}
                                    {{ Auth::user()?->family }}
                                </span>
                                <span class="block text-[10px] text-slate-400 mt-1">
                                    حساب کاربری من
                                </span>
                            </div>

                            <svg viewBox="0 0 24 24"
                                class="hidden sm:block size-4 text-slate-400
                                    transition-transform duration-200
                                    group-hover:rotate-180"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="m7 10 5 5 5-5"/>
                            </svg>

                        </button>


                        {{-- منوی کشویی پروفایل --}}
                        <div class="invisible opacity-0 translate-y-2
                            pointer-events-none
                            group-hover:visible group-hover:opacity-100
                            group-hover:translate-y-0 group-hover:pointer-events-auto
                            group-focus-within:visible
                            group-focus-within:opacity-100
                            group-focus-within:translate-y-0
                            group-focus-within:pointer-events-auto
                            transition-all duration-200
                            absolute left-0 top-full pt-3
                            w-[250px] z-50">

                            <div class="bg-white rounded-2xl
                                border border-slate-100
                                shadow-[0_15px_45px_rgba(20,32,51,0.12)]
                                p-3">

                                <div class="px-3 py-3 border-b border-slate-100">
                                    <p class="text-sm font-bold text-[#142033]">
                                        {{ Auth::user()->name }}
                                        {{ Auth::user()?->family }}
                                    </p>
                                    <p class="text-xs text-slate-400 mt-1">
                                        خوش آمدی!
                                    </p>
                                </div>

                                <a href="{{route('user.profile')}}"
                                    class="flex items-center gap-3 p-3 mt-2
                                        rounded-xl text-sm text-slate-600
                                        hover:bg-orange-50 hover:text-[#FF9018]
                                        transition-colors">
                                    پروفایل من
                                </a>

                                <a href="{{route('user.profile')}}"
                                    class="flex items-center gap-3 p-3
                                        rounded-xl text-sm text-slate-600
                                        hover:bg-orange-50 hover:text-[#FF9018]
                                        transition-colors">
                                    تنظیمات حساب
                                </a>

                                <div class="border-t border-slate-100 mt-2 pt-2">
                                    <a href="{{ route('user.logOut')}}"
                                        class="block p-3 rounded-xl text-sm
                                            text-rose-500 hover:bg-rose-50
                                            transition-colors">
                                        خروج از حساب کاربری
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                @else

                    {{-- ورود و ثبت نام --}}
                    <a href=""
                        class="h-10 px-3 sm:px-5 rounded-xl
                            flex items-center justify-center gap-2
                            bg-[#142033] text-white
                            hover:bg-[#FF9018]
                            transition-all duration-300">

                        <svg viewBox="0 0 24 24"
                            class="size-[17px]"
                            fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M5 21v-2a7 7 0 0 1 14 0v2"/>
                        </svg>

                        <span class="text-xs sm:text-sm font-bold whitespace-nowrap">
                            ورود | ثبت نام
                        </span>

                    </a>

                @endif

            </div>

        </div>
    </div>


    {{-- پاپ آپ جستجوی موبایل؛ شناسه‌ها و توابع حفظ شده‌اند --}}
    <div id="searchP"
        dir="rtl"
        onclick="if(event.target === this) searchPopup('close')"
        class="fixed inset-0 z-[99999] invisible opacity-0
            bg-[#142033]/40 backdrop-blur-sm
            transition-all duration-300">

        <div id="searchSection"
            class="w-full bg-white rounded-b-[28px]
                shadow-[0_15px_50px_rgba(20,32,51,0.15)]
                -translate-y-full
                transition-transform duration-300">

            <div class="max-w-2xl mx-auto p-5 sm:p-7">

                <div class="flex items-center justify-between mb-6">

                    <div>
                        <h3 class="text-lg font-bold text-[#142033]">
                            جستجو در رینسو
                        </h3>

                        <p class="text-xs text-slate-400 mt-1">
                            سریع‌تر به چیزی که می‌خوای برس
                        </p>
                    </div>

                    <button type="button"
                        onclick="searchPopup('close')"
                        aria-label="بستن جستجو"
                        class="size-9 rounded-xl bg-slate-50
                            flex items-center justify-center
                            hover:bg-orange-50 transition-colors">

                        <svg viewBox="0 0 24 24"
                            class="size-5"
                            fill="none" stroke="#142033"
                            stroke-width="1.8">
                            <path d="m18 6-12 12M6 6l12 12"/>
                        </svg>

                    </button>

                </div>

                <form action=""
                    method="GET" dir="rtl">

                    <div class="flex items-center gap-3 p-2
                        rounded-2xl border border-slate-200
                        focus-within:border-[#FF9018]
                        focus-within:shadow-[0_0_0_4px_rgba(255,144,24,0.08)]
                        transition-all">

                        <input type="text"
                            name="search"
                            dir="rtl"
                            value="{{ $searchTitle ?? '' }}"
                            placeholder="عبارت مورد نظرت رو بنویس..."
                            class="w-full min-w-0 p-2 bg-transparent
                                outline-none text-sm text-[#142033]
                                placeholder:text-slate-400">

                        <button type="submit"
                            class="shrink-0 px-5 py-3 rounded-xl
                                bg-[#FF9018] text-white
                                text-sm font-bold
                                hover:bg-[#142033] transition-colors">
                            جستجو
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>

</header>

            <!-- <header class="w-full bg-white shadow-lg sticky top-0 z-40 transition-all">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
                    
                    <button onclick="toggleSidebar()" class="mobile-menu-btn p-2.5 rounded-xl bg-white shadow-sm text-[#1a2a3a] hover:bg-[#1B84FF] hover:text-white hover:shadow-md transition-all lg:hidden">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <div class="flex items-center gap-3 sm:gap-4 flex-1 max-w-xs sm:max-w-md mx-2 sm:mx-4">
                        <div class="relative flex-1 search-box">
                            <i class="fas fa-search absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 text-[#9A9CAE] text-xs sm:text-sm"></i>
                            <input type="text" placeholder="جستجوی ..." class="w-full pr-9 sm:pr-11 pl-3 sm:pl-4 py-2 sm:py-2.5 rounded-xl text-[#1e293b] placeholder-[#9A9CAE] focus:outline-none text-xs sm:text-sm">
                        </div>

                    </div>+

                    <div class="flex items-center gap-2 sm:gap-4">
                        
                        <button class="relative p-2 sm:p-2.5 rounded-xl bg-white shadow-sm text-[#9A9CAE] hover:bg-[#1B84FF] hover:text-white hover:shadow-md transition-all">
                            <i class="fas fa-bell text-sm sm:text-base"></i>
                            <span class="absolute -top-1 -left-1 w-3 h-3 bg-red-500 rounded-full badge-dot border-2 border-white"></span>
                        </button>

                        <div class="flex items-center gap-2 sm:gap-3 pr-2 sm:pr-4 border-r border-[#DBDFE9]">
                            <div class="text-left hidden sm:block">
                                <p class="text-xs sm:text-sm font-bold text-[#1e293b]"> {{Auth::user()->name}} </p>
                                <p class="text-[10px] sm:text-xs text-[#9A9CAE]"> {{Auth::user()->roles[0]->fa_title}} </p>
                            </div>
                            <a href="{{route('user.profile')}}" id="header_avatar" class="w-9 h-9 sm:w-11 sm:h-11 rounded-full avatar-gradient flex items-center justify-center text-white font-bold shadow-lg shadow-[#1B84FF]/25 cursor-pointer hover:scale-105 transition-all text-sm sm:text-base overflow-hidden p-1">
                                @if(Auth::user()->path!=null)
                                    <img class='rounded-full w-full h-full object-cover' src="{{asset('storage/user_medias/'.Auth::user()->path)}}" alt="">
                                @else
                                    {{Auth::user()->name[0]}}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </header> -->

            <!-- ===== محتوای داشبورد ===== -->
            <div class=" p-3 lg:p-8 bg-white ">
                @yield('content')
                
                <!-- ===== فوتر ===== -->
                <div class="px-3 sm:px-5 lg:px-8 pb-4 sm:pb-6 mt-10">
                    <div class="footer-divider"></div>
                    <div class="text-center text-[10px] sm:text-xs pt-4 sm:pt-6">
                        <p>© ۱۴۰۳ تمامی حقوق محفوظ است | باسکول درختی - پنل مدیریت </p>
                    </div>
                </div>
            </div>

             <div class="w-full px-3 mx-auto fixed bottom-2 -translate-x-1/2 left-1/2">

        <div
            class="relative h-[70px] bg-white lg:hidden rounded-[24px]
                    border border-slate-100
                    shadow-[0_-5px_35px_rgba(20,32,51,0.12)]
                    flex items-center justify-around px-2">

            {{-- خانه --}}
            <a href="{{url('/')}}" id="homeIcon"
                class="flex-1 h-full flex flex-col items-center
                       justify-center gap-1.5 transition-all">

                <svg viewBox="0 0 24 24" class="size-[22px]" fill="none"
                    stroke="{{ Route::is('home') ? '#FF9018' : '#94A3B8' }}" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1z" />
                </svg>

                <span
                    class="text-[10px] font-bold
                    {{ Route::is('home') ? 'text-[#FF9018]' : 'text-slate-400' }}">
                    خانه
                </span>
            </a>


            {{-- علاقه مندی --}}
            <a href = "#"
                class="flex-1 h-full flex flex-col items-center
                       justify-center gap-1.5 cursor-pointer">

                <!-- <svg viewBox="0 0 24 24" class="size-[22px]" fill="none" stroke="#94A3B8" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8l1.1 1.1L12 21l7.8-7.5 1.1-1.1a5.5 5.5 0 0 0-.1-7.8z" />
                </svg> -->
                <svg class = "size-[22px]" fill="#94A3B8" stroke="#94A3B8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M520.6 120.9l0 0c18.7 29.6 .3 66.6-29.2 70.6c-2.6 .3-5.2 .5-7.9 .5c-16.5 0-31.2-7.2-41.5-18.5c-6.1-6.7-14.7-10.5-23.7-10.5s-17.6 3.8-23.7 10.5c-10.2 11.2-24.8 18.4-41.4 18.4c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C254 184.8 239.3 192 222.7 192c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C123.6 184.8 109 192 92.4 192c-2.6 0-5.2-.2-7.9-.5c-29.3-4-47.7-41-29.1-70.6l0 0L111.6 32H464.4l56.2 88.9zM483.4 224c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-11.9c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-12c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.8 0 37.8-6.5 52.3-17.3c4.7-3.5 9-7.4 12.9-11.7c3.9 4.3 8.3 8.3 13 11.8c14.5 10.7 32.5 17.2 52.2 17.2zM80 256c-8.8 0-16 7.2-16 16v80 16 16 64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 368 352 272c0-8.8-7.2-16-16-16s-16 7.2-16 16v80H96V272c0-8.8-7.2-16-16-16zM96 384H480v64c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384z"/></svg>
                <span class="text-[10px] font-medium text-slate-400">
                    فروشگاه
                </span>
            </a>


            {{-- اسکنر مرکزی --}}
          

            {{-- سفارشات --}}
            <a href = "{{route('order.list')}}" class="flex-1 h-full flex flex-col items-center
                       justify-center gap-1.5 cursor-pointer relative"
                 id="orderLink">

                    <span
                        class="absolute top-2 right-1/2 translate-x-1/2
                        size-1.5 rounded-full bg-[#FF9018]
                        {{ Auth::check() && isset($orders) && count($orders) ? 'scale-100' : 'scale-0' }}">
                    </span>

                <svg viewBox="0 0 24 24" class="size-[22px]" fill="none" stroke="#94A3B8" stroke-width="1.7"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 3h12v18l-2-1.5L12 21l-4-1.5L6 21z" />
                    <path d="M9 8h6M9 12h6M9 16h3" />
                </svg>

                <span class="text-[10px] font-medium text-slate-400">
                    سفارشات
                </span>
            </a>


            {{-- پروفایل --}}
            <a href = "{{route('user.profile')}}" id="userIcon"
                class="flex-1 h-full flex flex-col items-center
                       justify-center gap-1.5 relative cursor-pointer">

                @if (Auth::check())
                    <img src="{{asset('assets/img/file_0000000032ac81f499cdabd6758572c0.png')}}"
                        class="size-[25px] rounded-full object-cover
                               ring-2 ring-slate-100"
                        alt="پروفایل" onclick="pup_up_profil('open')">
                @else
                    <a href="{{ route('login') }}">
                        <svg viewBox="0 0 24 24" class="size-[22px]" fill="none"
                            stroke="{{ Route::is('user.profile') || Route::is('dashboard') || Route::is('signup') || Route::is('login') || Route::is('forget_password') || Route::is('set_password') ? '#FF9018' : '#94A3B8' }}"
                            stroke-width="1.8" stroke-linecap="round">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M5 21v-2a7 7 0 0 1 14 0v2" />
                        </svg>
                    </a>
                @endif

                <span
                    class="text-[10px] font-medium
                    {{ Route::is('user.profile') ||
                    Route::is('dashboard') ||
                    Route::is('signup') ||
                    Route::is('login') ||
                    Route::is('forget_password') ||
                    Route::is('set_password')
                        ? 'text-[#FF9018] font-bold'
                        : 'text-slate-400' }}">
                    پروفایل
                </span>


                {{-- اینجا کل بلوک فعلی #pup_up_profile را منتقل کن --}}
                {{-- از div مربوط به pup_up_profile تا انتهای آن --}}

    </a>

        </div>
    </div>
</footer>
{{-- Desktop Footer --}}

            
        </main>
    </div>
                               


                               
    <!-- ============================================================ -->
    <!-- ===== Scripts ===== -->
    <!-- ============================================================ -->
    <script>
        // =====================================
        // 1. منو موبایل
        // =====================================
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.toggle('open');
            overlay?.classList.toggle('active');
        }

        function closeSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.remove('open');
            overlay?.classList.remove('active');
        }

        // =====================================
        // 2. اکتیو کردن منو
        // =====================================
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.getAttribute('href') || this.getAttribute('href') === '#') {
                    e.preventDefault();
                }
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            });
        });

        // =====================================
        // 3. ریسایز
        // =====================================
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });

        let element = document.querySelectorAll('.element');
        element.forEach((el) => {
            el.children[0].addEventListener('click', () => {
                if (el.children[1].classList.contains('max-h-0')) {
                    el.children[1].classList.remove('max-h-0')
                    el.children[1].classList.add('max-h-[700px]')
                    el.children[0].children[1].classList.remove('rotate-0')
                    el.children[0].children[1].classList.add('rotate-180')
                } else {
                    el.children[1].classList.remove('max-h-[700px]')
                    el.children[1].classList.add('max-h-0')
                    el.children[0].children[1].classList.remove('rotate-180')
                    el.children[0].children[1].classList.add('rotate-0')
                }
            })
        })
    </script>
    
    @stack('scripts')

</body>
</html>