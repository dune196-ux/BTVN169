<?php
// Bài 1
$chieuDai = 10;
$chieuRong = 5;
$chuVi = ($chieuDai + $chieuRong) * 2;
$dienTich = $chieuDai * $chieuRong;
echo "Chu vi: " . $chuVi . "<br>";
echo "Diện tích: " . $dienTich . "<br><br>";
// Bài 2
$gioDen = 8;
$gioQuyDinh = 7;
if ($gioDen <= $gioQuyDinh) {
    echo "Đúng giờ";
} else {
    echo "Đi muộn";
}
echo "<br><br>";
// Bài 3
$diem = 8;
if ($diem >= 8) {
    echo "Giỏi";
} elseif ($diem >= 6.5) {
    echo "Khá";
} elseif ($diem >= 5) {
    echo "Trung bình";
} else {
    echo "Yếu";
}
echo "<br><br>";
// Bài 4
$thu = 3;
switch ($thu) {
    case 1:
        echo "Thứ hai";
        break;
    case 2:
        echo "Thứ ba";
        break;
    case 3:
        echo "Thứ tư";
        break;
    case 4:
        echo "Thứ năm";
        break;
    case 5:
        echo "Thứ sáu";
        break;
    case 6:
        echo "Thứ bảy";
        break;
    case 7:
        echo "Chủ nhật";
        break;
    default:
        echo "Không hợp lệ";
}
echo "<br><br>";
// Bài 5
for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        break;
    }
    if ($i % 3 == 0) {
        continue;
    }
    echo $i . " ";
}
echo "<br><br>";
// Bài 6
function maxOfThree($a, $b, $c) {
    return max($a, $b, $c);
}
echo maxOfThree(10, 20, 15);
echo "<br><br>";
// Bài 7
function calculateTotal($price, $quantity, $discount = 0) {
    return $price * $quantity * (1 - $discount);
}
echo calculateTotal(100000, 2, 0.1);
echo "<br><br>";
// Bài 8
$mang = [5, 8, 2, 10, 3, 7, 1, 9, 6, 4];
echo "Tổng: " . array_sum($mang) . "<br>";
echo "Trung bình: " . (array_sum($mang) / count($mang)) . "<br>";
echo "Nhỏ nhất: " . min($mang) . "<br>";
echo "Lớn nhất: " . max($mang) . "<br>";
sort($mang);
echo "Mảng sau khi sắp xếp: ";
print_r($mang);
echo "<br><br>";
// Bài 9
$sinhVien = [
    "Nguyen Van A" => 8,
    "Tran Van B" => 7,
    "Le Van C" => 9,
    "Pham Van D" => 6,
    "Hoang Van E" => 8.5
];
foreach ($sinhVien as $ten => $diem) {
    if ($diem >= 8) {
        echo $ten . " - " . $diem . "<br>";
    }
}
arsort($sinhVien);
echo "Sắp xếp giảm dần:<br>";
foreach ($sinhVien as $ten => $diem) {
    echo $ten . " - " . $diem . "<br>";
}
echo "<br>";
// Bài 10
$sanPham = [
    ["ten" => "Laptop", "gia" => 15000000, "soluong" => 5],
    ["ten" => "Điện thoại", "gia" => 10000000, "soluong" => 10],
    ["ten" => "Tai nghe", "gia" => 500000, "soluong" => 20]
];
echo "<table border='1'>";
echo "<tr>";
echo "<th>Tên sản phẩm</th>";
echo "<th>Giá</th>";
echo "<th>Số lượng</th>";
echo "</tr>";
foreach ($sanPham as $sp) {
    echo "<tr>";
    echo "<td>" . $sp["ten"] . "</td>";
    echo "<td>" . $sp["gia"] . "</td>";
    echo "<td>" . $sp["soluong"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>