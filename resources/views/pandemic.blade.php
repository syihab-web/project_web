@extends('layouts.app')
<link rel="stylesheet" href="{!! asset('assets/css/pandemic.css')!!}">
<link rel="stylesheet" href="{!! asset('assets/css/fullpage.min.css')!!}">
<link rel="stylesheet" href="{{URL('assets/css/bootstrap.min.css')}}"  crossorigin="anonymous">
@section('content')
    <div id="box1">
        <h1>PANDEMIC</h1>
        <h2>The History</h2>
    </div>
    <div id="box2">
        <div>
            <img src="{!! asset('img/plague1.jpg') !!}" alt="">
        </div>
        <div>
            <h2>The Black Death</h2>
        </div>
        <div>
            <p>The Black Death was a devastating global epidemic of bubonic plague that struck Europe and Asia in the mid-1300s. The plague arrived in Europe in October 1347, when 12 ships from the Black Sea docked at the Sicilian port of Messina. People gathered on the docks were met with a horrifying surprise: Most sailors aboard the ships were dead, and those still alive were gravely ill and covered in black boils that oozed blood and pus. Sicilian authorities hastily ordered the fleet of “death ships” out of the harbor, but it was too late: Over the next five years, the Black Death would kill more than 20 million people in Europe—almost one-third of the continent’s population..
            </p>
        </div>
        <br><br>
        <div>
            <p>Even before the “death ships” pulled into port at Messina, many Europeans had heard rumors about a “Great Pestilence” that was carving a deadly path across the trade routes of the Near and Far East. Indeed, in the early 1340s, the disease had struck China, India, Persia, Syria and Egypt. The plague is thought to have originated in Asia over 2,000 years ago and was likely spread by trading ships, though recent research has indicated the pathogen responsible for the Black Death may have existed in Europe as early as 3000 B.C.
            </p>
        </div>
    </div>
    <div id="box3">
        <div class="rellax d1">
            <img src="{!! asset('img/parralax2.png')!!}" width="70%" alt="">
        </div>
    </div>
    <div id="box4">
        <center>
        <video src="{!! asset('video/Plague 101.mp4')!!}" controls></video>
    </center>
    <div>
        <h2>Symptoms of the Black Plague</h2>
    </div>
    <div>
        <p>Europeans were scarcely equipped for the horrible reality of the Black Death. “In men and women alike,” the Italian poet Giovanni Boccaccio wrote, “at the beginning of the malady, certain swellings, either on the groin or under the armpits…waxed to the bigness of a common apple, others to the size of an egg, some more and some less, and these the vulgar named plague-boils.”

            Blood and pus seeped out of these strange swellings, which were followed by a host of other unpleasant symptoms—fever, chills, vomiting, diarrhea, terrible aches and pains—and then, in short order, death.
            
            The Bubonic Plague attacks the lymphatic system, causing swelling in the lymph nodes. If untreated, the infection can spread to the blood or lungs.</p>
    </div>
    <br><br><br>
    <div>
        <h2>How Did The Black Death Spread?</h2>
    </div>
    <div>
        <p>The Black Death was terrifyingly, indiscriminately contagious: “the mere touching of the clothes,” wrote Boccaccio, “appeared to itself to communicate the malady to the toucher.” The disease was also terrifyingly efficient. People who were perfectly healthy when they went to bed at night could be dead by morning.</p>
    </div>
    <br><br><br>
    <div>
        <h2>Understanding the Black Death</h2>
    </div>
    <div>
        <p>Today, scientists understand that the Black Death, now known as the plague, is spread by a bacillus called Yersina pestis. (The French biologist Alexandre Yersin discovered this germ at the end of the 19th century.)

            They know that the bacillus travels from person to person through the air, as well as through the bite of infected fleas and rats. Both of these pests could be found almost everywhere in medieval Europe, but they were particularly at home aboard ships of all kinds—which is how the deadly plague made its way through one European port city after another.</p>
            <p class="last-p">Not long after it struck Messina, the Black Death spread to the port of Marseilles in France and the port of Tunis in North Africa. Then it reached Rome and Florence, two cities at the center of an elaborate web of trade routes. By the middle of 1348, the Black Death had struck Paris, Bordeaux, Lyon and London.

                Today, this grim sequence of events is terrifying but comprehensible. In the middle of the 14th century, however, there seemed to be no rational explanation for it.
                
                No one knew exactly how the Black Death was transmitted from one patient to another, and no one knew how to prevent or treat it. According to one doctor, for example, “instantaneous death occurs when the aerial spirit escaping from the eyes of the sick man strikes the healthy person standing near and looking at the sick.”</p>
        </div>
    </div>

    <!-- The Covid !-->

    <div id="box6">
      
    </div>


    <div id="box5">
        <div>
            <img src="{!! asset('img/pandemic.jpg') !!}" alt="">
        </div>
        <div>
            <h2>The Corona Virus</h2>
        </div>
        <div>
            <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
            </p>
        </div>
        <br>
        <div>
            <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. COVID-19 is now a pandemic affecting many countries globally.</p>
        </div>
        <br><br>
    </div>

    <div id="box7">
        <div>
            <h2>What are the Symptoms of Covid-19 ?</h2>
        </div>
        <div>
            <p>The most common symptoms of COVID-19 are fever, dry cough, and tiredness. Other symptoms that are less common and may affect some patients include aches and pains, nasal congestion, headache, conjunctivitis, sore throat, diarrhea, loss of taste or smell or a rash on skin or discoloration of fingers or toes. These symptoms are usually mild and begin gradually. Some people become infected but only have very mild symptoms.</p>
            <br>
            <p>Most people (about 80%) recover from the disease without needing hospital treatment. Around 1 out of every 5 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart and lung problems, diabetes, or cancer, are at higher risk of developing serious illness.  However, anyone can catch COVID-19 and become seriously ill.  People of all ages who experience fever and/or  cough associated withdifficulty breathing/shortness of breath, chest pain/pressure, or loss of speech or movement should seek medical attention immediately. If possible, it is recommended to call the health care provider or facility first, so the patient can be directed to the right clinic.
            </p>
        </div>
        <br><br>

    </div>
    
    <script src="{!! asset('assets/js/rellax.js') !!}"></script>
    <script src="">
        var rellax = new Rellax('.rellax', {
            // center: true
            callback: function(position) {
                // callback every position change
                console.log(position);
    </script>

@endsection