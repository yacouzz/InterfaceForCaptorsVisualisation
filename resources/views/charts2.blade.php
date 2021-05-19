@extends('index')

@section('content')
<main>
    <div class="main__container">
      <!-- CHARTS Commence là -->
      <div class="charts">
        <div class="charts__left">
          <div class="charts__left__title">
            <div>
              <h1>Evolution de la température</h1>
              <p>Courbe de calcul de la Temp</p>
            </div>
          </div>
          <div id="ph"></div>
        </div>

        <div class="charts__right">
          <div class="charts__right__title">
            <div>
              <h1>Dernieres Actions</h1>
              <p>Liste des dernieres interventions effectuées</p>
            </div>
            
          </div>

            <div id="temp"></div>
          
        </div>
      </div>
      <!-- CHARTS fini la -->
    </div>
  </main>
  @include('footer')
@stop

