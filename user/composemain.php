<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compose Mail</title>
  <style>
    .center {
     display: flex;
     justify-content: center;
     align-items: center;
    }
  </style>
</head>

<body>
  <table width="100%">
    <tr>
      <td>
        <?php
        include('nav.php');
        ?>
      </td>
    </tr>
    <tr>
      <td class="center">
        <?php
        include('composebox.php');
        ?>
      </td>

    </tr>
    <tr>
      <td>
        <?php
        include('footer.php');
        ?>
      </td>
    </tr>
  </table>
</body>

</html>