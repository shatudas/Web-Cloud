<?php

use Illuminate\Support\Facades\Route;
use App\model\ContactMassage;


//__________AJAX ROUTES___________//
Route::get('get-client/message','Backend\userContactController@getClientMessage')->name('get.client.message');


//------frontEnd Route-------//
Route::get('/','FrontEnd\homeController@homemethod')->name('/');
Route::get('contact','Frontend_new\contactController@contact')->name('contact');
Route::post('contact/store','Frontend_new\contactController@store')->name('contact.store');
Route::get('about-us','Frontend_new\AboutController@about_page')->name('about_page');
Route::get('faq','Frontend_new\FAQController@faq_page')->name('faq');

Route::get('/shared_hosting','Frontend_new\SharedHostingController@shared_hosting')->name('shared_hosting');
Route::get('/resller_hosting','Frontend_new\ResllerHostingController@resller_hosting')->name('resller_hosting');
Route::get('/dedicated_server_hosting','Frontend_new\DedicatedServerController@dedicated_server_hosting')->name('dedicated_server_hosting');
Route::get('/vps_hosting','Frontend_new\VPSHostingController@vps_hosting')->name('vps_hosting');


//_____ Auth And register route _______//
Auth::routes();
Route::get('home','HomeController@adminHome')->name('home')->middleware('is_admin');


//===== User =======//
Route::prefix('user')->group(function()
{
	//______ User _______//
	Route::get('/view','Backend\UserController@view')->name('user.view');
	Route::get('/add','Backend\UserController@add')->name('user.add');
	Route::post('/store','Backend\UserController@store')->name('user.store');
	Route::get('/edit/{id}','Backend\UserController@edit')->name('user.edit');
	Route::post('/update/{id}','Backend\UserController@update')->name('user.update');
	Route::get('/delete/{id}','Backend\UserController@delete')->name('user.delete');
	Route::get('/inacative/{id}','Backend\UserController@inacative')->name('user.inacative');
	Route::get('/active/{id}','Backend\UserController@active')->name('user.active');
});


//======= Profile ========//
Route::prefix('profiles')->group(function()
{
	//________ User Profile _________//
	Route::get('/view','Backend\ProfilesController@view')->name('profiles.view');
	Route::get('/edit','Backend\ProfilesController@edit')->name('profiles.edit');
	Route::post('/store','Backend\ProfilesController@update')->name('profiles.update');
	Route::get('/password/view','Backend\ProfilesController@passwordview')->name('profiles.password.view');
	Route::post('/password/update','Backend\ProfilesController@passwordupdate')->name('profiles.password.update');
});


//======= Contact =========//
Route::prefix('contact')->group(function()
{
 //________ Contact ________//
 Route::get('/contact/add','Backend\contact\contactController@add')->name('contact.add');
 Route::post('/contact/update/{id}','Backend\contact\contactController@update')->name('contact.update');

 //_______ Contact User ________//
 Route::get('user/contact/view','Backend\contact\userContactController@view')->name('user.contact.view');
Route::get('user/contact/delete/{id}','Backend\contact\userContactController@delete')->name('user.contact.delete');

});


//======= Home Cover =========//
Route::prefix('homecover')->group(function()
{
	//__________Home Cover____________//
	Route::get('/add','Backend\HomeCover\HomeCoverController@add')->name('homecover.add');
	Route::post('/update/{id}','Backend\HomeCover\HomeCoverController@update')->name('homecover.update');
	
});


Route::prefix('FAQ')->group(function()
{
	//______ User _______//
	Route::get('/view','Backend\FAQ\FAQController@view')->name('FAQ.view');
	Route::get('/add','Backend\FAQ\FAQController@add')->name('FAQ.add');
	Route::post('/store','Backend\FAQ\FAQController@store')->name('FAQ.store');
	Route::get('/edit/{id}','Backend\FAQ\FAQController@edit')->name('FAQ.edit');
	Route::post('/update/{id}','Backend\FAQ\FAQController@update')->name('FAQ.update');
	Route::get('/delete/{id}','Backend\FAQ\FAQController@delete')->name('FAQ.delete');
	Route::get('/inacative/{id}','Backend\FAQ\FAQController@inacative')->name('FAQ.inacative');
	Route::get('/active/{id}','Backend\FAQ\FAQController@active')->name('FAQ.active');
});


//======== Setting Backend ===========//
Route::prefix('setting')->group(function()
{   
	//_________Cover Page____________//
	Route::get('/service-committed/view','Backend\setting\ServiceCommittedController@view')->name('service-committed.view');
	Route::get('/service-committed/add','Backend\setting\ServiceCommittedController@add')->name('service-committed.add');
	Route::post('/service-committed/store','Backend\setting\ServiceCommittedController@store')->name('service-committed.store');
	Route::get('/service-committed/edit/{id}','Backend\setting\ServiceCommittedController@edit')->name('service-committed.edit');
	Route::post('/service-committed/update/{id}','Backend\setting\ServiceCommittedController@update')->name('service-committed.update');
	Route::get('/service-committed/delete/{id}','Backend\setting\ServiceCommittedController@delete')->name('service-committed.delete');
	Route::get('/service-committed/inacative/{id}','Backend\setting\ServiceCommittedController@inacative')->name('service-committed.inacative');
	Route::get('/service-committed/active/{id}','Backend\setting\ServiceCommittedController@active')->name('service-committed.active');

	//_________ Genarel Setting _________//
	Route::get('/genarelsetting/add','Backend\setting\GenarelsettingController@add')->name('genarelsetting.add');
	Route::post('/genarelsetting/update/{id}','Backend\setting\GenarelsettingController@update')->name('genarelsetting.update');

	//_________ About ____________//
	Route::get('/about/add','Backend\setting\AboutController@add')->name('about.add');
	Route::post('/about/update/{id}','Backend\setting\AboutController@update')->name('about.update');


	//_________ About ____________//
	Route::get('/vision/add','Backend\setting\VisionController@add')->name('vision.add');
	Route::post('/vision/update/{id}','Backend\setting\VisionController@update')->name('vision.update');

	//_________ About ____________//
	Route::get('/mision/add','Backend\setting\MisionController@add')->name('mision.add');
	Route::post('/mision/update/{id}','Backend\setting\MisionController@update')->name('mision.update');


	//_________Cover Page____________//
	Route::get('/cover/view','Backend\setting\coverSettingController@view')->name('cover.setting.view');
	Route::get('/cover/add','Backend\setting\coverSettingController@add')->name('cover.setting.add');
	Route::post('/cover/store','Backend\setting\coverSettingController@store')->name('cover.setting.store');
	Route::get('/cover/edit/{id}','Backend\setting\coverSettingController@edit')->name('cover.setting.edit');
	Route::post('/cover/update/{id}','Backend\setting\coverSettingController@update')->name('cover.setting.update');
	Route::get('/cover/delete/{id}','Backend\setting\coverSettingController@delete')->name('cover.setting.delete');
	Route::get('/cover/inacative/{id}','Backend\setting\coverSettingController@inacative')->name('cover.setting.inacative');
	Route::get('/cover/active/{id}','Backend\setting\coverSettingController@active')->name('cover.setting.active');

});


//=========Domain==========//
Route::prefix('domain')->group(function()
{

 //________ Domain Category ________ //
 Route::get('/domain/category/view','Backend\Domain\DomaincategoryController@view')->name('domain.category.view');
 Route::get('/domain/category/add','Backend\Domain\DomaincategoryController@add')->name('domain.category.add');
 Route::post('/domain/category/store','Backend\Domain\DomaincategoryController@store')->name('domain.category.store');
 Route::get('/domain/category/edit/{id}','Backend\Domain\DomaincategoryController@edit')->name('domain.category.edit');
 Route::post('/domain/category/update/{id}','Backend\Domain\DomaincategoryController@update')->name('domain.category.update');
 Route::get('/domain/category/delete/{id}','Backend\Domain\DomaincategoryController@delete')->name('domain.category.delete');
 Route::get('/domain/category/inacative/{id}','Backend\Domain\DomaincategoryController@inacative')->name('domain.category.inacative');
 Route::get('/domain/category/active/{id}','Backend\Domain\DomaincategoryController@active')->name('domain.category.active');

 //_________ Domainc Domain Pricing ________//
 Route::get('/domain/pricing/view','Backend\Domain\DomainPricingController@view')->name('domain.pricing.view');
 Route::get('/domain/pricing/add','Backend\Domain\DomainPricingController@add')->name('domain.pricing.add');
 Route::post('/domain/pricing/store','Backend\Domain\DomainPricingController@store')->name('domain.pricing.store');
 Route::get('/domain/pricing/edit/{id}','Backend\Domain\DomainPricingController@edit')->name('domain.pricing.edit');
 Route::post('/domain/pricing/update/{id}','Backend\Domain\DomainPricingController@update')->name('domain.pricing.update');
 Route::get('/domain/pricing/delete/{id}','Backend\Domain\DomainPricingController@delete')->name('domain.pricing.delete');

});


//======= Service =========//
Route::prefix('service')->group(function()
{

	//_________Services Type_________//
	Route::get('/view','Backend\service\servicesController@view')->name('service.view');
	Route::get('/add','Backend\service\servicesController@add')->name('service.add');
	Route::post('/store','Backend\service\servicesController@store')->name('service.store');
	Route::get('/edit/{id}','Backend\service\servicesController@edit')->name('service.edit');
	Route::post('/update/{id}','Backend\service\servicesController@update')->name('service.update');
	Route::get('/delete/{id}','Backend\service\servicesController@delete')->name('service.delete');
	Route::get('/inacative/{id}','Backend\service\servicesController@inacative')->name('service.inacative');
	Route::get('/active/{id}','Backend\service\servicesController@active')->name('service.active');

});



//======= Service =========//
Route::prefix('package')->group(function()
{

	Route::get('/view','Backend\package\VPSController@view')->name('VPS.view');
	Route::get('/add','Backend\package\VPSController@add')->name('VPS.add');
	Route::post('/store','Backend\package\VPSController@store')->name('VPS.store');
	Route::get('/edit/{id}','Backend\package\VPSController@edit')->name('VPS.edit');
	Route::post('/update/{id}','Backend\package\VPSController@update')->name('VPS.update');
	Route::get('/delete/{id}','Backend\package\VPSController@delete')->name('VPS.delete');
	Route::get('/inacative/{id}','Backend\package\VPSController@inacative')->name('VPS.inacative');
	Route::get('/active/{id}','Backend\package\VPSController@active')->name('VPS.active');


	Route::get('/dedicated_hosting/view','Backend\package\DedicatedHostingController@view')->name('dedicated_hosting.view');
	Route::get('/dedicated_hosting/add','Backend\package\DedicatedHostingController@add')->name('dedicated_hosting.add');
	Route::post('/dedicated_hosting/store','Backend\package\DedicatedHostingController@store')->name('dedicated_hosting.store');
	Route::get('/dedicated_hosting/edit/{id}','Backend\package\DedicatedHostingController@edit')->name('dedicated_hosting.edit');
	Route::post('/dedicated_hosting/update/{id}','Backend\package\DedicatedHostingController@update')->name('dedicated_hosting.update');
	Route::get('/dedicated_hosting/delete/{id}','Backend\package\DedicatedHostingController@delete')->name('dedicated_hosting.delete');
	Route::get('/dedicated_hosting/inacative/{id}','Backend\package\DedicatedHostingController@inacative')->name('dedicated_hosting.inacative');
	Route::get('/dedicated_hosting/active/{id}','Backend\package\DedicatedHostingController@active')->name('dedicated_hosting.active');


	Route::get('/resller_host/view','Backend\package\ResllerHostingController@view')->name('resller_host.view');
	Route::get('/resller_host/add','Backend\package\ResllerHostingController@add')->name('resller_host.add');
	Route::post('/resller_host/store','Backend\package\ResllerHostingController@store')->name('resller_host.store');
	Route::get('/resller_host/edit/{id}','Backend\package\ResllerHostingController@edit')->name('resller_host.edit');
	Route::post('/resller_host/update/{id}','Backend\package\ResllerHostingController@update')->name('resller_host.update');
	Route::get('/resller_host/delete/{id}','Backend\package\ResllerHostingController@delete')->name('resller_host.delete');
	Route::get('/resller_host/inacative/{id}','Backend\package\ResllerHostingController@inacative')->name('resller_host.inacative');
	Route::get('/resller_host/active/{id}','Backend\package\ResllerHostingController@active')->name('resller_host.active');



	Route::get('/web_hosting/view','Backend\package\WebHostingController@view')->name('web_hosting.view');
	Route::get('/web_hosting/add','Backend\package\WebHostingController@add')->name('web_hosting.add');
	Route::post('/web_hosting/store','Backend\package\WebHostingController@store')->name('web_hosting.store');
	Route::get('/web_hosting/edit/{id}','Backend\package\WebHostingController@edit')->name('web_hosting.edit');
	Route::post('/web_hosting/update/{id}','Backend\package\WebHostingController@update')->name('web_hosting.update');
	Route::get('/web_hosting/delete/{id}','Backend\package\WebHostingController@delete')->name('web_hosting.delete');
	Route::get('/web_hosting/inacative/{id}','Backend\package\WebHostingController@inacative')->name('web_hosting.inacative');
	Route::get('/web_hosting/active/{id}','Backend\package\WebHostingController@active')->name('web_hosting.active');


});



// //=========Domain==========//
// Route::prefix('web_development')->group(function()
// {
// //________ Domain Category ________ //
//  Route::get('/web-content/view','Backend\WebContentController@view')->name('web_content.view');
//  Route::get('/web-content/add','Backend\WebContentController@add')->name('web_content.add');
//  Route::post('/web-content/store','Backend\WebContentController@store')->name('web_content.store');
//  Route::get('/web-content/edit/{id}','Backend\WebContentController@edit')->name('web_content.edit');
//  Route::post('/web-content/update/{id}','Backend\WebContentController@update')->name('web_content.update');
//  Route::get('/web-content/delete/{id}','Backend\WebContentController@delete')->name('web_content.delete');
//  Route::get('/web-content/inacative/{id}','Backend\WebContentController@inacative')->name('web_content.inacative');
//  Route::get('/web-content/active/{id}','Backend\WebContentController@active')->name('web_content.active');
// });





