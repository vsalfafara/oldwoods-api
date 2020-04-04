<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Transaction;
use App\Item;

class TransactionController extends Controller
{
    public function confirm(Request $request) {

        $trans = $request['transaction'];
        $trans['transaction_date'] = Carbon::now()->toDateString();
        
        $transaction = new Transaction();
        $transaction->first_name = $trans['first_name'];
        $transaction->last_name = $trans['last_name'];
        $transaction->mobile_number = $trans['mobile_number'];
        $transaction->email = $trans['email'];
        $transaction->mode_of_payment = $trans['mode_of_payment'];
        $transaction->delivery_address = $trans['delivery_address'];
        $transaction->delivery_province = $trans['delivery_province'];
        $transaction->total_price = $trans['total_price'];
        $transaction->shipping_fee = $trans['shipping_fee'];
        $transaction->transaction_date = $trans['transaction_date'];
        $transaction->shipping_id = $trans['shipping_id'];
        
        try {
            $transaction->save();
        }
        catch (Exception $e) {
            return [
                'response' => 'Something Went Wrong...'
            ];
        }

        $items = $request['items'];
        $itemsArr = [];

        foreach ($items as $item) {
            array_push($itemsArr, [
                'product' => $item['product_id'],
                'transaction_id' => $transaction['transaction_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        try {
            Item::insert($itemsArr);
        }
        catch (Exception $e) {
            return [
                'response' => 'Something went wrong...'
            ];
        }

        return [
            'response' => 'Success'
        ];
    }
}
