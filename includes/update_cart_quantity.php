<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['name']) && isset($_POST['action'])) {
    $name = $_POST['name'];
    $action = $_POST['action']; // 'increase' or 'decrease'

    foreach ($_SESSION['cart'] as $key => &$item) {
        if ($item['name'] === $name) {
            if ($action === 'increase') {
                $item['quantity'] += 1;
            } elseif ($action === 'decrease') {
                $item['quantity'] -= 1;
                if ($item['quantity'] <= 0) {
                    unset($_SESSION['cart'][$key]);
                }
            }
            break;
        }
    }
    unset($item);

    $_SESSION['cart'] = array_values($_SESSION['cart']); // reindex

    // Recalculate total
    $total = 0;
    $cart_items = [];
    foreach ($_SESSION['cart'] as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
        $cart_items[] = [
            'name' => $item['name'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'subtotal' => number_format($subtotal, 2)
        ];
    }

    echo json_encode([
        'success' => true,
        'total' => number_format($total, 2),
        'cart_items' => $cart_items
    ]);
    exit;
}

echo json_encode(['success' => false]);
