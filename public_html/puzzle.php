<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["сон", "сноведение"]);
			checkAnswer("userAnswer2", ["морской", "укус акулы"]);
			checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

			alert("Вы отгадали " + score + " загадок");

		}

	</script>
</head>
<body>

<div class="content">
    <div class="header">
        <?php include('partials\header.php') ?>
    </div>


    <div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<p>Что можно увидеть с закрытыми глазами?</p>
				<input type="text" id="userAnswer1">

				<p>Какой болезнью никто не болеет на суше?</p>
				<input type="text" id="userAnswer2">

				<p>Какой конь не ест овса?</p>
				<input type="text" id="userAnswer3">

				<br>
				<a href="#" onClick="checkAnswers();">Ответить</a>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
    <?php include('partials\footer.php') ?>
<div>


</body>
</html>