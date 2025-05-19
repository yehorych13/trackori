<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $title?></title>
  <!-- <link href="assets/css/auth.css" rel="stylesheet" /> -->
  <?php
    if (isset($styles)) {
        $styles = (array) $styles;
        foreach ($styles as $style) {
            echo '<link rel="stylesheet" href="assets/css/'.$style.'">';
        }
    }
  ?>
  <link rel="icon" href="assets/img/bird-logo.svg" type="image/svg+xml"/>
</head>
