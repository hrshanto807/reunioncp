<h2>নতুন বার্তা এসেছে Contact Form থেকে</h2>

<p><strong>নাম:</strong> {{ $contact_name }}</p>
<p><strong>ইমেইল:</strong> {{ $contact_email }}</p>
<p><strong>মোবাইল:</strong> {{ $contact_phone ?? 'নাই' }}</p>
<p><strong>বার্তা:</strong></p>
<p>{{ $contact_message }}</p>
