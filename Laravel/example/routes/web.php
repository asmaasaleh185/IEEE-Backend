<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;


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

Route::resource('jobs', JobController::class);

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
