<x-layout>
    <style>
       #masonry figure img {
  max-width: 100%;
  display: block;
}

#masonry figure {
  margin: 0;
  display: grid;
  grid-template-rows: 1fr auto;
  margin-bottom: 10px;
  break-inside: avoid;
}

figure a img {
  grid-row: 1 / -1;
  grid-column: 1;
}

#masonry figure a {
  color: black;
  text-decoration: none;
}

figcaption {
  grid-row: 2;
  grid-column: 1;
  background-color: rgba(255,255,255,.5);
  padding: .2em .5em;
  justify-self: start;
}

#masonry.container {
  column-count: 1;
  column-gap: 10px;
}
        </style>
    <header class="bg-light border-bottom-dashed">
        <div class="bg-portfolio-index vh-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <h1 class="fw-bold">Portfolio</h1>
                <h5 clasas="fs-lead">Seguo le orme degli abiti del passato, <br> 
                  studiando il loro linguaggio e cercando di trascrivere, <br> 
                  il più fedelmente possibile, tutte le storie che hanno da raccontare. 
                </h5>
                <div class="border-custom-big"></div>
              </div>
            </div>
          </div>
      
        </div>
    </header>
    <div class="container-fluid bg-profile-pic min-vh-100 border-bottom-dashed">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 lead">
                    <h1 class="pt-3">Chi sono</h1>
                    <div class="border-custom-big mb-3"></div>
                    <p class="mb-0">Ciao! Piacere di conoscerti!</p>
                    <p class="mb-0">Ho una storia da raccontarti: non preoccuparti, sarò breve perché oggi la vita è frenetica e nessuno ha più tempo per le storie.</p>
                    <p class="mb-0">Devi sapere però che ciò che mi appassiona ha una concezione del tempo diversa e ci invita continuamente alla riflessione e soprattutto alla cura dei dettagli: mi occupo di storia del costume e potrebbe sorprenderti il fatto che i vestiti e gli oggetti che oggi si producono facilmente e sono alla portata tutti, qualche secolo fa, richiedevano un enorme dispendio di varie risorse e soprattutto di tempo.
                    </p>
                    <p class="mb-0">Sappi che questa disciplina in Italia non esiste: non c’è una laurea specifica in Storia del Costume ma solo esami singoli. 
                    </p>
                    <p class="mb-0">Non mi sono mai lasciata intimorire da questo mancato riconoscimento istituzionale che purtroppo ammanta ancora la maggior parte delle arti minori e proprio per rafforzare la voce di questa branca di studi questo è il percorso che ho scelto per diventare storica del costume: laurea triennale in Design e Discipline della Moda nel 2013, Specialistica in Scenografia all’Accademia di Belle Arti di Urbino nel 2017, continui corsi extrauniversitari inerenti il costume teatrale, numerose esperienze lavorative nel medesimo settore ed infine iscrizione, a settembre 2022, alla Magistrale di Storia dell’Arte di Urbino, percorso tuttora in svolgimento. </p>
                    <p class="mb-0"> La storia ha un grande superpotere: permea la realtà di nuove prospettive, la arricchisce e restituisce al tempo il suo vero valore. 
                    </p>
                    <p class="mb-0">Ho cercato di rendere ancora più tangibile questa convinzione accogliendo e partecipando ad attività che rispecchiassero le mie passioni: così da Giugno 2023 sono entrata a far parte del gruppo di rievocazione storica chiamato Corpo di Guardia di Gradara mentre da Settembre dello stesso anno mi sono iscritta alla scuola di scherma storica Achille Marozzo di Misano.
                      Infine da Gennaio 2024 ho aperto attività come designer.
                    </p>
                    <p class="mb-0"> Grazie per aver ascoltato la mia storia: ne ho molte altre da raccontarti sugli abiti del passato e le troverai tutte su questo sito insieme ad articoli blog, foto e materiale scaricabile.
                    </p>
                    <p class="mb-0"> Le passioni crescono se sono condivise: contattami pure per ogni informazione, sarò felice di risponderti quanto prima. 
                    </p>
                    <p class="mb-0">  Allora a presto e prima di quel momento, ti auguro di combattere con orgoglio per la tua battaglia, qualunque essa sia.
                    </p>
                    <ul class="" style="padding-left:0;">
                      <li><b class="fw-bold">Di cosa mi occupo:</b> Mi occupo di divulgazione nel campo della storia del costume: per raggiungere il mio obiettivo nel migliore dei modi mi servo soprattutto del disegno in qualità di designer. <br>
                        Sono disponibile per corsi di formazione pratici nel campo della sartoria storica e per progetti di illustrazione. Visita la sezione portfolio e download per ulteriori informazioni. </li>
                        <li><b class="fw-bold">Di cosa non mi occupo:</b> NON realizzo abiti su misura: non sono un artigiano né un laboratorio di produzione ma un designer. </li>
                    </ul>
                      
                      
                      
                      
                     
                      
                     
                     
                    
                      </p>
                </div>
        
            </div>

        </div>

    </div>
   
    <div class="container my-3">
        <div class="row">
            {{-- @foreach($images as $image)
            <div class="col-12">
               <img src="{{$image['cover']}}" alt="">
               <a class="text-decoration-none" href="{{ route('work.show', $image['id'])}}">{{ $image['name']}}</a>
            </div>
            @endforeach --}}

            <div id="masonry" class="container">
                <div class="row">
                    @foreach($images as $image)
                 
                    <figure class="col-12">
                        <a class="d-block mx-auto" href="{{ route('work.show', $image['id'])}}"">
                            <img class="w-50 d-block mx-auto" src="{{$image['cover']}}" alt="{{ $image['name']}}" />
                            <figcaption><h5 href="#">{{ $image['name']}}</h5></figcaption>
                        </a>
                      </figure>
    
                    @endforeach

                </div>
           </div>
              
        
              
        </div>
    </div>
</x-layout>