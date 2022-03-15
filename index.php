<?php
$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';
// kiểm tra tồn tại thì lấy , không thì lấy thằng còn lại

switch ($controller) {
      case '': {
                  require 'controller/root.php';
                  break;
            }
      case 'lop': {
                  require 'controller/lop.php';
                  break;
            }
      case 'sinh_vien': {
                  require 'controller/sinh_vien.php';
                  break;
            }
      default: {
                  echo 'không tìm thấy controller phù hợp';
                  break;
            }
}