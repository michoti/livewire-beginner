<form wire:submit.prevent='formSubmit' class="space-y-4">
    {{ $name }}
    <div>
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <x-jet-input wire:model='name' name="name" id="name" type="text" /> 
        @error('name')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror      
    </div>
    <div>
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input wire:model='email' name="email" id="email" type="email" />  
        @error('email')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror      
    </div>
    <div>
        <x-jet-label for="message" value="{{ __('Message') }}" />
        <textarea wire:model='message' class="w-full" name="message" id="message" cols="20" rows="5"></textarea>
        @error('message')<span class="text-xs text-red-500" >{{ $message}}</span>@enderror 
    </div>

    <x-jet-button type="submit" class="mt-5">
        {{ __('Create') }}
    </x-jet-button>
</form>
