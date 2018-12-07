<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/email', function () {
    $user = new class{
          public $email = "brianking319@gmail.com";
          public $first_name = "Ibrahim";
          public $code = "djdjjjjkee8584848jdjjdkdkdkleahdeud";
    };

   /* $email = $user->email;
    $first_name = $user->first_name;
    $code = $user->code;*/
    $code = $user->code;

    return view('emails.registrationMail', compact('user', 'code'));
});


Route::get('/',['uses' => 'PagesController@home', 'as' => 'home']);
Route::get('/who-we-are',['uses' => 'PagesController@whoWeAre', 'as' => 'home']);
Route::get('/faqs',['uses' => 'PagesController@faq', 'as' => 'faq']);
Route::get('/packages',['uses' => 'PagesController@packages', 'as' => 'packages']);
Route::get('/contact-us',['uses' => 'PagesController@contact', 'as' => 'contact']);



Route::get('/forgot-password',['uses' => 'ForgotPasswordController@forgotPassword', 'as' => 'forget']);
Route::post('/forgot-password',['uses' => 'ForgotPasswordController@postForgotPassword', 'as' => 'password.forget']);
Route::get('/reset/{email}/{resetCode}',['uses' => 'ForgotPasswordController@resetPassword', 'as' => 'password.reset']);
Route::post('/reset/{email}/{resetCode}',['uses' => 'ForgotPasswordController@postResetPassword', 'as' => 'post.password.reset']);

Route::get('/register',['uses' => 'RegistrationController@registration', 'as' => 'registration']);
Route::get('/register/{ref_id}',['uses' => 'RegistrationController@refLinkregistration', 'as' => 'Refregistration']);
Route::get('/my-referals',['uses' => 'UsersController@myReferals', 'as' => 'myreferals']);
Route::post('registration', ['uses' => 'RegistrationController@postRegistration','as' => 'registration.post']);
Route::post('updatePassword', ['uses' => 'RegistrationController@updatePassword','as' => 'password.post']);
Route::post('updatePhoto', ['uses' => 'RegistrationController@updatePhoto','as' => 'photo.post']);
Route::post('postRefregistration', ['uses' => 'RegistrationController@postRefRegistration','as' => 'Refregistration.post']);

Route::get('/account', ['uses' => 'UsersController@account','as' => 'account']);
Route::get('/users/{id}/edit', ['uses' => 'UsersController@edit', 'as' => 'admin.users.edit']);
Route::get('/login', ['uses' => 'UsersController@login','as' => 'login']);
Route::post('/login', ['uses' => 'UsersController@postlogin','as' => 'post.login']);

Route::get('/logouts', 'UsersController@logout');
Route::get('users/{id}/edit', ['uses' => 'UsersController@edit', 'as' => 'users.edit']);
Route::put('users/{user_id}', ['uses' => 'UsersController@update', 'as' => 'users.update']);

Route::get('/deposit', ['uses' => 'UsersController@deposit', 'as' => 'users.deposit']);
Route::post('/deposit', ['uses' => 'UsersController@postDeposit', 'as' => 'deposit.post']);
Route::post('/withdraw/new', ['uses' => 'WithdrawController@postWithdraw','as' => 'withdraw.post']);


Route::get('/withdraw', ['uses' => 'UsersController@withdraw', 'as' => 'users.withdraw']);
Route::get('/convert', ['uses' => 'UsersController@convert', 'as' => 'users.convert']);
Route::get('/investment', ['uses' => 'UsersController@investment', 'as' => 'users.investment']);
Route::get('/mining', ['uses' => 'UsersController@mining', 'as' => 'users.mining']);
Route::get('/trade', ['uses' => 'UsersController@trading', 'as' => 'users.trading']);
//Route::get('/profile', 'UsersController@profile');

//Route::view('/{path?}', 'app');

/*WALLET THINGS*/
    Route::post('/wallet_in', ['uses' => 'WalletsController@postWallet','as' => 'postWallet']);
    Route::get('/bitcoin', ['uses' => 'WalletsController@bitcoin','as' => 'bitcoin']);
    Route::get('/wallet/{name}', ['uses' => 'WalletsController@wallets','as' => 'bitcoin']);
    Route::get('/fundWallet', ['uses' => 'WalletsController@fundWallet','as' => 'bitcoin']);


/*WALLET THINGS*/






/*######ADMIN ROUTES ###################*/
Route::group(['middleware' => 'admin'], function(){

    Route::get('/dashboard', ['uses' => 'AdminController@dashboard','as' => 'dashboard']);
    Route::get('/users/new', ['uses' => 'AdminController@adminuserRegister','as' => 'admin.register']);
    Route::delete('/users/{id}', ['uses' => 'AdminController@deleteUser','as' => 'admin.user.delete']);

    Route::get('/send-mail', ['uses' => 'AdminController@sendMail','as' => 'sendmail']);
    Route::post('/sendmail', ['uses' => 'AdminController@postMail','as' => 'send-mail']);

    Route::post('/admin/registration', ['uses' => 'AdminController@postRegistration','as' => 'adminRegistration.post']);
    Route::get('/logout', 'AdminController@logout');
    Route::get('admin/users/{id}/edit', ['uses' => 'AdminController@edit', 'as' => 'admin.users.edit']);
    Route::put('admin/users/{user_id}', ['uses' => 'AdminController@adminupdateuser', 'as' => 'admin.user.update']);



    Route::get('/user_deposits', ['uses' => 'AdminController@userDeposits','as' => 'userDeposits']);
    Route::get('/user_withdrawals', ['uses' => 'WithdrawController@userWithdrawals','as' => 'userWithdrawals']);

    #######PAYMENT####################################
        Route::get('/payment_methods', ['uses' => 'PaymentController@paymentMethods','as' => 'paymentMethods']);
        Route::get('/payment_new', ['uses' => 'PaymentController@paymentNew','as' => 'paymentNew']);
        Route::post('/payment/new', ['uses' => 'PaymentController@postNew','as' => 'payment.post']);
        Route::get('payment/{id}/edit', ['uses' => 'PaymentController@edit', 'as' => 'payment.edit']);
        Route::put('payment/{id}', ['uses' => 'PaymentController@update', 'as' => 'payment.update']);
        Route::delete('delete/{id}',array('uses' => 'PaymentController@deletePayment', 'as' => 'payment.delete'));

        Route::put('deposit/{id}',array('uses' => 'DepositController@update', 'as' => 'deposit.update'));
        Route::put('withdaw/{id}',array('uses' => 'WithdrawController@update', 'as' => 'withdraw.update'));

    Route::post('/admin/deposits', ['uses' => 'DepositController@adminpostDeposit', 'as' => 'admin.deposit.post']);

    #######PAYMENT####################################



});
Route::get('admin/login', ['uses' => 'AdminController@login','as' => 'admin.login']);
Route::post('/admin/login', ['uses' => 'AdminController@postLogin','as' => 'admin.post.login']);

