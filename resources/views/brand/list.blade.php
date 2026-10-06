@extends('dashboard')

@section('title','لیست برندها')
@section('content')

<style>
    /* ===== پالت رنگی مترونیک (Metronic) ===== */
    :root {
        --metronic-dark: #0D0E12;
        --metronic-content-bg: #FCFCFC;
        --metronic-form-bg: #FFFFFF;
        --metronic-shadow: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text-dark: #9A9CAE;
        --metronic-text-hover: #F5F5F5;
        --metronic-blue: #1B84FF;
    }
    
    /* ===== کارت اصلی ===== */
    .derakhti-table-card {
        background: var(--metronic-content-bg);
        border: 1px solid var(--metronic-border);
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(13,14,18,0.03);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .derakhti-table-card:hover {
        box-shadow: 0 8px 40px rgba(13,14,18,0.06);
    }
    .dark .derakhti-table-card {
        background: var(--metronic-dark);
        border-color: var(--metronic-border);
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .dark .derakhti-table-card:hover {
        box-shadow: 0 8px 40px rgba(0,0,0,0.4);
    }

    /* ===== هدر جدول ===== */
    .derakhti-table-header {
        background: var(--metronic-shadow);
        border-bottom: 2px solid var(--metronic-border);
    }
    .dark .derakhti-table-header {
        background: var(--metronic-shadow);
        border-bottom-color: var(--metronic-border);
    }

    .derakhti-table-header th {
        color: var(--metronic-text-dark);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 20px;
        text-align: right;
    }
    .dark .derakhti-table-header th {
        color: var(--metronic-text-dark);
    }

    /* ===== ردیف‌ها ===== */
    .derakhti-table-row {
        border-bottom: 1px solid var(--metronic-border);
        transition: all 0.3s ease;
    }
    .derakhti-table-row:hover {
        background: var(--metronic-shadow);
        transform: translateX(-4px);
    }
    .derakhti-table-row:last-child {
        border-bottom: none;
    }
    .dark .derakhti-table-row {
        border-bottom-color: var(--metronic-border);
    }
    .dark .derakhti-table-row:hover {
        background: var(--metronic-shadow);
    }

    .derakhti-table-row td {
        padding: 14px 16px;
        color: var(--metronic-dark);
        font-size: 14px;
        vertical-align: middle;
    }
    .dark .derakhti-table-row td {
        color: var(--metronic-content-bg);
    }

    /* ===== بج برند ===== */
    .derakhti-brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border: 1px solid var(--metronic-border);
    }
    .dark .derakhti-brand-badge {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== وضعیت ===== */
    .derakhti-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .derakhti-status.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .derakhti-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }
    .dark .derakhti-status.active {
        background: var(--metronic-blue);
        color: #fff;
    }
    .dark .derakhti-status.inactive {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
    }

    .derakhti-status .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
    }
    .derakhti-status.active .dot {
        background: #fff;
        animation: pulse-dot 2s infinite;
    }
    .derakhti-status.inactive .dot {
        background: var(--metronic-text-dark);
    }

    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(0.8); }
    }

    /* ===== دکمه‌های اکشن ===== */
    .derakhti-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
    }

    .derakhti-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        padding: 7px 14px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
    }
    .derakhti-action-btn:hover {
        transform: translateY(-2px);
    }
    .derakhti-action-btn:active {
        transform: translateY(0) scale(0.95);
    }

    .derakhti-action-btn.view {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .derakhti-action-btn.view:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .derakhti-action-btn.edit {
        color: #fff;
        background: var(--metronic-blue);
        border-color: var(--metronic-blue);
    }
    .derakhti-action-btn.edit:hover {
        background: var(--metronic-blue);
        color: #fff;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.25);
    }

    .derakhti-action-btn.delete {
        color: var(--metronic-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .derakhti-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
        box-shadow: 0 4px 16px rgba(13, 14, 18, 0.25);
    }

    .dark .derakhti-action-btn.view {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .derakhti-action-btn.view:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    .dark .derakhti-action-btn.edit {
        color: #fff;
        background: var(--metronic-blue);
        border-color: var(--metronic-blue);
    }
    .dark .derakhti-action-btn.edit:hover {
        background: var(--metronic-blue);
        color: #fff;
    }

    .dark .derakhti-action-btn.delete {
        color: var(--metronic-text-dark);
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
    }
    .dark .derakhti-action-btn.delete:hover {
        background: var(--metronic-dark);
        color: #fff;
    }

    /* ===== شمارنده ===== */
    .derakhti-counter {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        border: 1px solid var(--metronic-border);
    }
    .dark .derakhti-counter {
        background: var(--metronic-shadow);
        color: var(--metronic-text-dark);
        border-color: var(--metronic-border);
    }

    /* ===== سرچ ===== */
    .derakhti-search {
        background: var(--metronic-shadow);
        border: 1px solid var(--metronic-border);
        border-radius: 12px;
        padding: 10px 16px 10px 44px;
        color: var(--metronic-dark);
        font-size: 14px;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 300px;
        outline: none;
    }
    .derakhti-search::placeholder {
        color: var(--metronic-text-dark);
    }
    .derakhti-search:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.06);
        background: var(--metronic-form-bg);
    }
    .dark .derakhti-search {
        background: var(--metronic-shadow);
        border-color: var(--metronic-border);
        color: var(--metronic-content-bg);
    }
    .dark .derakhti-search::placeholder {
        color: var(--metronic-text-dark);
    }
    .dark .derakhti-search:focus {
        border-color: var(--metronic-blue);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-shadow);
    }

    .derakhti-search-wrap {
        position: relative;
    }
    .derakhti-search-wrap .search-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--metronic-text-dark);
    }
    .dark .derakhti-search-wrap .search-icon {
        color: var(--metronic-text-dark);
    }

    /* ===== اسکرول ===== */
    .derakhti-table-wrap {
        overflow-x: auto;
    }
    .derakhti-table-wrap::-webkit-scrollbar {
        height: 4px;
    }
    .derakhti-table-wrap::-webkit-scrollbar-track {
        background: transparent;
    }
    .derakhti-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
        border-radius: 10px;
    }
    .dark .derakhti-table-wrap::-webkit-scrollbar-thumb {
        background: var(--metronic-text-dark);
    }

    /* ===== خالی ===== */
    .derakhti-empty {
        padding: 60px 20px;
        text-align: center;
    }
    .derakhti-empty svg {
        width: 64px;
        height: 64px;
        fill: var(--metronic-border);
        margin: 0 auto 16px;
    }
    .dark .derakhti-empty svg {
        fill: var(--metronic-border);
    }
    .derakhti-empty h3 {
        color: var(--metronic-dark);
        font-size: 18px;
        font-weight: 600;
    }
    .dark .derakhti-empty h3 {
        color: var(--metronic-content-bg);
    }
    .derakhti-empty p {
        color: var(--metronic-text-dark);
        font-size: 14px;
        margin-top: 4px;
    }

    /* ===== دکمه اضافه کردن ===== */
    .derakhti-add-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: var(--metronic-blue);
        color: #fff;
        border-radius: 12px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .derakhti-add-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
        color: #fff;
    }
    .derakhti-add-btn:active {
        transform: translateY(0) scale(0.97);
    }
    .dark .derakhti-add-btn {
        background: var(--metronic-blue);
    }
    .dark .derakhti-add-btn:hover {
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .derakhti-table-row td {
            padding: 10px 12px;
            font-size: 13px;
        }
        .derakhti-table-header th {
            padding: 10px 12px;
            font-size: 10px;
        }
        .derakhti-action-btn {
            padding: 5px 10px;
            font-size: 11px;
        }
        .derakhti-action-btn span {
            display: none;
        }
        .derakhti-search {
            max-width: 100%;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .derakhti-table-row td {
            padding: 8px 8px;
            font-size: 12px;
        }
        .derakhti-table-header th {
            padding: 8px 8px;
            font-size: 9px;
        }
        .derakhti-action-btn {
            padding: 4px 7px;
            font-size: 10px;
        }
        .derakhti-counter {
            font-size: 11px;
            padding: 4px 10px;
        }
    }
</style>

<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست برندها</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت برندهای محصولات</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="derakhti-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($brands) }} برند
            </span>
            <a href="{{route('brand.create')}}" class="derakhti-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                برند جدید
            </a>
        </div>
    </div>

    <!-- ===== کارت جدول ===== -->
    <div class="derakhti-table-card">
        
        <!-- ===== نوار جستجو ===== -->
        <div class="p-4 border-b" style="border-color: var(--metronic-border);">
            <div class="derakhti-search-wrap">
                <svg class="search-icon w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <input type="text" id="searchBrand" placeholder="جستجوی برندها..." class="derakhti-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="derakhti-table-wrap">
            <table class="w-full" id="brandTable">
                <thead class="derakhti-table-header">
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th>عنوان</th>
                        <th class="hidden md:table-cell">لوگو</th>
                        <th class="hidden lg:table-cell">توضیحات</th>
                        <th class="hidden sm:table-cell">نمایش در خانه</th>
                        <th class="hidden sm:table-cell">وضعیت</th>
                        <th class="text-center">عملیات</th>
                    </tr>
                </thead>
                <tbody id="brandTableBody">
                    @forelse($brands as $brand)
                    <tr class="derakhti-table-row" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-slug="{{$brand->slug}}">
                        <td>
                            <span class="derakhti-brand-badge">#{{$brand->id}}</span>
                        </td>
                        <td>
                            <span class="font-semibold" style="color: var(--metronic-dark);">{{$brand->title}}</span>
                            <div class="text-xs lg:hidden" style="color: var(--metronic-text-dark);">{{$brand->slug}}</div>
                        </td>
                        <td>
                            @if(isset($brand->logo_path))
                                <img class="derakhti-thumb w-10 rounded-md" src="{{asset('storage/'.$brand->logo_path)}}" alt="{{$brand->title}}">
                            @else
                                <div class="derakhti-thumb-placeholder"></div>
                            @endif
                        </td>
                        <td class="hidden lg:table-cell">
                            @if($brand->description)
                                <span class="text-sm" style="color: var(--metronic-text-dark);">{{ Str::limit($brand->description, 30) }}</span>
                            @else
                                <span class="text-xs" style="color: var(--metronic-text-dark);">—</span>
                            @endif
                        </td>
                        <td class="hidden sm:table-cell text-center">
                            <span class="derakhti-status {{ $brand->show_in_home != 0 ? 'active' : 'inactive' }}">
                                <span class="dot"></span>
                                {{ $brand->show_in_home != 0 ? 'فعال' : 'غیرفعال' }}
                            </span>
                        </td>
                        <td class="hidden sm:table-cell">
                            <span class="derakhti-status {{ $brand->is_active != 0 ? 'active' : 'inactive' }}">
                                <span class="dot"></span>
                                {{ $brand->is_active != 0 ? 'فعال' : 'غیرفعال' }}
                            </span>
                        </td>
                        <td>
                            <div class="derakhti-action-group justify-center">
                                <a href="{{route('brand.single',['brand'=>$brand->id])}}" class="derakhti-action-btn view" title="مشاهده برند">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden sm:inline">مشاهده</span>
                                </a>
                                <a href="{{route('brand.edit',['brand'=>$brand->id])}}" class="derakhti-action-btn edit" title="ویرایش برند">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </a>
                                <a href="{{route('brand.delete',['brand'=>$brand->id])}}" class="derakhti-action-btn delete" title="حذف برند" onclick="return confirm('آیا از حذف برند «{{$brand->title}}» مطمئن هستید؟')">
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
                        <td colspan="7">
                            <div class="derakhti-empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <path d="M4 7h16M4 12h16M4 17h10"/>
                                    <rect x="2" y="3" width="20" height="18" rx="2"/>
                                </svg>
                                <h3>هیچ برندی یافت نشد</h3>
                                <p>برای شروع، روی دکمه «برند جدید» کلیک کنید</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- ===== فوتر جدول ===== -->
        <div class="derakhti-table-header px-4 py-3 border-t" style="border-color: var(--metronic-border);">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-xs" style="color: var(--metronic-text-dark);">
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($brands) }}</strong> برند</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchBrand');
        const table = document.getElementById('brandTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const title = row.getAttribute('data-title')?.toLowerCase() || '';
                    const slug = row.getAttribute('data-slug')?.toLowerCase() || '';
                    const id = row.getAttribute('data-id') || '';

                    const match = title.includes(query) || slug.includes(query) || id.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });
</script>

@endsection