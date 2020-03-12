<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;
use App\User;
class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order,$invoiceId)
    {
      // $this->user = $name;
      // $this->email = $email;
      // $this->finaladdress = $finaladdress;
      $this->order = $order;
      $this->invoiceId = $invoiceId;
      // $this->orderdetails = $orderdetails;
      // $this->shipingTotalAmount = $shipingTotalAmount;
      // $this->shipingDiscountAmount = $shipingDiscountAmount;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $orderdetails = Order::with('paymentOrder','user','orderProduct')->where('order_id', $this->order)->first();

      $html.='';
      $html.='<div class="bside-invoice" style="margin: auto; background-color: #fff; text-align: center">
    <p style="margin-top: 10%; text-align: center; font-weight: bold; font-size: 24px;margin-bottom: -8px;">
        Thank you for your order
    </p>
    <img src="image/from-logo%20(1).png" style="height: 150px; width: 150px;">
    <p style="text-align: center; font-size: 16px; color: #000000;     margin-top: -1%;">
        Hi '"$orderdetails['user']['name']"'<br>
        The countdown of creating your order begins now <img src="image/heart.png"> <br>
        We will WhatsApp you once the order is ready
    </p><div style="float: left; width:65%;display: flex;">
          <table style="margin: 15px 0px;">
              <tr style="text-align: left;">
                  <th style="padding: 5px 8px;">Order Type:</th>
                  <td style="padding: 5px 8px;">';


dd($html);

     return $this->subject("Order has beend confirm")->view('emails.orderconfirmation',['html'=>$orderdetails]);
    //return $this->view('view.name');
    }
}
