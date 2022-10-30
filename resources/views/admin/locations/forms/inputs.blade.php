<div class="row">
    <div class="col s12 input-field">
        <input type="text" name="name" class="@error('name') invalid @enderror" value="{{$location->name??old('name')}}">
        <label for="name">Name</label>
        @error('name')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
</div>
