<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Url;

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
Route::post('/', function (Request $request) {
    $url = $request->validate([
        'url' => 'required|url',
    ]);

    $uniLink = strtolower(Str::random(6));
    $currentHost = $_SERVER['HTTP_HOST'];
    if (
        Url::create([
            'uniqueLink' => $uniLink,
            'shortUrl' => $currentHost . '/' . $uniLink,
            'url' => $request->url,
            'user_id' => Auth::user()->id,
        ])
    ) {
        return redirect()->back()->with('success', 'Url shortened successfully');
    } else {
        return redirect()->back()->with('error', 'Something went wrong');
    }
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $urls = Url::paginate(5);
        return view('dashboard')->with('urls', $urls);
    })->name('dashboard');
});

Route::get('/{uniqueLink}', function ($uniqueLink) {
    $url = Url::where('uniqueLink', $uniqueLink)->first();
    if ($url) {
        $lastVisitCount = $url->visitCount;
        $newVisitCount = $lastVisitCount + 1;
        if ($url['url'] !== null) {
            $url->update(['visitCount' => $newVisitCount]);
            return redirect($url['url']);
        } else {
            abort(404);
        }
    } else {
        abort(404);
    }
});

Route::get('/delete-url/{id}', function ($id) {
    $url = Url::find($id);
    $url->delete();
    return redirect()->back();
});
