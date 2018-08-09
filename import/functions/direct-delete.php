<?php

  function delete_fromGET($tbl_name, $col, $col_value)
  {

    $rec_action = new RecordersActions();

    $row = $rec_action->delete_recorder($tbl_name, $col, $col_value);

    return $row;

  }
