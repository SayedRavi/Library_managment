<div class="row">
    <div class="container">
        <div class="col s12 m7 input-field">
            <select name="vendor_id" id="vendor">
                <option value="1" class="@error('vendor_id') invalid @enderror" selected disabled>--Vendors--</option>
                @foreach($vendors as $vendor)
                    <option value="{{$vendor->id}}" class="">{{$vendor->name}}</option>
                @endforeach
            </select>
            @error('vendor_id')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <br>
        <br>
        <br>
        <div class="col s12 m7 input-field">
            <select name="book_id" id="book">
                <option value="1" class="@error('book_id') invalid @enderror" selected disabled>--Books--</option>
                @foreach($books as $book)
                    <option value="{{$book->id}}" class="">{{$book->title}}</option>
                @endforeach
            </select>
            @error('book_id')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <div class="col s12 m7 input-field">
            <input type="number" name="quantity" id="quantity">
            <label for="quantity">Quantity</label>
            @error('quantity')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <div class="col s12 m7 input-field">
            <input type="text" name="date" id="date" class="datepicker" value="{{old('date')}}">
            <label for="date">Date</label>
        </div>
        @error('date')
        <blockquote>{{$message}}</blockquote>
        @enderror
    </div>
    </div>


