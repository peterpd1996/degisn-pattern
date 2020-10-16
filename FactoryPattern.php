<?php

// none pattern violate open close SOLID

//class Payment
//{
//    public function payWithCreditCard()
//    {
//
//    }
//    public function payWithPayPal()
//    {
//
//    }
//    // đầu tiên class chỉ có 2 thằng kiểu thanh tóa trên thôi và đã golive rồi, nhưng KH muốn thêm một kiểu thanh toán mới
//    // nếu thêm một phương thức vào đây sẽ vi phạm nguyên tắc thứ 2 trong nguyên lý SOLID
//    public function payWithWire()
//    {
//
//    }
//    // vi pham => dùng factory to resolve
//
//}

interface PayableInterface
{
    public function pay();
}

class CreditCardPayment implements PayableInterface
{
    public function pay()
    {
       echo "pay by credit card";
    }
}

class PaypalPayment implements PayableInterface
{
    public function pay()
    {
       echo "pay by paypal";
    }
}

class WirePayment implements PayableInterface
{
    public function pay()
    {
        echo "pay by wire";
    }
}

class PaymentFactory
{
    public function initializePayment($type) {
        if ($type == "credit") {
            return new CreditCardPayment();
        } elseif ($type == "paypal") {
            return new PaypalPayment();
        } elseif ($type == "wire") {
            return new WirePayment();
        }
        throw new Exception("unsupported payment ");
    }
}

$paymentFactory = new PaymentFactory();
try {
    $payment = $paymentFactory->initializePayment("aa");
    $payment->pay();
} catch (Exception $e) {
    echo $e->getMessage();
}
