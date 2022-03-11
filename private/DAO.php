<?php declare(strict_types=1);

/**
 *
 */

interface Dao
{
  public function getAll() : array;
  public function get($sql, $data=[]) : array;
  public function insert($sql, $data=[]) : bool;
  public function update($sql, $data=[]) : bool;
  public function createTable($query) : void;
}

 ?>
