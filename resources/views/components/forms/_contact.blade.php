{{ Form::open(['url' => route('front.contact.form.submission'), 'method' => 'POST']) }}
@if (Session::has('success-msg'))
    <p style="padding:10px; color:green;">{!! Session::get('success-msg') !!}</p>
@else
    @include('components.errors._error-message')
    <input name="template" type="hidden" value="{{$item->view}}">
    <input name="slug" type="hidden" value="{{$item->slug}}">
    <input name="subject" type="hidden" value="{{$item->title}}">

    <div class="form-fields-stack two-column">
        <div class="form-field">
            {{Form::label('name', 'Your Name*') }}
            {{ Form::text('name', null, ['maxlength' => 255, 'id' => 'fullname']) }}
        </div>
        <div class="form-field">
            {{Form::label('email', 'Your Email*') }}
            {{ Form::email('email', null, ['maxlength' => 255, 'id' => 'email']) }}
        </div>
    </div>

    <div class="form-fields-stack two-column">
        <div class="form-field">
            {{Form::label('company', 'Company Name') }}
            {{ Form::text('company', null, ['maxlength' => 255, 'id' => 'company']) }}
        </div>
        <div class="form-field">
            {{Form::label('Phone Number', 'Phone Number*') }}
            {{ Form::number('Phone', null, ['maxlength' => 255, 'id' => 'phone']) }}
        </div>
    </div>

    <div class="form-field">
        {{Form::label('message', 'Message') }}
        {{ Form::textarea('message', null, ['id' => 'message']) }}
    </div>

    <div class="form-field send">
        <button class="button grey">Send</button>
    </div>
@endif
</form>
