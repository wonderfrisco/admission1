<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordEmailRequest;
use App\Jobs\EmailJob;
use App\Jobs\PasswordJob;
use App\Mail\UserPassword;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Stringable;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // return view('auth.register');

        return view('backend.admin.create');
    }
    public function index()
    {
        $users = User::latest()->get();
        return view('backend.admin.index', compact('users'));
    }
    public function edit(User $user)
    {
        return view('backend.admin.edit', compact('user'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('backend.admin.profile', compact('user'));
    }
    public function password()
    {
       return view('backend.admin.password');
    }

    public function reset(ForgetPasswordEmailRequest $request)
    {
       $token = Str::random(64);
       DB::table(' password_reset_tokens')->insert(['token' => $token,'email'=>$request->email, 'created_at'=>Carbon::now()]);
       dispatch(new PasswordJob(['email' => $request->email, 'token' => $token]));

       return view('backend.admin.new-password');


    }
    public function profileUpdate(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->save();
        return redirect()->back()->with('message', 'User Profile Updated successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('message', 'User Delete successfully');
    }
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('user.index')->with('message', 'User updated successfully');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);
        $password = Str::random(10, 'alpha_num');
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($password),
        ]);

        //Mail::to($request->email)->send(new UserPassword(['name' => $request->name, 'password' => $password]));
        dispatch(new EmailJob(['name' => $request->name, 'email' => $request->email, 'password' => $password]));
        return redirect()->route('user.index')->with('message', 'User added successfully');
    }
}
