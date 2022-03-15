<h1>danh sach lop</h1>
<a href="?action=create&controller=lop">Thêm</a>
<table border="1" width="100%">
      <tr>
            <th>Ma</th>
            <th>tên</th>
            <th>sửa</th>
            <th>xóa</th>
      </tr>
      <?php foreach ($result as $each) { ?>
      <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td><a href="?action=edit&controller=lop&ma=<?php echo $each['ma'] ?>">sửa</a></td>
            <td><a href="?action=delete&controller=lop&ma=<?php echo $each['ma'] ?>">xóa</a></td>
      </tr>
      <?php }  ?>
</table>