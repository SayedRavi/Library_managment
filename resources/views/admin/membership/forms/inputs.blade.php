<div class="row">
    <div class="container">
{{--        <div>--}}
{{--            <b>Note:</b>--}}
{{--            <p class="red-text">Plan changing is not avaliable. If you want to change plan, delete this plan--}}
{{--                and take a new one.</p>--}}
{{--        </div>--}}


        <div class="col s12 m7 input-field">
            <select name="member_id" id="member_id" class="@error('member_id') invalid @enderror">
                <option value="0" selected disabled>--Members--</option>
                @foreach($members as $member)
                <option @if(request()->has('membership')) {{$member->id == request()->get('membership') ? 'selected' : ''}} @endif name="member_id" value="{{$member->id}}" class="">{{$member->name}}</option>
                    @endforeach
            </select>
            @error('member_id')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>

        <div class="col s12 m7 input-field">
            <select name="plan_id" id="plan_id" class="select @error('plan_id') invalid @enderror">
                <option value="0" class="disabled selected" disabled>--Select plan--</option>
                @foreach($plans as $membership)
                    <option name="plan_id" value="{{$membership->id}}">{{$membership->title}}</option>
                @endforeach
            </select>
            @error('plan_id')
            <blockquote>{{$message}}</blockquote>
            @enderror
        </div>
        <div class="col s12 m7 input-field">
            <input type="text" name="start_date" id="start_date" class="datepicker" value="{{$membership->start_date ?? old('start_date')}}">
            <label for="start_date">Start Date</label>
        </div>
        @error('start_date')
        <blockquote>{{$message}}</blockquote>
        @enderror

        <div class="col s12 input-field">
            <p>
                <label>
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1" {{$membership->status || old('status') ? 'checked' : '' }}/>
                    <span>Status</span>
                </label>
            </p>
        </div>
</div>
    </div>
