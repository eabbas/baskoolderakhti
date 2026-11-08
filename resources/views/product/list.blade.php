@extends('dashboard')
@section('title', 'productList')
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
    .derakhti-table-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    .derakhti-table-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .derakhti-table-card:hover { box-shadow: var(--shadow-md); }

    /* ===== هدر جدول ===== */
    .derakhti-table-header {
        background: var(--bg-soft);
        border-bottom: 2px solid var(--navy-line);
    }
    .derakhti-table-header th {
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 14px 16px;
        text-align: right;
        white-space: nowrap;
    }

    /* ===== ردیف‌ها ===== */
    .derakhti-table-row {
        border-bottom: 1px solid var(--navy-line);
        transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
        background: var(--white);
    }
    .derakhti-table-row:nth-child(even) {
        background: rgba(247, 248, 250, 0.6);
    }
    .derakhti-table-row:hover {
        background: rgba(251, 200, 48, 0.06);
        transform: translateX(-4px);
        box-shadow: 0 4px 12px rgba(14, 46, 72, 0.04);
    }
    .derakhti-table-row:last-child { border-bottom: none; }
    .derakhti-table-row td {
        padding: 12px 16px;
        color: var(--navy);
        font-size: 13px;
        vertical-align: middle;
    }

    /* ===== بج محصول ===== */
    .derakhti-product-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        background: var(--bg-soft);
        color: var(--navy);
        border: 1px solid var(--navy-line);
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
        background: var(--gold);
        color: var(--navy);
        border: 1px solid var(--gold);
        box-shadow: 0 2px 8px rgba(251, 200, 48, 0.30);
    }
    .derakhti-status.inactive {
        background: var(--bg-soft);
        color: var(--text-muted);
        border: 1px solid var(--navy-line);
    }
    .derakhti-status .dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        display: inline-block;
    }
    .derakhti-status.active .dot {
        background: var(--navy);
        animation: pulse-dot 2s infinite;
    }
    .derakhti-status.inactive .dot { background: var(--text-muted); }
    @keyframes pulse-dot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(0.8); }
    }

    /* ===== بج ویژه و نمایش در خانه ===== */
    .derakhti-feature-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 2px 10px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
    }
    .derakhti-feature-badge.featured,
    .derakhti-feature-badge.show-home {
        background: var(--gold);
        color: var(--navy);
        border: 1px solid var(--gold);
        box-shadow: 0 2px 6px rgba(251, 200, 48, 0.25);
    }
    .derakhti-feature-badge.normal {
        background: var(--bg-soft);
        color: var(--text-muted);
        border: 1px solid var(--navy-line);
    }

    /* ===== دکمه‌های اکشن ===== */
    .derakhti-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .derakhti-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        padding: 6px 12px;
        border-radius: var(--radius-sm);
        font-size: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
    }
    .derakhti-action-btn:hover { transform: translateY(-2px); }
    .derakhti-action-btn:active { transform: translateY(0) scale(0.95); }

    .derakhti-action-btn.view {
        color: var(--navy);
        background: var(--bg-soft);
        border-color: var(--navy-line);
    }
    .derakhti-action-btn.view:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-action-btn.edit {
        color: var(--navy);
        background: var(--gold);
        border-color: var(--gold);
        box-shadow: 0 4px 16px rgba(251, 200, 48, 0.25);
    }
    .derakhti-action-btn.edit:hover {
        background: var(--gold-deep);
        color: var(--navy);
        border-color: var(--gold-deep);
        box-shadow: 0 8px 24px rgba(251, 200, 48, 0.40);
    }

    .derakhti-action-btn.delete {
        color: #DC2626;
        background: #FEE2E2;
        border-color: #FCA5A5;
    }
    .derakhti-action-btn.delete:hover {
        background: #DC2626;
        color: var(--white);
        border-color: #DC2626;
        box-shadow: 0 4px 16px rgba(220, 38, 38, 0.25);
    }

    /* ===== شمارنده ===== */
    .derakhti-counter {
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
    .derakhti-search {
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
    .derakhti-search::placeholder { color: var(--text-placeholder); }
    .derakhti-search:hover {
        background: var(--white);
        border-color: var(--navy-line);
    }
    .derakhti-search:focus {
        background: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    .derakhti-search-wrap { position: relative; }
    .derakhti-search-wrap .search-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-muted);
    }

    /* ===== اسکرول ===== */
    .derakhti-table-wrap {
        overflow-x: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .derakhti-table-wrap::-webkit-scrollbar { height: 6px; }
    .derakhti-table-wrap::-webkit-scrollbar-track { background: transparent; }
    .derakhti-table-wrap::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .derakhti-table-wrap::-webkit-scrollbar-thumb:hover {
        background: var(--gold-deep);
    }

    /* ===== خالی ===== */
    .derakhti-empty {
        padding: 60px 20px;
        text-align: center;
    }
    .derakhti-empty svg {
        width: 64px; height: 64px;
        fill: none;
        stroke: var(--gold);
        margin: 0 auto 16px;
    }
    .derakhti-empty h3 {
        color: var(--navy);
        font-size: 18px;
        font-weight: 600;
    }
    .derakhti-empty p {
        color: var(--text-muted);
        font-size: 14px;
        margin-top: 4px;
    }

    /* ===== دکمه اضافه کردن ===== */
    .derakhti-add-btn {
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
    .derakhti-add-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .derakhti-add-btn:hover::before { left: 100%; }
    .derakhti-add-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(251, 200, 48, 0.45);
        color: var(--navy);
    }
    .derakhti-add-btn:active { transform: translateY(0) scale(0.97); }

    /* ===== تصویر کوچک ===== */
    .derakhti-thumb {
        width: 40px; height: 40px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid var(--navy-line);
        transition: all 0.3s ease;
    }
    .derakhti-thumb:hover {
        transform: scale(1.1);
        border-color: var(--gold);
        box-shadow: 0 4px 12px rgba(251, 200, 48, 0.20);
    }
    .derakhti-thumb-placeholder {
        width: 40px; height: 40px;
        border-radius: 10px;
        background: var(--bg-soft);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        border: 2px solid var(--navy-line);
    }

    /* ===== قیمت ===== */
    .derakhti-price {
        font-weight: 700;
        color: var(--navy);
        background: var(--bg-soft);
        padding: 2px 10px;
        border-radius: 8px;
        display: inline-block;
        border: 1px solid var(--navy-line);
    }
    .derakhti-discount {
        background: rgba(251, 200, 48, 0.15);
        color: var(--navy);
        padding: 2px 8px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 700;
        margin-right: 4px;
        border: 1px solid var(--gold);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .derakhti-table-row td { padding: 10px 12px; font-size: 12px; }
        .derakhti-table-header th { padding: 10px 12px; font-size: 10px; }
        .derakhti-action-btn { padding: 5px 10px; font-size: 11px; }
        .derakhti-action-btn span { display: none; }
        .derakhti-search { max-width: 100%; font-size: 13px; }
        .derakhti-counter { font-size: 12px; padding: 4px 12px; }
        .derakhti-add-btn { padding: 8px 14px; font-size: 13px; }
        .derakhti-thumb,
        .derakhti-thumb-placeholder { width: 32px; height: 32px; font-size: 14px; }
    }
    @media (max-width: 480px) {
        .derakhti-table-row td { padding: 8px 8px; font-size: 11px; }
        .derakhti-table-header th { padding: 8px 8px; font-size: 9px; }
        .derakhti-action-btn { padding: 4px 7px; font-size: 10px; }
        .derakhti-thumb,
        .derakhti-thumb-placeholder { width: 28px; height: 28px; font-size: 12px; border-radius: 6px; }
    }
</style>
<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست محصولات</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت و مشاهده تمام محصولات فروشگاه</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <a href="{{route('product.create')}}" class="derakhti-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                محصول جدید
            </a>
        </div>
    </div>

    <!-- ===== کارت جدول ===== -->
    <div class="derakhti-table-card">
        
        <!-- ===== نوار جستجو ===== -->
        <div class="p-4 border-b" style="border-color: var(--metronic-border); background: var(--metronic-shadow);">
            <div class="derakhti-search-wrap">
                <svg class="search-icon w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="M21 21l-4.35-4.35"/>
                </svg>
                <input type="text" id="searchProduct" placeholder="جستجوی محصولات..." class="derakhti-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="derakhti-table-wrap">
            <table class="w-full" id="productTable">
                <thead class="derakhti-table-header">
                    <tr>
                        <th style="width:50px;">#</th>
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th class="hidden md:table-cell">دسته‌بندی</th>
                        <th class="hidden lg:table-cell">قیمت</th>
                        <th class="hidden lg:table-cell"> تخفیف</th>
                        <th class="hidden lg:table-cell">درصد تخفیف</th>
                        <th class="hidden sm:table-cell">موجودی</th>
                        <th class="hidden lg:table-cell">وضعیت</th>
                        <th class="text-center" style="min-width:140px;">عملیات</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    @forelse($products as $product)
                    <tr class="derakhti-table-row" data-id="{{$product->id}}" data-title="{{$product->title}}" data-slug="{{$product->slug}}">
                        <td>
                            <span class="derakhti-product-badge">#{{$product->id}}</span>
                        </td>
                        <td>
                            @if(isset($product->is_main_media))
                                <img class="derakhti-thumb" src="{{asset('storage/product_medias/'.$product->is_main_media)}}" alt="{{$product->title}}">
                            @else
                                <img class="derakhti-thumb" src="{{asset('assets/img/defaultPicture.png')}}" alt="{{$product->title}}">
                            @endif
                        </td>
                        <td>
                            <div class="font-semibold" style="color: var(--metronic-dark);">{{$product->title}}</div>
                            <div class="text-xs md:hidden" style="color: var(--metronic-text-dark);">
                                {{number_format($product->price)}} تومان
                            </div>
                        </td>
                        <td class="hidden md:table-cell" style="color: var(--metronic-text-dark);">
                            <span class="px-3 py-1 rounded-full text-xs border" style="background: var(--metronic-shadow); border-color: var(--metronic-border);">
                                {{$product->categories[0]->title ?? 'بدون دسته‌بندی'}}
                            </span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <span class="derakhti-price">{{number_format($product->price)}}</span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <span class="derakhti-discount">{{number_format($product->discunt)}}</span>
                        </td>
                        <td  class="hidden lg:table-cell">
                            @if($product->percent)
                                <span class="derakhti-discount">-{{$product->percent}}%</span>
                            @else
                                <span> ندارد </span>
                            @endif
                        </td>
                        <td class="hidden sm:table-cell">
                            <span class="px-1 py-1 rounded-full text-sm border" style="background: var(--metronic-shadow); border-color: var(--metronic-border);">
                                @if($product->stock>0)
                                    {{$product->stock}} عدد
                                @else
                                    نا موجود
                                @endif
                            </span>
                        </td>
                        <td class="hidden lg:table-cell">
                            <div class="flex flex-wrap gap-1">
                                <!-- ===== وضعیت فعال/غیرفعال ===== -->
                                @if($product->is_active)
                                    <span class="derakhti-status active">
                                        <span class="dot"></span>
                                        فعال
                                    </span>
                                @else
                                    <span class="derakhti-status inactive">
                                        <span class="dot"></span>
                                        غیرفعال
                                    </span>
                                @endif
                                
                                <!-- ===== ویژه ===== -->
                                @if($product->featured)
                                    <span class="derakhti-feature-badge featured">⭐ ویژه</span>
                                @else
                                    <span class="derakhti-feature-badge normal">معمولی</span>
                                @endif
                                
                                <!-- ===== نمایش در خانه ===== -->
                                @if($product->show_in_home)
                                    <span class="derakhti-feature-badge show-home"> نمایش در خانه</span>
                                @else
                                    <span class="derakhti-feature-badge normal"> بدون نمایش</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="derakhti-action-group">
                                <a href="{{route('product.single',['product'=>$product->id])}}" class="derakhti-action-btn view" title="مشاهده محصول">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="hidden sm:inline">مشاهده</span>
                                </a>
                                <a href="{{route('product.edit',['product'=>$product->id])}}" class="derakhti-action-btn edit" title="ویرایش محصول">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </a>
                                <a href="{{route('product.delete',['product'=>$product->id])}}" class="derakhti-action-btn delete" title="حذف محصول" onclick="return confirm('آیا از حذف محصول «{{$product->title}}» مطمئن هستید؟')">
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
                        <td colspan="8">
                            <div class="derakhti-empty">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                                    <circle cx="9" cy="13" r="2"/>
                                    <circle cx="15" cy="13" r="2"/>
                                    <path d="M9 13h6"/>
                                </svg>
                                <h3>هیچ محصولی یافت نشد</h3>
                                <p>برای شروع، روی دکمه «محصول جدید» کلیک کنید</p>
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
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($products) }}</strong> محصول</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchProduct');
        const table = document.getElementById('productTable');
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