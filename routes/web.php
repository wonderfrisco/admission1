<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Faker\Provider\at_AT\Payment;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'home'])->name('home');



Route::get('admin', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin', [DashboardController::class, 'dashboard'])->name('admin');



//Placement=======
Route::get('admin/placement', [PlacementController::class, 'index'])->name('placement.index');
Route::get('admin/placement/create', [PlacementController::class, 'create'])->name('placement.create');
Route::post('admin/placement/store', [PlacementController::class, 'store'])->name('placement.store');
Route::get('admin/placement/bulk', [PlacementController::class, 'bulk'])->name('placement.bulk');
Route::get('admin/placement/bulk/export', [PlacementController::class, 'export'])->name('placement.bulk.export');
Route::post('admin/placement/bulk/inport', [PlacementController::class, 'import'])->name('placement.bulk.import');
Route::post('admin/placement/protocol/inport', [PlacementController::class, 'storeProtocol'])->name('placement.bulk.protocol');
Route::get('admin/placement/viewPdf', [PlacementController::class, 'viewPdf'])->name('placement.viewpdf');
Route::get('admin/placement/protocol', [PlacementController::class, 'protocol'])->name('placement.protocol');
Route::get('admin/placement/protocol/index', [PlacementController::class, 'protocolIndex'])->name('placement.protocol.index');
Route::get('admin/placement/admission/notenrol', [PlacementController::class, 'notenrol'])->name('placement.notenrol');
Route::get('admin/placement/protocol/notenrol', [PlacementController::class, 'notprotoenrol'])->name('placement.protocol.notprotoenrol');
Route::get('admin/placement/protocol/enrol', [PlacementController::class, 'protoenrol'])->name('placement.protocol.protoenrol');
Route::get('admin/admision/notenrol', [PlacementController::class, 'adnotenrol'])->name('placement.admission.notenrol');
Route::get('admin/admision/enrolmentlistExcel', [PlacementController::class, 'enrolmentListExcel'])->name('placement.admission.enrolmentlistExcel');
Route::get('admin/admision/notenrolPdf', [PlacementController::class, 'notenrolPdf'])->name('placement.admission.notenrolPdf');
Route::get('admin/admision/protocolEnrolmentListExcel', [PlacementController::class, 'protocolEnrolmentListExcel'])->name('placement.admission.protocolEnrolmentListExcel');
Route::get('admin/admision/protocolNotEnrolPDF', [PlacementController::class, 'protocolNotEnrolPDF'])->name('protocol.protocolNotEnrolPDF');
Route::get('admin/admision/protocolNotEnrolExcel', [PlacementController::class, 'protocolNotEnrolExcel'])->name('protocol.protocolNotEnrolExcel');

//House=======
Route::get('admin/house', [HouseController::class, 'index'])->name('house.index');
Route::get('admin/house/create', [HouseController::class, 'create'])->name('house.create');
Route::get('admin/house/edit/{house}', [HouseController::class, 'edit'])->name('house.edit');
Route::post('admin/house/update/{house}', [HouseController::class, 'update'])->name('house.update');
Route::post('admin/house/store', [HouseController::class, 'store'])->name('house.store');
Route::get('admin/house/destroy/{house}', [HouseController::class, 'destroy'])->name('house.destroy');

//Document=======
Route::get('admin/document', [DocumentController::class, 'index'])->name('document.index');
Route::get('admin/document/show/{document}', [DocumentController::class, 'show'])->name('document.show');
Route::get('admin/document/create', [DocumentController::class, 'create'])->name('document.create');
Route::post('admin/document/store', [DocumentController::class, 'store'])->name('document.store');
Route::get('admin/document/edit/{document}', [DocumentController::class, 'edit'])->name('document.edit');
Route::post('admin/document/upload', [App\Http\Controllers\DocumentController::class, 'upload']);
Route::post('admin/document/update/{document}', [DocumentController::class, 'update'])->name('document.update');
Route::get('admin/document/delete/{document}', [DocumentController::class, 'delete'])->name('document.delete');
Route::delete('admin/document/destroy', [DocumentController::class, 'destroy']);

//User=======
Route::get('admin/user', [RegisteredUserController::class, 'index'])->name('user.index');
Route::get('admin/create', [RegisteredUserController::class, 'create'])->name('user.create');
Route::get('admin/edit/{user}', [RegisteredUserController::class, 'edit'])->name('user.edit');
Route::post('admin/store', [RegisteredUserController::class, 'store'])->name('user.store');
Route::post('admin/store', [RegisteredUserController::class, 'store'])->name('user.store');
Route::post('admin/profile', [RegisteredUserController::class, 'profileUpdate'])->name('user.profile.update');
Route::post('admin/update/{user}', [RegisteredUserController::class, 'update'])->name('user.update');
Route::get('admin/user/destroy/{user}', [RegisteredUserController::class, 'destroy'])->name('user.destroy');
Route::get('admin/user/profile', [RegisteredUserController::class, 'profile'])->name('user.profile');

Route::get('student/enrolment/list', [StudentController::class, 'enrolment'])->name('student.enrol');
Route::get('student/enrolment/show/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('student/enrolment/edit/{student}', [StudentController::class, 'editEnrolment'])->name('student.edit.enrolment');
Route::post('student/enrolment/update/{student}', [StudentController::class, 'updateEnrolment'])->name('student.update.enrolment');


});

Route::post('student/district', [StudentController::class, 'getDistricts']);
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::delete('student/photo/destroy', [StudentController::class, 'deleteTemPhoto']);
Route::post('student/photo/upload', [App\Http\Controllers\StudentController::class, 'uploadPhoto']);
Route::get('admission/{admission}', [StudentController::class, 'register'])->name('admission.register');
Route::post('admission', [StudentController::class, 'admission'])->name('admission');
Route::get('student/personal', [StudentController::class, 'personal'])->name('student.personal');
Route::get('student/logout', [StudentController::class, 'logout'])->name('student.logout');
Route::get('student/edit/{student}', [StudentController::class, 'editStudent'])->name('student.edit');
Route::post('student/update/{student}', [StudentController::class, 'updateStudent'])->name('student.update');
//Route::get('student/personal', [StudentController::class, 'personal'])->name('student.index');
Route::get('admission/letter/{letter}', [StudentController::class, 'admission_letter'])->name('admission_letter');
Route::get('personal/record/{record}', [StudentController::class, 'personal_record'])->name('personal.record');
Route::get('student/prospectus/{document}', [StudentController::class, 'prospectus'])->name('student.prospectus');


Route::get('pay/index', [PaymentController::class, 'pay'])->name('pay.index');
Route::post('pay', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('pay-callback', [PaymentController::class, 'payment_callback'])->name('callback-pay');




// Route::get('admin/user/password', [RegisteredUserController::class, 'password'])->name('user.password');
// Route::get('admin/user/Reset', [RegisteredUserController::class, 'reset'])->name('user.reset');
// Route::get('admin/user/change', [RegisteredUserController::class, 'change'])->name('password.change');

require __DIR__.'/auth.php';
