<?php

class Adv_search_query_model extends CI_Model {

    public $k;
    public $still;
    public $video;
    public $zstack;
    public $time; 
    public $grouped;
    public $computable;
    public $public_domain;
    public $attribution_cc;
    public $attribution_nc_sa;
    public $copyright;
    public $image_search_parms_biological_process;
    public $image_search_parms_cell_type;
    public $image_search_parms_cell_line;
    public $image_search_parms_foundational_model_anatomy;
    public $image_search_parms_cellular_component;
        
    public function print_model()
    {
        echo "<br/>-----------------Params----------------------";
        echo "<br/>k:".$this->k;
        echo "<br/>still:".$this->still;
        echo "<br/>video:".$this->video;
        echo "<br/>zstack:".$this->zstack;
        echo "<br/>time:".$this->time;
        echo "<br/>grouped:".$this->grouped;
        echo "<br/>computable:".$this->computable;
        echo "<br/>public_domain:".$this->public_domain;
        echo "<br/>attribution_cc:".$this->attribution_cc;
        echo "<br/>attribution_nc_sa:".$this->attribution_nc_sa;
        echo "<br/>copyright:".$this->copyright;
        echo "<br/>image_search_parms_biological_process:".$this->image_search_parms_biological_process;
        echo "<br/>image_search_parms_cell_type:".$this->image_search_parms_cell_type;
        echo "<br/>-----------------End Params----------------------";
    }
    
    
}
