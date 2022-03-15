<h1>danh sách sinh viên</h1>
<a href="?action=create&controller=sinh_vien">Thêm</a>
<table border="1" width="100%">
      <tr>
            <th>Ma</th>
            <th>tên</th>
            <th>tên lớp</th>
            <th>sửa</th>
            <th>xóa</th>
      </tr>
      <?php foreach ($result as $each) { ?>
      <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td><a href="?action=edit&controller=sinh_vien&ma=<?php echo $each['ma'] ?>">sửa</a></td>
            <td><a href="?action=delete&controller=sinh_vien&ma=<?php echo $each['ma'] ?>">xóa</a></td>
      </tr>
      <?php }  ?>
</table>