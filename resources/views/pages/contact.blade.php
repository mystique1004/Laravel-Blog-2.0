@extends('main')
@section('title', '| Call Lady')
@section('content')
      
      
       <div class="row">
           <div class="col-md-12">
           <h1> Call Me</h1>
           <hr>

           <form>
           <div class="form-group">
            <label name="email">Email:</label>
            <input id="email" name="email" class ="form">
           </div>

           <div class="form-group">
            <label name="subject">Subject:</label>
            <input id="subject" name="subject" class ="form">
           </div>

           <div class="form-group">
            <label name="message">Message:</label>
            <textarea id="message" name="message" class ="form"> What you wanna say?...</textarea>
           </div>
            <input type="submit" value="Send Message" class="btn btn-success">
           </form>
           </div>
       </div>
  @endsection