<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Product;

class cartKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cart';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cart());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(cart::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('product_name', __('Product name'));
        $show->field('quantity', __('Quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }


    public function addToCart(Request $request)
{
    if (!Session::has('user_id')) {
        return response()->json(['status' => 'error', 'message' => 'Lütfen giriş yapın.'], 401);
    }

    // Kullanıcıdan gelen veriler
    $productName = $request->input('product_name');
    $quantity = $request->input('quantity', 1); // Varsayılan miktar 1

    // Ürünü veritabanında bul
    $product = Product::where('name', $productName)->first();
    if (!$product) {
        return response()->json(['status' => 'error', 'message' => 'Ürün bulunamadı.'], 404);
    }

    // Sepette kullanıcıya ait ürünü kontrol et, varsa miktarı artır
    $cartItem = Cart::where('user_id', Session::get('user_id'))
                    ->where('product_name', $productName)
                    ->first();

    if ($cartItem) {
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        // Yeni ürün ekle
        Cart::create([
            'user_id' => Session::get('user_id'),
            'product_name' => $productName,
            'quantity' => $quantity,
        ]);
    }

    return response()->json(['status' => 'success', 'message' => 'Ürün sepete eklendi.']);
}

    // Sepeti görüntüleme
    public function viewCart()
    {
        if (!Session::has('user_id')) {
            return response()->json(['status' => 'error', 'message' => 'Lütfen giriş yapın.'], 401);
        }

        // Sepet öğelerini kullanıcıya göre alıyoruz
        $cartItems = Cart::where('user_id', Session::get('user_id'))->get();

        // Ürün bilgilerini almak için
        foreach ($cartItems as $cartItem) {
            // İlgili ürün adı ile ürün bilgilerini al
            $cartItem->product = Product::where('name', $cartItem->product_name)->first();
        }

        return response()->json(['status' => 'success', 'cartItems' => $cartItems]);
    }

    // Sepetten ürün silme
    public function removeFromCart($cartId)
{
    $cartItem = Cart::find($cartId);

    if (!$cartItem || $cartItem->user_id !== Session::get('user_id')) {
        return response()->json(['status' => 'error', 'message' => 'Geçersiz işlem.'], 400);
    }

    $cartItem->delete();

    return response()->json(['status' => 'success', 'message' => 'Ürün sepettekilerden silindi.']);
}

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new cart());

        $form->text('user_id', __('User id'));
        $form->text('product_name', __('Product name'));
        $form->number('quantity', __('Quantity'))->default(1);

        return $form;
    }
}
