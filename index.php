  <?php 
  
   do{ 
     $playerOne = readline('Player 1 (X) - Type your name: ');
     $playerTwo = readline('Player 2 (O) - Type your name: ');

     $player = 'X';

     $board = [
       '.','.','.',
       '.','.','.',
       '.','.','.',
     ];

     $winner = null;
     

     while($winner === null){
       echo <<<EOL

             Positions:  |   Board
                         |
                 0|1|2   |   $board[0]|$board[1]|$board[2]
                 3|4|5   |   $board[3]|$board[4]|$board[5]
                 6|7|8   |   $board[6]|$board[7]|$board[8]
                 
                 
            EOL

       ;  

       $position = (int) readline("Player {$player}, chose your position:");

       if (!in_array($position, [0,1,2,3,4,5,6,7,8])) {
         echo "\nNon-existent position type again.\n";
         continue;
       }

       if($board[$position] !== '.'){
        echo "\nPosition occupied please enter again.\n";
        continue;
       }

       $board[$position] = $player;

     if (
       ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X') ||
       ($board[3] === 'X' && $board[4] === 'X' && $board[5] === 'X') ||
       ($board[6] === 'X' && $board[7] === 'X' && $board[8] === 'X') ||
       ($board[0] === 'X' && $board[3] === 'X' && $board[6] === 'X') ||
       ($board[1] === 'X' && $board[4] === 'X' && $board[7] === 'X') ||
       ($board[2] === 'X' && $board[5] === 'X' && $board[8] === 'X') ||
       ($board[0] === 'X' && $board[4] === 'X' && $board[8] === 'X') ||
       ($board[2] === 'X' && $board[4] === 'X' && $board[6] === 'X') 
     ) {
       $winner = 'X';
      }

     if (
       ($board[0] === 'O' && $board[1] === 'O' && $board[2] === 'O') ||
       ($board[3] === 'O' && $board[4] === 'O' && $board[5] === 'O') ||
       ($board[6] === 'O' && $board[7] === 'O' && $board[8] === 'O') ||
       ($board[0] === 'O' && $board[3] === 'O' && $board[6] === 'O') ||
       ($board[1] === 'O' && $board[4] === 'O' && $board[7] === 'O') ||
       ($board[2] === 'O' && $board[5] === 'O' && $board[8] === 'O') ||
       ($board[0] === 'O' && $board[4] === 'O' && $board[8] === 'O') ||
       ($board[2] === 'O' && $board[4] === 'O' && $board[6] === 'O') 
      ){
        $winner = 'O';
       }

       if(!in_array('.',$board) ) {
         break;
       }

       if ($player === 'X') {
        $player = 'O';
    } else {
        $player = 'X';
    }
                  
     }

     echo <<<EOL


          Positions:  |   Board
                      |
              0|1|2   |   $board[0]|$board[1]|$board[2]
              3|4|5   |   $board[3]|$board[4]|$board[5]
              6|7|8   |   $board[6]|$board[7]|$board[8]


        EOL

     ;

     if ($winner === 'X') {
       echo "Winner:  {$playerOne}.\n ";
     }elseif ($winner === 'O') {
       echo "Winner:  {$playerTwo}.\n ";
     }else {
       echo "it's a draw.\n";
     }

     $playAgain = filter_var(
       readline("\nYou wish play again? (true/false):"),
       FILTER_VALIDATE_BOOLEAN
     );

     echo "\n";
   }while($playAgain === true);
  
  
  
  
  
  
  
  
  
  
  
  
  
  
