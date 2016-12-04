<?php
App::uses('Component', 'Controller');
class RandomComponent extends Component
{
 
/**
 * Password generator function
 *
 * This function will randomly generate a password from a given set of characters
 *
 * @param int = 8, length of the password you want to generate
 * @return string, the password
 */    
    public function generateRandomString ($length)
    {
        // initialize variables
        $str = "";
        $i = 0;
        $possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
 
        // add random characters to $password until $length is reached
        while ($i < $length) {
            // pick a random character from the possible ones
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
 
            // we don't want this character if it's already in the password
            if (!strstr($str, $char)) { 
                $str .= $char;
                $i++;
            }
        }
        return $str;
    }
}
?>