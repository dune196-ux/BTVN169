<?php
// Bài 1
echo "Bài 1:<br>";
$n = 8;
if ($n % 2 == 0) {
    echo "$n là số chẵn";
} 
else {
    echo "$n là số lẻ";
}
// Bài 2
echo "<br><br>Bài 2:<br>";
$diemGiuaKy = 8;
$diemCuoiKy = 9;
$diemTrungBinh = ($diemGiuaKy * 30 / 100) + ($diemCuoiKy * 70 / 100);
echo "Điểm trung bình: $diemTrungBinh<br>";
if ($diemTrungBinh >= 9.0) {
    echo "Xếp hạng: Xuất sắc";
} 
elseif ($diemTrungBinh >= 7.0) {
    echo "Xếp hạng: Giỏi";
} 
elseif ($diemTrungBinh >= 5.0) {
    echo "Xếp hạng: Khá";
} 
else {
    echo "Xếp hạng: Trung bình - Yếu";
}
// Bài 3
echo "<br><br>Bài 3:<br>";
$nam = date("Y");
if ($nam % 2 == 0) {
    echo "Năm $nam là năm chẵn";
} 
else {
    echo "Năm $nam là năm lẻ";
}
// Bài 4
echo "<br><br>Bài 4:<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
// Bài 5
echo "<br><br>Bài 5:<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<b>$i</b> ";
    } else {
        echo "$i ";
    }
}
// Bài 6
echo "<br><br>Bài 6:<br>";
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
foreach ($nam as $n) {
    echo $n . " ";
}

?>