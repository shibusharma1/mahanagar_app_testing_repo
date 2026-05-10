@component('mail::message')

{{-- Logo --}}
<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ asset('images/scholarship-logo.png') }}" alt="Scholarship Logo" style="max-height: 100px;">
</div>

# नमस्कार {{ $user->name }}ज्यू,

तपाईंको छात्रवृत्ति आवेदन **स्वीकृत** भएको छ।

अब तपाईंले आफ्नो **प्रवेशपत्र (Admit Card)** डाउनलोड गर्न सक्नुहुन्छ र **छात्रवृत्ति परीक्षा २०८२** मा सहभागी हुन सक्नुहुनेछ।

{{-- @component('mail::button', ['url' => route('applicants.show-admitcard')])
प्रवेशपत्र डाउनलोड गर्नुहोस्
@endcomponent --}}

---

## परीक्षा सम्बन्धी अनिवार्य सर्तहरू:

<div style="background: #f8f9fa; padding: 15px; border-radius: 6px;">
<ul style="padding-left: 1.2rem;">
<li><strong>१.</strong> परीक्षा दिन आउँदा अनिवार्य रूपमा प्रवेशपत्र ल्याउनु पर्नेछ। प्रवेशपत्र विना परीक्षामा बस्न पाइने छैन।</li>
<li><strong>२.</strong> परीक्षा सुरू हुनुभन्दा ३० मिनेट अगाडि प्रवेश गर्नुपर्नेछ। परीक्षा सुरू भइसकेपछि २० मिनेट ढिलो हुने परीक्षार्थीलाई अनुमति दिइने छैन।</li>
<li><strong>३.</strong> परीक्षा सुरू भएको ३० मिनेटभित्र परीक्षा हलबाट बाहिर जान पाइने छैन।</li>
<li><strong>४.</strong> परीक्षा हलमा किताब, कापी, चिट, मोबाइल फोन आदि ल्याउन पाइने छैन।</li>
<li><strong>५.</strong> उत्तरपुस्तिकामा आफूलाई चिनाउने संकेत गरेमा परीक्षा रद्द गरिनेछ।</li>
<li><strong>६.</strong> अनुचित कार्य वा छलफल गरेमा परीक्षा भवनबाट निष्कासन गरिनेछ।</li>
<li><strong>७.</strong> परीक्षा दिइसकेपछि अनिवार्य रूपमा हस्ताक्षर (हाजिरी) गर्नु पर्नेछ।</li>
<li><strong>८.</strong> नक्कल गर्ने वा गराउने दुबै परीक्षार्थीको परीक्षा रद्द गरिनेछ।</li>
</ul>
</div>

---

✉ **ध्यान दिनुहोस्**:  
यदि तपाईंलाई कुनै प्रश्न वा समस्या भएमा, कृपया समर्थन टोलीसँग सम्पर्क गर्नुहोस्।

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
