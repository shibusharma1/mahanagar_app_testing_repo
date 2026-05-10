<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card - Scholarship Exam 2082</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: "Times New Roman", serif;
            color: #000000;
            line-height: 1.2;
            font-size: 10pt;
        }
        .printable-form-container {
            background-color: #ffffff;
            padding: 15mm 15mm;
            border: 1px solid #000000;
            width: 210mm;
            min-height: 297mm;
            box-sizing: border-box;
            margin: 10mm auto;
        }
        .printable-photo-box {
            width: 85px;
            height: 105px;
            border: 1px solid #000000;
            text-align: center;
            font-size: 9pt;
            padding: 3px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
        }
        .printable-applicant-signature-box {
            width: 110px;
            height: 35px;
            border: 1px solid #000000;
            text-align: center;
            font-size: 9pt;
            padding: 3px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
        }
        .uploaded-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            margin-top: 3px;
        }
        .printable-city-name {
            font-size: 13pt;
            font-weight: bold;
            margin-bottom: 3px;
        }
        .printable-form-title {
            font-size: 15pt;
            font-weight: bold;
            margin-top: 0;
        }
        .printable-section-title-line {
            font-size: 9pt;
            font-weight: bold;
        }
        .printable-field-value {
            border-bottom: 1px dotted #000000; /* Adjusted from solid to dotted for a "fill-in" look */
            padding-bottom: 1px;
            font-size: 9pt;
            padding-left: 3px;
            min-height: 1.2em;
            box-sizing: border-box;
            flex-grow: 1; /* Allows it to take remaining space */
        }
        .printable-field-value-split {
            display: inline-block;
            border-bottom: 1px dotted #000000; /* Adjusted from solid to dotted */
            padding-bottom: 1px;
            font-size: 9.5pt;
            padding-left: 5px; /* Reduced padding for better fit */
            min-height: 1.2em;
            box-sizing: border-box;
            flex-grow: 1;
        }
        .printable-section-group {
            display: flex;
            align-items: baseline; /* Align items at their text baseline */
            gap: 5px; /* Reduced gap */
            margin-bottom: 5px; /* Added margin for spacing */
        }
        .printable-checkbox-group label {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .printable-disclaimer-text {
            font-size: 9.5pt;
            text-align: justify;
            line-height: 1.3;
            margin-top: 5px;
        }
        .printable-required-docs {
            margin-top: 10px;
        }
        .printable-required-docs .printable-section-title {
            font-size: 9.5pt;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .printable-document-list {
            list-style: none;
            padding-left: 0;
            margin: 0;
            font-size: 8pt;
            line-height: 1.2;
        }
        .printable-document-list li {
            margin-bottom: 3px;
        }

        /* Print specific styles */
        @media print {
            body {
                margin: 0;
                padding: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                font-size: 10pt;
            }
            .printable-form-container {
                border: none !important;
                box-shadow: none !important;
                margin: 0;
                padding: 0mm !important;
                width: 210mm;
                min-height: 297mm;
                box-sizing: border-box;
                overflow: hidden;
            }
            .no-print {
                display: none !important;
            }
            * {
                color: #000 !important;
                background-color: #fff !important;
            }
        }
    </style>
</head>
<body>
    <div class="printable-form-container">
        <div class="first-part mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="text-center flex-grow-1 me-3">
                    <p class="printable-city-name mb-1">विराटनगर महानगरपालिका</p>
                    <p class="printable-form-title mb-1">कक्षा ११-१२ को छात्रवृत्ति छनौट परीक्षा-२०८२</p>
                    <p style="text-decoration: underline;">प्रवेश पत्र</p>
                </div>
                <div class="d-flex flex-column align-items-end">
                    <div class="printable-photo-box">
                        <img src="https://placehold.co/90x110/f0f0f0/666666?text=Photo" alt="Passport Photo" class="uploaded-image">
                    </div>
                </div>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">१. विद्यार्थीको पूरा नाम, थर (देवनागरीमा):</h3>
                <p class="printable-field-value ms-2">रमेश बहादुर थापा</p>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">२. NAME IN ENGLISH (IN BLOCK LETTER):</h3>
                <p class="printable-field-value ms-2">RAMESH BAHADUR THAPA</p>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">३. अध्ययन गर्न चाहेको विद्यालयको नामः</h3>
                <p class="printable-field-value ms-2">काठमाण्डौ माध्यमिक विद्यालय</p>
            </div>

            <div class="mb-2">
                <h3 class="printable-section-title-line">४. छात्रवृत्तिको लागि आवेदन दिन चाहेको समूह:</h3>
                <div class="d-flex justify-content-end align-items-end w-100">
                    <div class="d-flex flex-wrap column-gap-3 ms-3" style="width: 80%; font-size: 9pt;">
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" checked disabled>
                            <span>जेहेन्दार</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>विपन्नता</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>जनजाति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>दलित</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>अपाङ्ग</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>जन आन्दोलनमा घाईते</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>शहिद परिवारको सन्तति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>मधेश आन्दोलनका घाईतेका सन्तति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>वेपता परिवारको सन्तति</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-flex mb-2">
                <h3 class="printable-section-title-line me-2">५. जन्म मिति:</h3>
                <p class="printable-field-value-split me-4">वि.सं. २०६०/०५/१६</p>
                <p class="printable-field-value-split">ई. सं. 2003/08/30</p>
            </div>

            <div class="mb-2">
                <h3 class="printable-section-title-line">६. लिङ्गः</h3>
                <div class="d-flex flex-wrap gap-3">
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" checked disabled>
                        <span>पुरुष</span>
                    </label>
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" disabled>
                        <span>महिला</span>
                    </label>
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" disabled>
                        <span>अन्य</span>
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-between gap-3 mb-2">
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">७. विद्यार्थीको सम्पर्क नम्बरः</h3>
                    <p class="printable-field-value ms-2">9841234567</p>
                </div>
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">८. SEE उत्तीर्ण गरेको विद्यालयको प्रकार (सामुदायिक/संस्थागत):</h3>
                    <p class="printable-field-value ms-2">सामुदायिक</p>
                </div>
            </div>

            <div class="d-flex justify-content-between gap-3 mb-2">
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">९. कक्षा ११ मा अध्ययन गर्न चाहेको विषय समूहः</h3>
                    <p class="printable-field-value ms-2">विज्ञान</p>
                </div>
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">१०. SEE को सिम्बल नम्बरः</h3>
                    <p class="printable-field-value ms-2">12345678A</p>
                </div>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">११. SEE उत्तीर्ण गरेको विद्यालयको नाम ठेगाना:</h3>
                <p class="printable-field-value ms-2">जनता माध्यमिक विद्यालय, विराटनगर-३, मोरङ</p>
            </div>
            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">१२. SEE मा प्राप्त गरेको जि.पी.ए.:</h3>
                <p class="printable-field-value ms-2">3.85</p>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">परीक्षार्थीको दस्तखतः</h3>
                <p class="printable-field-value ms-2"></p>
            </div>
            <div class="printable-disclaimer-text mb-3">
                <p>तोकिएका सर्त नपुगेको ठहर भएमा जुनसुकै समयमा यो प्रवेशपत्र रद्द हुनेछ।</p>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">कार्यालयबाट भर्नेः</h3>
                <p class="printable-field-value ms-2"></p>
            </div>
            <div class="printable-disclaimer-text mb-3">
                <p>यस महानगरपालिकाबाट मिति २०८०।०५।१६ गते लिइने कक्षा ११-१२ को छात्रवृत्ति परीक्षामा निम्न परीक्षा केन्द्रबाट सम्मिलित हुन अनुमति दिइएको छ।</p>
            </div>

            <div class="d-flex justify-content-between gap-3">
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">परीक्षा केन्द्रः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">रोल नम्बरः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">अधिकृतको हस्ताक्षरः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
            </div>
        </div>

        <div style="border-bottom: 1px dashed #000000; margin-top: 20px; margin-bottom: 20px;"></div>

        <div class="second-part">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="text-center flex-grow-1 me-3">
                    <p class="printable-city-name mb-1">विराटनगर महानगरपालिका</p>
                    <p class="printable-form-title mb-1">कक्षा ११-१२ को छात्रवृत्ति छनौट परीक्षा-२०८२</p>
                    <p style="text-decoration: underline;">प्रवेश पत्र</p>
                </div>
                <div class="d-flex flex-column align-items-end">
                    <div class="printable-photo-box">
                        <img src="https://placehold.co/90x110/f0f0f0/666666?text=Photo" alt="Passport Photo" class="uploaded-image">
                    </div>
                </div>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">१. विद्यार्थीको पूरा नाम, थर (देवनागरीमा):</h3>
                <p class="printable-field-value ms-2">रमेश बहादुर थापा</p>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">२. NAME IN ENGLISH (IN BLOCK LETTER):</h3>
                <p class="printable-field-value ms-2">RAMESH BAHADUR THAPA</p>
            </div>

            <div class="printable-section-group">
                <h3 class="printable-section-title-line">३. अध्ययन गर्न चाहेको विद्यालयको नामः</h3>
                <p class="printable-field-value ms-2">काठमाण्डौ माध्यमिक विद्यालय</p>
            </div>

            <div class="mb-2">
                <h3 class="printable-section-title-line">४. छात्रवृत्तिको लागि आवेदन दिन चाहेको समूह:</h3>
                <div class="d-flex justify-content-end align-items-end w-100">
                    <div class="d-flex flex-wrap column-gap-3 ms-3" style="width: 80%; font-size: 9pt;">
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" checked disabled>
                            <span>जेहेन्दार</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>विपन्नता</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>जनजाति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>दलित</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>अपाङ्ग</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>जन आन्दोलनमा घाईते</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>शहिद परिवारको सन्तति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>मधेश आन्दोलनका घाईतेका सन्तति</span>
                        </label>
                        <label class="d-flex align-items-center me-3 gap-1">
                            <input type="checkbox" disabled>
                            <span>वेपता परिवारको सन्तति</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-flex mb-2">
                <h3 class="printable-section-title-line me-2">५. जन्म मिति:</h3>
                <p class="printable-field-value-split me-4">वि.सं. २०६०/०५/१६</p>
                <p class="printable-field-value-split">ई. सं. 2003/08/30</p>
            </div>

            <div class="mb-2">
                <h3 class="printable-section-title-line">६. लिङ्गः</h3>
                <div class="d-flex flex-wrap gap-3">
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" checked disabled>
                        <span>पुरुष</span>
                    </label>
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" disabled>
                        <span>महिला</span>
                    </label>
                    <label class="d-flex align-items-center me-3 gap-1" style="font-size: 9pt;">
                        <input type="checkbox" disabled>
                        <span>अन्य</span>
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-between gap-3 mb-2">
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">७. विद्यार्थीको सम्पर्क नम्बरः</h3>
                    <p class="printable-field-value ms-2">9841234567</p>
                </div>
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">८. SEE उत्तीर्ण गरेको विद्यालयको प्रकार (सामुदायिक/संस्थागत):</h3>
                    <p class="printable-field-value ms-2">सामुदायिक</p>
                </div>
            </div>

            <div class="d-flex justify-content-between gap-3 mb-2">
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">९. कक्षा ११ मा अध्ययन गर्न चाहेको विषय समूहः</h3>
                    <p class="printable-field-value ms-2">विज्ञान</p>
                </div>
                <div class="printable-section-group w-50">
                    <h3 class="printable-section-title-line">१०. SEE को सिम्बल नम्बरः</h3>
                    <p class="printable-field-value ms-2">12345678A</p>
                </div>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">११. SEE उत्तीर्ण गरेको विद्यालयको नाम ठेगाना:</h3>
                <p class="printable-field-value ms-2">जनता माध्यमिक विद्यालय, विराटनगर-३, मोरङ</p>
            </div>
            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">१२. SEE मा प्राप्त गरेको जि.पी.ए.:</h3>
                <p class="printable-field-value ms-2">3.85</p>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">परीक्षार्थीको दस्तखतः</h3>
                <p class="printable-field-value ms-2"></p>
            </div>
            <div class="printable-disclaimer-text mb-3">
                <p>तोकिएका सर्त नपुगेको ठहर भएमा जुनसुकै समयमा यो प्रवेशपत्र रद्द हुनेछ।</p>
            </div>

            <div class="printable-section-group mb-2">
                <h3 class="printable-section-title-line">कार्यालयबाट भर्नेः</h3>
                <p class="printable-field-value ms-2"></p>
            </div>
            <div class="printable-disclaimer-text mb-3">
                <p>यस महानगरपालिकाबाट मिति २०८०।०५।१६ गते लिइने कक्षा ११-१२ को छात्रवृत्ति परीक्षामा निम्न परीक्षा केन्द्रबाट सम्मिलित हुन अनुमति दिइएको छ।</p>
            </div>

            <div class="d-flex justify-content-between gap-3">
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">परीक्षा केन्द्रः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">रोल नम्बरः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
                <div class="printable-section-group w-33">
                    <h3 class="printable-section-title-line">अधिकृतको हस्ताक्षरः</h3>
                    <p class="printable-field-value ms-2"></p>
                </div>
            </div>

            <div class="printable-required-docs mt-4">
                <h3 class="printable-section-title">उम्मेद्वारले पालना गर्नुपर्ने सर्तहरूः</h3>
                <ul class="printable-document-list">
                    <li>१. परीक्षा दिन आउँदा अनिवार्य रुपमा प्रवेशपत्र ल्याउनु पर्नेछ, प्रवेशपत्र विना परीक्षामा पस्न पाइने छैन।</li>
                    <li>२. परीक्षा सुरू हुनुभन्दा ३० मिनेट अगाडी जनाउ घण्टी बजेपछी परीक्षा भवनमा प्रवेश गर्नुपर्नेछ। परीक्षा सुरु भएको २० मिनेट बितेपछी आउने परीक्षार्थी परीक्षामा बस्न पाउने छैन।</li>
                    <li>३. परीक्षा सुरू भएको ३० मिनेट व्यतित नभएसम्म परीक्षा भवनबाट बाहिर जान पाइने छैन।</li>
                    <li>४. परीक्षा हलमा किताब, कापी, कागज, चिट, मोबाइल आदि परीक्षा हलमा ल्याउन पाइने छैन।</li>
                    <li>५. परीक्षार्थीले उत्तरपुस्तिकामा आफूलाई चिनाउने कुनै पनि संकेत गरेमा निजको परीक्षा रद्द गरिने छ।</li>
                    <li>६. परीक्षा भवनमा अनुचित कार्य गर्न पाइने छैन। त्यस्तो गरिएको पाइएमा परीक्षा भवनबाट निश्कासन गरिनेछ।</li>
                    <li>७. आफूले परीक्षा दिएको दिनमा अनिवार्य रुपमा हाजिरी गर्नु पर्नेछ। हाजिरी हुन छुट भएमा उत्तरपुस्तिका परीक्षण गरिने छैन।</li>
                    <li>८. एउटा उम्मेद्वारले अर्को उम्मेद्वारको उत्तरपुस्तिकाबाट नक्कल गरेको पाइएमा नक्कल गर्ने र नक्कल गर्न दिने दुबै परीक्षार्थी परीक्षा हलबाट निस्कासन गरिने छ।</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-3 no-print">
        <button class="btn btn-primary" onclick="window.print()">Print Admit Card</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>