@include('includes.header')
@extends('layouts.master')


@section('content')
	<div class="row">
		<div class="col-md-12" id="slide">
      <ul class="slideshow">
            <li>
              <span>Image 01</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>
                              </div>
            </li>
            <li>
              <span>Image 02</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>

              </div>
            </li>
            <li>
              <span>Image 03</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>

              </div>
            </li>
            <li>
              <span>Image 04</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>

              </div>
            </li>
            <li>
              <span>Image 05</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>

              </div>
            </li>
            <li>
              <span>Image 06</span>
              <div>

                <h1>Organsko meso</h1>
                 <h3>Sa stare planine</h3>

              </div>
            </li>
            <li><!--...--></li>
            <li></li>
      </ul>
		</div>
	</div>
  <div  class="row btn-ord">
    <div id="slide-down" class="col-md-4"></div>
		<div id="slide-down" class="col-md-4">
        <a href="{{route('order')}}" class="button-order">Narucite odmah</a>
    </div>
     <div id="slide-down" class="col-md-4"></div>
        	</div>
	<div class="row">
  <div class="col-md-1"></div>
		<div class="col-md-8">
      <!-- Articles with texts!-->
      <a name="start"></a>
              <section class="text-holder">
                <h2 align="center">Mi smo udruženje uzgajivača organskog mesa od Buše sa Stare Planine</h2>
                <p><strong>Buša</strong> (kratkorogo goveče, domaće planinsko govedo ili ilirsko govedo) je <strong>autohtona rasa goveda</strong> (latinski:<i> Bos brachyeros europeus).</i> </p>
                <p>Buša obitava u nerazvijenim brdsko-planinskim područjima na Balkanskom poluostrvu.</p>
                <p>Nekada je, na ovim prostorima, bila najzastupljenija rasa goveda (korišćena kao radno goveče, za mleko i za meso). </p>
                <p>Buša je malo goveče visine do max 1,10 m i težine od 180 do 250 kg a bikovi mogu biti teški I do 300 kg.</p>
                <p>Telad su sitna, po telenju imaju težinu od oko 15 kg. Jedna krava buša može dati od 5 do 6 litara mleka dnevno u periodu od 9 meseci (period laktacije) sa veoma visokim procentom mlečne masti.</p>
                <p>Posebno bitna karakteristika buše je da <strong>najveći deo vremena provodi napolju</strong> - na pašnjaku ili ograđenom prostoru a samo kada je najveća zima vreme provodi u zatvorenom prostoru. </p>
                <p><strong>Prostor Stare planine</strong> na jugo-istoku Srbije <strong>idealno je mesto za organski uzgoj ovog govečeta.</strong> Ova planina spada u kategoriju<strong> područja koja su najbogatija raznolikim biljnim vrstama u Evropi.</strong> Na njenim livadama i pašnjacima raste više od hiljadu različitih vrsta biljaka od kojih preko 100 predstavljaju pravu retkost.<strong> Mnoge od tih biljnih vrsti imaju lekovita svojstva.</strong> Fitoterapeuti često za Staru planinu kažu da je prava<strong> prirodna apoteka.</strong></p>
            <!--    <p>U takvim uslovima, na prostoru gde nema industrije, saobraćaja i bilo kog drugog zagadjivača, dakle<strong> u uslovima gotovo netaknute prirode pase naše stado</strong> i na taj način se hrani mnoštvom biljnih vrsta, lekovitim biljkama a istovremeno i brsti rastinje te, na taj način, održava prirodnu ravnotežu izmedju biljnih I životinjskih vrsta na planini.</p>
                <p>Buša se, dakle, hrani isključivo na  pašnjacima. Zimi se hrani livadskim senom koje isto potiče sa organskih pašnjaka a po potrebi se povremeno pušta i na ispašu (čak i kada su pašnjaci pokriveni snegom buša pase travu koja je ostala nepokošena tokom leta).  </p>!-->
                <p>Buša se gaji po sistemu: krava-tele  a što znači da krava (majka) doji tele dokle god ima mleka - nema muže.</p>
                <p>Saglasno svemu tome <strong>meso buše poseduje izuzetne karakteristike odnosno izuzetno je zdravo za ljudsku ishranu a posebno za ishranu dece.</strong></p>
                <p>Sve uradjene analize potvrdjuju da je meso buše ubedljivo najkvalitetnije posmatrano u odnosu na bilo koju drugu vrstu mesa dobijeno od životinja koje su uzgajane u organskim ili konvencionalnim uslovima.</p>
              </section>

                <!-- End ofArticles with texts!-->
    </section>
      <!--End of Rigth float holder!-->

		</div>
		<div class="col-md-3">
      <article class="art-rght">
        <p>Dostavu narudzbina izvršavamo jednom mesečno.</p>
        <p>Sledeci rok za dostavu je</p>
        <p><strong>01/01/2000<strong></p>
          <a href="{{route('order')}}" class="button-order2">Narucite odmah</a>
      </article>
      <article class="art-rght">
        <h3>DA SUMIRAMO ONO ŠTO JE BITNO ZA NAŠU BUŠU :</h3>
          <ul>
                <li>GOVEČE UZGAJANO U USLOVIMA NETAKNUTE PRIRODE PO PRAVILIMA ORGANSKE PROIZVODNJE</li>
                <li>ČISTA AUTOHTONA RASA GOVEDA BEZ GENETSKOG UKRŠTANJA</li>
                <li>ISHRANA JE BOGATA MNOŠTVOM LEKOVITIH BILJAKA – PRIRODNA APOTEKA</li>
                <li>NEMA VEŠTAČKE HRANE, KONCENTRATA NITI BILO KOJIH DRUGIH DODATAKA ISHRANI</li>
                <li>UZGOJ JE POD STALNIM NADZOROM SERTIFIKACIONE KUĆE</li>
                <li>MESO BUŠE IZUZETNO JE KVALITETNO ZA LJUDSKU ISHRANU</li>
          </ul>
      </article>

		</div>
	</div>
	<div class="row fixer">
    <div class="footer-header">
		  <h2>Prodaja mesa sa organske farme Busa</h2>

      </div>
	</div>

	 @endsection
