<?php

namespace App\Admin\Controllers;

use App\Models\detay;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cart1;
use \App\Models\shop;
use Illuminate\Http\Request;




class cart1Kontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cart1';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cart1());

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
        $show = new Show(cart1::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('product_name', __('Product name'));
        $show->field('quantity', __('Quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    public function viewCart()
{
    // Kullanıcı ID'sini session'dan al
    $userId = session('user_id');

    if (!$userId) {
        return redirect()->back()->with('error', 'Lütfen giriş yapın.');
    }

    // Kullanıcının sepetindeki ürünleri al
    $cartItems = Cart1::where('user_id', $userId)->get();

    foreach ($cartItems as $item) {
        // Detay tablosundan ürün bilgisi al
        $item->product = Detay::where('tur_name', $item->product_name)->first();

        // Eğer Detay tablosunda yoksa, Shop tablosundan al
        if (!$item->product) {
            $item->product = Shop::where('urun_adi', $item->product_name)->first();
        }
    }

    return view('cart', compact('cartItems'));
}

public function cart1kontrol(Request $request)
{
    try {
        // Kullanıcı ID'sini session'dan al
        $userId = session('user_id');

        if (!$userId) {
            return redirect()->back()->with('error', 'Lütfen giriş yapın.');
        }

        // Ürün adını al
        $productName = $request->input('product_name'); // Ürün adı

        // Sepette ürünü kontrol et
        $cartItem = Cart1::where('user_id', $userId)
                        ->where('product_name', $productName) // Ürün adı ile kontrol
                        ->first();

        if ($cartItem) {
            // Ürün zaten sepette, miktarı artır
            $cartItem->quantity++;
            $cartItem->save();
        } else {
            // Ürün sepete ekle
            Cart1::create([
                'user_id' => $userId,
                'product_name' => $productName,
                'quantity' => 1,
            ]);
        }

        session()->put('cart', Cart1::where('user_id', $userId)->get());
        return redirect()->route('cart');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Bir hata oluştu: ' . $e->getMessage());
    }
}
public function removeFromCart(Request $request)
{
    // Kullanıcı ID'sini session'dan al
    $userId = session('user_id');

    if (!$userId) {
        return response()->json(['error' => 'Lütfen giriş yapın.']);
    }

    // Ürün adını al
    $productName = $request->input('product_name'); // Ürün adı

    // Sepette ürünü bul
    $cartItem = Cart1::where('user_id', $userId)
                    ->where('product_name', $productName) // Ürün adı ile kontrol
                    ->first();

    if ($cartItem) {
        $cartItem->delete(); // Ürünü kaldır
        return response()->json(['success' => 'Ürün sepetten çıkarıldı!']);
    }

    return response()->json(['error' => 'Ürün bulunamadı.']);
}


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new cart1());

        $form->number('user_id', __('User id'));
        $form->text('product_name', __('Product name'));
        $form->text('quantity', __('Quantity'))->default('1');

        return $form;
    }
}
