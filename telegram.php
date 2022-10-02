<?php
$name = $_POST['name'];
$phone = $_POST['phone-form'];
// $city = $_POST['city'];
// $date = $_POST['date'];
$wood = $_POST['wood'];
$drova = $_POST['drova'];
$token = '5324729756:AAEsOEG8L53Ww3f6XZR3V9pQ-wAZp57BwBg';
$chat_id = '-1001510870009';
$arr = [
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Название модального окна: ' => $wood,     
    // 'Адрес доставки' => $city,
    // 'Дата доставки' => $date,
    'Тип дров' => $drova,
];

foreach ($arr as $key => $value) {
    $txt .= '<b>' . $key . '</b> ' . $value . '%0A';
}

$sendToTelegram = fopen(
    "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}",
    'r'
);

if ($sendToTelegram) {
    header('Location: thanks');
} else {
    echo 'Error';
}
?>