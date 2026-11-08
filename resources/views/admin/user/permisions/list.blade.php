@extends('dashboard')

@section('title','لیست دسترسی‌ها')
@section('content')

<style>
    /* ===== پالت اختصاصی ===== */
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

        /* سازگاری با HTML/JS فعلی */
        --metronic-dark: #0E2E48;
        --metronic-content-bg: #FFFFFF;
        --metronic-form-bg: #FFFFFF;
        --metronic-shadow: #F7F8FA;
        --metronic-border: rgba(14, 46, 72, 0.08);
        --metronic-text-dark: #5A6B7B;
        --metronic-blue: #FBC830;
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

    /* ===== نشان دسترسی ===== */
    .vafadar-permision-badge {
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

    /* ===== دکمه‌های اکشن ===== */
    .vafadar-action-group {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
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
        cursor: pointer;
    }
    .vafadar-action-btn:hover { transform: translateY(-2px); }
    .vafadar-action-btn:active { transform: translateY(0) scale(0.95); }

    .vafadar-action-btn.users,
    .vafadar-action-btn.roles {
        color: var(--navy);
        background: var(--bg-soft);
        border-color: var(--navy-line);
    }
    .vafadar-action-btn.users:hover,
    .vafadar-action-btn.roles:hover {
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

    /* ===== مودال ویرایش ===== */
    .vafadar-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(14, 46, 72, 0.55);
        backdrop-filter: blur(4px);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .vafadar-modal {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 32px;
        max-width: 420px;
        width: 90%;
        box-shadow: 0 30px 80px rgba(14, 46, 72, 0.25);
        animation: slideUp 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .vafadar-modal::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
    }
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px) scale(0.95); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    .vafadar-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        padding-bottom: 16px;
        border-bottom: 2px solid var(--navy-line);
    }
    .vafadar-modal-header h3 {
        color: var(--navy);
        font-size: 18px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .vafadar-modal-close {
        width: 32px; height: 32px;
        border-radius: 50%;
        border: none;
        background: var(--bg-soft);
        color: var(--navy);
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .vafadar-modal-close:hover {
        background: #DC2626;
        color: var(--white);
        transform: rotate(90deg);
    }

    .vafadar-modal .form-group { margin-bottom: 16px; }
    .vafadar-modal .form-group label {
        display: block;
        color: var(--navy);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 6px;
        padding-right: 4px;
    }
    .vafadar-modal .form-group input {
        width: 100%;
        padding: 12px 16px;
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }
    .vafadar-modal .form-group input:hover {
        background: var(--white);
        border-color: var(--navy-line);
    }
    .vafadar-modal .form-group input:focus {
        background: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    .vafadar-modal .modal-submit {
        width: 100%;
        padding: 14px;
        background: var(--gold);
        border: none;
        border-radius: var(--radius-md);
        color: var(--navy);
        font-size: 14px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 8px;
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
    }
    .vafadar-modal .modal-submit:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .vafadar-table-row td { padding: 10px 12px; font-size: 13px; }
        .vafadar-table-header th { padding: 10px 12px; font-size: 10px; }
        .vafadar-action-btn { padding: 5px 10px; font-size: 11px; }
        .vafadar-action-btn span { display: none; }
        .vafadar-search { max-width: 100%; font-size: 13px; }
        .vafadar-modal { padding: 24px 20px; }
    }
    @media (max-width: 480px) {
        .vafadar-table-row td { padding: 8px 8px; font-size: 12px; }
        .vafadar-table-header th { padding: 8px 8px; font-size: 9px; }
        .vafadar-action-btn { padding: 4px 7px; font-size: 10px; }
        .vafadar-counter { font-size: 11px; padding: 4px 10px; }
    }
</style>
<div class="w-full">
    
    <!-- ===== هدر لیست ===== -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--metronic-dark);"> لیست دسترسی‌ها</h2>
            <p class="text-sm mt-1" style="color: var(--metronic-text-dark);">مدیریت دسترسی‌های کاربری</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
            <span class="vafadar-counter">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                {{ count($permisions) }} دسترسی
            </span>
            <a href="{{route('permision.create')}}" class="vafadar-add-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                دسترسی جدید
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
                <input type="text" id="searchPermision" placeholder="جستجوی دسترسی‌ها..." class="vafadar-search">
            </div>
        </div>

        <!-- ===== جدول ===== -->
        <div class="vafadar-table-wrap">
            <table class="w-full" id="permisionTable">
                <thead class="vafadar-table-header">
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>عنوان فارسی</th>
                        <th class="hidden sm:table-cell">عنوان انگلیسی</th>
                        <th class="text-center" colspan="4">عملیات</th>
                    </tr>
                </thead>
                <tbody id="permisionTableBody">
                    @forelse($permisions as $permision)
                    <tr class="vafadar-table-row" data-id="{{$permision->id}}" data-fa="{{$permision->fa_title}}" data-ea="{{$permision->ea_title}}">
                        <td>
                            <span class="vafadar-permision-badge">#{{$permision->id}}</span>
                        </td>
                        <td>
                            <span class="font-semibold" style="color: var(--metronic-dark);">{{$permision->fa_title}}</span>
                        </td>
                        <td class="hidden sm:table-cell">
                            <code class="text-sm px-2 py-1 rounded" style="background: var(--metronic-shadow); color: var(--metronic-text-dark);">{{$permision->ea_title}}</code>
                        </td>
                        <td>
                            <div class="vafadar-action-group justify-center">
                                <!-- <div onclick="showUsers({{$permision->id}})"  class="vafadar-action-btn users" title="مشاهده کاربران">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                    <span class="hidden sm:inline">کاربران</span>
                                </div> -->
                                <div onclick="showRoles({{$permision->id}})"  class="vafadar-action-btn roles" title="مشاهده نقش‌ها">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    <span class="hidden sm:inline">نقش‌ها</span>
                                </div>
                                <button onclick="editForm({{$permision->id}})" class="vafadar-action-btn edit" title="ویرایش دسترسی">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                    <span class="hidden sm:inline">ویرایش</span>
                                </button>
                                <a href="{{route('permision.delete',['permision'=>$permision->id])}}" class="vafadar-action-btn delete" title="حذف دسترسی" onclick="return confirm('آیا از حذف دسترسی «{{$permision->fa_title}}» مطمئن هستید؟')">
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
                                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                <h3>هیچ دسترسی‌ای یافت نشد</h3>
                                <p>برای شروع، روی دکمه «دسترسی جدید» کلیک کنید</p>
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
                <span>تعداد کل: <strong style="color: var(--metronic-dark);">{{ count($permisions) }}</strong> دسترسی</span>
                <span>آخرین بروزرسانی: <strong style="color: var(--metronic-dark);">{{ now()->format('Y/m/d H:i') }}</strong></span>
            </div>
        </div>

    </div>
</div>

<!-- ============================================================ -->
<!-- ===== مودال ویرایش ===== -->
<!-- ============================================================ -->
<div id="editModal" class="vafadar-modal-overlay" style="display: none;">
    <div class="vafadar-modal">
        <div class="vafadar-modal-header">
            <h3>
                <svg class="w-5 h-5" viewBox="0 0 24 24" style="fill: var(--metronic-blue);">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                </svg>
                ویرایش دسترسی
            </h3>
            <button class="vafadar-modal-close" onclick="closeModal()">✕</button>
        </div>
        <form id="editForm">
            <input type="hidden" id="editId" name="id">
            <div class="form-group">
                <label> عنوان فارسی</label>
                <input type="text" id="editFaTitle" name="fa_title" placeholder="عنوان فارسی دسترسی">
            </div>
            <div class="form-group">
                <label> عنوان انگلیسی</label>
                <input type="text" id="editEaTitle" name="ea_title" placeholder="عنوان انگلیسی دسترسی">
            </div>
            <button type="submit" class="modal-submit">
                <span> ذخیره تغییرات</span>
            </button>
        </form>
    </div>
</div>

<script>
    let table = document.getElementById('permisionTable');

    // ===== جستجو =====
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchPermision');
        const table = document.getElementById('permisionTable');
        const rows = table.querySelectorAll('tbody tr');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();

                rows.forEach(row => {
                    const fa = row.getAttribute('data-fa')?.toLowerCase() || '';
                    const ea = row.getAttribute('data-ea')?.toLowerCase() || '';
                    const id = row.getAttribute('data-id') || '';

                    const match = fa.includes(query) || ea.includes(query) || id.includes(query);
                    row.style.display = match ? '' : 'none';
                });
            });
        }
    });

    // ===== ویرایش =====
    function editForm(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        
        $.ajax({
            url: "{{url('permision/getPermision')}}/" + id,
            type: "get",
            dataType: "json",
            success: function(data) {
                $('#editId').val(id);
                $('#editFaTitle').val(data.fa_title);
                $('#editEaTitle').val(data.ea_title);
                $('#editModal').fadeIn(300);
            },
            error: function() {
                alert('خطا در دریافت اطلاعات دسترسی');
            }
        });
    }

    // ===== بستن مودال =====
    function closeModal() {
        $('#editModal').fadeOut(300);
    }

    // ===== کلیک بیرون مودال =====
    $('#editModal').on('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // ===== دکمه ESC =====
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // ===== ارسال فرم ویرایش =====
    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        
        let fa_title = $('#editFaTitle').val();
        let ea_title = $('#editEaTitle').val();
        let id = $('#editId').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        $.ajax({
            url: "{{url('permision/update')}}/" + id,
            type: "post",
            data: {
                'fa_title': fa_title,
                'ea_title': ea_title,
            },
            dataType: "json",
            success: function(data) {
                if (data.success) {
                    // به‌روزرسانی ردیف جدول
                    let row = document.querySelector(`tr[data-id="${id}"]`);
                    if (row) {
                        row.setAttribute('data-fa', fa_title);
                        row.setAttribute('data-ea', ea_title);
                        row.querySelector('td:nth-child(2) span').textContent = fa_title;
                        row.querySelector('td:nth-child(3) code').textContent = ea_title;
                        
                    }
                    closeModal();
                }
            },
            error: function() {
                alert('خطا در ویرایش دسترسی');
            }
        });
    });


    // function showUsers(id) {

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //         }
    //     })
        
    //     $.ajax({
    //         url: "{{url('role/get/role/users/')}}/" + id,
    //         type: "get",
    //         dataType: "json",
    //         success: function(data) {
    //             console.log(data)
                
    //             let div = document.createElement('div');
    //             // ===== پالت رنگی وفادار با تیلویند =====
    //             div.classList = `absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8/12 max-w-2xl mx-auto bg-[#f5efe6] border-4 border-[#1a3a4a] rounded-2xl shadow-2xl flex flex-col p-6 gap-4 items-center z-50`;
                
    //             // ===== هدر جدول =====
    //             let table = document.createElement('table');
    //             table.className = `w-full border-collapse`;
    //             table.id = "userTable";
                
    //             let thead = document.createElement('thead');
    //             thead.className = `bg-[#1a3a4a] text-white rounded-t-xl`;
                
    //             let headerRow = document.createElement('tr');
    //             headerRow.className = `flex justify-around gap-4 p-3`;
    //             headerRow.innerHTML = `
    //                 <th class="text-sm font-bold text-[#f5efe6]">نام</th>
    //                 <th class="text-sm font-bold text-[#f5efe6]">فامیلی</th>
    //                 <th class="text-sm font-bold text-[#f5efe6]">شماره موبایل</th>
    //             `;
    //             thead.appendChild(headerRow);
    //             table.appendChild(thead);
                
    //             // ===== بدنه جدول =====
    //             let tbody = document.createElement('tbody');
    //             tbody.className = `divide-y divide-[#d5cdc4]`;
                
    //             data.forEach(user => {
    //                 let row = document.createElement('tr');
    //                 row.className = `flex justify-around gap-4 p-3 hover:bg-[#c9a04e]/10 transition-colors duration-200`;
    //                 row.innerHTML = `
    //                     <td class="text-sm font-semibold text-[#1a3a4a] text-center">${user.name}</td>
    //                     <td class="text-sm font-semibold text-[#1a3a4a] text-center">${user.family}</td>
    //                     <td class="text-sm font-semibold text-[#4a5a3a] text-center">${user.phoneNumber}</td>
    //                 `;
    //                 tbody.appendChild(row);
    //             });
                
    //             table.appendChild(tbody);
    //             div.appendChild(table);
                
    //             // ===== دکمه بستن =====
    //             let Xmark = document.createElement('div');
    //             Xmark.className = `absolute -top-3 -right-3 w-10 h-10 bg-[#c9a04e] hover:bg-[#b8923a] text-white font-bold text-lg rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all duration-300 hover:scale-110 hover:rotate-90`;
    //             Xmark.innerHTML = '✕';
    //             Xmark.setAttribute('onclick', "hiddenList(this)");
    //             div.appendChild(Xmark);
                
    //             // ===== اضافه کردن به صفحه =====
    //             document.body.appendChild(div);
    //         },
    //         error: function() {
    //             alert('خطا در دریافت اطلاعات کاربران');
    //         }
    //     })
    // }
    function showRoles(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        
        $.ajax({
            url: "{{url('permision/get/permision/roles/')}}/" + id,
            type: "get",
            dataType: "json",
            success: function(data) {
                console.log(data)
                
                let div = document.createElement('div');
                // ===== پالت رنگی مترونیک با تیلویند =====
                div.classList = `absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8/12 max-w-2xl mx-auto rounded-2xl shadow-2xl flex flex-col p-6 gap-4 items-center z-50`;
                div.style.background = 'var(--metronic-content-bg)';
                div.style.border = '4px solid var(--metronic-dark)';
                
                // ===== هدر جدول =====
                let table = document.createElement('table');
                table.className = `w-full border-collapse`;
                table.id = "userTable";
                
                let thead = document.createElement('thead');
                thead.className = `text-white rounded-t-xl`;
                thead.style.background = 'var(--metronic-dark)';
                
                let headerRow = document.createElement('tr');
                headerRow.className = `flex justify-around gap-4 p-3`;
                headerRow.innerHTML = `
                    <th class="text-sm font-bold" style="color: var(--metronic-content-bg);"> نقش ها </th>
                `;
                thead.appendChild(headerRow);
                table.appendChild(thead);
                
                // ===== بدنه جدول =====
                let tbody = document.createElement('tbody');
                tbody.className = `divide-y`;
                tbody.style.borderColor = 'var(--metronic-border)';
                
                data.forEach(role => {
                    let row = document.createElement('tr');
                    row.className = `flex justify-around gap-4 p-3 transition-colors duration-200`;
                    row.style.color = 'var(--metronic-dark)';
                    row.innerHTML = `
                        <td class="text-sm font-semibold text-center" style="color: var(--metronic-dark);">${role.fa_title}</td>
                    `;
                    tbody.appendChild(row);
                });
                
                table.appendChild(tbody);
                div.appendChild(table);
                
                // ===== دکمه بستن =====
                let Xmark = document.createElement('div');
                Xmark.className = `absolute -top-3 -right-3 w-10 h-10 text-white font-bold text-lg rounded-full flex items-center justify-center cursor-pointer shadow-lg transition-all duration-300 hover:scale-110 hover:rotate-90`;
                Xmark.style.background = 'var(--metronic-blue)';
                Xmark.innerHTML = '✕';
                Xmark.setAttribute('onclick', "hiddenList(this)");
                div.appendChild(Xmark);
                
                // ===== اضافه کردن به صفحه =====
                document.body.appendChild(div);
            },
            error: function() {
                alert('خطا در دریافت اطلاعات کاربران');
            }
        })
    }
    function hiddenList(el){
        el.parentElement.remove();
    }

    
</script>

@endsection