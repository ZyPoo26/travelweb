<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\myprofil;
use Illuminate\Http\Request;
use \App\Models\mainuser;

class myprofilKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'myprofil';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new myprofil());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('name', __('Name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('mail', __('Mail'));
        $grid->column('phone', __('Phone'));
        $grid->column('adres', __('Adres'));
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
        $show = new Show(myprofil::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('name', __('Name'));
        $show->field('last_name', __('Last name'));
        $show->field('mail', __('Mail'));
        $show->field('phone', __('Phone'));
        $show->field('adres', __('Adres'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }
    public function updateProfile(Request $request)
    {
        // Kullanıcı mailine göre Mainuser tablosundan kullanıcıyı bul
        $user = mainuser::where('mail', session('user_mail'))->first();

        if ($user) {
            // Profil verilerini güncelle
            // Myprofil tablosunda mevcut kullanıcıyı bul
            $profile = $user->profile; // ilişkilendirilmiş profile'ı alıyoruz

            if (!$profile) {
                // Eğer profile tablosunda veri yoksa, yeni bir profil oluşturabiliriz
                $profile = new Myprofil();

            }

            // Profildeki bilgileri güncelle
            $profile->name = $request->input('name');
            $profile->last_name = $request->input('last_name');
            $profile->mail = $request->input('mail');
            $profile->phone = $request->input('phone');
            $profile->adres = $request->input('adres');
            $profile->save(); // Kaydet

            // Başarıyla kaydedildikten sonra bir yönlendirme yapabilirsiniz
            return redirect()->route('myprofil')->with('success', 'Profiliniz başarıyla güncellendi.');
        } else {
            // Kullanıcı bulunamazsa hata döndürebiliriz
            return back()->withErrors(['error' => 'Kullanıcı bulunamadı.']);
        }
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new myprofil());

        $form->image('image', __('Image'));
        $form->text('name', __('Name'));
        $form->text('last_name', __('Last name'));
        $form->email('mail', __('Mail'));
        $form->phonenumber('phone', __('Phone'));
        $form->text('adres', __('Adres'));

        return $form;
    }
}
