<form action="?action=store&controller=<?php echo $controller ?>" method="post">
      Tên
      <input type="text" name="ten">
      <br>
      <select name="ma_lop" id="">
            <?php foreach ($lops as $lop) { ?>
            <option value="<?php echo $lop['ma'] ?>">
                  <?php echo $lop['ten'] ?>
            </option>
            <?php } ?>
      </select>
      <br>
      <button>Thêm</button>
</form>