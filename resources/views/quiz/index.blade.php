<x-main-layout>
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
<style>
    .splide__slide > div {
        width: 100%;
        height: auto;
    }
    .splide__pagination__page.is-active {
        background-color: rgb(75 85 99 / 1);
    }
    .splide__track {
        padding-bottom: 1.5rem;
    }
    .splide__pagination {
        padding: 2rem 1em 1.5rem 1em;
    }

    form.question-options div:has(> input[data-id="bdfowd"]:checked) {
        border-color: #22c55e;
        background-color: #22c55e;
    }
    form.question-options div:has(> input[data-id="bdfowd"]:checked) > label {
        color: #FFFFFF;
    }
    form.question-options div:has(> input:checked) {
        border-color: #ef4444;
        background-color: #ef4444;
    }
    form.question-options div:has(> input:checked) > label {
        color: #FFFFFF;
    }
</style>
@endpush
    
<x-slot:title>
Quiz - Gyanbharal
</x-slot:title>

<div class="w-full relative">
    <div class="absolute top-0 right-0 z-10 text-sm font-light lg:text-base">
        Score: <span id="score" class="text-white px-4 py-1 bg-green-500 rounded-full font-medium">0</span>
    </div>

    <div class="w-full pt-16">
        <input type="hidden" value="{{$questions->count()}}" id="total-questions">

        <section id="quiz-slide" class="splide pb-6 bg-white shadow-md rounded-2xl overflow-hidden" aria-label="Gyanbharal Quiz Questions">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($questions as $question) 
                    <li class="splide__slide">
                        <div class="w-full pt-10 pb-8 px-4 bg-white">
                            <div class="w-full max-w-sm mx-auto">
                                <p class="text-base font-medium text-gray-700 text-center">{{$question->question}}</p>
                
                                <form class="w-full mt-4 question-options">
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$loop->index}}-answer1" data-id="qyrt" type="radio" value="4 Legs" name="question{{$loop->index}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$loop->index}}-answer1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">{{$question->option_2}}</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$loop->index}}-answer2" data-id="bdfowd" type="radio" value="8 Legs" name="question{{$loop->index}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$loop->index}}-answer2" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">{{$question->answer}}</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$loop->index}}-answer3" data-id="xenuj" type="radio" value="6 Legs" name="question{{$loop->index}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$loop->index}}-answer3" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">{{$question->option_3}}</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$loop->index}}-answer4" data-id="wyixse" type="radio" value="12 Legs" name="question{{$loop->index}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$loop->index}}-answer4" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">{{$question->option_1}}</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>

        {{-- score page --}}
        <div id="score-page" class="w-full pt-10 pb-8 px-4 bg-white shrink-0 shadow-md rounded-2xl">
            <div class="w-full max-w-sm mx-auto text-center">
                <p class="text-base font-normal text-green-600">Score - <span class="total-score"></span></p>

                <div class="w-full mt-6 grid grid-cols-2 items-center gap-4">
                    <div class="w-32 h-32 mx-auto shrink-0 rounded-full border-4 border-gray-200 flex items-center justify-center">
                        <p class="text-5xl font-semibold text-blue-500">
                            <span class="tot-correct"></span>/<span class="tot-questions"></span>
                        </p>
                    </div>

                    <div class="w-full text-left">
                        <p class="text-gray-700">Total Questions: <strong class="tot-questions"></strong></p>
                        <p class="text-gray-700">Total <span class="text-green-600">Correct</span>: <strong class="tot-correct"></strong></p>
                        <p class="text-gray-700">Total <span class="text-red-500">Wrong</span>: <strong class="tot-wrong"></strong></p>
                    </div>
                </div>

                <a href="/" class="w-full">
                    <button type="button" class="w-full mt-8 text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Go Home</button>
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
$(document).ready(function(){
    const quiz = new Splide('#quiz-slide', {
        'autoplay': false,
        'arrows': false,
        'pagination': true,
        'drag': false
    }).mount();
    const slideController = quiz.Components.Controller;

    $('#quiz-slide form.question-options').each(function(){
        var $form = $(this);
        var $liArr = $form.children('div');
        $liArr.sort(function(a,b){
                var temp = parseInt( Math.random()*10 );
                var isOddOrEven = temp%2;
                var isPosOrNeg = temp>5 ? 1 : -1;
                return( isOddOrEven*isPosOrNeg );
        })
        .appendTo($form);            
    });

    $('#score-page').hide();
    $('#quiz-slide').hide();

    var TotalQuestions = $('#total-questions').val();
    $('.tot-questions').text(TotalQuestions);

    function checkQuizAlreadyTaken(){
        var cookieExists = $.cookie('userQuizResult') !== undefined;

        if (cookieExists) {
            $('#score-page').show();
            $('#quiz-slide').hide();

            var cookieValue = $.cookie("userQuizResult");
            var cookieQuizResult = JSON.parse(cookieValue);
            $('.tot-correct').text(cookieQuizResult.correct_answers);
            $('.tot-wrong').text(cookieQuizResult.wrong_answers);
            $('.total-score').text(cookieQuizResult.total_mark);
            $('#score').text(cookieQuizResult.total_mark);
        } else {
            $('#score-page').hide();
            $('#quiz-slide').show();
        }
    }
    checkQuizAlreadyTaken();
    
    var score = 0;
    var correct = 0;
    var wrong = 0;
    function updateScore(){
        score += 120;
        correct += 1;
        $('#score').text(score);
    }

    function endQuiz(){
        $('.tot-correct').text(correct);
        $('.tot-wrong').text(wrong);
        $('.total-score').text(score);

        var quizResult = {
            correct_answers: correct,
            wrong_answers: wrong,
            total_mark: score
        };
        var quizResultObject = JSON.stringify(quizResult);
        $.cookie("userQuizResult", quizResultObject, { expires: 1 });
    }

    $('form.question-options input').change(function() {
        var value = $(this).val();
        if($(this).data('id') == "bdfowd"){
            updateScore();
        }else {
            wrong += 1;
        }
        setTimeout(() => {
            if(slideController.getNext() == -1){
                $('#quiz-slide').hide();
                $('#score-page').show();
                endQuiz();
            }else{
                quiz.go('>');
            }
        }, 1000);
    });
});
</script>
@endpush
</x-main-layout>