<?php

  Class TableData {

    /** table_data()
     * @return array
     * Get table data
     * Default ordering type by user_id asc
     * First argument for table name
     */
    public static function table_data($table, $order_by = 'user_id ASC')
    {
      $showTableData = new Query();
      return $showTableData->query_fetch("SELECT * FROM `$table` ORDER BY $order_by", "all");
    }

  }
