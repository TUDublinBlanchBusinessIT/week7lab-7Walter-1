<?php

class Team
{
    private $name;
    private $totalGames=0;
    private $totalpoints=0;
    private $totalGoals=0;
    
    

    public function __construct($name)
    {
        $this->name = $name;
    }

    
    
    public function finalScore($HomeTeam, $AwayTeam)
            
    {
            return $this->totalGames+=1;
        
                        
        if 
            ($this->$HomeTeam > $AwayTeam){
            $this->$totalpoints+3; 
            
            }else     
            
            ($this->HomeTeam == $AwayTeam);
            $this->$totalpoints+1;

    }
  
}
?>