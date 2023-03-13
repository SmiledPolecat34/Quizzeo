<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="QuestionsTest.css">
    <title>Quiz questions</title>
</head>
<body>
    
    <div class="quiz-container" id ="quiz">
        <div class="quiz-header">
            <h2 id="question">Question Text</h2>
            <ul>
                <li>
                    <input type="radio" name="reponse" id="a" class="reponse">
                    <label for="a" id="a_text">Réponse a</label>
                </li>
                <li>
                    <input type="radio" name="reponse" id="b" class="reponse">
                    <label for="b" id="b_text">Réponse b</label>
                </li>
                <li>
                    <input type="radio" name="reponse" id="c" class="reponse">
                    <label for="c" id="c_text">Réponse c</label>
                </li>
                <li>
                    <input type="radio" name="reponse" id="d" class="reponse">
                    <label for="d" id="d_text">Réponse d</label>
                </li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>
    <script src="QuestionsTest.js"></script>
</body>
</html>