<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UserRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'roles' => 'required|array',
            'roles.*' => 'sometimes|string|exists:\Spatie\Permission\Models\Role,name',
        ]);

        $user->syncRoles($data['roles']);

        return redirect()
            ->back(fallback: route('admin.users.edit', $user))
            ->with('success', 'User roles updated successfully.');
    }
}
