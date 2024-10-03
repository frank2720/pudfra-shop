<?php

namespace App\Http\Controllers\Profile;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Profile\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function profile(Request $request): View
    {
        $categories =  Category::with('subcategories')->get();
        $latest = Product::with('entity')
            ->latest()
            ->paginate(8);
        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('profile.profile', [
            'towns'=>$towns,
            'categories'=>$categories,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'user' => $request->user(),
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.profile')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
