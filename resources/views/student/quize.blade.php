<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mostafa Elkady</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('topresources');
</head>
<body style="background-color:gray;">
  <header>
    <div class="container" style="background-color:#2d6760;color:white;padding:30 30;margin-top:-30px;">
      <div class="row">
        <h2> Qiuz Title: {{$quize->quize_title}} </h2>
      </div>
      <div class="row">
        <span> Qiuz Description: {{$quize->quize_description}} </span>
      </div>
      <div class="row">
        <span>Lesson{{$quize->lessonpart->lesson_number}}</span>
      </div>
      <div class="row">
        <span>Unit{{$quize->lessonpart->unit_number}}</span>
      </div>
      <div class="row">
        <span>Level{{$quize->lessonpart->level_number}}</span>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container" style="background-color:white;margin-top:-80px;">
      <br/>

      <form>
        <div class="col-lg-12 col-md-12">
          @if(!isset($result))
          <span>Hi {{auth()->user()->name}}, answer the following question,please.</span>
          @else
          <span>Thanks {{auth()->user()->name}}, check your answers, please.</span>
          @endif
          <br/>
          <br/>
        </div>
      <?php $total=0;?>
        @foreach ($quize->questions as $key => $question)
        <?php if($studentquize)$studentquizeanswer=App\Models\Student_Quize_Answer::where('question_id',$question->id)->where('student_quize_id',$studentquize->id)->get('correctanswer')->first();?>

        <div class="col-lg-12 col-md-12 question">
          <div class="col-lg-12 col-md-12 question-title">
            <div class="row">
            <b style="float:left;">Question{{$key+1}}:  {{$question->question_title}}</b>&nbsp;
            <span style="color:green;">( {{$question->question_grade}} points )</span>
            <br/>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 question-description">
            <div class="row">
            (Description:{{$question->question_description}})
            <br/>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 question-options" style="padding:10 30;">
            @foreach($question->options as $key2 => $option)
            <div class="row question-option form-control" style="border:none;">
                @if(!isset($result))
                  @if($studentquizeanswer && $option->id==$studentquizeanswer->correctanswer)
                    <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" checked required/> {{$option->option_text}}
                  @else
                  <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" required/> {{$option->option_text}}
                  @endif
                @else
                  @if($studentquizeanswer && $option->id==$studentquizeanswer->correctanswer && $option->correctanswer)
                  <?php $total+=$question->question_grade;?>
                  <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" style="color:green;" checked disabled/> {{$option->option_text}} <i class="icofont-check" style="color:green;"></i>
                  @elseif($studentquizeanswer && $option->id==$studentquizeanswer->correctanswer && !$option->correctanswer)
                  <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" style="color:red;" checked disabled/> {{$option->option_text}}  <i class="icofont-close" style="color:red;"></i>
                  @elseif(!($studentquizeanswer && $option->id==$studentquizeanswer->correctanswer) && $option->correctanswer)
                    <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" style="color:green;" disabled/> {{$option->option_text}} <i class="icofont-check" style="color:green;"></i>
                  @else
                  <input type="radio" name="question_{{$question->id}}" value="{{$option->id}}" onchange="saveAnswer(this);" disabled/> {{$option->option_text}}

                  @endif
                @endif
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
        <!-- <div class="col-lg-12 col-md-12 question">
          <div class="col-lg-12 col-md-12 question-title">
            <div class="row">
            <b>Question#:</b> question title here
            <br/>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 question-options" style="padding:10 30;">
            <div class="row question-option">
            <input type="radio" name="question#"/> Option1
            </div>
            <div class="row question-option">
            <input type="radio" name="question#"/> Option2
            </div>
            <div class="row question-option">
              <input type="radio" name="question#"/> Option3
            </div>
            <div class="row question-option">
              <input type="radio" name="question#"/> Option4
            </div>
          </div>
        </div> -->

        <div class="col-lg-12 col-md-12">
          <div>
            <!-- <input type="submit" class="btn btn-success" value="Submit" name="submit"/> -->
              @if(!isset($result))
                  <a href="{{route('submitstudentquize',$quize->id)}}" class="btn btn-primary">Submit</a>
              @else
              <hr/>
                  <span>Total Score: {{$total}}</span>
              @endif
          </div>
          <br/>
        </div>
      </form>
    </div>
  </main>


     <!-- Vendor JS Files -->
    @include('bottomresources');
<script>
function saveAnswer(elem){
  alert("test");
    var question_id = elem.getAttribute("name").split("_")[1];
    var value=elem.value;
    var urlstr="{{route('saveanswer')}}";
    alert(urlstr);
    alert(question_id+"_"+value);
    $.ajax({
        type: "POST",
        url:"{{route('saveanswer')}}",
        data:{question_id:question_id,_token:'{{csrf_token()}}',option_id:value},
        success: function(data)
        {
          alert(data);
          if(!(data==="yes"))
          {
            setTimeout(saveAnswer(elem),1000);
          }
            //alert(data); // show response from the php script.
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
           /// alert("Faild to save Your Answer! please click any where in document");
           setTimeout(saveAnswer(elem),1000);
        }

    });
  }
</script>
</body>
</html>
