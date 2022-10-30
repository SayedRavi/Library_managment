<div class="row">
    <div class="container">
        <div class="col s12 m7">
            <select name="member_id" id="member" class="select">
                <option value="0" disabled selected>--Members--</option>
                @foreach($members as $member)
                    <option value="{{isset($member)?$member->id:old($member->id)}}">{{isset($member)?$member->name:old($member->name)}}</option>
                    @endforeach
            </select>
        </div>
        <br>
        <br>
        <br>
        <div class="col s12 m7">
            <select name="book_id" id="book" class="select">
                <option value="0" disabled selected>--Books--</option>
                @foreach($books as $book)
                    <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
            </select>
        </div>
        <div class="col s12 m7 input-field">
            <input type="number" name="quantity" class="@error('quantity') invalid @enderror" value="{{old('quantity')}}">
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
