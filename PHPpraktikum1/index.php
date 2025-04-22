<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
  <style>
    .content {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>
  <h1 style="text-align: center;">Tugas Praktikum PHP</h1>'
  <hr style="width: 98%;">

  <h2 style="text-align: center;">Tugas Nomor 1</h2>
  <div class="content">
    <?php
    for ($i = 1; $i <= 10; $i++) {
      if ($i % 2 == 0) {
        echo $i . "<br>";
      }
    }
    ?>
  </div>

  <hr style="width: 98%;">

  <h2 style="text-align: center;">Tugas Nomor 2</h2>
  <div class="content">
    <table border="1">
      <tr>
        <td>bilangan</td>
        <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<td style='background-color: lime;'>$i</td>";
        }
        ?>
      </tr>

      <?php
      for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td style='background-color: lime;'>$i</td>";
        for ($j = 1; $j <= 10; $j++) {
          $hasil = $i * $j;
          if ($hasil % 2 == 0) {
            echo "<td style='background-color: cyan;'>$hasil</td>";
          } else {
            echo "<td style='background-color: yellow;'>$hasil</td>";
          }
        }
        echo "</tr>";
      }
      ?>
    </table>
  </div>

</body>

</html>