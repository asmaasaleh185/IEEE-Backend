<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function create(User $user)
    {
        return in_array($user->role, ['user', 'admin']);
    }

    public function update(User $user, Book $book)
    {
        return $user->role === 'user' || $user->role === 'admin';
    }

    public function updateCategory(User $user, Category $category)
    {
        return $user->role === 'user' || $user->role === 'admin';
    }

    public function deleteBook(User $user, Book $book)
    {
        return $user->role === 'admin';
    }

    public function deleteCategory(User $user, Category $category)
    {
        return $user->role === 'admin';
    }
}
