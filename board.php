<?php

  class Board {
    var $grid = array_fill(0, 8, array_fill(0, 8, )));
    const START_ROWS = [
      "red" => [0,1,2],
      "black" => [5,6,7]
    ];

    function __construct($filled = true) {
      $this->populateBoard($filled);

    }

    public function getPiece($pos) {

    }

    public function setPiece($pos) {

    }

    public function dup() {

    }

    public function add_piece($piece) {

    }

    public function pieces($color = NULL) {

    }

    public function isEmpty($pos) {

    }

    public function isEnemy($pos) {

    }

    public function canJump($blockedPos, $color, $jumpPos) {

    }

    public function isValidMove($move) {

    }

    public function updateMove($piece, $endPos) {

    }

    public function makeMoves($turnColor, $piecePos, $move) {

    }

    public function areAllPiecesRed() {

    }

    public function areAllBlackPieces() {

    }

    public function winner() {

    }

    public function isGameOver() {

    }

    public function render() {

    }

    public function populateBoard($filled) {
      if ($filled) {
        return;
      }
      ["red", "black"]
    }

    public function placePieces($color) {

    }

  }
