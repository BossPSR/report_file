<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function DateDiff($strDate1,$strDate2)
{
           return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
}
