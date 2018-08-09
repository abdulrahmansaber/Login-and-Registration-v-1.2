<?php

  Class TableCols {

    protected $table_name;

    public function __construct($tbl)
    {
      $this->table_name = $tbl;
    }

    public function create_col($col_name, $type, $null_type = 'NOT NULL', $auto_inc_type = Null)
    {
      $create_columns = new Query();
      $col_RowCount = $create_columns->query_rowCount("ALTER TABLE `$this->table_name` ADD `$col_name` $type $null_type $auto_inc_type");
      return $col_RowCount;
    }

    public function drop_col($col_name)
    {
      $drop = new Query();
      return $drop->query_rowCount("ALTER TABLE `$this->table_name` DROP COLUMN $col_name");
    }

    public function edit_col($col, $datatype, $null = 'NOT NULL', $auto_inc_type = NULL)
    {
      $modify = new Query();
      return $modify->query_rowCount("ALTER TABLE `$this->table_name` MODIFY COLUMN $col $datatype $null $auto_inc_type");
    }

    public function add_primary($col)
    {
      $addPrimary = new Query();
      return $addPrimary->query_rowCount("ALTER TABLE `$this->table_name` ADD PRIMARY KEY($col)");
    }

    public function add_unique($col)
    {
      $add_unique = new Query();
      return $add_unique->query_rowCount("ALTER TABLE `$this->table_name` ADD UNIQUE($col)");
    }
  }
