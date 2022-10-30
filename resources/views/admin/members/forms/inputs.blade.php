<div class="row">
  <div class="container">
      <div class="col s12 m6 input-field">
          <input type="text" name="name" class="@error('name') invalid @enderror" value="{{$member->name??old('name')}}">
          <label for="name">Name</label>
          @error('name')
          <blockquote>{{$message}}</blockquote>
          @enderror
      </div>
      <div class="col s12 m6 input-field">
          <input type="text" name="contact" class="@error('contact') invalid @enderror" value="{{$member->contact??old('contact')}}">
          <label for="contact">Contact</label>
          @error('contact')
          <blockquote>{{$message}}</blockquote>
          @enderror
      </div>
      <div class="col s12 m6 input-field">
          <input type="text" name="address" class="@error('address') invalid @enderror" value="{{$member->Address??old('address')}}">
          <label for="address">Address</label>
          @error('address')
          <blockquote>{{$message}}</blockquote>
          @enderror
      </div>
      <div class="col s12 m7">
          <div class="file-field input-field">
              <div class="btn">
                  <span>Id Proof</span>
                  <input type="file" accept="image/*" name="id_proof" value="{{isset($member)?asset('storage/'.$member->id_proof):old('id_proof')}}">
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Proof ID" value="{{isset($member)?asset('storage/'.$member->id_proof):old('id_proof')}}">
              </div>
          </div>
      </div>
      <div class="col s12 m7">
          <div class="file-field input-field">
              <div class="btn">
                  <span>Photo</span>
                  <input type="file" accept="image/*" name="photo" value="{{isset($member)?asset('storage/'.$member->photo):old('photo')}}">
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" value="{{isset($member)?asset('storage/'.$member->photo):old('photo')}}">
              </div>
          </div>
      </div>
  </div>
</div>
