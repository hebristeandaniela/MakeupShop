<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;

use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\StripeCheckoutController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\FooterPageController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SalesReportController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\BlogPageController;
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
// Rute pentru autentificare
Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        Route::get('/profile', [ProfileController::class, 'show'])->name('admin.profile');
        Route::post('/profile{id}', [ProfileController::class, 'update'])->name('admin.profile.update');

        Route::resource('/products', ProductAdminController::class);  
    Route::get('/products', [ProductAdminController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductAdminController::class, 'create'])->name('admin.products.create');
    Route::get('/products/{id}/edit', [ProductAdminController::class, 'edit'])->name('admin.products.edit');
    Route::delete('/products/{id}', [ProductAdminController::class, 'destroy'])->name('admin.products.destroy');

        Route::post('/products/delete_img', [ProductAdminController::class, 'deleteImage'])->name('admin.products.delete_img');
       Route::post('/products', [ProductAdminController::class, 'store'])->name('admin.products.store');
        Route::put('/products/{id}', [ProductAdminController::class, 'update'])->name('admin.products.update');
       
        Route::resource('/inventory', InventoryController::class);
        Route::get('/inventory', [InventoryController::class, 'index'])->name('admin.inventory.index');
        Route::put('/inventory/{id}', [ProductAdminController::class, 'update'])->name('admin.inventory.update');

        Route::get('/inventory/create', [InventoryController::class, 'create'])->name('admin.inventory.create');
        Route::put('/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('admin.inventory.edit');
        Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('admin.inventory.destroy');

        Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
        Route::post('/orders/pay/{id}', [OrderController::class, 'payOrder'])->name('admin.orders.pay');
        Route::delete('/orders/delete/{id}', [OrderController::class, 'deleteOrder'])->name('admin.orders.delete');

        Route::get('clients', [ClientController::class, 'index'])->name('admin.clients.index');
        Route::get('clients/{id}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
        Route::put('clients/{id}', [ClientController::class, 'update'])->name('admin.clients.update');
        Route::delete('clients/{id}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');

        Route::get('/sales-report', [SalesReportController::class, 'index'])->name('admin.sales-report.index');

    });
});

Route::get('/help', [FooterPageController::class, 'help']);
Route::get('/termeni&conditii', [FooterPageController::class, 'termeniConditii']);
Route::get('/gdpr', [FooterPageController::class, 'gdpr']);

Route::get('/blog1', [BlogPageController::class, 'blog1']);

Route::get('/blog2', [BlogPageController::class, 'blog2']);

Route::get('/blog3', [BlogPageController::class, 'blog3']);
// Rute specifice pentru cart și checkout
Route::post('/cart', [App\Http\Controllers\CartsController::class, 'store'])->name('cart');
Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');
Route::get('/checkout/get/items', [App\Http\Controllers\CartsController::class, 'getCartItemsForCheckout']);
Route::post('/process/user/payment', [App\Http\Controllers\CartsController::class, 'processPayment']);
Route::get('/success', [CartsController::class, 'success']);
Route::get('/cancel', [CartsController::class, 'cancel']);
Route::post('/delete', [CartsController::class, 'deleteProduct']);
Route::post('/decrement', [CartsController::class, 'decrementProduct']);

// Rute pentru resetarea parolei
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Ruta pentru pagina principală
Route::get('/', [ProductsController::class, 'index']);

// Ruta pentru afișarea produselor pe categorie
Route::get('/{category}', [ProductsController::class, 'showByCategory']);



