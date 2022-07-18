<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetailComponent;
use App\Http\Livewire\ShopComponent;

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

use App\Http\Controllers\GoogleController;
  
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
  
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

use App\Http\Controllers\SocialController;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCanceledOrderComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminCouponComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminDeliveredOrderComponent;
use App\Http\Livewire\Admin\AdminDispatchOrderComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminInProcessOrderComponent;
use App\Http\Livewire\Admin\AdminNewOrdersComponent;
use App\Http\Livewire\Admin\AdminOnwayOrderComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminProductListComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CompareComponent;
use App\Http\Livewire\PopupComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\OrderDetailComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishlistComponent;

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
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/popup/{product_id}',PopupComponent::class)->name('popup');
Route::get('product/detail/{slug}',ProductDetailComponent::class)->name('product-detail');
Route::get('/about',AboutComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/checkout',CheckoutComponent::class);
Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('/product-category/{category_slug}/{scategory_slug?}',CategoryComponent::class)->name('product.category');
Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');
Route::get("/thankyou",ThankyouComponent::class)->name('thankyou');
Route::get("/search",SearchComponent::class)->name('product.search');
Route::get('/compare/{slug}',CompareComponent::class)->name('compare');


// USR OR CUSTOMER
Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::prefix('user')->group(function(){
    Route::get("/dashboard",UserDashboardComponent::class)->name("user.dashboard");
    Route::get("/Oders",UserOrdersComponent::class)->name('user.orders');
    Route::get("/order/{order_id}",OrderDetailComponent::class)->name('user.orderdetail');
    Route::get("/review/{order_item_id}",UserReviewComponent::class)->name("user.review");
    Route::get("/change/password",UserChangePasswordComponent::class)->name('user.changepassword');
    // Route::get("/user/profile",UserProfileComponent::class)->name('user.profile');
    Route::get('/profile/edit',UserEditProfileComponent::class)->name('user.editprofile');
    // Route::get('/user/online/appointment',UserAppointmentComponent::class)->name('user.appointments');
    // Route::get('/user/online/reviews/{onlinemeeting_id}',UserOnlineMeetingReviewsComponent::class)->name('user.onlinereviews');
    // Route::get('/user/appointment/details/{appointment_id}',UserAppointmentDetailsComponent::class)->name('user.appointmentdetail');
    // Route::get('/user/checkup/details/{appointment_id}',UserCheckupDetailsComponent::class)->name('user.checkupdetails');
    });
});

// ADM
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::prefix('admin')->group(function(){
    Route::get("/dashboard",AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get("/category",AdminCategoryComponent::class)->name("admin.category");
    Route::get('/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/edit/category/{category_slug}/{scategory_slug?}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/product',AdminProductListComponent::class)->name('admin.productlist');
    Route::get('/add/product',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get("/coupon",AdminCouponComponent::class)->name("admin.coupon");
    Route::get("/coupon/Add",AdminAddCouponComponent::class)->name("admin.addcoupon");
    Route::get("/coupon/edit{coupon_id}",AdminEditCouponComponent::class)->name("admin.editcoupon");
    Route::get("/orders",AdminOrderComponent::class)->name("admin.orders");
    Route::get("/new/orders",AdminNewOrdersComponent::class)->name("admin.neworders");
    Route::get("/in-process/orders",AdminInProcessOrderComponent::class)->name("admin.in-process-orders");
    Route::get("/delivered/orders",AdminDeliveredOrderComponent::class)->name("admin.delivered-orders");
    Route::get("/dispatch/orders",AdminDispatchOrderComponent::class)->name("admin.dispatch-orders");
    Route::get("/onway/orders",AdminOnwayOrderComponent::class)->name("admin.onway-orders");
    Route::get("/canceled/orders",AdminCanceledOrderComponent::class)->name("admin.canceled-orders");
    Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');
    // Route::get("/admin/contact",AdminContactComponent::class)->name('admin.contact');
    // Route::get("admin/settings",AdminSettingComponent::class)->name('admin.settings');
    // Route::get('/admin/doctors',AdmindoctorsComponent::class)->name('admin.doctorlist');
    // Route::get('admin/doctors/detail/{doctor_id}',AdminDoctorProfileDetailComponent::class)->name('admin.doctorprofiledetail');
    // Route::get('admin/view/suppliers/list',AdminViewAllSupplierDetailComponent::class)->name('admin.supplierlist');
    // Route::get('/admin/view/supplier/product/list/{user_id}',AdminViewSupplierProductListComponent::class)->name('admin.supplierproductlist');
    // Route::get('/admin/view/supplier/product/detail/{product_id}',AdminViewSupplierProductDetailsComponent::class)->name('admin.supplierproductdetail');
    // Route::get('/admin/user/activity/history',AdminViewCurrentUserDetailComponent::class)->name('admin.useractivity');
    // Route::get('/admin/inventory',AdminInventoryComponent::class)->name('admin.inventory');
    // Route::get('/admin/perscription',AdminPerscriptionComponent::class)->name('admin.perscription');
    // Route::get('/admin/perscription/detail/{perscription_id}',AdminPerscriptionDetailComponent::class)->name('admin.perscriptiondetail');
    // Route::post('/admin/perscription/detail/{perscription_id}',AdminPerscriptionDetailComponent::class)->name('admin.perscriptiondetail');
    // Route::get('/admin/pharmacist/list',AdminPharmacistListComponent::class)->name('admin.pharmacistlist');
    // Route::get('/admin/pharmacist/detail/{pharmacist_id}',AdminPharmacistDetailComponent::class)->name('admin.pharmacistdetail');
    // Route::get('/admin/pharmacist/product/list/{pharmacist_id}',AdminPharmacistProductListComponent::class)->name('admin.pharmacistproductlist');
    // Route::get('/admin/ordersby/month',AdminOrderByAreaComponent::class)->name('admin.ordersbyarea');
    // Route::get('/admin/addperscription/product',AdminAddProdcutIntoPerscriptionComponent::class)->name('admin.addperscriptionproduct');
    // Route::get('/admin/today/orders',AdminTodayOrdersComponent::class)->name('admin.todayorders');
    // Route::get('/admin/pending/orders',AdminPendingOrdersComponent::class)->name('admin.pendingorders');
    // Route::get('/admin/order/status/pending',AdminPendingStatusComponent::class)->name('admin.orderspending');
    // Route::get('/admin/all/online/pament/orders',AdminOnlinePaymentOrdersComponent::class)->name('admin.onlinepayment');
    // Route::get('/admin/all/delivered/orders',AdminDeliveredOrdersComponent::class)->name('admin.deliveredorders');
    // Route::get('/admin/all/doctor/appointment',AdminAppointmentComponent::class)->name('admin.alldoctorappointments');
    // Route::get('/admin/appointment/detail/{appointment_id}',AdminAppointmentDetailComponent::class)->name('admin.appointmentdetail');
    // Route::get('/admin/all/online/meetings',AdminAllOnlineMEetingComponent::class)->name('admin.onlinemeetings');
    // Route::get('/admin/view/all/doctor/clinic/checkup/appointment',AdminAllDoctorClinicCheckupComponent::class)->name('admin.cliniccheckup');
    // Route::get('/admin/view/today/doctor/appointments',AdminTodayDoctorClinicCheckupComponent::class)->name('admin.todayappointment');
    // Route::get('/admin/pharmacy/shop',AdminPharmacyShopComponent::class)->name('admin.pharmacyshop');
    // Route::get('/admin/pharmacy/cart',AdminCartComponent::class)->name('admin.cart');
    // Route::get('/admin/pharmacy/Sale',AdminShopSalesComponent::class)->name('admin.pharmacysale');
    // Route::get('/admin/pharmacy/order/detail/{order_id}',AdminShopOrderComponent::class)->name('admin.pharmacyorder');
    });
});