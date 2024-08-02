<?php

use App\Models\Job;
use App\Models\Employer;

test('it belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and  Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function(){
    $job = Job::factory()->create();

    $job->tag('Fronyend');

    expect($job->tags)->toHaveCount(1);
});
