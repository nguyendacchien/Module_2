
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            width: 300px;
        }
    </style>
</head>
<body>
<form method="GET">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
                              value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
<?php
$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội"],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang"],

    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định"],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây"],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội"]
];
function searchByDate($toDate, $fromDate, $customers)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}
?>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$filteredCustomers = searchByDate($toDate, $fromDate, $customerList);
?>
<table border="1">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

