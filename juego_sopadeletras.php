<!DOCTYPE html>
<html>
<head>
  <title>Sopa de Letras </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/col_center.css">
    <link rel="stylesheet" href="css/col_right.css">
    <link rel="stylesheet" href="css/color2.css">
    <link rel="stylesheet" href="css/modal_comment.css">
    <link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
   <link rel="stylesheet" type="text/css" href="styles/style.css">

<style type="text/css">
  p {
  font: 22pt sans-serif;
  margin: 20px 20px 0px 230px;
}

/**
* Styles for the puzzle
*/
#puzzle {
  border: 1px solid black;
  padding: 20px;
  float: left;
  margin: 20px 160px;

}

#puzzle div {
  width: 100%;
  margin: 0 auto;
}

/* style for each square in the puzzle */
#puzzle .puzzleSquare {
  height: 30px;
  width: 30px;
  text-transform: uppercase;
  background-color: white;
  border: 0;
  font: 1em sans-serif;
}

button::-moz-focus-inner {
  border: 0;
}

/* indicates when a square has been selected */
#puzzle .selected {
  background-color: orange;
}

/* indicates that the square is part of a word that has been found */ 
#puzzle .found {
  background-color: blue;
  color: white;
}

#puzzle .solved {
/*  background-color: purple;*/
  color: red;
}

/* indicates that all words have been found */
#puzzle .complete {
  background-color: green;
}

/**
* Styles for the word list
*/
#words {
  padding-top: 20px;
  -moz-column-count: 2;
  -moz-column-gap: 20px;
  -webkit-column-count: 2;
  -webkit-column-gap: 20px;
  column-count: 2;
  column-gap: 20px;
  width: 300px;

}

#words ul {
  list-style-type: none;
}

#words li {
  padding: 3px 0;
  font: 1em sans-serif;
}

/* indicates that the word has been found */
#words .wordFound {
  text-decoration: line-through;
  color: gray;
}

/**
* Styles for the button
*/
#solve {
  margin: 30px 30px;
    height: 30px;
    width: 100px;
}

/*.puzzleSquare{
  color:red;
}*/
</style>

</head>
<body>

<p>Sopa de letras</p>
<div id='puzzle'></div>
<div id='words'></div>
<div><button id='solve'>Solve</button></div>

<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="scripts/wordfind.js"></script> 
<script type="text/javascript" src="scripts/wordfindgame.js"></script> 
<script>

  var words = ['alligator', 'airplane', 'apple' , 'indian','iguana','ice'];

  // start a word find game
  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');

  $('#solve').click( function() {
    wordfindgame.solve(gamePuzzle, words);
  });

  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle(
    words, 
    {height: 9,
      width:  9,
      orientations: ['horizontal'],
      fillBlanks: true,
      preferOverlap: false}
  );
  wordfind.print(puzzle);

</script>
</body>
</html>