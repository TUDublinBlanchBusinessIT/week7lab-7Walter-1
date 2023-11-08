<?php

class Team
{
    private $name="";
    private $totalGames=0;
    private $totalpoints=0;
    private $totalGoals=0;
    
    

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function finalScore($HomeTeam, $AwayTeam)    
    {
            $this->totalGames+=1;
            $this->totalGoals+= $HomeTeam;
        
        if 
            ($this->$HomeTeam > $AwayTeam){
            $this->$totalpoints+3; 
            
            }else     
            
            ($this->HomeTeam == $AwayTeam);
            $this->$totalpoints+1;
    }
  
    public function getGoalAverage()
    {
        if ($this->totalGames == 0) {
            return 0.0;
        }
        return $this->totalGoals /$this->totalGames;
    }
}
?>