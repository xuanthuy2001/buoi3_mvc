<?php
function connect()
{
      $connect = mysqli_connect('localhost', 'root', '', 'web_nangcao');
      mysqli_set_charset($connect, 'utf8');
      return $connect;
}