<?php

use Illuminate\Support\Facades\Route;

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

//Frontend controller
Route::get('/admin/login', [
    'uses'  => 'FrontendController@adminLogin',
    'as'    => 'adminLogin'
]);

Route::get('/pricing/order/{id}', [
    'uses'  => 'FrontendController@pricingOrder',
    'as'    => 'pricingOrder'
]);

Route::post('/admin/loginConfirm', [
    'uses'  => 'FrontendController@loginConfirm',
    'as'    => 'loginConfirm'
]);

Route::post('/admin/signupConfirm', [
    'uses'  => 'FrontendController@signupConfirm',
    'as'    => 'signupConfirm'
]);

Route::get('/', [
    'uses'  => 'FrontendController@homepage',
    'as'    => 'homepage'
]);

Route::get('/pricing', [
    'uses'  => 'FrontendController@pricing',
    'as'    => 'pricing'
]);

Route::get('/welcome', function () {
    return view('welcome');
});

//Super Admin Panel

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\SuperAdminController::class, 'lang']);

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\SuperAdminController::class, 'updatePassword'])->name('updatePassword');

Route::get('/superAdmin/index', [
    'uses'  => 'SuperAdminController@root',
    'as'    => 'superAdmin'
]);

Route::get('/superAdmin/currencyList', [
    'uses'  => 'SuperAdminViewController@currencyList',
    'as'    => 'currencyList'
]);

Route::get('/superAdmin/newCurrency', [
    'uses'  => 'SuperAdminViewController@newCurrency',
    'as'    => 'newCurrency'
]);
Route::post('/superAdmin/saveCurrency', [
    'uses'  => 'SuperAdminController@saveCurrency',
    'as'    => 'saveCurrency'
]);

Route::get('/superAdmin/editCurrency/{id}', [
    'uses'  => 'SuperAdminViewController@editCurrency',
    'as'    => 'editCurrency'
]);

Route::post('/superAdmin/updateCurrency', [
    'uses'  => 'SuperAdminController@updateCurrency',
    'as'    => 'updateCurrency'
]);

Route::get('/superAdmin/delCurrency/{id}', [
    'uses'  => 'SuperAdminViewController@delCurrency',
    'as'    => 'delCurrency'
]);
//End currency

Route::get('/superAdmin/companyList', [
    'uses'  => 'SuperAdminViewController@companyList',
    'as'    => 'companyList'
]);

Route::get('/superAdmin/newCompany', [
    'uses'  => 'SuperAdminViewController@newCompany',
    'as'    => 'newCompany'
]);

Route::post('/superAdmin/saveCompany', [
    'uses'  => 'SuperAdminController@saveCompany',
    'as'    => 'saveCompany'
]);

Route::get('/superAdmin/editCompany/{id}', [
    'uses'  => 'SuperAdminViewController@editCompany',
    'as'    => 'editCompany'
]);

Route::post('/superAdmin/updateCompany', [
    'uses'  => 'SuperAdminController@updateCompany',
    'as'    => 'updateCompany'
]);

Route::post('/superAdmin/updateCompLogo', [
    'uses'  => 'SuperAdminController@updateCompLogo',
    'as'    => 'updateCompLogo'
]);

Route::post('/superAdmin/updateCompPass', [
    'uses'  => 'SuperAdminController@updateCompPass',
    'as'    => 'updateCompPass'
]);

Route::get('/superAdmin/delCompany/{id}', [
    'uses'  => 'SuperAdminViewController@delCompany',
    'as'    => 'delCompany'
]);
//End company

Route::get('/superAdmin/productList', [
    'uses'  => 'SuperAdminViewController@productList',
    'as'    => 'productList'
]);

Route::get('/superAdmin/newProduct', [
    'uses'  => 'SuperAdminViewController@newProduct',
    'as'    => 'newProduct'
]);

Route::post('/superAdmin/saveProduct', [
    'uses'  => 'SuperAdminController@saveProduct',
    'as'    => 'saveProduct'
]);

Route::get('/superAdmin/editProduct/{id}', [
    'uses'  => 'SuperAdminViewController@editProduct',
    'as'    => 'editProduct'
]);

Route::post('/superAdmin/updateProduct', [
    'uses'  => 'SuperAdminController@updateProduct',
    'as'    => 'updateProduct'
]);

Route::post('/superAdmin/updateProLogo', [
    'uses'  => 'SuperAdminController@updateProLogo',
    'as'    => 'updateProLogo'
]);

Route::get('/superAdmin/delProduct/{id}', [
    'uses'  => 'SuperAdminViewController@delProduct',
    'as'    => 'delProduct'
]);
//End company

Route::get('/superAdmin/manageLanguage', [
    'uses'  => 'SuperAdminViewController@languageList',
    'as'    => 'languageList'
]);

Route::get('/superAdmin/newLanguage', [
    'uses'  => 'SuperAdminViewController@newLanguage',
    'as'    => 'newLanguage'
]);
Route::post('/superAdmin/saveLanguage', [
    'uses'  => 'SuperAdminController@saveLanguage',
    'as'    => 'saveLanguage'
]);

Route::get('/superAdmin/editLanguage/{id}', [
    'uses'  => 'SuperAdminViewController@editLanguage',
    'as'    => 'editLanguage'
]);

Route::post('/superAdmin/updateLanguage', [
    'uses'  => 'SuperAdminController@updateLanguage',
    'as'    => 'updateLanguage'
]);

Route::get('/superAdmin/delLanguage/{id}', [
    'uses'  => 'SuperAdminViewController@delLanguage',
    'as'    => 'delLanguage'
]);
//End language route

//Online Credential
Route::get('/superAdmin/paymentCredentials/onlineCredential', [
    'uses'  => 'SuperAdminViewController@onlineCredential',
    'as'    => 'onlineCredential'
]);

Route::post('/superAdmin/saveOnlineCredential', [
    'uses'  => 'SuperAdminController@saveOnlineCredential',
    'as'    => 'saveOnlineCredential'
]);

//Offline Credential
Route::get('/superAdmin/paymentCredentials/offlineCredential', [
    'uses'  => 'SuperAdminViewController@offlineCredential',
    'as'    => 'offlineCredential'
]);

Route::post('/superAdmin/saveOfflineCredential', [
    'uses'  => 'SuperAdminController@saveOfflineCredential',
    'as'    => 'saveOfflineCredential'
]);
//End payment credentials route


//Pages routes
Route::get('/superAdmin/pages/defaultPage', [
    'uses'  => 'SuperAdminViewController@defaultPage',
    'as'    => 'defaultPage'
]);

Route::post('/superAdmin/pages/savePage', [
    'uses'  => 'SuperAdminController@savePage',
    'as'    => 'savePage'
]);

Route::get('/superAdmin/pages/editPage/{id}', [
    'uses'  => 'SuperAdminViewController@editPage',
    'as'    => 'editPage'
]);

Route::post('/superAdmin/pages/updatePage', [
    'uses'  => 'SuperAdminController@updatePage',
    'as'    => 'updatePage'
]);

Route::get('/superAdmin/pages/delPage/{id}', [
    'uses'  => 'SuperAdminViewController@delPage',
    'as'    => 'delPage'
]);

Route::get('/superAdmin/pages/layouts', [
    'uses'  => 'SuperAdminViewController@layouts',
    'as'    => 'layouts'
]);

Route::post('/superAdmin/pages/saveLayout', [
    'uses'  => 'SuperAdminController@saveLayout',
    'as'    => 'saveLayout'
]);

//default homePages routes
Route::get('/superAdmin/homePage/list', [
    'uses'  => 'HomePageController@homeSection',
    'as'    => 'homeSection'
]);

Route::post('/superAdmin/homePage/sectionOne/save', [
    'uses'  => 'HomePageController@saveHomeSection1',
    'as'    => 'saveHomeSection1'
]);

Route::post('/superAdmin/homePage/sectionTwo/save', [
    'uses'  => 'HomePageController@saveHomeSection2',
    'as'    => 'saveHomeSection2'
]);

Route::post('/superAdmin/homePage/sectionThree/save', [
    'uses'  => 'HomePageController@saveHomeSection3',
    'as'    => 'saveHomeSection3'
]);

Route::post('/superAdmin/homePage/sectionFour/save', [
    'uses'  => 'HomePageController@saveHomeSection4',
    'as'    => 'saveHomeSection4'
]);

Route::post('/superAdmin/homePage/sectionFive/save', [
    'uses'  => 'HomePageController@saveHomeSection5',
    'as'    => 'saveHomeSection5'
]);

Route::post('/superAdmin/homePage/sectionSix/save', [
    'uses'  => 'HomePageController@saveHomeSection6',
    'as'    => 'saveHomeSection6'
]);

Route::get('/superAdmin/homePage/edit/sixthBox/{id}', [
    'uses'  => 'HomePageController@editSixthBox',
    'as'    => 'editSixthBox'
]);
Route::get('/superAdmin/homePage/delete/sixthBox/{id}', [
    'uses'  => 'HomePageController@delSixthBox',
    'as'    => 'delSixthBox'
]);

Route::post('/superAdmin/homePage/sixthBox/save', [
    'uses'  => 'HomePageController@saveSixthBox',
    'as'    => 'saveSixthBox'
]);

Route::post('/superAdmin/homePage/sixthBox/update', [
    'uses'  => 'HomePageController@updateSixthBox',
    'as'    => 'updateSixthBox'
]);

Route::post('/superAdmin/homePage/sectionSeven/save', [
    'uses'  => 'HomePageController@saveHomeSection7',
    'as'    => 'saveHomeSection7'
]);

Route::post('/superAdmin/homePage/sectionEight/save', [
    'uses'  => 'HomePageController@saveHomeSection8',
    'as'    => 'saveHomeSection8'
]);

Route::get('/superAdmin/homePage/edit/serviceBox/{id}', [
    'uses'  => 'HomePageController@editServiceBox',
    'as'    => 'editServiceBox'
]);
Route::get('/superAdmin/homePage/delete/serviceBox/{id}', [
    'uses'  => 'HomePageController@delServiceBox',
    'as'    => 'delServiceBox'
]);

Route::post('/superAdmin/homePage/serviceBox/save', [
    'uses'  => 'HomePageController@saveServiceBox',
    'as'    => 'saveServiceBox'
]);

Route::post('/superAdmin/homePage/serviceBox/update', [
    'uses'  => 'HomePageController@updateServiceBox',
    'as'    => 'updateServiceBox'
]);

Route::post('/superAdmin/homePage/sectionNine/save', [
    'uses'  => 'HomePageController@saveHomeSection9',
    'as'    => 'saveHomeSection9'
]);

Route::get('/superAdmin/homePage/edit/clientBox/{id}', [
    'uses'  => 'HomePageController@editClientBox',
    'as'    => 'editClientBox'
]);
Route::get('/superAdmin/homePage/delete/clientBox/{id}', [
    'uses'  => 'HomePageController@delClientBox',
    'as'    => 'delClientBox'
]);

Route::post('/superAdmin/homePage/clientBox/save', [
    'uses'  => 'HomePageController@saveClientBox',
    'as'    => 'saveClientBox'
]);

Route::post('/superAdmin/homePage/clientBox/update', [
    'uses'  => 'HomePageController@updateClientBox',
    'as'    => 'updateClientBox'
]);

Route::post('/superAdmin/homePage/oportunity/save', [
    'uses'  => 'HomePageController@saveOportunity',
    'as'    => 'saveOportunity'
]);

Route::get('/superAdmin/homePage/edit/oportunity/{id}', [
    'uses'  => 'HomePageController@editOportunity',
    'as'    => 'editOportunity'
]);
Route::get('/superAdmin/homePage/delete/oportunity/{id}', [
    'uses'  => 'HomePageController@delOportunity',
    'as'    => 'delOportunity'
]);

Route::post('/superAdmin/homePage/oportunity/update', [
    'uses'  => 'HomePageController@updateOportunity',
    'as'    => 'updateOportunity'
]);

Route::get('/superAdmin/homePage/statusChange/{id}', [
    'uses'  => 'HomePageController@changeHomeStatus',
    'as'    => 'changeHomeStatus'
]);
// Section 10 end

Route::get('/superAdmin/homePage/edit/statistic/{id}', [
    'uses'  => 'HomePageController@editStatistic',
    'as'    => 'editStatistic'
]);
Route::get('/superAdmin/homePage/delete/statistic/{id}', [
    'uses'  => 'HomePageController@delStatistic',
    'as'    => 'delStatistic'
]);

Route::post('/superAdmin/homePage/statistic/update', [
    'uses'  => 'HomePageController@updateStatistic',
    'as'    => 'updateStatistic'
]);

Route::get('/superAdmin/homePage/statusChange/{id}', [
    'uses'  => 'HomePageController@changeHomeStatus',
    'as'    => 'changeHomeStatus'
]);


//FAQ routes
Route::get('/superAdmin/faqList', [
    'uses'  => 'SuperAdminViewController@faqList',
    'as'    => 'faqList'
]);

Route::post('/superAdmin/faq/saveFaq', [
    'uses'  => 'SuperAdminController@saveFaq',
    'as'    => 'saveFaq'
]);

Route::get('/superAdmin/pages/editFaq/{id}', [
    'uses'  => 'SuperAdminViewController@editFaq',
    'as'    => 'editFaq'
]);

Route::post('/superAdmin/pages/updateFaq', [
    'uses'  => 'SuperAdminController@updateFaq',
    'as'    => 'updateFaq'
]);

Route::get('/superAdmin/pages/delFaq/{id}', [
    'uses'  => 'SuperAdminViewController@delFaq',
    'as'    => 'delFaq'
]);

//Sited meta
Route::get('/superAdmin/siteMeta', [
    'uses'  => 'SuperAdminViewController@faqList',
    'as'    => 'siteMeta'
]);
//Email Setup
Route::get('/superAdmin/mailSetup', [
    'uses'  => 'SuperAdminViewController@mailSetup',
    'as'    => 'mailSetup'
]);

Route::post('/superAdmin/mailSetup/saveMail', [
    'uses'  => 'SuperAdminController@saveMail',
    'as'    => 'saveMail'
]);

Route::post('/superAdmin/mailSetup/saveSmtp', [
    'uses'  => 'SuperAdminController@saveSmtp',
    'as'    => 'saveSmtp'
]);

//general settings for the admin & frontend
Route::get('/superAdmin/generalSettings', [
    'uses'  => 'SuperAdminViewController@generalSettings',
    'as'    => 'generalSettings'
]);

Route::post('/superAdmin/pages/generalSettings/save', [
    'uses'  => 'SuperAdminController@saveGeneralSettings',
    'as'    => 'saveGeneralSettings'
]);

Route::post('/superAdmin/pages/generalSettings/frontendLogo/update', [
    'uses'  => 'SuperAdminController@updateFrontLogo',
    'as'    => 'updateFrontLogo'
]);

Route::post('/superAdmin/pages/generalSettings/backendLogo/update', [
    'uses'  => 'SuperAdminController@updateGenLogo',
    'as'    => 'updateGenLogo'
]);

Route::post('/superAdmin/pages/generalSettings/favicon/update', [
    'uses'  => 'SuperAdminController@updateFavicon',
    'as'    => 'updateFavicon'
]);


//admin panel control routes
Route::get('/superAdmin/admin/profile', [
    'uses'  => 'SuperAdminViewController@adminProfile',
    'as'    => 'adminProfile'
]);
Route::post('/superAdmin/admin/saveProfile',[
    'uses'  => 'SuperAdminController@saveProfile',
    'as'    => 'saveAdminProfile'
]);
Route::post('/superAdmin/admin/avatarUpdate',[
    'uses'  => 'SuperAdminController@avatarUpdate',
    'as'    => 'updateAdminAvatar'
]);
Route::post('/superAdmin/admin/adminLogout',[
    'uses'  => 'SuperAdminController@adminLogout',
    'as'    => 'adminLogout'
]);

Route::post('/userRgegister/',[
    'uses'  => 'FrontendController@userRegister',
    'as'    => 'userRegister'
    ]);
 Route::post('/confirm-Login/',[
    'uses'  => 'FrontendController@confirmLogin',
    'as'    => 'confirmLogin'
    ]);

Route::get('/user-logout/',[
    'uses'  => 'FrontendController@userLogout',
    'as'    => 'userLogout'
]);


 

Route::group(['middleware'=>['AuthCheck']], function(){
   
   Route::get('/user-Login/',[
    'uses'  => 'FrontendController@userLogin',
    'as'    => 'userLogin'
]);
      Route::get('/user-register/',[
    'uses'  => 'FrontendController@userReg',
    'as'    => 'userReg'
]);
    
    Route::get('/user-dashboard/',[
    'uses'  => 'FrontendController@userDashboard',
    'as'    => 'userDashboard'
    ]);

    Route::get('/user-setting/',[
    'uses'  => 'FrontendController@userSetting',
    'as'    => 'userSetting'
    ]);
     Route::get('/user-profile/',[
    'uses'  => 'FrontendController@userProfile',
    'as'    => 'userProfile'
    ]);
      Route::get('/user-staff/',[
    'uses'  => 'FrontendController@userStaff',
    'as'    => 'userStaff'
    ]);
    
    });
   Route::get('/user-payment/process/',[
    'uses'  => 'FrontendController@paymentOrder',
    'as'    => 'paymentOrder'
    ]);
   Route::get('/user-payment/success/',[
    'uses'  => 'FrontendController@successPayment',
    'as'    => 'successPayment'
    ]);
    Route::get('/user-payment/cancell/',[
    'uses'  => 'FrontendController@cancelPayment',
    'as'    => 'cancelPayment'
    ]);

  Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
