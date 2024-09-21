<form class="space-y-3 w-80" wire:submit='login' novalidate>
    <div>
        <label class="block text-sm font-semibold" for="email">{{ __('Email') }}</label>
        <input class="w-full" type="email" name="email" id="email" wire:model.blur='form.email'>
        <div class="text-sm text-red-400">
            @error('form.email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <label class="block text-sm font-semibold" for="password">{{ __('Password') }}</label>
        <input class="w-full" type="password" name="password" id="password" wire:model.blur='form.password'>
        <div class="text-sm text-red-400">
            @error('form.password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <button type="submit">{{ __('Login') }}
            <div wire:loading>
                <p>{{__('Loading')}}</p>
            </div>
        </button>
    </div>
</form>
