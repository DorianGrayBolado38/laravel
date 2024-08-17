    <?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\tbllivrosController;

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::get('/', function(){return response()->json(['Sucesso'=>true]);});
    Route::get('/livros', [tbllivrosController::class,'index']);
    Route::get('/livros/{id}', [TbllivrosController::class,'show']);
    Route::post('/livros', [tbllivrosController::class,'store']);
    Route::put('/livros/{id}', [tbllivrosController::class,'update']);
    Route::delete('/livros/{id}', [tbllivrosController::class,'destroy']);
