<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }} - Laravel 6</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>หัวข้อ</label>
        <input type="text" class="form-control" name="title" placeholder="ระบุหัวข้อ" required>
        <br>
        <label>ลิงค์เชื่อมโยง</label>
        <input type="text" name="url" class="form-control" placeholder="ระบุลิงค์เชื่อมโยง">
        <br>
        <label>การแสดง (Target)</label>
        <select name="target" class="form-control">
            <option value="_parent">แสดงหน้าต่างเดิม</option>
            <option value="_blank">แสดงหน้าต่างใหม่</option>
        </select>
        <br>
        <label>วันที่เขียน</label>
        <input class="form-control datepicker" type="date" name="date" placeholder="ระบุวันที่" required>
        <br>
        <label>หน้าปก</label>
        <input type="file" name="cover" class="krajee-input" data-msg-placeholder="เลือกไฟล์หน้าปก" accept="image/*">
        <p>ขนาดรูปภาพที่เหมาะสม 1200 x 630 pixcel (กว้าง x สูง) ภาพจะถูก crop อัตโนมัติ</p>
        <br>
        <label>เขียนโดย</label>
        <input type="text" class="form-control" name="author" placeholder="ระบุผู้เขียน" required>
        <br>
        <label>รายละเอียด</label>
        <textarea name="details" id="details" rows="8" placeholder="ระบุรายละเอียด..."></textarea>
        <br>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle fa-fw"></i> บันทึกข้อมูล</button>
        <button type="reset" class="btn btn-light"><i class="fa fa-fw fa-times-circle"></i>ยกเลิก</button>
    </form>
</body>

</html>
