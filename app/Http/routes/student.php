<?php



use Illuminate\Http\Request;

Route::group(['prefix' => 'student','middleware'=>'student'], function()
{
    Route::get('/',['as'=>'workspace.student.dashboard', function()
    {
        return view('workspace/student/dashboard/index');
    }]);

    Route::get('/answer/assingments',function (){
        return view('workspace.student.assingments.index');
    });

    Route::get('/answer/assingments/{id}',['as'=>'workspace.student.assingment',function (){

        $assingment = \App\Assingment::with('questions')->first();
        return view('workspace.student.assingments.questions.index')->with(['assingment'=>$assingment]);
    }]);

    Route::get('/answer/assingments/{assingment}/question/{question}',
        ['as'=>'workspace.student.answer.question.create',
        function ($assingment, $question){

        $question = \App\Question::find($question);
        return view('workspace.student.assingments.questions.create')->with(['question'=>$question]);
    }]);

    Route::get('/answer/assingments/{assingment}/question/{question}/edit',
        ['as'=>'workspace.student.answer.question.edit',
        function ($assingment, $question){

        $question = \App\Question::find($question);
        return view('workspace.student.assingments.questions.edit')->with(['question'=>$question]);
    }]);

    Route::post('/answer/assingments/question/{question}',
        ['as'=>'workspace.student.answer.question.store',
        function ( $question, Request $request){

            $question = \App\Question::find($question);
            $answer = new \App\Answer();
            $answer->student_id = \Auth::user()->asStudent()->first()->id;

            $answer->question_id = $question->id;


            $answer->assingment_id = $question->assingment()->first()->id;
            $answer->answer = $request->answer;
            $answer->status = 1;
            $answer->save();

            return redirect()->route('workspace.student.assingment',['id'=>$question->assingment()->first()->id]);
        }]
    );

    Route::put('/answer/assingments/question/{question}/update',
        ['as'=>'workspace.student.answer.question.update',
            function ( $question, Request $request){

                $question = \App\Question::find($question);

                $answer = $question->answer()->first();

                $answer->student_id = \Auth::user()->asStudent()->first()->id;

                $answer->question_id = $question->id;


                $answer->assingment_id = $question->assingment()->first()->id;
                $answer->answer = $request->answer;
                $answer->status = 1;
                $answer->save();

                return redirect()->route('workspace.student.assingment',['id'=>$question->assingment()->first()->id]);
            }]
    );


});