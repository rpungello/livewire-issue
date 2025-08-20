<?php

use App\Livewire\ParentComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', ParentComponent::class)->name('parent');

