@extends('_layouts/default/index')

@section('title')
    Start Exam @parent
@stop

@section('specific-page-addons')
          <script src="{{asset('js/slickQuiz.js')}}"></script>
@stop
@section('content')

    
    <section id="start-exam-container">

        <!-- <div class="quizName">where the quiz name goes</div> -->

        <body id="slickQuiz">

            <div class="quizArea">
                <div class="quizHeader">
                    <!-- where the quiz main copy goes -->

                    <a class="button startQuiz" href="#">Get Started!</a>
                </div>
                
                <div class="questions">
                    <li class="question" id="question0" style="display: list-item;">
                        <div class="questionCount">Step <span class="current">1</span>/<span class="total">5</span></div>
                        <h3>1. Desired Trim(s)</h3>
                        <ul class="answers">
                            <li>
                                <input id="slickQuiz_question0_0" name="slickQuiz_question0" type="checkbox"> 
                                <label for="slickQuiz_question0_0">75D</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question0_1" name="slickQuiz_question0" type="checkbox"> 
                                <label for="slickQuiz_question0_1">90D</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question0_2" name="slickQuiz_question0" type="checkbox"> 
                                <label for="slickQuiz_question0_2">P90D</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question0_3" name="slickQuiz_question0" type="checkbox"> 
                                <label for="slickQuiz_question0_3">100D</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question0_4" name="slickQuiz_question0" type="checkbox"> 
                                <label for="slickQuiz_question0_4">P100D</label>
                            </li>
                        </ul>
                        <a href="#" class="button nextQuestion checkAnswer" role="button">Next</a>
                    </li>
                    <li class="question" id="question1">
                        <div class="questionCount">Step <span class="current">2</span>/<span class="total">5</span></div>
                        <h3>2. Required Packages</h3>
                        <ul class="answers">
                            <li>
                                <input id="slickQuiz_question1_5" name="slickQuiz_question1" type="checkbox"> 
                                <label for="slickQuiz_question1_5">Premium Upgrades Package</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question1_6" name="slickQuiz_question1" type="checkbox"> 
                                <label for="slickQuiz_question1_6">Subzero Weather Package</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question1_7" name="slickQuiz_question1" type="checkbox"> 
                                <label for="slickQuiz_question1_7">Ultra High Fidelity Sound</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question1_8" name="slickQuiz_question1" type="checkbox"> 
                                <label for="slickQuiz_question1_8">Smart Air Suspension</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question1_9" name="slickQuiz_question1" type="checkbox"> 
                                <label for="slickQuiz_question1_9">High Amperage Charger</label>
                            </li>
                        </ul>
                        <a href="#" class="button nextQuestion checkAnswer" role="button">Next</a>
                    </li>
                    <li class="question" id="question2">
                        <div class="questionCount">Step <span class="current">3</span>/<span class="total">5</span></div>
                        <h3>3. Desired Colors</h3>
                        <ul class="answers">
                            <li>
                                <input id="slickQuiz_question2_10" name="slickQuiz_question2" type="checkbox"> 
                                <label for="slickQuiz_question2_10">Black</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question2_11" name="slickQuiz_question2" type="checkbox"> 
                                <label for="slickQuiz_question2_11">Blue</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question2_12" name="slickQuiz_question2" type="checkbox"> 
                                <label for="slickQuiz_question2_12">White</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question2_13" name="slickQuiz_question2" type="checkbox"> 
                                <label for="slickQuiz_question2_13">Red</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question2_14" name="slickQuiz_question2" type="checkbox"> 
                                <label for="slickQuiz_question2_14">Silver</label>
                            </li>
                        </ul>
                        <a href="#" class="button nextQuestion checkAnswer" role="button">Next</a>
                    </li>
                    <li class="question" id="question3">
                        <div class="questionCount">Step <span class="current">4</span>/<span class="total">5</span></div>
                        <h3>4. Required Price</h3>
                        <ul class="answers">
                            <li>
                                <input id="slickQuiz_question3_15" name="slickQuiz_question3" type="checkbox"> 
                                <label for="slickQuiz_question3_15">Minimum Price adjustment</label>
                            </li>
                            <li>
                                <input id="slickQuiz_question3_16" name="slickQuiz_question3" type="checkbox"> 
                                <label for="slickQuiz_question3_16">Maximum price</label>
                            </li>
                        </ul>
                        <a href="#" class="button nextQuestion checkAnswer" role="button">Next</a>
                    </li>
                    <li class="question" id="question4">
                        <div class="questionCount">Step <span class="current">5</span>/<span class="total">5</span></div>
                        <h3>5. Desired Seats</h3>
                        <ul class="answers">
                            
                        </ul>
                        <a href="#" class="button nextQuestion lastQuestion checkAnswer" role="button">Next</a>
                    </li>
                </div>
            </div>

            <div class="quizResults">
                <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

                <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

                <div class="quizResultsCopy">
                    <!-- where the quiz result copy goes -->
                </div>
            </div>
        </body>

    </section>
    
    <!-- <script>
    $(document).ready(function () {
        // $('#start-button').click(load);
        var getQuizUrl = $(location).attr('href'); //getting the url with a specific quiz
        $.ajax({
            method: "POST",
            url: getQuizUrl

        }).done(function (data) {
            $('#slickQuiz').slickQuiz({
                json: data,
                perQuestionResponseMessaging: false,
                skipStartButton: true,
                preventUnanswered: true
            });
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });
    </script> -->
@stop
