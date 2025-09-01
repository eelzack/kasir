<?php
// Data transaksi
$customerName = "Budi Santoso";
$bookTitle = "Dasar-Dasar Pemrograman Web";
$bookQuantity = 2;
$bookPrice = 85000; // dalam rupiah
$isMember = true; // true = member, false = bukan member

// Fungsi menghitung total harga awal
function calculateTotalPrice($quantity, $price) {
    return $quantity * $price;
}

// Fungsi untuk menghitung harga setelah diskon member
function applyMemberDiscount($total, $isMember) {
    if ($isMember) {
        $discountRate = 0.10; // diskon 10%
        $discountAmount = $total * $discountRate;
        return $total - $discountAmount;
    } else {
        return $total;
    }
}

// Fungsi menampilkan struk belanja
function printReceipt($customerName, $bookTitle, $bookQuantity, $bookPrice, $isMember, $totalPrice, $finalPrice) {
    echo "===== STRUK BELANJA =====\n";
    echo "Nama Pelanggan : $customerName\n";
    echo "Judul Buku     : $bookTitle\n";
    echo "Jumlah Buku    : $bookQuantity\n";
    echo "Harga Satuan   : Rp " . number_format($bookPrice, 0, ',', '.') . "\n";
    echo "Status Member  : " . ($isMember ? "Ya" : "Tidak") . "\n";
    echo "-------------------------\n";
    echo "Total Harga Awal : Rp " . number_format($totalPrice, 0, ',', '.') . "\n";
    if ($isMember) {
        $discount = $totalPrice - $finalPrice;
        echo "Diskon Member   : Rp " . number_format($discount, 0, ',', '.') . "\n";
    }
    echo "Total Bayar     : Rp " . number_format($finalPrice, 0, ',', '.') . "\n";
    echo "=========================\n";
}

// Proses perhitungan
$totalPrice = calculateTotalPrice($bookQuantity, $bookPrice);
$finalPrice = applyMemberDiscount($totalPrice, $isMember);

// Cetak struk
printReceipt($customerName, $bookTitle, $bookQuantity, $bookPrice, $isMember, $totalPrice, $finalPrice);
?>
