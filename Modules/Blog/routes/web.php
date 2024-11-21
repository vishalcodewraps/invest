<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\App\Http\Controllers\BlogController;
use Modules\Blog\App\Http\Controllers\BlogCategoryController;


Route::group(['as'=> 'admin.', 'prefix' => 'admin/cms', 'middleware' => ['auth:admin']], function () {
    Route::resource('blog', BlogController::class)->names('blog');
    Route::get('team', [BlogController::class, 'team_list'])->name('team-list');

    Route::get('team-list', [BlogController::class, 'team_list'])->name('team-list');
    Route::get('team-create', [BlogController::class, 'teamCreate'])->name('teamcreate');

    Route::get('team-edit', [BlogController::class, 'teamEdit'])->name('teamedit');

    Route::post('team-post', [BlogController::class, 'teamStore'])->name('teamPost');
    Route::post('team-update', [BlogController::class, 'teamUpdate'])->name('editupdate');

    Route::get('comment-list', [BlogController::class, 'blog_list'])->name('comment-list');
    Route::get('show-comment/{id}', [BlogController::class, 'show_comment'])->name('show-comment');
    Route::put('blog-comment-status/{id}', [BlogController::class, 'blog_comment_status'])->name('blog-comment-status');
    Route::delete('delete-blog-comment/{id}', [BlogController::class, 'delete_comment'])->name('delete-blog-comment');
});


