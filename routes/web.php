<?php

use App\Http\Controllers\adminMasterController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AppSettingsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\storeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/initAuth',[AppSettingsController::class,'generateAll'])->name('initAuth');
/**=====================================admin master route */

route::get('/adminMaster',[adminMasterController::class,'AdminMaster']);
route::get('/signin',[adminMasterController::class,'login'])->name("login");
route::post('tryLogin',[adminMasterController::class,'tryLogin'])->name("tryLogin");




/**=====================================client master route */

route::get('/clientMaster',[ClientController::class,'ClientMaster'])->name("clientMaster");
route::get('/signinUP',[ClientController::class,'signinUP']);
/**=====================================client pages */

route::get('/clientHome',[ClientController::class,'HomePage'])->name("clientHome");
route::get('/bestsall',[ClientController::class,'bestSalle'])->name("bestSall");
route::get('/offers',[ClientController::class,'Offers'])->name("offers");
route::get('/favoriet',[ClientController::class,'Favoreit'])->name("favoriet");
route::get('/cart',[ClientController::class,'Cart'])->name("cart");
route::get('/productdetails/{id}',[ClientController::class,'ProducrDetails'])->name("productDetails");
route::get('/stores',[ClientController::class,'stores'])->name("stores");

route::get('/contact',[ClientController::class,'contact'])->name("contact");
route::get('/storedetails/{id}',[ClientController::class,'store_details'])->name("storedetails");
route::get('/categoryCont/{id}',[ClientController::class,'Catproducts'])->name("Catproducts");
route::get('/category',[ClientController::class,'categories'])->name("categories");
route::get('/Category/{id}',[MaterialController::class,'Category'])->name("Category");
route::get('/materials',[ClientController::class,'materials'])->name("materials");
/**=============================================================================== new routes */
route::post('/storStor2',[storeController::class,'storeStor']);

route::get('/allproduct/{id}',[ClientController::class,'AllProduct'])->name("AllProduct");
/**============================================================================= mazen */

Route::group(['middleware'=>['auth','role:Admin']], function () {
    /**==============================================adminPage Route */
    route::get('/stor',[AdminPageController::class,'stor'])->name("stor");






route::get('/forms',[AdminPageController::class,'Forms'])->name("forms");
route::get('/createCategory',[AdminPageController::class,'createCategory'])->name("createCategory");
route::post('/storCat',[AdminPageController::class,'storCat'])->name("storCat");
route::get('/createPro',[AdminPageController::class,'createproduct'])->name("createPro");
route::post('/storePro',[AdminPageController::class,'storePro']);
route::get('/ProductList',[AdminPageController::class,'ProductList'])->name("ProductList");
route::get('/CreateStore',[AdminPageController::class,'CreateStore'])->name("CreateStore");
route::post('/storeStor',[AdminPageController::class,'storeStor']);
route::get('/StoreList',[storeController::class,'StoreList'])->name("StoreList");
route::get('/AdminDashboard',[AdminPageController::class,'Dashboard'])->name("admindash");
    
});

Route::group(['middleware'=>['auth','role:User']], function () {

    
});




/**=================================================================== product*/
route::post('/save_oldpro',[AdminPageController::class,'saveOldPro'])->name('saveOldPro');
route::get('/editPro/{id}',[AdminPageController::class,'EditPro'])->name("EditPro");
route::get('/deletePro/{id}',[AdminPageController::class,"DeletePro"])->name("DeletePro");
route::get('/detailPro/{id}',[AdminPageController::class,"DetailPro"])->name("DetailPro");
route::post('/confirmDeletePro',[AdminPageController::class,'confirmDeletePro'])->name('confirmDeletePro');
/**=====================================================================store */
route::post('/save_oldStore',[storeController::class,'saveOldStore'])->name('saveOldStore');
route::get('/editStore/{id}',[storeController::class,'EditStore'])->name("EditStore");
route::get('/deleteStore/{id}',[storeController::class,"DeleteStore"])->name("DeleteStore");
route::get('/detailStore/{id}',[storeController::class,"DetailStore"])->name("DetailStore");
route::post('/confirmDeleteStore',[storeController::class,'confirmDeleteStore'])->name('confirmDeleteStore');
/**==========================================================================materials */
route::get('/MatList',[MaterialController::class,'MatlList'])->name("MatlList");
route::get('/createmat',[MaterialController::class,'creatematerial'])->name("createmat");
route::post('/storeMat',[MaterialController::class,'storeMat']);
route::post('/save_oldMat',[MaterialController::class,'saveOldMat'])->name('saveOldMat');
route::get('/editMat/{id}',[MaterialController::class,'EditMat'])->name("EditMat");
route::get('/deleteMat/{id}',[MaterialController::class,"DeleteMat"])->name("DeleteMat");
route::get('/detailMat/{id}',[MaterialController::class,"DetailMat"])->name("DetailMat");
route::post('/confirmDeleteMat',[MaterialController::class,'confirmDeleteMat'])->name('confirmDeleteMat');



