<?php 

//The contract
// Interfaces never implement methods
interface  PaymentProcessor {
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
} 

//The mold
abstract class OnlinePaymentProcessor implements PaymentProcessor {
    public function __construct(
        protected string $apiKey
    ) {}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executeRefund($amount);
    }
}

class StripeProcessor extends OnlinePaymentProcessor {  
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, 'sk_') === 0;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float $amount): bool {
           echo "Proccessing PayPal payment of $amount\n";
           return true; 
        }

    protected function executeRefund(float $amount):bool{
        echo "Processing Paypal refund of $amount\n";
        return true;
    }
}

class CashPaymentProcesor implements PaymentProcessor {
    public function processPayment(float $amount): bool {
        echo "Cash payment...";
        return true;
    }
    public function refundPayment(float $amount): bool {
        echo "Cash refund...";
        return true;
    }    
}

class OrderProcessor {
    public function __construct(private PaymentProcessor $paymentProcessor){}

    public function processOrder(float $amount): void {
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float $amount): void {
        if ($this->paymentProcessor->refundPayment($amount)){
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcesor();

$stripeOrder->processOrder(100.00);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(50.00);

$stripeOrder->refuseOrder(25.00);
$paypalOrder->refuseOrder(50.00);
$cashOrder->refuseOrder(10.00);

