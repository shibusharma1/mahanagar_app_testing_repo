@component('mail::message')

{{-- Logo --}}
<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ asset('images/scholarship-logo.png') }}" alt="Scholarship Logo" style="max-height: 100px;">
</div>

# नमस्कार {{ $user->name }}ज्यू,

तपाईंको **छात्रवृत्ति आवेदन सफलतापूर्वक पेश गरिएको** छ।  
हाल तपाईंको आवेदन **पुनरावलोकन प्रक्रियामा** रहेको छ।

कृपया केहि समय प्रतीक्षा गर्नुहोस्। एकपटक आवेदन स्वीकृत भएपछि, तपाईं **एडमिट कार्ड डाउनलोड** गर्न सक्नुहुन्छ र छात्रवृत्ति परीक्षामा सहभागी हुन सक्नुहुनेछ।

@component('mail::button', ['url' => route('user.dashboard')])
मेरो आवेदन हेर्नुहोस्
@endcomponent

---

**ध्यान दिनुपर्ने कुराहरू**:

- स्वीकृतिको प्रक्रिया सम्पन्न नभएसम्म एडमिट कार्ड उपलब्ध हुनेछैन।
- जानकारीमा कुनै त्रुटि भएमा तुरुन्तै हामीलाई सम्पर्क गर्नुहोस्।

धन्यवाद  
**Scholarship BRT Team**  
{{ config('app.name') }}

{{-- Social Media --}}
{{-- <hr style="margin-top: 30px;">
<div style="text-align: center;">
    <a href="https://facebook.com/YourPage" style="margin-right: 10px;">
        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" width="32">
    </a>
    <a href="https://twitter.com/YourHandle" style="margin-right: 10px;">
        <img src="{{ asset('images/twitter.png') }}" alt="Twitter" width="32">
    </a>
    <a href="https://instagram.com/YourPage">
        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" width="32">
    </a>
</div> --}}

@endcomponent
