<div class="row">
    <div class="container">
    <div class="col s12 m6 input-field">
        <input type="text" name="title" class="@error('title') invalid @enderror" value="{{$book->title??old('title')}}">
        <label for="title">Title</label>
        @error('title')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    <div class="col s12 m6 input-field">
        <input type="text" name="author" class="@error('author') invalid @enderror" value="{{$book->author??old('author')}}">
        <label for="author">Author</label>
        @error('author')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    <div class="col s12 m4 input-field">
        <input type="text" name="quantity" class="@error('quantity') invalid @enderror" value="{{$book->quantity??old('quantity')}}">
        <label for="quantity">Quantity</label>
        @error('quantity')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>

    <div class="col s12 m6 input-field">
        <select name="location_id" id="location_id" class="select @error('location_id') invalid @enderror">
            <option value="0" class="disabled selected" disabled>--Select Book Location--</option>
            @foreach($locations as $location)
            <option name="location_id" value="{{$location->id}}">{{$location->name}}</option>
            @endforeach
        </select>
        @error('location_id')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    </div>
</div>
