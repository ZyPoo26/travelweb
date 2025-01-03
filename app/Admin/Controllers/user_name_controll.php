<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\usuer_name;
use Illuminate\Http\Request;

class user_name_controll extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'usuer_name';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new usuer_name());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('e-mail', __('E mail'));
        $grid->column('sifre', __('Sifre'));
        $grid->column('remember_token', __('Remember token'));
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
        $show = new Show(usuer_name::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('e-mail', __('E mail'));
        $show->field('sifre', __('Sifre'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }
   // Login formunu gösterecek fonksiyon
   public function showLoginForm()
   {
       return view('login');
   }

   // Kullanıcı giriş işlemi
   public function login(Request $request)
   {
       // Formdan gelen verileri al
       $email = $request->input('email'); // 'email' kullanıyoruz
       $password = $request->input('password');

       // 'usuer_name' tablosunda email'e göre kullanıcıyı bul
       $user = usuer_name::where('email', $email)->first(); // 'email' alanını kullanıyoruz

       // Kullanıcı bulunamazsa
       if (!$user) {
           return redirect()->route('login')->withErrors(['message' => 'E-posta bulunamadı.']);
       }

       // Şifreyi kontrol et (düz şifre karşılaştırması)
       if ($password !== $user->password) {
           return redirect()->route('login')->withErrors(['message' => 'Şifre hatalı.']);
       }

       // Başarılı giriş
       session(['user_id' => $user->id]);

       // Dashboard sayfasına yönlendir
       return redirect()->route('myprofil');
   }

   // Dashboard sayfası
   public function dashboard()
   {
       return view('myprofil');
   }



    protected function form()
    {
        $form = new Form(new usuer_name());

        $form->text('name', __('Name'));
        $form->text('e-mail', __('E mail'));
        $form->text('sifre', __('Sifre'));
        $form->text('remember_token', __('remember_token'));

        return $form;
    }
}
