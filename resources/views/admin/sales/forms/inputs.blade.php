<div class="row">
    <div class="container">
        <div class="col s12 m7 input-field">
            <input type="text" name="name" class="@error('name') invalid @enderror" value="{{old('name')}}">
            <label for="name">name</label>
            @error('name')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <div class="col s12 m7 input-field">
            <select name="book_id" id="book">
                <option value="0" selected disabled>--Select Book--</option>
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
            <textarea name="remark" id="remark" cols="30" rows="10">{{old('remark')}}</textarea>
        </div>
    </div>
</div>
@push('js')
    <script>
        CKEDITOR.replace('remark');
    </script>
@endpush
