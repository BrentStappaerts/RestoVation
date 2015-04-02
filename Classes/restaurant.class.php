<?php
class restaurant
{
    private $m_sRestoName;
    private $m_sRestoType;
    private $m_iAantalTafels;
    
    public $m_sContactStreet;
    public $m_sContactCity;
    public $m_sContactPhone;
    
    public function __set($p_sProperty, $p_vValue)
    {
        switch($p_sProperty)
        {
            case 'Restaurant':
            if($p_vValue !== ""){
                $this->m_sRestoName = $p_vValue;
            } else { 
                throw new Exception('Restaurant must have a name.');
            }
            break;
        case 'Restaurant type':
            $this->m_sRestoType = $p_vValue;
            break;
            
        case 'Aantal tafels':
            $this->m_iAantalTafels = $p_vValue;
            break;
            
        case 'Street name':
            $this->m_sContactStreet = $p_vValue;
            break;
            
        case 'City':
            $this->m_sContactCity = $p_vValue;
            break;
            
        case 'Phone number':
            $this->m_sContactPhone = $p_vValue;
            break;
        }
        
    }
    
    public function __get($p_sProperty)
    {
        switch($p_sProperty)
        {
            case 'Restaurant':
                return $his->m_sRestoName;
                break;
            case 'Aantal tafels':
                return $this->m_iAantalTafels;
                break;
            case 'Street name':
                return $this->m_sContactStreet;
                break;
            case 'City':
                return $this->m_sContactCity;
                break;
            case 'Phone number':
                return $this->m_sContactPhone;
                break;
        }
    }
    
    
    
    
}
    }
    