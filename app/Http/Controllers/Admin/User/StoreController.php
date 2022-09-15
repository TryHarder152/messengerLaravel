<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\StoreRequest;

class StoreController extends BaseController {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.users.index');
    }
}
