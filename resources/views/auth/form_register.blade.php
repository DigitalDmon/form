<input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" class="pl-2">
@error('name')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="text" id="lastName" name="lastName" placeholder="Last name" value="{{ old('lastName') }}" class="pl-2">
@error('lastName')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="number" id="age" name="age" placeholder="Age" value="{{ old('age') }}" class="pl-2">
@error('age')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<div class="radio-group">
    <div><label>Sex (Gender):</label></div>
    <div class="radio-option">
        <input type="radio" id="masculine" name="gender" value="masculine">
        <label for="masculine">Masculine</label>
    </div>
    <div class="radio-option">
        <input type="radio" id="feminine" name="gender" value="feminine">
        <label for="feminine">Feminine</label>
    </div>
    <div class="radio-option">
        <input type="radio" id="other" name="gender" value="other" checked>
        <label for="other">Other</label>
    </div>
</div>
@error('gender')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<select id="countryResidence" name="countryResidence">
    <option value="">Country of residence</option>
    @if(isset($countries) && count($countries) > 0)
        @foreach ($countries as $country)
            <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
        @endforeach
    @else
        <option value="">No se encontraron países.</option>
    @endif
</select>
@error('countryResidence')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<select id="countryNationality" name="countryNationality">
    <option value="">Country of nationality</option>
    @if(isset($countries) && count($countries) > 0)
        @foreach ($countries as $country)
            <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
        @endforeach
    @else
        <option value="">No se encontraron países.</option>
    @endif
</select>
@error('countryNationality')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="text" id="theme" name="theme" placeholder="Technological topic that you would like to learn" value="{{ old('theme') }}" class="pl-2">
@error('theme')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="pl-2">
@error('email')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="password" id="password" name="password" placeholder="Password" value="{{ old('password') }}" class="pl-2">
@error('password')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" value="{{ old('password_confirmation') }}" class="pl-2">
@error('password_confirmation')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone number" value="{{ old('phoneNumber') }}" class="pl-2">
@error('phoneNumber')
<p class="text-xs text-red-500">{{ $message }}</p>
@enderror

<textarea id="observations" name="observations" rows="2" placeholder="Observations or questions about the event" class="pl-2"></textarea>
