
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Day {
    public function to_text($n){
        $day=['senin','selasa','rabu','kamis','jumat','sabtu'];
        return $day[$n-1];
    }
}