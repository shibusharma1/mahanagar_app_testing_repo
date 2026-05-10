<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: "Times New Roman", serif;
            color: #000000;
            line-height: 1.4;
            font-size: 9.5pt;
            margin: 0;
            padding: 0;
        }

        .printable-form-container {
            /* background-color: #ffffff;
            padding: 7mm 7mm;
            border: 1px solid #000000;
            width: 210mm;
            min-height: 297mm;
            box-sizing: border-box;
            margin: 2mm auto; */

            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            background: white;
            border: 1px solid #ccc;
            margin: auto;
            box-sizing: border-box;
        }

        .printable-photo-box {
            width: 85px;
            height: 105px;
            border: 1px solid #000000;
            text-align: center;
            font-size: 9pt;
            padding: 2px;
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
            padding: 2px;
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
            margin-top: 2px;
        }

        .printable-city-name {
            font-size: 12pt;
            font-weight: bold;
        }

        .printable-form-title {
            font-size: 13pt;
            font-weight: bold;
            margin-top: 0;
        }

        .printable-intro-text-top,
        .printable-intro-text-body {
            font-size: 9.5pt;
            margin-bottom: 4px;
        }

        .printable-section-title-line,
        .printable-section-title {
            font-size: 10pt;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .printable-section-group,
        .printable-section-group-inline {
            display: flex;
            align-items: baseline;
            gap: 6px;
            margin-bottom: 2px;
        }

        .printable-field-value,
        .printable-field-value-split {
            border-bottom: 1px dotted #000000;
            padding-bottom: 1px;
            font-size: 9.5pt;
            padding-left: 2px;
            min-height: 1.1em;
            box-sizing: border-box;
            flex-grow: 1;
        }

        .printable-field-value-split {
            display: inline-block;
            padding-left: 15px;
        }

        .printable-section-group-inline-label-value {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 2px;
        }

        .printable-section-group-inline-label-value p {
            font-weight: bold;
            flex: 1;
            min-width: 120px;
            margin-bottom: 0;
            font-size: 9.5pt;
        }

        .printable-section-group-inline-label-value span {
            border-bottom: 1px dashed #000000;
            font-weight: normal;
        }

        .printable-address-group h4 {
            font-size: 9.5pt;
            margin-top: 0;
            padding-left: 10px;
            padding-bottom: 2px;
        }

        .printable-address-groups {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding-left: 20px;
        }

        .printable-address-groups .printable-field-value-tight {
            display: flex;
            align-items: baseline;
            gap: 3px;
            margin-bottom: 0px;
        }

        .printable-address-groups .printable-field-value-tight .printable-field-value {
            border-bottom: 1px dotted #000000;
            min-width: 60px;
        }

        .printable-disclaimer-text {
            font-size: 9.5pt;
            margin-top: 10px;
            padding-top: 5px;
            border-top: 1px dashed #000000;
            text-align: justify;
            line-height: 1.2;
        }

        .printable-applicant-info-bottom {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            padding-top: 8px;
            font-size: 9.5pt;
        }

        .printable-applicant-info-bottom>div {
            width: 180px;
        }

        .printable-applicant-info-bottom .printable-field-value-half,
        .printable-applicant-info-bottom .printable-field-value-full {
            border-bottom: 1px dotted #000000;
            padding-bottom: 1px;
            min-height: 1.1em;
            padding-left: 2px;
            box-sizing: border-box;
            width: 100%;
        }

        .signature-placeholder {
            font-style: italic;
            color: #555;
            font-size: 0.9em;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                font-size: 9.5pt;
            }

            .printable-form-container {
                border: none !important;
                box-shadow: none !important;
                margin: 0;
                padding: 7mm !important;
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

            ::-webkit-scrollbar {
                width: 0 !important;
                height: 0 !important;
            }
        }
    </style>

</head>

<body>
    <div class="printable-form-container">
        <div class="d-flex justify-content-between align-items-start mb-2">
            <div class="text-center flex-grow-1 me-3">
                <p class="printable-city-name mb-1">विराटनगर महानगरपालिका</p>
                <p class="printable-form-title mb-1">छात्रवृत्तिको लागि दरखास्त फारम</p>
            </div>
            <div class="d-flex flex-column align-items-end">
                <div class="printable-photo-box">
                    <img src="https://placehold.co/90x110/f0f0f0/666666?text=Photo" alt="Passport Photo"
                        class="uploaded-image">
                </div>
            </div>
        </div>

        <p class="printable-intro-text-top">
            श्रीमान् नगर प्रमुखज्यू,<br>विराटनगर महानगरपालिका ।
        </p>
        <p class="printable-intro-text-body">
            विराटनगर महानगरपालिका शिक्षा ऐन, २०७६ को दफा ४४ को उपदफा (२), (३) र (४) मा भएको व्यवस्था, अनिवार्य तथा
            निःशुल्क शिक्षा
            ऐन, २०७५, शिक्षा ऐन २०२८ (संशोधन सहित) तथा अन्य प्रचलित कानूनमा भएको व्यवस्था बमोजिमको कक्षा ११ र १२ मा
            निजी/संस्थागत विद्यालयबाट विद्यार्थीहरूको लागि प्रदान गरिने छात्रवृत्ति कार्यक्रममा म सम्मिलित हुन ईच्छुक
            भएकोले छात्रवृत्तिको लागि
            फारम भरी आवश्यक प्रमाण तथा कागजातहरू यसैसाथ संलग्न गरी पेश गरेको छु।
        </p>

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

        <div class="mb-1">
            <h3 class="printable-section-title-line">४. छात्रवृत्तिको लागि आवेदन दिन चाहेको समूह (कुनै एकमा मात्र चिन्ह
                लगाउने):</h3>
            <div class="d-flex flex-wrap column-gap-3 ms-3 mb-1" style="font-size: 10pt;">
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

        <div class="d-flex mb-1">
            <h3 class="printable-section-title-line me-2">५. जन्म मिति:</h3>
            <p class="printable-field-value-split me-4">वि.सं. २०६०/०५/१६</p>
            <p class="printable-field-value-split">ई. सं. 2003/08/30</p>
        </div>

        <div class="mb-1">
            <h3 class="printable-section-title-line">६. लिङ्गः</h3>
            <div class="d-flex flex-wrap gap-3">
                <label class="d-flex align-items-center me-3 gap-1">
                    <input type="checkbox" checked disabled>
                    <span>पुरुष</span>
                </label>
                <label class="d-flex align-items-center me-3 gap-1">
                    <input type="checkbox" disabled>
                    <span>महिला</span>
                </label>
                <label class="d-flex align-items-center me-3 gap-1">
                    <input type="checkbox" disabled>
                    <span>अन्य</span>
                </label>
            </div>
        </div>

        <h3 class="printable-section-title mb-2">७. ठेगानाः</h3>
        <div class="printable-address-group mb-2">
            <h4 class="printable-section-title-line">क) स्थायी:</h4>
            <div class="printable-address-groups">
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">क) प्रदेशः</h3>
                    <p class="printable-field-value">कोशी</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">ख) जिल्लाः</h3>
                    <p class="printable-field-value">विराटनगर</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">ग) स्थानीय तहः</h3>
                    <p class="printable-field-value">महानगरपालिका</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">घ) टोल:</h3>
                    <p class="printable-field-value">विराटचोक</p>
                </div>
            </div>
        </div>

        <div class="printable-address-group mb-2">
            <h4 class="printable-section-title-line">ख) अस्थायी :</h4>
            <div class="printable-address-groups">
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">क) प्रदेशः</h3>
                    <p class="printable-field-value">सोही</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">ख) जिल्लाः</h3>
                    <p class="printable-field-value">सोही</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">ग) स्थानीय तहः</h3>
                    <p class="printable-field-value">सोही</p>
                </div>
                <div class="printable-field-value-tight">
                    <h3 class="printable-section-title-line">घ) टोल:</h3>
                    <p class="printable-field-value">सोही</p>
                </div>
            </div>
        </div>

        <div class="printable-section-group-inline-label-value">
            <p class="printable-field-value-inline-label">८. बुवाको नाम, थर: <span>अर्जुन बहादुर थापा</span></p>
            <p class="printable-field-value-inline-label">पेशाः <span>कृषि</span></p>
        </div>
        <div class="printable-section-group-inline-label-value">
            <p class="printable-field-value-inline-label">९. आमाको नाम, थर : <span>लक्ष्मी कुमारी थापा</span></p>
            <p class="printable-field-value-inline-label">पेशाः <span>गृहणी</span></p>
        </div>
        <div class="printable-section-group-inline-label-value">
            <p class="printable-field-value-inline-label">१०. बाजेको नाम, थरः <span>दिल बहादुर थापा</span></p>
            <p class="printable-field-value-inline-label">पेशाः <span>सेवा निवृत्त</span></p>
        </div>

        <div class="d-flex justify-content-between gap-3 mb-1">
            <div class="printable-section-group w-50">
                <h3 class="printable-section-title-line">११. पारिवारिक आम्दानीको श्रोत:</h3>
                <p class="printable-field-value">कृषि</p>
            </div>
            <div class="printable-section-group w-50">
                <h3 class="printable-section-title-line">१२. आम्दानीको अनुमानित विवरण रकममा :</h3>
                <p class="printable-field-value">२५०,०००</p>
            </div>
        </div>

        <div class="d-flex gap-4 mb-1">
            <div class="printable-section-group" style="gap: 2px;">
                <h3 class="printable-section-title-line">१३. विद्यार्थीको सम्पर्क नम्बरः</h3>
                <p class="printable-field-value">9841234567</p>
            </div>
            <div class="printable-section-group" style="gap: 2px;">
                <h3 class="printable-section-title-line">१४. SEE उत्तीर्ण गरेको विद्यालयको प्रकार (सामुदायिक/संस्थागत):
                </h3>
                <p class="printable-field-value">सामुदायिक</p>
            </div>
        </div>

        <div class="printable-section-group mb-1">
            <h3 class="printable-section-title-line">१५. कक्षा ११ मा अध्ययन गर्न चाहेको विषय समूहः</h3>
            <p class="printable-field-value">विज्ञान</p>
        </div>

        <div class="d-flex gap-5 mb-1">
            <div class="printable-section-group w-50">
                <h3 class="printable-section-title-line">१६.SEE को सिम्बल नम्बरः</h3>
                <p class="printable-field-value">12345678A</p>
            </div>
            <div class="printable-section-group w-50">
                <h3 class="printable-section-title-line">१७.SEE मा प्राप्त गरेको जि.पी.ए.:</h3>
                <p class="printable-field-value">3.85</p>
            </div>
        </div>

        <div class="printable-section-group mb-1">
            <h3 class="printable-section-title-line">१८. SEE उत्तीर्ण गरेको विद्यालयको नाम ठेगाना:</h3>
            <p class="printable-field-value">जनता माध्यमिक विद्यालय, विराटनगर-३, मोरङ</p>
        </div>

        <div class="printable-disclaimer-text">
            <p>उल्लेखित व्यहोरा ठिक साँचो छन्, फरक परे कानून बमोजिम सहुँला, बुझाउँला।</p>
        </div>

        <div class="printable-applicant-info-bottom">
            <div>
                <h3 class="printable-section-title mb-1">निवेदक</h3>
                <p class="printable-field-value-half">नाम : रमेश बहादुर थापा</p>
                <p class="printable-field-value-half">सही: <span class="signature-placeholder">Not Attached</span></p>
                <p class="printable-field-value-full">मिति : २०८०/०५/१६</p>
            </div>
        </div>
    </div>

    <div class="text-center no-print">
        <button class="btn btn-primary" onclick="window.print()">Print Application Form</button>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>