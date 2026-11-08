@extends('dashboard')

@section('title','لیست کاربران')
@section('content')

<style>
    :root {
        --gold: #FBC830;
        --navy: #0E2E48;
        --white: #FFFFFF;

        --gold-soft: #FDD968;
        --gold-deep: #E0A800;
        --gold-glow: rgba(251, 200, 48, 0.25);

        --navy-line: rgba(14, 46, 72, 0.08);

        --text-primary: #0E2E48;
        --text-muted: #5A6B7B;
        --text-placeholder: #9AA5B1;

        --bg-page: #FFFFFF;
        --bg-soft: #F7F8FA;

        --shadow-sm: 0 2px 8px rgba(14, 46, 72, 0.06);
        --shadow-md: 0 8px 24px rgba(14, 46, 72, 0.10);
        --shadow-gold: 0 8px 24px rgba(251, 200, 48, 0.30);

        --radius-sm: 10px;
        --radius-md: 14px;
        --radius-lg: 20px;
    }

    /* ===== کارت اصلی ===== */
    .vafadar-table-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    .vafadar-table-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .vafadar-table-card:hover { box-shadow: var(--shadow-md); }

    /* ===== هدر جدول ===== */
    .vafadar-table-header {
        background: var(--bg-soft);
        border-bottom: 2px solid var(--navy-line);
    }
    .vafadar-table-header th {
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 20px;
        text-align: right;
    }

    /* ===== ردیف‌ها ===== */
    .vafadar-table-row {
        border-bottom: 1px solid var(--navy-line);
        transition: background 0.25s ease, transform 0.25s ease;
        cursor: pointer;
    }
    .vafadar-table-row:hover {
        background: rgba(251, 200, 48, 0.06);
        transform: translateX(-4px);
    }
    .vafadar-table-row:last-child { border-bottom: none; }
    .vafadar-table-row td {
        padding: 14px 20px;
        color: var(--navy);
        font-size: 14px;
        vertical-align: middle;
    }

    /* ===== آواتار ===== */
    .vafadar-avatar {
        width: 60px; height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 16px;
        color: var(--navy);
        background: var(--gold);
        flex-shrink: 0;
        transition: all 0.3s ease;
        border: 2px solid var(--gold-deep);
        box-shadow: 0 2px 8px rgba(251, 200, 48, 0.25);
    }
    .vafadar-avatar:hover {
        transform: scale(1.08);
        box-shadow: 0 4px 16px rgba(251, 200, 48, 0.40);
    }
    .vafadar-avatar.blue,
    .vafadar-avatar.green,
    .vafadar-avatar.purple,
    .vafadar-avatar.orange,
    .vafadar-avatar.pink,
    .vafadar-avatar.teal,
    .vafadar-avatar.rose,
    .vafadar-avatar.indigo {
        background: var(--gold);
        color: var(--navy);
    }

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .vafadar-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        padding: 7px 14px;
        border-radius: var(--radius-sm);
        font-size: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        border: 1px solid transparent;
        position: relative;
        overflow: hidden;
    }
    .vafadar-action-btn:hover { transform: translateY(-2px); }
    .vafadar-action-btn:active { transform: translateY(0) scale(0.95); }

    .vafadar-action-btn.view {
        color: var(--navy);
        background: var(--bg-soft);
        border-color: var(--navy-line);
    }
    .vafadar-action-btn.view:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        box-shadow: var(--shadow-gold);
    }

    .vafadar-action-btn.edit {
        color: var(--navy);
        background: var(--gold);
        border-color: var(--gold);
        box-shadow: 0 4px 16px rgba(251, 200, 48, 0.25);
    }
    .vafadar-action-btn.edit:hover {
        background: var(--gold-deep);
        color: var(--navy);
        border-color: var(--gold-deep);
        box-shadow: 0 8px 24px rgba(251, 200, 48, 0.40);
    }

    .vafadar-action-btn.delete {
        color: #DC2626;
        background: #FEE2E2;
        border-color: #FCA5A5;
    }
    .vafadar-action-btn.delete:hover {
        background: #DC2626;
        color: var(--white);
        border-color: #DC2626;
        box-shadow: 0 4px 16px rgba(220, 38, 38, 0.25);
    }

    /* ===== شمارنده ===== */
    .vafadar-counter {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--bg-soft);
        color: var(--navy);
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        border: 1px solid var(--navy-line);
    }

    /* ===== سرچ ===== */
    .vafadar-search {
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        padding: 10px 16px 10px 44px;
        color: var(--navy);
        font-size: 14px;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 300px;
        outline: none;
    }
    .vafadar-search::placeholder { color: var(--text-placeholder); }
    .vafadar-search:hover {
        background: var(--white);
        border-color: var(--navy-line);
    }
    .vafadar-search:focus {
        background: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    .vafadar-search-wrap { position: relative; }
    .vafadar-search-wrap .search-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
    }

    /* ===== اسکرول ===== */
    .vafadar-table-wrap {
        overflow-x: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .vafadar-table-wrap::-webkit-scrollbar { height: 6px; }
    .vafadar-table-wrap::-webkit-scrollbar-track { background: transparent; }
    .vafadar-table-wrap::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .vafadar-table-wrap::-webkit-scrollbar-thumb:hover {
        background: var(--gold-deep);
    }

    /* ===== خالی ===== */
    .vafadar-empty {
        padding: 60px 20px;
        text-align: center;
    }
    .vafadar-empty svg {
        width: 64px; height: 64px;
        fill: none;
        stroke: var(--gold);
        margin: 0 auto 16px;
    }
    .vafadar-empty h3 {
        color: var(--navy);
        font-size: 18px;
        font-weight: 600;
    }
    .vafadar-empty p {
        color: var(--text-muted);
        font-size: 14px;
        margin-top: 4px;
    }

    /* ===== دکمه اضافه کردن ===== */
    .vafadar-add-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--gold);
        color: var(--navy);
        border-radius: var(--radius-md);
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 16px rgba(251, 200, 48, 0.30);
        position: relative;
        overflow: hidden;
    }
    .vafadar-add-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .vafadar-add-btn:hover::before { left: 100%; }
    .vafadar-add-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(251, 200, 48, 0.45);
        color: var(--navy);
    }
    .vafadar-add-btn:active { transform: translateY(0) scale(0.97); }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-table-row td { padding: 10px 12px; font-size: 13px; }
        .vafadar-table-header th { padding: 10px 12px; font-size: 10px; }
        .vafadar-action-btn { padding: 5px 10px; font-size: 11px; }
        .vafadar-action-btn span { display: none; }
        .vafadar-avatar { width: 34px; height: 34px; font-size: 13px; }
        .vafadar-search { max-width: 100%; font-size: 13px; }
        .vafadar-counter { font-size: 12px; padding: 4px 12px; }
        .vafadar-add-btn { padding: 8px 14px; font-size: 13px; }
    }
    @media (max-width: 480px) {
        .vafadar-table-row td { padding: 8px 8px; font-size: 12px; }
        .vafadar-table-header th { padding: 8px 8px; font-size: 9px; }
        .vafadar-action-btn { padding: 4px 7px; font-size: 10px; }
        .vafadar-avatar { width: 28px; height: 28px; font-size: 11px; border-radius: 8px; }
    }
</style>

<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست کاربران</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت و مشاهده اطلاعات کاربران سیستم</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="vafadar-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($users) }} کاربر
            </span>
            <a href="{{route('user.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                کاربر جدید
            </a>
        </div>
    </div>

    <!-- ===== کارت جدول ===== -->
    <div class="vafadar-table-card">
        
        <!-- ===== نوار جستجو ===== -->
        <div class="p-4 border-b" style="border-color: var(--metronic-border);">
            <div class="vafadar-search-wrap">
                <svg class="search-icon w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <input type="text" id="searchUser" placeholder="جستجو بر اساس نام، شماره یا ایمیل..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="userTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th>کاربر</th>
                        <th class="hidden sm:table-cell"> نام </th>
                        <th class="hidden sm:table-cell"> فامیلی </th>
                        <th class="hidden sm:table-cell">شماره موبایل</th>
                        <th class="hidden md:table-cell">ایمیل</th>
                        <th class="text-center" style="min-width: 160px;">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr class="vafadar-table-row" data-name="{{$user->name}} {{$user->family}}" data-phone="{{$user->phoneNumber}}" data-email="{{$user->email}}">
                        <td>
                            <div class="flex items-center gap-3">
                                @php
                                    $colors = ['blue', 'green', 'purple', 'orange', 'pink', 'teal', 'rose', 'indigo'];
                                    $color = $colors[array_rand($colors)];
                                    $initial = mb_substr($user->name, 0, 1);
                                    $statuses = ['active', 'inactive', 'pending'];
                                    $status = $statuses[array_rand($statuses)];
                                @endphp
                                <div class="vafadar-avatar overflow-hidden {{$color}}">
                                    @if($user->path!=null)
                                        <a href="{{route('user.single',['user'=>$user->id])}}"><img class='w-full rounded-full' src="{{asset('storage/user_medias/'.$user->path)}}" alt=""></a>
                                    @else
                                        <img class='w-full rounded-full' src="{{asset('assets/img/defaultPicture.png')}}" alt="">
                                    @endif
                                </div>
                                <div>
                                    <div class="font-semibold" style="color: var(--metronic-dark);">{{$user->name}} {{$user->family}}</div>
                                    <div class="text-xs sm:hidden" style="color: var(--metronic-text-dark);">{{$user->phoneNumber}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->name}}</td>
                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->family}}</td>

                        <td class="hidden sm:table-cell" style="color: var(--metronic-text-dark);">{{$user->phoneNumber}}</td>
                        <td class="hidden md:table-cell" style="color: var(--metronic-text-dark);">{{$user->email}}</td>

                        <td>
                            <div class="vafadar-action-group justify-center">
                                <a href="{{route('user.single',['user'=>$user->id])}}" class="vafadar-action-btn view" title="مشاهده پروفایل">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden sm:inline">مشاهده</span>
                                </a>
                                <a href="{{route('user.edit',['user'=>$user->id])}}" class="vafadar-action-btn edit" title="ویرایش کاربر">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </a>
                                <a href="{{route('user.delete',['user'=>$user->id])}}" class="vafadar-action-btn delete" title="حذف کاربر" onclick="return confirm('آیا از حذف کاربر «{{$user->name}} {{$user->family}}» مطمئن هستید؟')">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                    </svg>
                                    <span class="hidden sm:inline">حذف</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <div class="vafadar-empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <h3>هیچ کاربری یافت نشد</h3>
                                <p>برای شروع، روی دکمه «کاربر جدید» کلیک کنید</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- ===== فوتر جدول ===== -->
        <div class="vafadar-table-header px-4 py-3 border-t" style="border-color: var(--metronic-border);">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-xs" style="color: var(--metronic-text-dark);">
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($users) }}</strong> کاربر</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<!-- ============================================================ -->
<!-- ===== بخش پروفایل کاربر (نمایش جزئیات) ===== -->
<!-- ============================================================ -->

@if(isset($selectedUser))
<div class="mt-8">
    <div class="vafadar-table-card">
        
        <!-- ===== هدر پروفایل ===== -->
        <div class="vafadar-table-header px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" style="fill: var(--metronic-blue);">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <h3 class="text-base font-bold" style="color: var(--metronic-dark);">پروفایل کاربر</h3>
                </div>
                <a href="{{route('user.list')}}" class="text-sm" style="color: var(--metronic-blue); text-decoration: none;">بازگشت به لیست</a>
            </div>
        </div>

        <!-- ===== محتوای پروفایل ===== -->
        <div class="p-6">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                
                <!-- آواتار بزرگ -->
                @php
                    $colors = ['blue', 'green', 'purple', 'orange', 'pink', 'teal', 'rose', 'indigo'];
                    $color = $colors[array_rand($colors)];
                    $initial = mb_substr($selectedUser->name, 0, 1);
                @endphp
                <div class="vafadar-avatar {{$color}}" style="width: 80px; height: 80px; font-size: 32px; border-radius: 20px;">
                    {{$initial}}
                </div>

                <!-- اطلاعات -->
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">نام کامل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->name}} {{$selectedUser->family}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">شماره موبایل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->phoneNumber}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">ایمیل</p>
                        <p class="text-base font-semibold" style="color: var(--metronic-dark);">{{$selectedUser->email}}</p>
                    </div>
                    <div>
                        <p class="text-xs" style="color: var(--metronic-text-dark);">نقش‌ها</p>
                        <div class="flex flex-wrap gap-1 mt-1">
                            @foreach($selectedUser->roles as $role)
                                <span class="text-xs px-3 py-1 rounded-full" style="background: var(--metronic-shadow); color: var(--metronic-text-dark);">{{$role->fa_title}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- دکمه‌های اکشن -->
                <div class="flex flex-col sm:flex-row gap-2 w-full md:w-auto">
                    <a href="{{route('user.edit',['user'=>$selectedUser->id])}}" class="vafadar-action-btn edit justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                        </svg>
                        ویرایش
                    </a>
                    <a href="{{route('user.delete',['user'=>$selectedUser->id])}}" class="vafadar-action-btn delete justify-center" onclick="return confirm('آیا از حذف این کاربر مطمئن هستید؟')">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 6h18"/>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                        </svg>
                        حذف
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endif

<!-- ===== اسکریپت جستجو ===== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchUser');
        const table = document.getElementById('userTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const name = row.getAttribute('data-name')?.toLowerCase() || '';
                    const phone = row.getAttribute('data-phone')?.toLowerCase() || '';
                    const email = row.getAttribute('data-email')?.toLowerCase() || '';

                    const match = name.includes(query) || phone.includes(query) || email.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });
</script>

@endsection