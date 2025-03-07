<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header"><a class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                <h1 class="mb-0"><b>Admin</b>LTE
                </h1>
            </a> </div>
        <div class="mt-4">
            <p class="login-box-msg">Sign in to start your session</p>
        </div>
        <div class="mb-3 flex flex-col px-3">
            <input type="email" class="form-control p-2" placeholder="Email" wire:model="email">
            @error('email')
                <span class="text-danger tw-text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="  flex flex-col px-3">
            <input type="password" class="form-control p-2" placeholder="Password" wire:model="password">
            @error('password')
                <span class="text-danger tw-text-xs">{{ $message }}</span>
            @enderror
            @error('login_error')
                <span class="text-danger tw-text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full col-4 px-3 py-2 mt-2">
            <div class="d-grid gap-2"> <button class="btn btn-primary" wire:click.prevent='login'>Sign In</button>
            </div>
        </div>
    </div>
</div>
