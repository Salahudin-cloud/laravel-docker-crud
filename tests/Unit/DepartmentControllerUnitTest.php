<?php

use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('return a view with paginated department', function () {
    // create dummy data
    Department::factory()->count(10)->create();

    //act
    $controller = new DepartmentController();
    $response = $controller->index();

    // asert
    expect($response)->toBeInstanceOf(View::class)
        ->and($response->name())->toBe('department . departmentView');

    // get data from view
    $data = $response->getData();

    expect($data)->toHaveKey('departments')
        ->and($data['departments']->count())->toBeLessThanOrEqual(10);
    
});


