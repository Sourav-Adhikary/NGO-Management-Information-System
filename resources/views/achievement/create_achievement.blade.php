@extends('layouts.dashboard')
@section('content')
@include('inc.nav_activity')
<br><br>
<div class="row p-2 justify-content-center">
  <div class="col-md-10">
    
  <div class="card">
    <div class="card-body text-center text-uppercase text-info bg-inverse">
      <strong>{{$activity->activity_name}}</strong> 
    </div>
  </div>
  <br><br>



    {!! Form::open(['action' => ['AchievementController@store',$activity->id], 'method'=>'POST']) !!}
    <div class="form-row">
      <div class="form-group col-md-auto">
        <label for="year">Year</label>
        <input type="number" min="0" name="year" class="form-control" id="year" placeholder="Enter  Year " value={{date('Y')}} required>
      </div>
     

      <div class="form-group col-md-auto">
        <label for="month">Month</label>
        <select id="month" class="form-control" name="month">
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>

         <option value="May">May</option>
         <option value="June">June</option>
         <option value="July">July</option>
         <option value="August">August</option>


         <option value="Setember">Setember</option>
         <option value="October">October</option>
         <option value="November">November</option>
         <option value="December">December</option>

        </select>
      </div>

       {{ Form::bsDate('date',\Carbon\Carbon::now()) }}
      
    </div>
    <div class="form-row">
     <div class="form-group col-md-6">
      {{ Form::bsText('place','',['placeholder'=>'Enter  Place Of Event']) }}

     </div>

      <div class="form-group col-md-6">
        <label for="event_number">Event number</label>
        <input type="number" name="event_number" min="1" class="form-control" id="event_number" placeholder="Enter Number Of Event" value="1">
      </div>

    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="achievement_male_participant_number">Male Participant number</label>
        <input type="number" min="0" name="achievement_male_participant_number" class="form-control" id="event_number" placeholder="Male Participant Number" value="0" required>
      </div>
      <div class="form-group col-md-6">
        <label for="achievement_female_participant_number">Female Participant Number </label>
        <input type="number" min="0" name="achievement_female_participant_number" class="form-control" id="participant_number" placeholder="Female  Participant Number" value="0" required >
      </div>
    </div>
    {{ Form::bsTextArea('event_summary','',['placeholder'=>'Enter Event Summary']) }}
    {{ Form::bsTextArea('immediate_outcome','',['placeholder'=>'Enter Outcome Of the Event']) }}
    {{ Form::bsTextArea('learning','',['placeholder'=>'Learning From The Event']) }}
    {{ Form::bsTextArea('challenge','',['placeholder'=>'Challenges You Have Faced']) }}
    {{ Form::bsSubmit('Submit') }}
    {!! Form::close() !!}
  </div>
</div>
@endsection