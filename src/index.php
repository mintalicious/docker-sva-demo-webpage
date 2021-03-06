<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SVA demo webpage - HTTP request metadata">
    <meta name="author" content="Erik Schindler, Stephan Kühne">

    <title>SVA Demo - HTTP Request Metadata</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-md">
        <span class="navbar-brand mb-0 h1 fs-1">
          <img src="logo.svg" alt="SVA Logo" height="48" class="d-inline-block align-text-top">
          <?=getenv('TITLE')?>
        </span>
      </div>
    </nav>

    <div class="container-md">
      <table class="table table-striped table-responsive">
        <tr>
          <th>Key</th>
          <th>Value</th>
        </tr>
        <?php foreach ($_SERVER as $key => $value): ?>
        <tr>
          <td class="text-break"><?=$key?></td>
      	  <td class="text-break"><?=is_array($value) ? var_dump($value) : $value?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  
  </body>
</html>
