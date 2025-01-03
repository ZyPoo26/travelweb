<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\mainuser;
use Illuminate\Http\Request;
use App\Models\Myprofil;


class mainuserKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'mainuser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new mainuser());

        $grid->column('id', __('Id'));
        $grid->column('mail', __('Mail'));
        $grid->column('password', __('Password'));
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
        $show = new Show(mainuser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('mail', __('Mail'));
        $show->field('password', __('Password'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }
    public function login(Request $request)
{
    // Giriş bilgilerini al
    $mail = $request->input('mail');
    $password = $request->input('password');

    // Veritabanında kullanıcıyı bul
    $user = Mainuser::where('mail', $mail)->first();

    if (!$user) {
        return response()->json(['status' => 'error', 'message' => 'E-posta bulunamadı.'], 404);
    }

    // Şifreyi düz metin olarak kontrol et
    if ($password !== $user->password) {
        return response()->json(['status' => 'error', 'message' => 'Şifre hatalı.'], 401);
    }

    // Başarılı giriş
    session(['user_id' => $user->id, 'user_mail' => $user->mail]);

    // Dashboard sayfasına yönlendir
    return response()->json(['status' => 'success', 'redirect' => route('myprofil')],);
}

public function dashboard()
{
    return redirect()->route('myprofil'); // Yönlendirme işlemi
}

public function register(Request $request)
{
    // Kayıt validasyonları
    $request->validate([
        'mail' => 'required|email|unique:mainuser,mail', // Benzersiz mail kontrolü
        'password' => 'required|min:6|confirmed', // Şifre doğrulama
    ]);

    // Yeni kullanıcıyı oluştur
    $user = new Mainuser();
    $user->mail = $request->input('mail');
    $user->password = $request->input('password'); // Şifre düz metin olarak kaydediliyor
    $user->save();

    // Aynı maili Myprofil tablosuna kaydet (profil bilgileri ile)
    $profile = new Myprofil();
    $profile->mail = $request->input('mail'); // Mail ile eşleme yapıyoruz
    $profile->name = ''; // İlk başta boş bir isim olabilir, daha sonra kullanıcı profilini günceller
    $profile->save();

    // Kullanıcıyı otomatik olarak giriş yaptır
    session(['user_id' => $user->id, 'user_mail' => $user->mail]);

    // Başarılı kayıt sonrası yönlendirme
    return response()->json(['status' => 'success', 'redirect' => route('myprofil')], 200);
}
public function myProfile()
{
    $user = Mainuser::where('mail', session('user_mail'))->with('profile')->first();

    // Eğer profil bilgisi yoksa, kullanıcı henüz isim belirlememiştir.
    if ($user && $user->profile) {
        $profileName = $user->profile->name;
    } else {
        $profileName = 'Henüz isim belirlenmedi'; // Profil ismi yoksa
    }

    return view('myprofil', compact('user', 'profileName'));
}
public function logout()
{
    session()->flush(); // Tüm oturum bilgilerini temizler
    return redirect('/tur'); // Ana sayfaya yönlendirme
}



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new mainuser());


        $form->email('mail', __('Mail'));
        $form->text('password', __('Password'));

        return $form;
    }
}
