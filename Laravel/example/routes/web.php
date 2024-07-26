<?php

use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('test', function(){
    // dispatch(function(){
    //     logger('Hello from the queue!');
    // })->delay(5);
    $job = Job::first();
    TranslateJob::dispatch($job);
    return'Done';
});

Route::View('/', 'home');
// Route::get('/', function () {
//     // $jobs = Job::all();
//     // dd($jobs);
//     return view('home');
// });

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });


Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Route::resource('jobs', JobController::class)->only(['index', 'show']);
// Route::resource('jobs', JobController::class)->except(['index', 'show'])->middleware('auth');

// Index

// Route::get('/jobs', function () {
//     $jobs = Job::with('employer')->latest()->simplePaginate(3);
//     return view('jobs.index', [
//         'jobs' => $jobs
//     ]);
// });

// Create
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

// Show
// Route::get('/jobs/{job}', function (Job $job) {
//     // $job = Job::find($id);

//     return view('jobs.show', ['job' => $job]);
// });

// Store
// Route::post('/jobs', function () {
//     // dd(request('title'));

//     // validation
//     request()->validate([
//         'title'=> ['required', 'min:3'],
//         'salary'=> ['required'],
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 1
//     ]);

//     return redirect('/jobs');
// });

// Edit
// Route::get('/jobs/{job}/edit', function (Job $job) {
//     // $job = Job::find($id);

//     return view('jobs.edit', ['job' => $job]);
// });

// Update
// Route::patch('/jobs/{job}', function (Job $job) {
//     // authorize (one hold...)

//     // validate
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);

//     // update the job
//     // $job = Job::findOrFail($id);

//     // option one
//     // $job->title = request('title');
//     // $job->salary = request('salary');
//     // $job->save();

//     // option two
//     $job->update([
//         'title'=> request('title'),
//         'salary' => request('salary')
//     ]);

//     // redirect to the job page
//     return redirect('/jobs/' . $job->id);
// });

// destroy
// Route::delete('/jobs/{job}', function (Job $job) {
//     // authorize (one hold...)

//     //delete
//     // Job::findOrFail($id)->delete();
//     $job->delete();

//     // redirect
//     return redirect('/jobs');

// });

Route::View('/contact', 'contact');
// Route::get('/contact', function () {
//     return view('contact');
// });

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);
