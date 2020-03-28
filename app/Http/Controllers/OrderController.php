<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function save(Request $request)
    {

        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => bcrypt(uniqid())
        ]);

        $details = new UserDetails();
        $details->first_name = $request->first_name;
        $details->last_name  = $request->last_name;
        $details->phone      = $request->phone;
        $details->address    = $request->address;

        $order = Order::create([
            'user_id' => $user->id
        ]);

        DB::beginTransaction();

        try{
            User::find($user->id)->details()->save($details);

            if (!empty($request->cart)) {

                $cart = json_decode($request->cart);
                $orderObj = Order::find($order->id);

                foreach ($cart as $product) {
                    $orderObj->products()->create([
                        'product_id' => $product->id,
                        'quantity'   => $product->quantity
                    ]);
                }

            }

        }
        catch(\Exception $e)
        {
            //failed logic here
            DB::rollback();
            return response()->json(['status' => 'error']);
        }

        DB::commit();

        return response()->json(['status' => 'success']);
    }

}
