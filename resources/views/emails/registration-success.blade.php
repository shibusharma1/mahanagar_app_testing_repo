@component('mail::message')

{{-- Logo --}}
<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ asset('Biratnagar_logo.png') }}" alt="Scholarship Logo" style="max-height: 100px;">
</div>

# नमस्कार {{ $user->name }}ज्यू,

तपाईंको **छात्रवृत्ति आवेदन प्रणालीमा दर्ता सफलतापूर्वक प्रमाणित** गरिएको छ।  
अब तपाईं आफ्नो ड्यासबोर्डमा गएर आवेदन प्रक्रिया अगाडि बढाउन सक्नुहुन्छ।

@component('mail::button', ['url' => route('user.dashboard')])
 मेरो ड्यासबोर्ड हेर्नुहोस्
@endcomponent

---

**सुरक्षाको लागि:**  
कृपया आफ्नो प्रयोगकर्ता विवरणहरू कसैसँग पनि साझा नगर्नुहोस्। यदि कुनै समस्या वा जिज्ञासा भएमा हामीलाई सम्पर्क गर्नुहोस्।

धन्यवाद  
**Scholarship BRT Team**  
{{ config('app.name') }}

{{-- Social Media Links --}}
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
