<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

//forntend pages
Route::get('/','ForntendController@welcomepage')->name('homepage');
Route::get('/about-us','ForntendController@about')->name('about');
Route::get('/contact-us','ForntendController@pgcontact')->name('contact');
Route::post('/sencontactdmail','ForntendController@sendcontactmail')->name('contactsend');
Route::get('/terms-and-conditions','ForntendController@terms')->name('trms');
Route::get('/faq','ForntendController@faq')->name('faq');
Route::get('/return-policy','ForntendController@return_policy')->name('rfudppoi');
Route::get('/delivery-policy','ForntendController@delivryw_policy')->name('delip');
Route::get('/shipping-policy','ForntendController@ship_policy')->name('shpoli');
Route::get('/privacy-policy','ForntendController@privacy_policy')->name('priv');
Route::get('/categories/{slug}','ForntendController@category_output')->name('catepage');
Route::get('/subcategories/{slug}','ForntendController@subcategory')->name('subcatepage');
Route::get('/brand/{slug}','ForntendController@brand_output')->name('brandpage');
Route::get('/product/{slug}','ForntendController@product_details')->name('productpage');
Route::get('/all-products','ForntendController@allproducts')->name('allproducts');
Route::post('/review','ForntendController@store_reviews')->name('reviews');
Route::post('/newsletter','ForntendController@newsletter')->name('newsletter');

//search
Route::post('/search','ForntendController@searchall')->name('search');
Route::post('/searchdropdown','ForntendController@searchdropdown');
//add to wishlist
Route::get('/add-to-wishlist/{id}','ForntendController@addwishlist')->name('addtowishlist')->middleware('auth');

//marchant or vendors stores
Route::domain('{marchant}.localhost')->group(function () {
    Route::get('/','ForntendController@vendor')->name('store');
});

//apply coupon code
Route::post('/cart/checkout/coupon','CartController@couponcode')->name('applycoupon');
//apply points
Route::post('/cart/checkout/points','CartController@applypoint')->name('applypoints');
Route::get('/cart/remove/points','CartController@removepoint')->name('removepoint');
//success page
Route::get('/ordercomplete','CartController@ordercompleted')->name('ordcom');

//login with social media 
Route::get('/login-social/{social}','Auth\SocialLogincontroller@redirectToProvider')->name('redirect');
Route::get('/callback-login/{social}','Auth\SocialLogincontroller@handleProviderCallback')->name('callback');

//cart and checkout 
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/checkout','CartController@checkout')->name('checkout')->middleware('auth');
Route::get('/shop','CartController@addcart')->name('addtocart');
Route::get('/cart-remove/{id}','CartController@remove_item')->name('removeitem');
Route::post('/cart-update/{rowid}','CartController@update')->name('cart.update');
Route::post('/cart/checkout/save','CartController@saveorder')->name('storeorder');
Route::post('/pay-on-delivery','CartController@payondelivery')->name('paydelivery');

//forget password and reset password
Route::get('/forget-password', 'Auth\RegisterController@forget_password_page')->name('forgetpass');
Route::post('/check/password', 'Auth\RegisterController@check_user_email')->name('checkemail');
Route::get('/reset-password/{token}', 'Auth\RegisterController@reset_password_page')->name('resetpass');
Route::post('/reset/password', 'Auth\RegisterController@reset_password')->name('chngpass');

//cart and checkout 
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/checkout','CartController@checkout')->name('checkout')->middleware('auth');
Route::get('/shop','CartController@addcart')->name('addtocart');
Route::get('/cart-remove/{id}','CartController@remove_item')->name('removeitem');
Route::post('/cart-update/{rowid}','CartController@update')->name('cart.update');
Route::post('/cart/checkout/save','CartController@saveorder')->name('storeorder');
Route::post('/pay-on-delivery','CartController@payondelivery')->name('paydelivery');

//referral link
Route::get('/referral/{ref}','ForntendController@registerwithref');

Route::group(['prefix' => 'users'],function(){
    //login 
    Route::get('/account/login', 'Auth\loginController@showuserlogin')->name('login');
    Route::post('/account/login', 'Auth\loginController@login')->name('user.login');
    Route::post('/account/logout', 'Auth\loginController@logout')->name('user.logout');
    //register
    Route::get('/account/register', 'Auth\RegisterController@register')->name('register');
    Route::post('/account/register', 'Auth\RegisterController@create')->name('user.register');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/customer/account/changepassword', 'HomeController@showpass')->name('chpass');
    Route::post('/customer/account/changepassword', 'HomeController@changepassword')->name('changepass');
    //customer change password
    Route::get('/customer/account/details/{id}', 'HomeController@userdetails')->name('customer-details');
    Route::post('/customer/account/{id}/details/', 'HomeController@userdetailsupdate')->name('update-customer');
    //customer account details
    Route::get('/customer/account/details/{id}', 'HomeController@userdetails')->name('customer-details');
    Route::post('/customer/account/{id}/details/', 'HomeController@userdetailsupdate')->name('update-customer');
    //customer address
    Route::get('/customer/account/address', 'HomeController@address')->name('customer-address');
    Route::get('/customer/account/address/{id}', 'HomeController@showeditaddress')->name('edcustomer-address');
    Route::post('/customer/account/{id}/address', 'HomeController@customeraddressupdate')->name('update-address');
    
    //customer orders
    Route::get('/customer/account/orders', 'HomeController@customerorder')->name('customer-order');
    Route::get('/customer/account/orders-detail/{id}', 'HomeController@customerorderdetails')->name('customer-order-details');
    Route::get('/customer/account/wishlist', 'HomeController@wishlistitem')->name('wishlist');
    Route::get('/customer/account/wishlist/delete/{id}', 'HomeController@deleteitem')->name('delete.wishlist');
 
});

//vendors admin and pages
Route::domain("sellerpoint.localhost")->group(function () {
    Route::get('/home','SellerpointController@seller_point')->name('sellepoit');

//vender admin
    Route::group(['prefix' => 'merchant'],function(){
        Route::get('/account/login','Auth\VendorloginController@store_login_page')->name('vendor.loginpg');
        Route::post('/account/login','Auth\VendorloginController@store_login')->name('vendor.login');
        Route::get('/account/register','Auth\VendorregisterController@store_register_page')->name('vendor.registerpg');
        Route::post('/account/register','Auth\VendorregisterController@store_register')->name('vendor.register');

        Route::get('/dashboard', 'AdminController@index')->name('merchant.dashboard');
    });
});


//admin 
Route::group(['prefix' => 'hn-admin' ],function(){
    Route::get('/login', 'Auth\AdminloginController@showadminlogin')->name('show.login');
    Route::post('/login', 'Auth\AdminloginController@adminlogin')->name('admin.login');
    Route::get('/logout', 'Auth\AdminloginController@adminlogout')->name('admin.logout');
    
    Route::get('/get-order-count', 'AdminController@getordercount')->name('getord')->middleware('auth:admin');

Route::get('/', 'AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
Route::get('/user/profile', 'AdminController@profile')->name('admin.profile')->middleware('auth:admin');
Route::post('/user/profile', 'AdminController@profile_update')->name('admin.profile_update')->middleware('auth:admin');
Route::get('/user/account', 'AdminController@adminuser')->name('admin.user')->middleware('auth:admin');
Route::get('/user-create/account', 'AdminController@create')->name('admin.user.create')->middleware('auth:admin');
Route::post('/user-create/account', 'AdminController@store')->name('admin.newuser.store')->middleware('auth:admin');
Route::get('/change-password', 'AdminController@changepassword')->name('admin.password.change')->middleware('auth:admin');
Route::post('/change-password', 'AdminController@change_pass')->name('admin.change.pass')->middleware('auth:admin');
Route::get('/manage-stores', 'AdminController@managestore')->name('admin.mstores')->middleware('auth:admin');
Route::get('/manage-customers', 'AdminController@managecustomers')->name('admin.customers')->middleware('auth:admin');
Route::get('/delete/{id}', 'AdminController@destroy')->name('admin.delete')->middleware('auth:admin');
Route::get('/create_admin/{id}', 'AdminController@make_admin')->name('admin.make_admin')->middleware('auth:admin');
Route::get('/remove_admin/{id}', 'AdminController@not_admin')->name('admin.not_admin')->middleware('auth:admin');

//contact
Route::get('/contact', 'PagesettingsController@contactpg')->name('admin.contact')->middleware('auth:admin');
Route::post('/contact/save', 'PagesettingsController@contact_save')->name('contact.save')->middleware('auth:admin');

 //refund policy
 Route::get('/return/policy', 'PagesettingsController@refundpg')->name('admin.refundpolicy')->middleware('auth:admin');
 Route::post('/return/policy/save', 'PagesettingsController@save_refund')->name('refund.save')->middleware('auth:admin');

//shipping
Route::get('/shipping/policy', 'PagesettingsController@shippolicypg')->name('admin.shippolicy')->middleware('auth:admin');
Route::post('/shipping/policy/save', 'PagesettingsController@save_ship_policy')->name('shippoliy.save')->middleware('auth:admin');

//term of service
Route::get('/terms-of-service', 'PagesettingsController@termpg')->name('term');
Route::post('/terms-of-service/save', 'PagesettingsController@save_terms')->name('terms.save');

//privacy
Route::get('/privacy-page', 'PagesettingsController@privacypg')->name('privacypg');
Route::post('/privacy/save', 'PagesettingsController@save_privacy')->name('privacypg.save');

//delivery policy
Route::get('/delivery-page', 'PagesettingsController@deliverypg')->name('deliverypg');
Route::post('/delivery/save', 'PagesettingsController@save_delivery')->name('deliverypg.save');
//about
Route::get('/about/bio', 'PagesettingsController@bio')->name('admin.about')->middleware('auth:admin');
Route::post('/about/bio/save', 'PagesettingsController@save_bio')->name('about.biosave')->middleware('auth:admin');
//about
Route::get('/vision', 'PagesettingsController@visionpg')->name('admin.vision')->middleware('auth:admin');
Route::post('/vision/save', 'PagesettingsController@save_vision')->name('visisave')->middleware('auth:admin');

//ads
Route::get('/ads', 'AdminController@index_ads')->name('admin.ads.index')->middleware('auth:admin');
Route::post('/ads/add', 'AdminController@add_new_ads')->name('admin.ads.add')->middleware('auth:admin');
Route::post('/ads/update', 'AdminController@update_ads')->name('admin.ads.update')->middleware('auth:admin');
Route::get('/ads/delete/{id}', 'AdminController@deleteads')->name('admin.ads.delete')->middleware('auth:admin');
Route::get('/ads/deactivited/{id}', 'AdminController@disactivate')->name('admin.isdeactived')->middleware('auth:admin');
Route::get('/ads/activited/{id}', 'AdminController@activate')->name('admin.isactived')->middleware('auth:admin');

//coupons
Route::get('/coupon','CouponsController@index')->name('admin.coupon.index')->middleware('auth:admin');
Route::get('/coupon/create', 'CouponsController@create')->name('admin.coupon.create')->middleware('auth:admin');
Route::post('/coupon/store', 'CouponsController@store')->name('admin.coupon.store')->middleware('auth:admin');
Route::get('/coupon/{id}/edit', 'CouponsController@edit')->name('admin.coupon.edit')->middleware('auth:admin');
Route::post('/coupon/update/{id}', 'CouponsController@update')->name('admin.coupon.update')->middleware('auth:admin');
Route::get('/coupon/delete/{id}', 'CouponsController@destroy')->name('admin.coupon.delete')->middleware('auth:admin');
Route::post('/coupon/send', 'CouponsController@sendcoupon')->name('admin.coupon.send')->middleware('auth:admin');

//orders
Route::get('/order','OrdersController@index')->name('admin.order.index')->middleware('auth:admin');
Route::get('/order/create', 'OrdersController@create')->name('admin.order.create')->middleware('auth:admin');
Route::get('/order/confirm-order/{id}', 'OrdersController@confirm_order')->name('admin.confirmorder')->middleware('auth:admin');
Route::get('/order/{id}', 'OrdersController@show')->name('admin.order.show')->middleware('auth:admin');
Route::get('/order/preview/{id}', 'OrdersController@printpreview')->name('admin.prntpg')->middleware('auth:admin');
Route::get('/order/productimg/{img}', 'OrdersController@showimg')->name('getimg')->middleware('auth:admin');

Route::get('/order/previewstore/{view}', 'OrdersController@storeview')->name('admin.viewstoredetails')->middleware('auth:admin');
Route::post('/order/update/{id}', 'OrdersController@update')->name('admin.order.update')->middleware('auth:admin');
Route::get('/order/delete/{id}', 'OrdersController@destroy')->name('admin.order.delete')->middleware('auth:admin');

//products
Route::get('/product','ProductsController@index')->name('admin.product.index');
Route::get('/product/create', 'ProductsController@create')->name('admin.product.create');
Route::post('/product/store', 'ProductsController@store')->name('admin.product.store');
Route::get('/product/{id}/edit', 'ProductsController@edit')->name('admin.product.edit');
Route::put('/product/update/{id}', 'ProductsController@update')->name('admin.product.update');
Route::get('/product/delete/{id}', 'ProductsController@destroy')->name('admin.product.delete');
Route::post('/get-child-subcategory', 'ProductsController@getchildsubcategory')->name('admin.category.subcategory');
Route::post('/get-childern-subcategory', 'ProductsController@getchildrensubcategory')->name('admin.category.subchilrencategory');
Route::post('/add-image','ProductsController@add_proimges')->name('addimage');
Route::get('/fetch-uploaded-image','ProductsController@get_intended_store_image');
Route::post('/remove-image','ProductsController@remove_proimges')->name('removeimage');

//product attributes
Route::get('/product/attribute/{id}','ProductsController@showarttribute')->name('admin.shproduct.attr')->middleware('auth:admin');
Route::post('/product/attribute','ProductsController@add_product_attribute')->name('admin.addproductattr')->middleware('auth:admin');
Route::post('/product/attribute/update','ProductsController@update_product_attribute')->name('admin.updateproduct.attr')->middleware('auth:admin');
Route::get('/product/attribute/delete/{id}','ProductsController@delarttribute')->name('admin.delproduct.attr')->middleware('auth:admin');

//category
Route::get('/category', 'CategoriesController@index')->name('admin.category.index')->middleware('auth:admin');
Route::get('/category/create', 'CategoriesController@create')->name('admin.category.create')->middleware('auth:admin');
Route::post('/category/store', 'CategoriesController@store')->name('admin.category.store')->middleware('auth:admin');
Route::get('/category/edit/{cslug}', 'CategoriesController@edit')->name('admin.category.edit')->middleware('auth:admin');
Route::post('/category/update', 'CategoriesController@update')->name('admin.category.update')->middleware('auth:admin');
Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('admin.category.delete')->middleware('auth:admin');
Route::get('/subcategory/delete/{id}', 'CategoriesController@delete_category_child')->name('admin.subcategory.delete')->middleware('auth:admin');
Route::get('/subcategory/children/delete/{id}', 'CategoriesController@delete_category_children')->name('admin.subcd.delete')->middleware('auth:admin');

//slide
Route::get('/slide', 'SlidesController@index')->name('admin.slide.index')->middleware('auth:admin');
Route::get('/slide/create', 'SlidesController@create')->name('admin.slide.create')->middleware('auth:admin');
Route::post('/slide/store', 'SlidesController@store')->name('admin.slide.store')->middleware('auth:admin');
Route::get('/slide/{id}/edit', 'SlidesController@edit')->name('admin.slide.edit')->middleware('auth:admin');
Route::post('/slide/update/{id}', 'SlidesController@update')->name('admin.slide.update')->middleware('auth:admin');
Route::get('/slide/active/{id}', 'SlidesController@activate')->name('admin.slide.activate')->middleware('auth:admin');
Route::get('/slide/inactive/{id}', 'SlidesController@deactivate')->name('admin.slide.deactivate')->middleware('auth:admin');
Route::get('/slide/delete/{id}', 'SlidesController@destroy')->name('admin.slide.delete')->middleware('auth:admin');

Route::get('/news-letter','AdminController@managenewsletter')->name('admin.news')->middleware('auth:admin');
Route::get('/news/delete/{id}','AdminController@deletenewsletter')->name('admin.news.delete')->middleware('auth:admin');
Route::get('/broadcast','AdminController@showbroadcast')->name('admin.showbcast')->middleware('auth:admin');
Route::post('/sendbroadcast','AdminController@sendbroadcast')->name('send.msg')->middleware('auth:admin');
Route::post('/send-user-broadcast','AdminController@senduserbroadcast')->name('send.msgusers')->middleware('auth:admin');

//faq
Route::get('/faq', 'AdminController@faqpage')->name('admin.faq')->middleware('auth:admin');
Route::post('/faq', 'AdminController@addfaq')->name('admin.addquest')->middleware('auth:admin');
Route::get('/faq/{id}/edit', 'AdminController@faqedit')->name('faq.edit')->middleware('auth:admin');
Route::post('/faq/update/{id}', 'AdminController@faqupdate')->name('faq.update')->middleware('auth:admin');
Route::get('/faq/delete/{id}', 'AdminController@faqdelete')->name('faq.delete')->middleware('auth:admin');

//settings 
Route::get('/settings','PagesettingsController@pageset')->name('admin.pageset')->middleware('auth:admin');
Route::post('/settings/create','PagesettingsController@addpagesettings')->name('addsetting')->middleware('auth:admin');


Route::get('/news-letter','AdminController@managenewsletter')->name('news')->middleware('auth:admin');
Route::get('/news/delete/{id}','AdminController@deletenewsletter')->name('news.delete')->middleware('auth:admin');
Route::get('/broadcast','AdminController@showbroadcast')->name('showbcast')->middleware('auth:admin');
Route::post('/sendbroadcast','AdminController@sendbroadcast')->name('send.msg')->middleware('auth:admin');

//shipping cost 
Route::get('/shipping-cost','adminController@shippingcost_page')->name('shp.shipcost')->middleware('auth:admin');
Route::post('/shipping-cost/store','adminController@store_shipping_cost')->name('shp.store')->middleware('auth:admin');
Route::post('/shipping-cost/update','adminController@update_shipping_cost')->name('shp.update')->middleware('auth:admin');

});