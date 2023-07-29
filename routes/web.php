<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\InvoiceDetailController;


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//Muestra una tabla con todas las categorias
Route::get('categories', [CategoryController::class, 'index'])
->name(name:'categories.index');

//Muestra un formulario para crear una categorias
Route::get('categories/create', [CategoryController::class, 'create'])
->name(name:'categories.create');

//Recibe los datos del formularo para crear una categoria
Route::post('categories/create', [CategoryController::class, 'store'])
->name(name:'categories.create');

//Muestra un formulario para editar una categoria
Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])
->name(name:'categories.edit');

//Recibe los datos del formulario para edìtar una categoria
Route::post('categories/edit/{category}', [CategoryController::class, 'update'])
->name(name:'categories.edit');

//Elimina una categoria por el id
Route::post('categories/delete/{category}', [CategoryController::class, 'destroy'])
->name(name:'categories.delete');

//productos

//Muestra una tabla con todos los productos
Route::get('products', [ProductController::class, 'index'])
->name(name:'products.index');

//Muestra un formulario para crear un producto
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');


//Recibe los datos del formularo para crear un producto
Route::post('products/create', [ProductController::class, 'store'])
->name(name:'products.create');

//Muestra un formulario para editar un producto
Route::get('products/edit/{product}', [ProductController::class, 'edit'])
->name(name:'products.edit');

//Recibe los datos del formulario para edìtar un producto
Route::post('products/edit/{product}', [ProductController::class, 'update'])
->name(name:'products.edit');

//Elimina un producto por el id
Route::post('products/delete/{product}', [ProductController::class, 'destroy'])
->name(name:'products.delete');

//department
// Muestra una tabla con todos los departamentos
Route::get('departments', [DepartmentController::class, 'index'])
    ->name('departments.index');

// Muestra un formulario para crear un departamento
Route::get('departments/create', [DepartmentController::class, 'create'])
    ->name('departments.create');

// Recibe los datos del formulario para crear un departamento
Route::post('departments/create', [DepartmentController::class, 'store'])
    ->name('departments.store');

// Muestra un formulario para editar un departamento
Route::get('departments/edit/{department}', [DepartmentController::class, 'edit'])
    ->name('departments.edit');

// Recibe los datos del formulario para editar un departamento
Route::post('departments/edit/{department}', [DepartmentController::class, 'update'])
    ->name('departments.update');

// Elimina un departamento por el id
Route::post('departments/delete/{department}', [DepartmentController::class, 'destroy'])
    ->name('departments.delete');

//ciudades
//Muestra una tabla con todas las ciudades
Route::get('cities', [CityController::class, 'index'])
    ->name('cities.index');

//Muestra un formulario para crear una ciudad
Route::get('cities/create', [CityController::class, 'create'])
    ->name('cities.create');

//Recibe los datos del formulario para crear una ciudad
Route::post('cities/create', [CityController::class, 'store'])
    ->name('cities.store');

//Muestra un formulario para editar una ciudad
Route::get('cities/edit/{city}', [CityController::class, 'edit'])
    ->name('cities.edit');

//Recibe los datos del formulario para editar una ciudad
Route::post('cities/edit/{city}', [CityController::class, 'update'])
    ->name('cities.update');

//Elimina una ciudad por el id
Route::post('cities/delete/{city}', [CityController::class, 'destroy'])
    ->name('cities.delete');

//empleados
// Muestra una tabla con todos los empleados
Route::get('employees', [EmployeeController::class, 'index'])
    ->name('employees.index');

// Muestra un formulario para crear un empleado
Route::get('employees/create', [EmployeeController::class, 'create'])
    ->name('employees.create');

// Recibe los datos del formulario para crear un empleado
Route::post('employees/create', [EmployeeController::class, 'store'])
    ->name('employees.store');

// Muestra un formulario para editar un empleado
Route::get('employees/edit/{employee}', [EmployeeController::class, 'edit'])
    ->name('employees.edit');

// Recibe los datos del formulario para editar un empleado
Route::post('employees/edit/{employee}', [EmployeeController::class, 'update'])
    ->name('employees.update');

// Elimina un empleado por el id
Route::post('employees/delete/{employee}', [EmployeeController::class, 'destroy'])
    ->name('employees.delete');

//clientes
// Muestra una tabla con todos los clientes
Route::get('clients', [ClientController::class, 'index'])->name('clients.index');

// Muestra un formulario para crear un cliente
Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');

// Recibe los datos del formulario para crear un cliente
Route::post('clients/create', [ClientController::class, 'store'])->name('clients.store');

// Muestra un formulario para editar un cliente
Route::get('clients/edit/{client}', [ClientController::class, 'edit'])->name('clients.edit');

// Recibe los datos del formulario para editar un cliente
Route::post('clients/edit/{client}', [ClientController::class, 'update'])->name('clients.update');

// Elimina un cliente por el id
Route::post('clients/delete/{client}', [ClientController::class, 'destroy'])->name('clients.delete');

//facturas
// Muestra una tabla con todas las facturas
Route::get('bills', [BillController::class, 'index'])->name('bills.index');

// Muestra un formulario para crear una factura
Route::get('bills/create', [BillController::class, 'create'])->name('bills.create');

// Recibe los datos del formulario para crear una factura
Route::post('bills/create', [BillController::class, 'store'])->name('bills.store');

// Muestra un formulario para editar una factura
Route::get('bills/edit/{bill}', [BillController::class, 'edit'])->name('bills.edit');

// Recibe los datos del formulario para editar una factura
Route::post('bills/edit/{bill}', [BillController::class, 'update'])->name('bills.update');

// Elimina una factura por el id
Route::post('bills/delete/{bill}', [BillController::class, 'destroy'])->name('bills.delete');

//proveedores
// Muestra una tabla con todos los proveedores
Route::get('providers', [ProviderController::class, 'index'])->name('providers.index');

// Muestra un formulario para crear un proveedor
Route::get('providers/create', [ProviderController::class, 'create'])->name('providers.create');

// Recibe los datos del formulario para crear un proveedor
Route::post('providers/create', [ProviderController::class, 'store'])->name('providers.store');

// Muestra un formulario para editar un proveedor
Route::get('providers/edit/{provider}', [ProviderController::class, 'edit'])->name('providers.edit');

// Recibe los datos del formulario para editar un proveedor
Route::post('providers/edit/{provider}', [ProviderController::class, 'update'])->name('providers.update');

// Elimina un proveedor por el id
Route::delete('providers/delete/{provider}', [ProviderController::class, 'destroy'])->name('providers.delete');


//detalle_facturas
// Muestra una tabla con todos los detalles de factura
Route::get('invoice_details', [InvoiceDetailController::class, 'index'])
->name('invoice_details.index');

// Muestra un formulario para crear un detalle de factura
Route::get('invoice_details/create', [InvoiceDetailController::class, 'create'])->name('invoice_details.create');

// Recibe los datos del formulario para crear un detalle de factura
Route::post('invoice_details/create', [InvoiceDetailController::class, 'store'])->name('invoice_details.store');

// Muestra un formulario para editar un detalle de factura
Route::get('invoice_details/edit/{invoice_detail}', [InvoiceDetailController::class, 'edit'])->name('invoice_details.edit');

// Recibe los datos del formulario para editar un detalle de factura
Route::post('invoice_details/edit/{invoice_detail}', [InvoiceDetailController::class, 'update'])->name('invoice_details.update');

// Elimina un detalle de factura por el id
Route::post('invoice_details/delete/{invoice_detail}', [InvoiceDetailController::class, 'destroy'])->name('invoice_details.delete');


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
