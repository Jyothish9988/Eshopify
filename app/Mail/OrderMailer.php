<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class OrderMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $id;
    public $product;
    public $rate;
    public $name;
    public $address;
    public $pin;
    public $phone;
    public $imagePath;
    public $house;
    public $created_at;
    public $payment_status;

    /**
     * Create a new message instance.
     *
     * @return void
     */


   public function __construct($id, $product, $rate, $name, $address, $pin, $phone, $house, $created_at, $payment_status)
{
    $this->id = $id;
    $this->product = $product;
    $this->rate = $rate;
    $this->name = $name;
    $this->address = $address;
    $this->pin = $pin;
    $this->phone = $phone;
    $this->house = $house;
    $this->created_at = $created_at;
    $this->payment_status = $payment_status;
  
}

public function build()
{
    $mail = $this->subject('Order Mailer')
                 ->view('emails.order_plain')
                 ->with([
                     'id' => $this->id,
                     'product' => $this->product,
                     'rate' => $this->rate,
                     'name' => $this->name,
                     'address' => $this->address,
                     'pin' => $this->pin,
                     'phone' => $this->phone,
                     'house' => $this->house,
                     'created_at' => $this->created_at,
                     'payment_status' => $this->payment_status,
                     
                 ]);

                 return $this->subject('Order Mailer')
                 ->view('emails.order_plain');
}

    
    



    
}




