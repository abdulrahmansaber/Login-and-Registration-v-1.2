<?php

  Class CountRecorders
  {

    // Count Table Data
    public function count_table($table)
    {
      $countAll = new Query();
      return $countAll->query_fetch("SELECT COUNT(*) FROM `$table`", "fetch");
    }

    // Count Table Data where some_recorder = some_values
    public function count_table_where($table, $where, $equal)
    {
      $countAll = new Query();
      return $countAll->query_fetch("SELECT COUNT(*) FROM `$table` WHERE `$where` = '$equal'", "fetch");
    }

  }
