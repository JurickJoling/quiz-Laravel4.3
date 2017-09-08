@extends('..._layouts.default.index')

@section('title')
    Home @parent
@stop

@section('content')

    @include('flash::message')

    <section id="section-all-exams">
      <div class="row">
        <div class="container">
        <div class="main-section">
        	<h1>Create a Deal Alert</h1>
        	<!-- @foreach($subjects as $subject)
       	
         	<div class="col-md-6 model-list">
            <div class="clearfix">
                @foreach($exams as $exam)
                 	@if($exam->subject_id == $subject->subject_id && $subject->subject_id == 1)
                 		<img src="{{asset('img/model-s.png')}}">
                 		<a href="{{ link_to_route('startExam')}}"><h2>{{{$subject->subject_name}}}</h2></a>
                    <div class="model-{{{$exam->exam_id}}}"  title="Select Model S" style="display: none;">
                           {{--{{ link_to_route('startExam', $exam->exam_name, $exam->exam_id)}}--}}
                           <div class="exam-name"></div>
                    </div>
                  @elseif($exam->subject_id == $subject->subject_id && $subject->subject_id == 2)
                  	<img src="{{asset('img/model-x.png')}}">
                  	<a href="{{ link_to_route('startExam')}}"><h2>{{{$subject->subject_name}}}</h2></a>
                  	<div value="{{{$exam->exam_id}}}"  title="Select Model X" style="display: none;">
                       	{{--{{ link_to_route('startExam', $exam->exam_name, $exam->exam_id)}}--}}
                       	<div class="exam-name"></div>
                  
                    </div>
                 	@endif
                @endforeach
            </div>
         		

         	</div>
        @endforeach	 -->
        </div>
        	
        </div>
        
     	</div>

    </section>
    <script>
        $(document).ready(function () {
            $("#section-all-exams li").hover(
              function() {
                $(this).children(".questions-count").toggle();
                $(this).children(".finished-exam").toggle();
              }
            );

            $('li').click(function(){
                window.location = ("exam/")+$(this).attr('value');
            });
        });
    </script>
@stop
