<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- for css3 media queries to work properly on mobile devices-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Snowboard Quiz</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="container">
  <header>
    <!--Navigation links-->
    <nav>
      <ul class="nav nav-pills">
        <li class="active text-uppercase"><a href="index.html"><b>home</b></a></li>
        <li class="text-uppercase"><a href="help.html"><b>help</b></a></li>
      </ul>
    </nav>
  </header>


  <div class="quizarea">
    <center>
      <h1>Congratulations!</h1>
    </center>

    <img id="score-img" src="img/ok.png" alt="Ok">
    <br>

    <?php

              $answer1 = $_POST['question-1-answers'];
              $answer2 = $_POST['question-2-answers'];
              $answer3 = $_POST['question-3-answers'];
              $answer4 = $_POST['question-4-answers'];
              $answer5 = $_POST['question-5-answers'];

              $totalCorrect = 0;

              if ($answer1 == "B") { $totalCorrect++; }
              if ($answer2 == "B") { $totalCorrect++; }
              if ($answer3 == "D") { $totalCorrect++; }
              if ($answer4 == "A") { $totalCorrect++; }
              if ($answer5 == "C") { $totalCorrect++; }

              if($totalCorrect <= 2){
                echo "<center><b>Not so good. </b>";
              }
                else if($totalCorrect == 3){
                  echo "<center><b>Good! </b>";
              }
                else if($totalCorrect > 3){
                  echo "<center><b>Awesome! </b>";
              }

              echo "<b>You scored $totalCorrect of 5 questions.</b></center><br>";

              //Question 1

                switch ($answer1)
                {
                  case "A":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>1. Who originally designed the snowboard?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-wrong"> Tony Hawk </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-right"> Sherman Poppen </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                        <li><label type="text" class="form-control">C) Shaun White</label></li>
                        <li><label type="text" class="form-control">D) Roope Tonteri </label></li>
                      </div>
                    </div>
                    ';
                    break;
                  case "B":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                        <h4>1. Who originally designed the snowboard?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A) Tony Hawk</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-right"> Sherman Poppen </span><span class="glyphicon glyphicon-ok answer-right"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">C) Shaun White</label></li>
                        <li><label type="text" class="form-control">D) Roope Tonteri </label></li>
                      </div>
                    </div>';
                    break;
                  case "C";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>1. Who originally designed the snowboard?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Tony Hawk</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Sherman Poppen </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-wrong"> Shaun White </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">D) Roope Tonteri </label></li>
                    </div>
                  </div>
                  ';
                  break;
                  case "D";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>1. Who originally designed the snowboard?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Tony Hawk</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Sherman Poppen </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">C) Shaun White</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-wrong"> Roope Tonteri </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;

                  default:
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> You did not answer any questions</span>
                      <h4>1. Who originally designed the snowboard?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Tony Hawk</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Sherman Poppen </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">C) Shaun White</label></li>
                      <li><label type="text" class="form-control">D) Roope Tonteri</label></li>
                    </div>
                  </div>
                  ';
                    break;
                }


                //Question 2

                switch ($answer2)
                {
                  case "A":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>2. How snowboard size is usually measured?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-wrong"> Inches </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-right"> Centimeters </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                        <li><label type="text" class="form-control">C) Feet</label></li>
                        <li><label type="text" class="form-control">D) Yards</label></li>
                      </div>
                    </div>
                    ';
                    break;
                  case "B":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                        <h4>2. How snowboard size is usually measured?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A) Inches</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-right"> Centimeters </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label ftype="text" class="form-control">C) Feet</label></li>
                        <li><label type="text" class="form-control">D) Yards</label></li>
                      </div>
                    </div>';
                    break;
                  case "C";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>2. How snowboard size is usually measured?</h4>
                    </div>
                    <div class="results-row">
                        <li><label type="text" class="form-control">A) Inches</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Centimeters </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> </label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-wrong"> Feet </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">D) Yards </label></li>
                    </div>
                  </div>
                  ';
                  break;
                  case "D";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>2. How snowboard size is usually measured?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Inches</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Centimeters </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">C) Feet</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-wrong"> Yards </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;

                  default:
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> You did not answer any questions</span>
                      <h4>2. How snowboard size is usually measured?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Inches</label></li>
                      <li><label type="text" class="form-control">B)<span class="answer-right"> Centimeters </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">C) Feet</label></li>
                      <li><label type="text" class="form-control">D) Yards</label></li>
                    </div>
                  </div>
                  ';
                    break;
                }


                //Question 3

                switch ($answer3)
                {
                  case "A":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>3. When was the first National Snowboard race?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-wrong"> 1990 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">B) 1964</label></li>
                        <li><label type="text" class="form-control">C) 1979</label></li>
                        <li><label type="text" class="form-control">D)<span class="answer-right"> 1982 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      </div>
                    </div>
                    ';
                    break;
                  case "B":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                        <h4>3. When was the first National Snowboard race?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A) Inches</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-wrong"> 1964 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">C) 1979</label></li>
                        <li><label type="text" class="form-control">D)<span class="answer-right"> 1982 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      </div>
                    </div>';
                    break;
                  case "C";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>3. When was the first National Snowboard race?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) Inches</label></li>
                      <li><label type="text" class="form-control">B) 1964</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-wrong"> 1979 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-right"> 1982 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;
                  case "D";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                      <h4>3. When was the first National Snowboard race?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) 1990</label></li>
                      <li><label type="text" class="form-control">B) 1964</label></li>
                      <li><label type="text" class="form-control">C) 1979</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-right"> 1982 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;

                  default:
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> You did not answer any questions</span>
                      <h4>3. When was the first National Snowboard race?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) 1990</label></li>
                      <li><label type="text" class="form-control">B) 1964</label></li>
                      <li><label type="text" class="form-control">C) 1979</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-right"> 1982 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                    </div>
                  </div>
                  ';
                    break;
                }

                //Question 4

                switch ($answer4)
                {
                  case "A":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                        <h4>4. What is it called when a snowboarder changes from one stance to another while going down the hill?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-right"> Switch </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">B) Change</label></li>
                        <li><label type="text" class="form-control">C) Reverse</label></li>
                        <li><label type="text" class="form-control">D) Fake</label></li>
                      </div>
                    </div>
                    ';
                    break;
                  case "B":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>4. What is it called when a snowboarder changes from one stance to another while going down the hill?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-right"> Switch </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-wrong"> Change </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">C) Reverse</label></li>
                        <li><label type="text" class="form-control">D) Fake</label></li>
                      </div>
                    </div>';
                    break;
                  case "C";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>4. What is it called when a snowboarder changes from one stance to another while going down the hill?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A)<span class="answer-right"> Switch </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">B) Change</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-wrong"> Reverse </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">D) Fake</label></li>
                    </div>
                  </div>
                  ';
                  break;
                  case "D";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                      <h4>4. What is it called when a snowboarder changes from one stance to another while going down the hill?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A)<span class="answer-right"> Switch </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">B) Change</label></li>
                      <li><label type="text" class="form-control">C) Reverse</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-wrong"> Fake </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;

                  default:
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> You did not answer any questions</span>
                      <h4>4. What is it called when a snowboarder changes from one stance to another while going down the hill?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A)<span class="answer-right"> Switch </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">B) Change</label></li>
                      <li><label type="text" class="form-control">C) Reverse</label></li>
                      <li><label type="text" class="form-control">D) Fake</label></li>
                    </div>
                  </div>
                  ';
                    break;
                }


                //Question 5

                switch ($answer5)
                {
                  case "A":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>5. How many Big Mac hamburgers Heikki Sorsa ate in Salt Lake City Winter Olympics in 2002?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A)<span class="answer-wrong"> 58 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">B) 17</label></li>
                        <li><label type="text" class="form-control">C)<span class="answer-right"> 44 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                        <li><label type="text" class="form-control">D) 1</label></li>
                      </div>
                    </div>
                    ';
                    break;
                  case "B":
                    echo '
                    <div class="results">
                      <div class="results-top">
                        <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>5. How many Big Mac hamburgers Heikki Sorsa ate in Salt Lake City Winter Olympics in 2002?</h4>
                      </div>
                      <div class="results-row">
                        <li><label type="text" class="form-control">A) 58 </label></li>
                        <li><label type="text" class="form-control">B)<span class="answer-wrong"> 17 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                        <li><label type="text" class="form-control">C)<span class="answer-right"> 44 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                        <li><label type="text" class="form-control">D) 1</label></li>
                      </div>
                    </div>';
                    break;
                  case "C";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"> Correct</span>
                        <h4>5. How many Big Mac hamburgers Heikki Sorsa ate in Salt Lake City Winter Olympics in 2002?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) 58</label></li>
                      <li><label type="text" class="form-control">B) 17</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-right"> 44 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Your answer)</label></li>
                      <li><label type="text" class="form-control">D) 1</label></li>
                    </div>
                  </div>
                  ';
                  break;
                  case "D";
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> Incorrect</span>
                        <h4>5. How many Big Mac hamburgers Heikki Sorsa ate in Salt Lake City Winter Olympics in 2002?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) 58</label></li>
                      <li><label type="text" class="form-control">B) 17</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-right"> 44 </span><span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">D)<span class="answer-wrong"> 1 </span><span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"></span> (Your answer)</label></li>
                    </div>
                  </div>
                  ';
                  break;

                  default:
                  echo '
                  <div class="results">
                    <div class="results-top">
                      <span class="glyphicon glyphicon-remove answer-wrong" aria-hidden="true"> You did not answer any questions</span>
                        <h4>5. How many Big Mac hamburgers Heikki Sorsa ate in Salt Lake City Winter Olympics in 2002?</h4>
                    </div>
                    <div class="results-row">
                      <li><label type="text" class="form-control">A) 58</label></li>
                      <li><label type="text" class="form-control">B) 17</label></li>
                      <li><label type="text" class="form-control">C)<span class="answer-right"> 44 <span class="glyphicon glyphicon-ok answer-right" aria-hidden="true"></span> (Correct answer)</label></li>
                      <li><label type="text" class="form-control">D) 1</label></li>
                    </div>
                  </div>
                  ';
                    break;
                }

              // Tässä vaiheessa $totalcorrect arvo tallennetaan tietokantaan
              // Eli tauluna menis näin
              // | ID | tulos |
              // | 0  | 1     |
              // | 1  | 2     |
              // | 2  | 4     |

              // Lopuksi haetaan tietokannnasta kaikki entryt, ja lasketaan tulokset yhteen ja jaetaan se tuloksien määrällä
              // for (int i = 0; i < getAmountOfRows; i++) {
              //  SELECT tulos from topsantaulu where ID=(i);
              // }
              // Esim tulos: 1,2,4
              // keskiarvo: 1+2+4 / (SELECT COUNT(*) from topsantaulu;);
              //
              // Tulostetaan keskiarvo


          ?>
      <!-- Button -->
      <center>
        <div class="col-xs-12">
          <a class="btn btn-lg text-uppercase nappi" id="nappi" type="button" href="play.html">play again</a>
        </div>
        <br>
        <br>
      </center>
  </div>
</body>

</html>
