<?php
namespace Bakhtiari\PaymentGateway;
use App\Http\Controllers\Controller;    
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function index($amount) {
        return view('bakhtiari.paymentgateway.payment', compact('amount'));
    }
}
