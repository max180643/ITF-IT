
<!DOCTYPE html>
<html style="font-family:Quicksand, sans-serif;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - IT61070040</title>
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body class="container">
      <br>
      <h2>SUP3R - Watch Shop</h2>
      <h4><small class="text-muted">No.1 Watch Shop in Thailand</small></h4><hr>
      <?php
        $order = mt_rand(100000, 999999);
        echo "<h4>OrderID : #$order</h4>";
      ?>
      <p></p>
      <h5>Shipping Details</h5>
      <div>
              <?php
                    $frist = $_POST["frist"];
                    $last = $_POST["last"];
                    $email = $_POST["email"];
                    $mobile = $_POST["mobile"];
                    $address = $_POST["address"];
                    echo "<h6 class='detail'>Name : </h6>";
                    echo "<p class='detail'>$frist $last</p><br>";
                    echo "<h6 class='detail'>Email : </h6>";
                    echo "<p class='detail'>$email</p><br>";
                    echo "<h6 class='detail'>Mobile : </h6>";
                    echo "<p class='detail'>$mobile</p><br>";
                    echo "<h6 class='detail'>Address : </h6>";
                    echo "<p class='detail'>$address</p><br>";
                ?>
        </div>
        <p></p>
        <h5>Summary</h5>
        <div>
        <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $item1 = $_POST['item1'];
                        if (isset($item1) && $item1 > 0) {
                        $item1_total = $item1 * 33150;
                        $item1_total = number_format($item1_total, 2, '.', '');
                        echo "<td>GPW-2000-1A (Black)</td>";
                        echo "<td>33,150.00 ฿</td>";
                        echo "<td>$item1</td>";
                        echo "<td>$item1_total ฿</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $item2 = $_POST['item2'];
                        if (isset($item2) && $item2 > 0) {
                        $item2_total = $item2 * 24565;
                        $item2_total = number_format($item2_total, 2, '.', '');
                        echo "<td>GST-B100XA-1A (Black)</td>";
                        echo "<td>24,565.00 ฿</td>";
                        echo "<td>$item2</td>";
                        echo "<td>$item2_total ฿</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $item3 = $_POST['item3'];
                        if (isset($item3) && $item3 > 0) {
                        $item3_total = $item3 * 24565;
                        $item3_total = number_format($item3_total, 2, '.', '');
                        echo "<td>GWG-1000-1A1 (Black)</td>";
                        echo "<td>24,565.00 ฿</td>";
                        echo "<td>$item3</td>";
                        echo "<td>$item3_total ฿</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $item4 = $_POST['item4'];
                        if (isset($item4) && $item4 > 0) {
                        $item4_total = $item4 * 10540;
                        $item4_total = number_format($item4_total, 2, '.', '');
                        echo "<td>GST-S130BC-1A3 (Black)</td>";
                        echo "<td>10,540.00 ฿</td>";
                        echo "<td>$item4</td>";
                        echo "<td>$item4_total ฿</td>";
                        }
                        ?>
                    </tr>
                    </tbody>
        </div>
  </body>
</html>