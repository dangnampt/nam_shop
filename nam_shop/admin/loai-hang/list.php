<h2 class="title text-center">Danh Sách Loại Hàng</h2>
<a href="<?= $ADMIN_URL?>/loai-hang/" class="btn btn-success">Thêm Loại Hàng</a>
<div class="table-responsive">
<table class="table table-stripedd">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên Loại</th>
          <th></th>
         
        </tr>
      </thead>
      <tbody>
          <?php  foreach ($items as $item):
             extract($item);
           ?>
        <tr>
          <th scope="row">
              <?= $ma_loai ?>
          </th>
          <td>
              <?= $ten_loai ?>
            </td>
          <td>
              <a class="btn btn-success" href="index.php?btn_edit&ma_loai=<?=$ma_loai?>">Sửa</a>
              <a class="btn btn-danger" href="index.php?btn_delete&ma_loai=<?=$ma_loai?>">Xoá</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>