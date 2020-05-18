@extends('layouts.app')
<link rel="stylesheet" href="{!! asset('assets/css/avoid.css')!!}">
@section('content')
<div id="box1">
    <h1>Avoid From the Virus</h1>
</div>
<div class="lastest_project">
    <div class="container">
        
        <br><br>
        <div class="row align-items-center mb-80">
            <div class="col-xl-6 col-md-6">
                <div class="image">
                    <img src="{!! asset('img/blue-1.png') !!}" alt="">
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="section_title">
                    
                    <h4>Wash your Hand</h4>
                    <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</p>
                   
                </div>
            </div>
        </div>
        <br><br>
        <div class="row align-items-center mb-80">
            <div class="col-xl-6 col-md-6">
                <div class="section_title">
                    <h4>When to Wash your Hands</h4>
                    <p>Washing hands does not have to be frequent, but must know when we should wash hands</p>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="image">
                    <img src="{!! asset('img/blue-2.png') !!}" alt="">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row align-items-center mb-80">
            <div class="col-xl-6 col-md-6">
                <div class="image">
                    <img src="{!! asset('img/blue-3.png') !!}" alt="">
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="section_title">
                    <h4>Protect other from getting sick</h4>
                    <p>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands</p>
                    <p>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover. Have someone bring you supplies. If you need to leave your house, wear a mask to avoid infecting others.</p>
                
                </div>
            </div>
        </div>
        <br><br>
        <div class="row align-items-center mb-80">
            <div class="col-xl-6 col-md-6">
                <div class="section_title">

                    <h4>Protect Other from Getting Sick</h4>
                    <p>If you have a fever, cough and difficulty breathing, seek medical attention, but call by telephone in advance if possible and follow the directions of your local health authority. Why? National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.</p>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="image">
                    <img src="{!! asset('img/blue-4.png') !!}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
    
@endsection