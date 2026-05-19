@include('mails.partials._header')

	<tr width="600">
		<td style="width: 600px; padding:0px 40px 40px; text-align:left; font-size:14px; line-height:18px; border-bottom:1px solid #e7e7e7;">
        	<p style="font-family:'Open Sans',Arial, Helvetica, sans-serif; font-size:24px; line-height: 30px; font-weight:600; margin:0;">
             	{!! !empty($model->subject) ? $model->subject : 'Contact Form Enquiry' !!}
			</p>
		</td>
	</tr>

    <tr width="600">
    	<td>
        	<img style="display:block;" src="{{ url('/') }}/images/mail/spacer.png" width="1" height="40" />
		</td>
	</tr>

	<!-- START -- GENERAL INFO -- TEXT CONTENT -->
	<tr width="600">
    	<td style="width: 600px; padding:0px 40px; text-align:left; font-size:14px; line-height:18px;">
        	<p>
            	The following message was sent via the website contact form:
                <br/>
				<br/>Name: {{ $model->full_name }}

                @if (!empty($model->phone))
                	<br/>Phone: {{ $model->phone }}
				@endif

                @if (!empty($model->email))
                	<br/>Email: {{ $model->email }}
                @endif

                @if (!empty($model->subject))
                	<br/>Subject: {{ $model->subject }}
				@endif

                @if (!empty($model->data['address']))
					<br/>Address:
					{!! nl2br($model->data['address']) !!}
				@endif

                @if (!empty($model->data['city']))
					<br/>Town\City:
					{!! nl2br($model->data['city']) !!}
				@endif

                @if (!empty($model->data['pet_name']))
					<br/>Pet Name:
					{!! nl2br($model->data['pet_name']) !!}
				@endif

                @if (!empty($model->data['product_name']))
					<br/>Drug or Prodcut Name:
					{!! nl2br($model->data['product_name']) !!}
				@endif

                @if (!empty($model->data['product_size']))
					<br/>Dosage / Size / Strength:
					{!! nl2br($model->data['product_size']) !!}
				@endif

                @if (!empty($model->data['quantity']))
					<br/>Quantity:
					{!! nl2br($model->data['quantity']) !!}
				@endif

                @if (!empty($model->data['pet_owner_address']))
					<br/>Pet Owner Address:
					{!! nl2br($model->data['pet_owner_address']) !!}
				@endif

                @if (!empty($model->data['home_phone']))
					<br/>Home Phone:
					{!! nl2br($model->data['home_phone']) !!}
				@endif

                @if (!empty($model->data['referred']))
					<br/>Referral:
					{!! nl2br($model->data['referred']) !!}
				@endif

                @if (!empty($model->data['previous_clinic']))
					<br/>Previous Clinic:
					{!! nl2br($model->data['previous_clinic']) !!}
				@endif

                @if (!empty($model->data['pet_detail']))
                    <br/>Pet Details:
                    {!! nl2br($model->data['pet_detail']) !!}
                @endif

				@if (!empty($model->message))
                    <br/>Message/Additional Comments:<br />
                    {!! nl2br($model->message) !!}
                @endif

				<br/>

			</p>
		</td>
	</tr>
    <!-- END -- GENERAL INFO -- TEXT CONTENT -->
@include('mails.partials._footer')
