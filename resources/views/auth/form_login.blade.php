<Input type="email" placeholder="Email" class="pl-2">
@error('email')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror
<Input type="password" placeholder="Password" class="pl-2">
@error('password')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror
