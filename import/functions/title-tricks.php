<?php

  function title_tricks($get_name, $equal, $title_set_name)
  {
    global $title;
    if (isset($_GET[$get_name]) && $_GET[$get_name] == $equal) {
      $title = $title_set_name;
    }
  }

  title_tricks('action', 'delete', 'Delete Action');
  title_tricks('action', 'unapprove', 'UnApprove Action');
  title_tricks('action', 'unblock', 'Unblock Action');
  title_tricks('action', 'view', 'View Action');
  title_tricks('action', 'block', 'Block Action');
  title_tricks('action', 'approve', 'Approve Action');
  title_tricks('action', 'edit', 'Edit Action');
  title_tricks('action', 'new', 'New');
