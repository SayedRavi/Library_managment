<div class="row">
    <div class="container">
        <div class="col s12 m8 input-field">
            <input type="text" name="title" class="@error('title') invalid @enderror" value="{{$plan->title??old('title')}}">
            <label for="title">Title</label>
            @error('title')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <br>
{{--        <div class="col s12 m8">--}}
{{--            <ul class="collapsible">--}}
{{--                <li>--}}
{{--                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Details</div>--}}
{{--                    <div class="collapsible-body"><span>--}}
{{--                            <textarea name="details" id="details" cols="30" rows="10">{{old('details')}}</textarea>--}}
{{--                        </span></div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class="col s12 m5 input-field">
            <i class="material-icons prefix black-text">attach_money</i>
            <input type="text" name="charges" class="@error('charges') invalid @enderror" value="{{$plan->charges??old('charges')}}">
            <label for="charges">Charges</label>
            @error('charges')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <div class="col s12 m3 input-field">
            <i class="material-icons prefix">timer</i>
            <input type="text" name="duration" class="@error('duration') invalid @enderror" value="{{$plan->duration??old('duration')}}">
            <label for="duration">Duration</label>
            @error('duration')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
    </div>
</div>
@push('js')
    <script>
        CKEDITOR.replace('details')
    </script>
@endpush
