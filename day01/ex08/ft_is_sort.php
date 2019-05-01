#!/usr/bin/php
<?php
  function ft_is_sort ($argv)
  {
      $temp = $argv;
      sort($temp);
      for ($i = 0; $i < count($temp); $i++) {
          if ($temp[$i] != $argv[$i])
              return (FALSE);
      }
      return (TRUE);
  }
?>