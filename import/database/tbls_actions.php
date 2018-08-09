<?php

  Class TableActions {

    /** delete_table()
     * @return int
     * Delete table if exists
     */
    public function delete_table($table)
    {
      $del_table = new Query();
      $delQUERY = $del_table->query_rowCount("DROP TABLE IF EXISTS `$table`");
      return $delQUERY;
    }

    /** truncate_table()
     * @return int
     * Empty all table data
     */
    public function truncate_table($table)
    {
      $trun = new Query();
      $trun_count = $trun->query_rowCount("TRUNCATE TABLE `$table`");
      if ($trun_count > 0) {
        return true;
      } else {
        return false;
      }
    }

  }
