<?php

//file : db.class.php
abstract class db{
  public abstract function connect($h,$u,$p);
  public abstract function query($sql);
  public abstract function getAll($sql);
  public abstract function getRow($sql);
  public abstract function getOne($sql);
  public abstract function autoExecute($stable,$data,$cat='insert',$where='');


}

 ?>