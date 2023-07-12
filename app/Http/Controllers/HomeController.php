<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\gallery;
use App\Models\Order;
use App\Models\Review;
use App\Models\Contact;
use App\Mail\DeliveryMailer;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
    
        if ($usertype == '1') {
            return view('admin.home');
        } elseif ($usertype == '0') {
            $status = Auth::user()->status;
    
            if ($status == 0) {
                Auth::logout(); // Logout the user
                return redirect()->back()->with('message', 'Your account is inactive. Please contact the administrator.');
            } elseif ($status == 1) {
                $user = auth()->user();
                $count = Cart::where('phone', $user->phone)->count();
                $data = Category::all();
                $products = Product::all();
                $gallery = gallery::all();
    
                return view('home.user', compact('data', 'products', 'count','gallery'));
            }
        } elseif ($usertype == '2') {
            return view('staff.home');
        }
    }
    
    


    public function index()
    {
        $user = auth()->user();
        // 
        $data = category::all();
        $products= product::all();
        $gallery = gallery::all();
        return view('home.user', compact('data','products','gallery'));
       
    }

    public function product_category_view($category)
    {
        if(auth()->check()) 
        {
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        $data = Category::all();
        $products = Product::where('category', $category)->get();
        return view('home.product_category', compact('data', 'products','count'));
        }
        else
        {
            $user = auth()->user();
            // $count = Cart::where('phone', $user->phone)->count();
            $data = Category::all();
            $products = Product::where('category', $category)->get();
            return view('home.product_category', compact('data', 'products'));  
        }

    }

    public function view_more_products()
    {
        if(auth()->check()) 
        {
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        $data = category::all();
        $products= product::all();
        return view('home.product_category', compact('data','products','count'));
        }
        else
        {
            $user = auth()->user();
            // $count = Cart::where('phone', $user->phone)->count();
            $data = category::all();
            $products= product::all();
            return view('home.product_category', compact('data','products'));  
        }
    }

    public function productinfo($id)  
    {
        if (auth()->check()) {
            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();
            $data = Product::find($id);
            $userid = $user->id;
            $review = Review::where('productid', $id)->orderBy('id', 'asc')->get();
            $review_count = Review::where('productid', $id)->count();

            return view('home.productinfo', compact('data','count','review','review_count'));
        } else 
        {
            $user = auth()->user();
            $review = Review::where('productid', $id)->orderBy('id', 'asc')->get();
            $review_count = Review::where('productid', $id)->count();
            $data = Product::find($id);
            return view('home.productinfo',compact('data','review','review_count'));
        }
    }


    public function review_helpful($id)
    {
        $data = review::find($id);
        if ($data) {
            $data->helpful += 1;
            $data->save();
            return redirect()->back()->with('message', 'Liked');
        }
    }

    public function review_unhelpful($id)
    {
        $data = review::find($id);
        if ($data) {
            $data->unhelpful += 1;
            $data->save();
            return redirect()->back()->with('message', 'Unliked');
        }
    }

    
    public function review_delete($id)
    {
        $data = review::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Review Deleted');
        
    }

        public function search_product(Request $request)
    {
        if(auth()->check()) 
        {
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        $search = $request->input('search');
        $data = Category::all();
        $products = Product::where('category', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('home.product_category', compact('data', 'products','count'));
        }
        else
        {
            $user = auth()->user();
            // $count = Cart::where('phone', $user->phone)->count();
            $search = $request->input('search');
            $data = Category::all();
            $products = Product::where('category', 'LIKE', '%' . $search . '%')->paginate(3);
    
            return view('home.product_category', compact('data', 'products')); 
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::check()) {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = Cart::where('phone', $user->phone)
                ->where('product_id', $id)
                ->first();
    
            if (!$cart || $cart->quantity + $request->quantity <= $product->quantity) {
                $quantity = $cart ? $cart->quantity + $request->quantity : $request->quantity;
                $total_price = $product->price * $quantity;
    
                // Check if required fields are empty
                if (
                    empty($user->address) ||
                    empty($user->pin) ||
                    empty($user->landmark) ||
                    empty($user->dphone)||
                    empty($user->city)
                ) {
                    // return redirect()->route('address');
                    return redirect('address')->with('alert', 'Plese Add Address First to add product to cart');
                    // return redirect()->back()->with('alert', 'Plese Add Address First to add product to cart');
                }
    
                // Reduce the product quantity
                if ($cart) {
                    $product->quantity += $cart->quantity - $quantity;
                } else {
                    $product->quantity -= $quantity;
                }
                $product->save();
    
                if (!$cart) {
                    $cart = new Cart;
                    $cart->name = $user->name;
                    $cart->phone = $user->phone;
                    $cart->address = $user->address;
                    $cart->pin = $user->pin;
                    $cart->email = $user->email;
                    $cart->house = $user->house;
                    $cart->landmark = $user->landmark;
                    $cart->dphone = $user->dphone;
                    $cart->user_id = $user->id;
                    $cart->city = $user->city;
                    $cart->product_title = $product->title;
                    $cart->image = $product->image;
                    $cart->price = $product->price;
                    $cart->product_id = $id;
                }
                $cart->quantity = $quantity;
                $cart->total_price = $total_price;
                $cart->save();
                return redirect()->back()->with('message', 'Product added to cart successfully');
            } else {
                return redirect()->back()->with('error', 'Not enough stock for the selected product');
            }
        } else {
            return redirect('login');
        }
    }
    

    public function showcart()
    {
        $user = auth()->user();
        $count = cart::where('phone', $user->phone)->count();
        $cart = cart::join('products', 'carts.product_id', '=', 'products.id')->select('carts.*', 'products.image')->where('phone', $user->phone)->get();
        $total_price = cart::where('phone', $user->phone)->sum('total_price');
        if ($cart->isEmpty()) {
            return redirect(url('/redirect'))->with('message', 'Your cart is empty.');
        }
        return view('home.showcart', compact('count', 'cart', 'total_price'));
    }





    public function delete_cart($id)
{
    $data=cart::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Cart item deleted Successfully');
    if ($cart->isEmpty()) {
        return redirect(url('/redirect'))->with('message', 'Your cart is empty.');
    }
    return view('User.showcart', compact('count', 'cart', 'total_price'));
}



public function address()
{
  
    $users = auth()->user();
    $count = Cart::where('phone', $users->phone)->count();
    $data = category::all();
    $user= user::where('id', $users->id)->get();
    return view('home.address', compact('count','user','data'));
 
   
}

public function address_add(Request $request, $id)
{
    $data = User::find($id);
    $data->name = $request->input('name');
    $data->house = $request->input('house');
    $data->address = $request->input('address');
    $data->pin = $request->input('pin');
    $data->landmark = $request->input('landmark');
    $data->phone = $request->input('phone');   
    $data->dphone = $request->input('dphone');
    $data->city = $request->input('city');
  
    $data->save();

    return redirect()->back()->with('message', 'Address Added Successfully');
}
public function checkout_redirect()
{
  
    $users = auth()->user();
    $count = Cart::where('phone', $users->phone)->count();
    $data = category::all();
    $user= user::find($users);
    return view('home.payment', compact('count','user','data'));
 
   
}

function cod()
{
    $user = Auth::user();
    $userid = $user->id;

    $dataa = cart::where('user_id', $userid)->get();

    foreach ($dataa as $data) {
        $order = new order;
        $order->name = $data->name;
        $order->email = $data->email;
        $order->phone = $data->phone;
        $order->house = $data->house;
        $order->landmark = $data->landmark;
        $order->pin = $data->pin;
        $order->dphone = $data->dphone;
        $order->address = $data->address;
        $order->user_id = $data->user_id;
        $order->product_title = $data->product_title;
        $order->quantity = $data->quantity;
        $order->price = $data->price;
        $order->total_price = $data->total_price;
        $order->image = $data->image;
        $order->city = $data->city;
        $order->product_id = $data->product_id;
        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = '1';
        $order->save();

        $cart_id=$data->id;
        $cart=cart::find($cart_id);
        $cart->delete();
    }

    return redirect('showcart')->with('message', 'Order Placed');
}

public function user_orders()
{
    $user = auth()->user();
    $userid = $user->id;
    $data = category::all();
    $count = cart::where('phone', $user->phone)->count();

    
    $orders = order::where('user_id', $userid)->orderBy('id', 'desc')->get();

   

    return view('home.user_orders', compact('orders', 'count','data'));
}

public function staff_order_view()
{
    $user = auth()->user();
    $userid = $user->id;
  
    $data = order::where('staff_id','=', $userid)->orderBy('id', 'asc')->get();
    return view('staff.staff_order_view',compact('data'));
   
}

function staff_order_accept($id)
    {
        $order = Order::find($id);
        $order->delivery_status = $delivery_status ?? 5;
       
        $order->save();
        
        return redirect()->back()->with('message', 'Order Accepted Successfully');
    }

    function staff_order_reject($id)
    {
        $order = Order::find($id);
        $order->delivery_status = $delivery_status ?? 8;
       
        $order->save();
        
        return redirect()->back()->with('error', 'Order Returned Successfully');
    }

    

    public function staff_deliveries_view()
{
    $user = auth()->user();
    $userid = $user->id;
  
    $data = Order::where('staff_id', $userid)
             ->where('delivery_status', 5)
             ->orderBy('id', 'asc')
             ->get();

    return view('staff.staff_deliveries_view',compact('data'));
   
}

public function scan($id)
{
   
    return view('staff.scan',compact('id'));
   
}

function delivered($id)
{
    $order = Order::find($id);
    $order->delivery_status = $delivery_status ?? 6;
   
    $order->save();

    $user = auth()->user();
    $userid = $user->id;
  
    $data = Order::where('staff_id', $userid)
             ->where('delivery_status', 5)
             ->orderBy('id', 'asc')
             ->get();

    if ($order) {
                // Get the email address from the order
                $userEmail = $order->email;
                $product = $order->product_title;
                $rate = $order->total_price;
                $name = $order->name;
                $address = $order->address;
                $pin = $order->pin;
                $phone = $order->dphone;
                $house = $order->house;
                $created_at = $order->created_at;
                $payment_status = $order->payment_status;
        
                // Send the email without image attachment
                Mail::to($userEmail)->send(new DeliveryMailer($id, $product, $rate, $name, $address, $pin, $phone, $house, $created_at, $payment_status));
            }
    
    
             return view('staff.staff_deliveries_view', compact('data'))->with('message', 'Order Delivered Successfully');
             
}

public function order_now($id)
{
  
    $users = auth()->user();
    $count = Cart::where('phone', $users->phone)->count();
    $data = category::all();
    $user= user::find($users);
    return view('home.payment_order', compact('count','user','data','id'));
 
   
}

function cod_order($id)
{
    $user = Auth::user();
    $userid = $user->id;

    $dataa = cart::where('id', $id)->get();

    foreach ($dataa as $data) {
        $order = new order;
        $order->name = $data->name;
        $order->email = $data->email;
        $order->phone = $data->phone;
        $order->house = $data->house;
        $order->landmark = $data->landmark;
        $order->pin = $data->pin;
        $order->dphone = $data->dphone;
        $order->address = $data->address;
        $order->user_id = $data->user_id;
        $order->product_title = $data->product_title;
        $order->quantity = $data->quantity;
        $order->price = $data->price;
        $order->total_price = $data->total_price;
        $order->image = $data->image;
        $order->city = $data->city;
        $order->product_id = $data->product_id;
        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = '1';
        $order->save();

        $cart_id=$data->id;
        $cart=cart::find($cart_id);
        $cart->delete();
    }

    return redirect('showcart')->with('messages', 'Order Placed');
}

function user_order_cancell($id)
{
    $order = Order::find($id);
    $order->delivery_status = $delivery_status ?? 3;
   
    $order->save();
    
    return redirect()->back()->with('message', 'Order Cancelled');
}

function user_order_delete($id)
{
    $order = Order::find($id);
    $order->delete();
    
    return redirect()->back()->with('message', 'Order Deleted Succesfully');
}

public function add_review(Request $request, $id)
{
    $user = Auth::user();
    $userid = $user->id;

    $user_data = User::where('id', $userid)->first();
    $product = Product::where('id', $id)->first();

    $data = new Review;
    $data->loginid = $userid;
    $data->name = $user_data->name;
    $data->image = $product->image;
    $data->productid = $id;
    $data->review = $request->input('review');
    $data->category = $product->category;

    $data->save();

    return redirect()->back()->with('message', 'Review Added Successfully');
}

public function review_view()
{
    $user = auth()->user();
   
  
  
    return view('staff.staff_deliveries_view',compact('data'));
   
}

public function user_return($id)
{
  
    $users = auth()->user();
    $count = Cart::where('phone', $users->phone)->count();
    $data = category::all();
    $user= user::where('id', $users->id)->get();
    return view('home.return', compact('count','user','data','id'));
 
   
}

public function return_details_add(Request $request, $id)
{
    $user = auth()->user();
    $userid = $user->id;
    $data = category::all();
    $count = cart::where('phone', $user->phone)->count();
    $orders = order::where('user_id', $userid)->orderBy('id', 'desc')->get();
    $dataa = Order::find($id);
    $dataa->return_details = $request->input('return_details');
    $dataa->delivery_status = $delivery_status ?? 9;
    $dataa->save();
    return view('home.user_orders', compact('orders', 'count','data'))->with('message', 'Return details added');
}

public function contact()
{
    if (auth()->check()) {
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        $data = Category::all();
        $products = Product::all();

        return view('home.contact', compact('data', 'products', 'count'));
    } else 
    {
        return view('home.contact');
    }
}

public function uploadcontact(Request $request)
{
        $data = new contact;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->back()->with('message', 'Contact Added Successfully');
}

    

    
    

   
    

    
}
