<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();
    $_SESSION["cart"] ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'config/heade_tag.php' ?>
    <link rel="stylesheet" href="styleInvoice.css">
</head>

<!-- insert to DB at table Billing -->
<?php
require_once("./config/conndb.php");
function execResult($sql)
{
    $conn = new mysqli(HOST, USER, PASS, DATABASE);

    if ($conn->connect_error) {
        die('ket noi that bai:' . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    $result = $conn->query($sql);

    $data = array();

    while ($row = $result->fetch_array(1)) {
        $data[] = $row;
    }
    return $data;

    $conn->close();
}
// Insert to table Billing
$conn = new mysqli(HOST, USER, PASS, DATABASE);

$email = $_POST['checkout_email'];
$name = $_POST['checkout_name'];
$adress = $_POST['checkout_adress'];
$apartment =  $_POST['checkout_apartment'];
$sum = 0;
$payment_method = "VNPay";
if ($_POST['checkout_payment_method'] == "Vietnam") {
    $payment_method = "COD";
}
if (!empty($_SESSION["cart"])) {
    foreach ($_SESSION["cart"] as $key => $value) {
        $sum += (int)$_SESSION["cart"][$key]["price"] * (int)$_SESSION["cart"][$key]["soluong"];
    }
}
$sqlInsertBilling = 'INSERT INTO `billing` (`user_email`, `total`, `delivery_address`, `delivery_method`, `delivery_status`) VALUES ("' . $email . '", "' . $sum . '","' . $apartment . ' ' . $adress . '" ,"' . $payment_method . '","đang giao hàng")';
//mysqli_query($conn, $sqlInsertBilling);
$conn->close();

// Insert to table Billing_Detail
$conn = new mysqli(HOST, USER, PASS, DATABASE);
$sqlGetLastestIdBilling = 'SELECT billing_id from `billing` ORDER by billing_id desc limit 1 ';
$objectQuery = mysqli_query($conn, $sqlGetLastestIdBilling);
$lastestID = mysqli_fetch_object($objectQuery)->billing_id;

if (!empty($_SESSION["cart"])) {
    foreach ($_SESSION["cart"] as $key => $value) {
        $idSanPham = str_replace("'", "", $_SESSION["cart"][$key]["id"]);
        $price = $_SESSION["cart"][$key]["price"];
        $soluong = $_SESSION["cart"][$key]["soluong"];
        $sqlInsertBillingDetail = 'INSERT INTO `billing_detail` (`billing_id`, `product_id`, `price`, `amount`) VALUES ("' . $lastestID . '","' . $idSanPham . '","' . $price . '","' . $soluong . '")';
        // mysqli_query($conn, $sqlInsertBillingDetail);
    }
}


?>


<body>
    <div id="shopify-section-nov-header" class="shopify-section">
        <div data-section-id="nov-header" data-section-type="header-section">
            <?php require('Common/Header/header.php') ?>

            <div id="header-sticky" style="background-color: #ffffff;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="contentstickynew_logo col-xl-3 col-lg-3 col-md-3"></div>
                        <div class="contentstickynew_menu col-xl-6 col-lg-6 col-md-6 text-center"></div>
                        <div class="contentstickynew_group col-xl-3 col-lg-3 col-md-3 d-flex justify-content-end"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="body-wrap">
            <tbody>
                <tr>
                    <td></td>
                    <td class="container" width="600">
                        <div class="content">
                            <table class="main" width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="content-wrap aligncenter">
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="content-block">
                                                            <h2>Xin cảm ơn, đơn hàng của bạn đang được xử lý</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="content-block">
                                                            <table class="invoice">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?php echo $name ?><br>Invoice <?php echo "#" . $lastestID ?><br><?php echo date("l jS F Y"); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Thành tiền</td>
                                                                                        <td class="alignright"><?php if (!empty($_SESSION["cart"])) {
                                                                                                                    $sum = 0;
                                                                                                                    foreach ($_SESSION["cart"] as $key => $value) {
                                                                                                                        $sum += (int)$_SESSION["cart"][$key]["price"] * (int)$_SESSION["cart"][$key]["soluong"];
                                                                                                                    }

                                                                                                                    echo number_format($sum, 0, ',', '.') . " " . "VNĐ";
                                                                                                                }
                                                                                                                ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Phí vận chuyển</td>
                                                                                        <td class="alignright">Miễn phí</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Thuế VAT</td>
                                                                                        <td class="alignright">20.000 VNĐ</td>
                                                                                    </tr>
                                                                                    <tr class="total">
                                                                                        <td class="alignright" width="60%">Tổng cộng</td>
                                                                                        <td class="alignright"><?php if (!empty($_SESSION["cart"])) {
                                                                                                                    $sum = 0;
                                                                                                                    foreach ($_SESSION["cart"] as $key => $value) {
                                                                                                                        $sum += (int)$_SESSION["cart"][$key]["price"] * (int)$_SESSION["cart"][$key]["soluong"];
                                                                                                                    }
                                                                                                                    $sum += 20000;
                                                                                                                    echo number_format($sum, 0, ',', '.') . " VNĐ";
                                                                                                                }
                                                                                                                ?></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="footer">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>

</body>

</html>