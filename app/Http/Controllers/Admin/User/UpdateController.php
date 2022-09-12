<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateController extends BaseController {

    public function __invoke(UpdateRequest $request, User $user) {
        $data = $request->validated();

        $this->service->update($data, $user);


        return redirect()->route('admin.users.show', $user->id);
    }
}
