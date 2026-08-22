@props(['tenSp', 'giaTien', 'hinhAnh'])
<div style="background: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 15px; width: 30%; margin-bottom: 20px; box-sizing: border-box;">

    <img src="{{ $hinhAnh }}" alt="{{ $tenSp }}" style="width: 100%;
height: 200px; object-fit: cover; border-radius: 4px;">
    <h3 style="color: #333; margin-top: 15px;">{{ $tenSp }}</h3>
    <p style="color: #e74c3c; font-weight: bold; font-size: 18px;">{{
number_format($giaTien, 0, ',', '.') }} VNĐ</p>
    <div style="margin-top: 15px; border-top: 1px dashed #ccc; padding-top:
10px;">
        {{ $slot }}
    </div>
</div>