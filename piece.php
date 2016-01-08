<?php

  class Piece {

    const RED_MOVES = [
      [1, -1],
      [1,  1]
    ];
    const BLACK_MOVES = [
      [-1, -1],
      [-1,  1]
    ];

    public $color;
    public $board;
    public $pos;
    public $rank;

    function __construct($color, $pos, $board, $rank = "pawn") {
      $this->$color = $color;
      $this->$board = $board;
      $this->$pos = $pos;
      $this->$rank = $rank;

    }

    public function toString() {
      $this->$rank === "king" ? "K" : "O";

    }

    public function moveDirs() {

      if ($this->$rank === "king") {
        return array_merge(RED_MOVES, BLACK_MOVES);
      } else {
        $this->$color === "red" ? RED_MOVES : BLACK_MOVES;
      }

    }

    public function validMoves($moves) {
      $testBoard = $this->$board->dup();
      try {
        $testBoard->getPiece($this->$pos)->performMoves();
      } catch (Exception $e) {
          return false
      }

      return true

    }

    public function performMovesSafe($moves) {

    }

    public function performMovesSafe($moves) {

    }

    public function promote() {

       if ($this->shouldPromote()) {
         $this->$rank = "king";
       }

    }

    public function shouldPromote() {
       return ($this->$color === "red" && $this->$pos[0] === 7) ||
              ($this->$color === "black" && $this->$pos[0] === 0);

    }

    public function performSlide() {

    }

    public function performJump() {

    }

    public function jumps() {

    }

    public function slides() {

    }

    public function generateSlide($startPos, $dir) {

    }

    public function generateJump($startPos, $dir) {
       return [$startPos[0] + $dir[0] * 2, $startPos[1] + $dir[1] * 2]
    }

    public function jumpDirection($startPos, $endPos) {
       return [($endPos[0] - $startPos[0]) / 2, ($endPos[1] - $startPos[1]) /2];

    }



  }
