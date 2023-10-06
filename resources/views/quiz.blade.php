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
        <input type="hidden" value="3" id="total-questions">
        <section id="quiz-slide" class="splide pb-6 bg-white shadow-md rounded-2xl overflow-hidden" aria-label="Gyanbharal Quiz Questions">
            <div class="splide__track">
                <ul class="splide__list">
                    @for ($x=1;$x<4;$x++)  
                    <li class="splide__slide">
                        <div class="w-full pt-10 pb-8 px-4 bg-white">
                            <div class="w-full max-w-sm mx-auto">
                                <p class="text-base font-medium text-gray-700 text-center">How many legs does a spider have?</p>
                
                                <form class="w-full mt-4 question-options">
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$x}}-answer1" data-id="qyrt" type="radio" value="4 Legs" name="question{{$x}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$x}}-answer1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">4 Legs</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$x}}-answer2" data-id="bdfowd" type="radio" value="8 Legs" name="question{{$x}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$x}}-answer2" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">8 Legs</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$x}}-answer3" data-id="xenuj" type="radio" value="6 Legs" name="question{{$x}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$x}}-answer3" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">6 Legs</label>
                                    </div>
                                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                                        <input id="question{{$x}}-answer4" data-id="wyixse" type="radio" value="12 Legs" name="question{{$x}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="question{{$x}}-answer4" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">12 Legs</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
        </section>
        <div class="hidden w-full pt-10 pb-8 px-4 bg-white shrink-0 shadow-md rounded-2xl">
            <div class="w-full max-w-sm mx-auto text-center">
                <p class="text-base font-medium text-gray-700">How many legs does a spider have?</p>

                <form class="w-full mt-6">
                    <div class="flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                        <label for="bordered-radio-1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">4 Legs</label>
                    </div>
                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                        <label for="bordered-radio-1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">8 Legs</label>
                    </div>
                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                        <label for="bordered-radio-1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">6 Legs</label>
                    </div>
                    <div class="mt-4 flex items-center pl-4 border-2 border-gray-200 rounded text-left">
                        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                        <label for="bordered-radio-1" class="w-full py-4 ml-6 text-sm font-medium text-gray-900">12 Legs</label>
                    </div>
                </form>
            </div>
        </div>

        {{-- score page --}}
        <div id="score-page" class="w-full pt-10 pb-8 px-4 bg-white shrink-0 shadow-md rounded-2xl">
            <div class="w-full max-w-sm mx-auto text-center">
                <p class="text-base font-normal text-green-600">Score - 360</p>

                <div class="w-full mt-6 grid grid-cols-2 items-center gap-4">
                    <div class="w-32 h-32 mx-auto shrink-0 rounded-full border-4 border-gray-200 flex items-center justify-center">
                        <p class="text-5xl font-semibold text-blue-500">2/5</p>
                    </div>

                    <div class="w-full text-left">
                        <p class="text-gray-700">Total Questions: <strong>5</strong></p>
                        <p class="text-gray-700">Total <span class="text-green-600">Correct</span>: <strong>2</strong></p>
                        <p class="text-gray-700">Total <span class="text-red-500">Wrong</span>: <strong>3</strong></p>
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

    var TotalQuestions = $('#total-questions').val();
    $('#score-page').hide();
    
    $score = 0;
    function updateScore(){
        $score += 120;
        $('#score').text($score);
    }

    $('form.question-options input').change(function() {
        var value = $(this).val();
        $(this).prop('disabled', true);
        if($(this).data('id') == "bdfowd"){
            updateScore();
        }
        setTimeout(() => {
            if(slideController.getNext() == -1){
                $('#quiz-slide').hide();
                $('#score-page').show();
            }else{
                $(this).prop('disabled', false);
                quiz.go('>');
            }
        }, 1000);
    });
});
</script>
@endpush
</x-main-layout>