<?php
  // Class is created to work with Agent info

  class Agent{
    private $AgtFirstName;
    private $AgtMiddleInitial;
    private $AgtLastName;
    private $AgtBusPhone;
    private $AgtEmail;
    private $AgtPosition;
    private $AgencyId;
    private $AgtPsw;

    // Public function designed to accept array and store within a class element
    public function setAgentData(array $data)
    {
        foreach ($data as $prop => $value) {
            $this->{$prop} = $value;
        }
    }

    // Public function designed to create comma separated list from array
    public function toString(array $data){
      $comma_separated ="'". implode("', '", $data)."'";
      return $comma_separated;
    }

    public function AgtFirstName(){
      return $this->AgtFirstName;
    }
    public function getAgtMiddleInitial(){
      return $this->AgtMiddleInitial;
    }
    public function getAgtLastName(){
      return $this->AgtLastName;
    }
    public function getAgtBusPhone(){
      return $this->AgtBusPhone;
    }
    public function getAgtEmail(){
      return $this->AgtEmail;
    }
    public function getAgtPosition(){
      return $this->AgtPosition;
    }
    public function getAgencyId(){
      return $this->AgencyId;
    }
    public function getAgtPsw(){
      return $this->AgtPsw;
    }
  }
?>
