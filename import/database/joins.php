<?php

  Class JoinSTMT
  {

    /** join_stmt()
     * Used for join statements
     * $select_recorders => Recorder that 'll selected
     * $from => #1 table name
     * $tbl_forigen => table that have the key
     * $on => on recorder
     * $on2 => on recorder number one of table
     * $where => recorder = something 
     */
    public function join_stmt($select_recorders, $from, $tbl_forigen, $on, $on2, $where = null, $fetch_type = 'fetch')
    {
      $join = new Query();
      return $join->query_fetch("SELECT $select_recorders FROM $from JOIN $tbl_forigen ON $on = $on2 $where", 'all');
    }

  }
