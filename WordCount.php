<?php
// File : WordCount.pphp
class WordCount
{
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
    }
}
?>