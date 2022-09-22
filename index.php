<?php
  function printList(array $list, string $title, string $type): string {
    $listType = $type === 'order' ? 'ol' : 'ul';

    $html = "<h3>$title</h3>";
    $html .= "<$listType>";
  
    foreach ($list as $item) {
      $html .= "<li>$item</li>";
    }

    $html .= "</$listType>";

    return $html;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= printList(['Sara', 'Smith', 'John'], 'Order list', 'order') ?>
  <hr>
  <?= printList(['Sara', 'Smith', 'John'], 'Unorder list', 'unorder') ?>
</body>
</html>