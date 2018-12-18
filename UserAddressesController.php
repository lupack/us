<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Model\Admin\UserAddress;
use App\Http\Controllers\Controller;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }

    public function create()
    {
        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }

    public function store(Request $request)
    {
        $user_id = session('sid');
        UserAddress::create([
            'hcity' => $request->input('hcity'),
            'hproper' => $request->input('hproper'),
            'harea' => $request->input('harea'),
            'address' => $request->input('address'),
            'contact_name' => $request->input('contact_name'),
            'contact_phone' => $request->input('contact_phone'),
            'user_id' => $user_id
        ]);

        return back();
    }

    public function edit(UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        return view('user_addresses.create_and_edit', ['address' => $user_address]);
    }

    public function update(UserAddress $user_address, UserAddressRequest $request)
    {
        $this->authorize('own', $user_address);

        $user_address->update($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }

    public function destroy(UserAddress $user_address)
    {
        $user_address->delete();

        return [];
    }
}
