<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use PDF;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\gallery;
use App\Models\product;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Mail\OrderMailer;
use App\Mail\ContactMailer;
use App\Mail\StaffCreated;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function view_category()
    {
        $datas=category::all();
        return view('admin.category',compact('datas'));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        if ($data->save()) {
            return redirect()->back()->with('message', 'Category added successfully');
        } else {
            return redirect()->back()->with('error','Failed to add category');
        }

    }

    public function delete_category($id)
    {
        $data = category::find($id);

            if ($data) 
            {
                 $data->delete();
                 return redirect()->back()->with('messagee', 'Category deleted successfully');
            } 
            else 
            {
                 return redirect()->back()->with('errore', 'Failed to delete category');
            }
    }

    public function product()
    {
        $datas=category::all();
        return view('admin.product',compact('datas'));
        
    }
    

    public function uploadproduct(Request $request)
    {
        $data = new product;
    
        // Upload first image
    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('productimage'), $imagename);
        $data->image = $imagename;
    }

    // Upload second image
    if ($request->hasFile('file1')) {
        $image1 = $request->file('file1');
        $imagename1 = uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('productimage'), $imagename1);
        $data->image1 = $imagename1;
    }

    // Upload third image
    if ($request->hasFile('file2')) {
        $image2 = $request->file('file2');
        $imagename2 = uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('productimage'), $imagename2);
        $data->image2 = $imagename2;
    }

    // Upload fourth image
    if ($request->hasFile('file3')) {
        $image3 = $request->file('file3');
        $imagename3 = uniqid() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('productimage'), $imagename3);
        $data->image3 = $imagename3;
    }

    
        $data->title = $request->input('title');
        $data->price = $request->input('price');
        $data->mrp = $request->input('mrp');
        $data->description = $request->input('description');
        $data->quantity = $request->input('quantity');
        $data->size = $request->input('size');
        $data->category = $request->input('category');
      
        $data->save();
    
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function product_view()
    {
        $data = Product::all();
        return view('admin.product_view', compact('data'));
    }

    public function deleteproduct($id)
    {
        $data = Product::find($id);
        if ($data) 
        {
             $data->delete();
             return redirect()->back()->with('messagee', 'Product deleted successfully');
        } 
        else 
        {
             return redirect()->back()->with('errore', 'Failed to delete producr');
        }
    }
  
    public function productupdateview($id)
    {
        $datas = category::all();
        $data = Product::find($id);
        return view('admin.product_update_view', compact('datas', 'data'));
        
    }


    public function updateproduct(Request $request, $id)
{
    $data = Product::find($id);

    

   // Upload first image
   if ($request->hasFile('file')) {
    $image = $request->file('file');
    $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('productimage'), $imagename);
    $data->image = $imagename;
}

// Upload second image
if ($request->hasFile('file1')) {
    $image1 = $request->file('file1');
    $imagename1 = uniqid() . '.' . $image1->getClientOriginalExtension();
    $image1->move(public_path('productimage'), $imagename1);
    $data->image1 = $imagename1;
}

// Upload third image
if ($request->hasFile('file2')) {
    $image2 = $request->file('file2');
    $imagename2 = uniqid() . '.' . $image2->getClientOriginalExtension();
    $image2->move(public_path('productimage'), $imagename2);
    $data->image2 = $imagename2;
}

// Upload fourth image
if ($request->hasFile('file3')) {
    $image3 = $request->file('file3');
    $imagename3 = uniqid() . '.' . $image3->getClientOriginalExtension();
    $image3->move(public_path('productimage'), $imagename3);
    $data->image3 = $imagename3;
}

    $data->title = $request->input('title');
    $data->price = $request->input('price');
    $data->mrp = $request->input('mrp');
    $data->description = $request->input('description');
    $data->quantity = $request->input('quantity');
    $data->size = $request->input('size');
    $data->category = $request->input('category');

    $data->save();

    return redirect()->back()->with('message', 'Product Updated Successfully');
}

public function add_staff()
{
    
    return view('admin.add_staff');
    
}



public function upload_staff(Request $request)
{
    $request->validate([
        'email' => 'unique:users,email|required|email',
        'phone' => 'unique:users,phone|required',
    ], [
        'email.unique' => 'The email is already registered.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Invalid email format.',
        'phone.unique' => 'The phone number is already registered.',
        'phone.required' => 'The phone number field is required.',
    ]);
    
    $data = new User;

    // Upload first image
    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('productimage'), $imagename);
        $data->image = $imagename;
    }

    // Upload second image
    if ($request->hasFile('file1')) {
        $image1 = $request->file('file1');
        $imagename1 = uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('productimage'), $imagename1);
        $data->image1 = $imagename1;
    }

    $data->name = $request->input('name');
    $data->phone = $request->input('phone');
    $data->address = $request->input('address');
    $data->pin = $request->input('pin');
    $data->dob = $request->input('dob');
    $data->email = $request->input('email');
    $data->city = $request->input('city');
    $data->usertype = $usertype ?? '2';
    $data->status = $status ?? '1';

  
    $data->password = bcrypt($request->input('password'));
 
    $data->save();
    Mail::to($data->email)->send(new StaffCreated($data->name, $request->input('password')));;
    return redirect()->back()->with('message', 'Staff Added Successfully');
}

public function view_staff()
    {
        $data = User::where('usertype', 2)->get();
        return view('admin.view_staff', compact('data'));
    }

    public function staff_edit($id)
    {
        
        $data = User::find($id);
        return view('admin.staff_edit', compact('data'));
    }

    public function staff_edit_upload(Request $request, $id)
    {
        $data = User::findOrFail($id);
    
        // Upload first image
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productimage'), $imagename);
            $data->image = $imagename;
        }
    
        // Upload second image
        if ($request->hasFile('file1')) {
            $image1 = $request->file('file1');
            $imagename1 = uniqid() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('productimage'), $imagename1);
            $data->image1 = $imagename1;
        }
    
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->pin = $request->input('pin');
        $data->dob = $request->input('dob');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->city = $request->input('city');
        // $data->usertype = $usertype ?? '2';
        // $data->status = $status ?? '1';
        // $data->password = Hash::make($request->input('password')); // Encrypt the password
    
        $data->save();
    
        return redirect()->back()->with('message', 'Staff Updated Successfully');
    }
    
    public function staff_delete($id)
    {
        $data = User::find($id);
        if ($data) 
        {
             $data->delete();
             return redirect()->back()->with('messagee', 'User deleted successfully');
        } 
        else 
        {
             return redirect()->back()->with('errore', 'Failed to delete User');
        }
    }

   function staff_approve($id)
   {
    $data = User::find($id);
    $data->status = $status ?? '1';
    $data->save();
    return redirect()->back()->with('message', 'Staff Approved Successfully');
   }

   function staff_reject($id)
   {
    $data = User::find($id);
    $data->status = $status ?? '0';
    $data->save();
    return redirect()->back()->with('message', 'Staff Rejected Successfully');
   }

   public function view_customer()
    {
        $data = User::where('usertype', 0)->get();
        return view('admin.view_customer', compact('data'));
    }

    public function customer_delete($id)
    {
        $data = User::find($id);
        if ($data) 
        {
             $data->delete();
             return redirect()->back()->with('messagee', 'Customer deleted successfully');
        } 
        else 
        {
             return redirect()->back()->with('errore', 'Failed to delete Customer');
        }
    }

   function customer_approve($id)
   {
    $data = User::find($id);
    $data->status = $status ?? '1';
    $data->save();
    return redirect()->back()->with('message', 'Customer Approved Successfully');
   }

   function customer_reject($id)
   {
    $data = User::find($id);
    $data->status = $status ?? '0';
    $data->save();
    return redirect()->back()->with('message', 'Customer Rejected Successfully');
   }

    public function admin_order_view()
    {

        $data = Order::orderBy('id', 'desc')->get();
        return view('admin.orders', compact('data'));
    }


    public function storeQRCode(Request $request)
    {
        $orderId = $request->input('orderId');
        $qrCodeImageDataURL = $request->input('qrCodeImageDataURL');

        // Save the QR code image in a folder
        $image = Image::make($qrCodeImageDataURL)->encode('png');
        $filename = 'qrcode-' . $orderId . '.png';
        $image->save(public_path('qrcodes/' . $filename));

        // Update the order with the QR code image path
        $order = Order::find($orderId);
        $order->qr_code_image_path = 'qrcodes/' . $filename;
        $order->save();

        return response()->json(['message' => 'QR code image stored successfully']);
    }

    function deliver_order($id, $city)
    {
        $data = DB::table('Users')
        ->where('usertype', 2)
        ->where('city', 'Thiruvananthapuram')
        ->get();
    
        return view('admin.deliver', compact('id', 'city', 'data'));
    }
   
    function deliver($id1, $id2)
    {
        $order = Order::find($id1);
        $order->delivery_status = $delivery_status ?? 2;
        $order->staff_id = $id2; // Set the staff_id field to $id2
        $order->save();

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
            Mail::to($userEmail)->send(new OrderMailer($id1, $product, $rate, $name, $address, $pin, $phone, $house, $created_at, $payment_status));
        }

        return redirect()->to('admin_order_view')->with('message', 'Order Accepted Successfully');
    }
  
        function admin_order_cancel($id)
    {
        $order = Order::find($id);
        $order->delivery_status = $delivery_status ?? 4;
    
        $order->save();
        
        return redirect()->back()->with('message', 'Order Cancelled');
    }

    function order_delete_approve($id)
    {
        $order = Order::find($id);
        $order->delivery_status = $delivery_status ?? 7;
    
        $order->save();
        
        return redirect()->back()->with('message', 'Order Deletion Approved');
    }
   
    public function contact_view()
    {
        $data = contact::all();
        return view('admin.contact_view', compact('data'));
    }

    public function contact_reply_view($id)
    {
        $data = contact::find($id);
        return view('admin.contact_reply_view', compact('data'));
    }

    public function contact_reply(Request $request, $id)
    {
        $data = contact::find($id);
        $data->reply = $request->input('reply');
        $data->save();
        if ($data) {
            
            $reply = $data->reply;
            $email = $data->email;
            $messagee = $data->message;
            $name = $data->name;

        
            Mail::to($email)->send(new ContactMailer($reply,$messagee,$name));
        }
        return redirect()->back()->with('message', 'Replied Successfully');
    }

    public function gallery()
    {
        $datas = gallery::all();
        return view('admin.gallery',compact('datas'));
    }

    public function upload_gallery(Request $request)
    {
        $data = new gallery;
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productimage'), $imagename);
            $data->image = $imagename;
        }
        
        $data->offer = $request->input('offer');
        $data->validity = $request->input('validity');
        $data->save();
    
        return redirect()->back()->with('message', 'Gallery Image Uploaded Successfully');
    }
    
    public function gallery_delete($id)
    {
        $data = gallery::find($id);
        
             $data->delete();
             return redirect()->back()->with('messagee', 'Gallery deleted successfully');
       
        
    }



    


}
