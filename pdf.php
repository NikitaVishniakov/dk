<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connection.php");
    $query = $link->query("SELECT * FROM dkp WHERE id = '".$id."'");
    $query = $query->fetch_array();
    require_once 'fpdf/fpdf.php';
    $pdf= new FPDF();
    $pdf->AddFont('times_cyr','B','times_cyr.php');
    $pdf->AddPage();
    $pdf->SetFont('times_cyr','B',35);
    $pdf->Cell(0,10,'Кириллица');
    $pdf->Output();

    
//Договор купли-продажи
//автотранспортного средства
//г. Москва « 30 » Сентября 2016 года
//Мы, 5465464654 Паспорт 65465 № 6546546546
//Выдан: 12.09.2016 6546465464
//Зарегистрированный по адресу: 6546546465465
//Именуемый в дальнейшем «Продавец»,
//И, 654646546546 Паспорт 654654 № 65465464
//Выдан: 12.09.2016 65465654
//Зарегистрированный по адресу: 65464645645
//Именуемый в дальнейшем Покупатель, заключили настоящий договор о нижеследующем:
//1. Продавец передает, а Покупатель оплачивает и принимает транспортное средство:
//1.1 Марка, модель ТС 32131312 6546546 СТС 5646546546 № 654
//1.2. Выдан 6546546546 30.09.2016
//1.3. Год выпуска 6546 Цвет 6546546 Тип ТС легковое
//1.4. Идентификационный номер (VIN) 654654646546
//1.5. № двигателя: 654654654
//1.6. Шасси (рама), № 654654654 Гос.рег.знак 654654
//1.7. Кузов (кабина, прицеп), № 654
//2. Указанный автомобиль, находится в собственности Продавца на основании паспорта транспортного средства,
//серии 654654654 № 65465465 от 30.09.2016,
//выданного 56466546
//3. Стоимость транспотрного средства, указанного в пункте 1 настоящего договора, составляет 2147483647 руб. (два милиарда сто сорок
//семь миллионов четыреста восемьдесят три тысячи шестьсот сорок семь рублей 00 копеек).
//4. Продавец гарантирует, что передаваемое Покупателю транспортное средство никому не продано, не является предметом залога, в
//споре и под запрещением (арестом) не состоит.
//5. Право собственности на транспортное средство переходит к Покупателю с момента подписания настоящего договора.
//6. Настоящий договор составлен в трёх экземплярах, обладающих равной юридической силой.
//Транспортное средство, указанное в пункте 1 настоящего договора получил, претензий к Продавцу не имею.
// 654646546546 Покупатель: _________________________________________
//Денежные средства в сумме 2147483647 руб. (два милиарда сто сорок семь миллионов четыреста восемьдесят три тысячи шестьсот
//сорок семь рублей 00 копеек) получил, претензий к Покупателю не имею.
// 5465464654 Продавец: _________________________________________
}

?>