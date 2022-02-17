<h2 class="title text-center">Cập Nhập Thông Tin Loại</h2>
<a class="btn btn-danger" href="index.php?btn_list" >Danh Sách</a>
<form action="index.php?btn_update" method="post">
<div >
    <label >Tên loại</label>
    <input type="text" name="ten_loai" class="form-control" value="<?=$ten_loai?>" required>
  </div>
<div >
    <input type="text" name="ma_loai" class="form-control" disabled value="<?=$ma_loai?> "  readonly>
  </div>
  
  <button type="submit" name="btn_update" class="btn btn-success">Lưu Sửa</button>
</form>