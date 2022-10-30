<div class="row">
    <div class="col s12 m6 l6 input-field">
        <input type="text" name="name" id="name" class="@error('name') invalid @enderror" value="{{$vendor->name??old('name')}}">
        <label for="name">Name</label>
        @error('name')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    <div class="col s12 m6 l6 input-field">
        <i class="material-icons prefix">phone</i>
        <input type="text" name="contact" id="contact" class="@error('contact') invalid @enderror" value="{{$vendor->contact??old('contact')}}">
        <label for="contact">Contact</label>
        @error('contact')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    <div class="col s12 m8 l8 input-field">
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="address" id="address" class="@error('address') invalid @enderror" value="{{$vendor->address??old('address')}}">
        <label for="address">Address</label>
        @error('address')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>

</div>
