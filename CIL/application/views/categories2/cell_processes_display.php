<div class="container">
    <div class="row" id="browse_header">
        
        <div class="col-md-6">
           
        <div class="grid_12">
        <div class="grid_6" id="browse_header_text">
        Explore the Cell Image Library by
        <span class="category">Cell Process</span>
        </div> 
        </div>
            
        </div>
        <div class="col-md-6 pull-left">
           
            <a href="/pages/search_help#basic_search" class="not_expected_results">(Not the results you were expecting?)</a>
            <a href="/pages/search_help#submit_search_comments" class="not_expected_results">(Comments)</a>
            
        </div>
        
    </div>

    
    
    
    <br/>
<?php
    /*$cell_processes = $summary->Cell_process;
    $count = count($cell_processes);
    
        $newRow = false;
    $i = 0;
    $index = 0;
    while($i<$count)
    {*/
if(isset($result->hits->hits))
{
    $hits = $result->hits->hits;
    $count = count($hits);
    for($i=0;$i<$count;$i++)
    {
?>
    <div class="row">
        <div class="col-md-4">
<?php
        /*$cp = $cell_processes[$i];
        include 'inner_cell_processes_image.php';
        $i++;*/
        if($i < $count)
        {
            $item = $hits[$i];
            if(isset($item->_source->Name) &&
                isset($item->_source->Total) &&
                isset($item->_source->Rep_id))
            {
                include 'inner_cell_processes_image.php';
            }
            $i++;
        }
?>
        </div>
        
        <div class="col-md-4">
<?php                
         /*if($i<$count)
         {
             $cp = $cell_processes[$i];
             //echo $cp->Name;
             include 'inner_cell_processes_image.php';
            $i++;
         }*/
        if($i < $count)
        {
            $item = $hits[$i];
            if(isset($item->_source->Name) &&
                isset($item->_source->Total) &&
                isset($item->_source->Rep_id))
            {
                include 'inner_cell_processes_image.php';
            }
            $i++;
        }
?>
        </div>
        
        <div class="col-md-4">
<?php                
         /*if($i<$count)
         {
             $cp = $cell_processes[$i];
             //echo $cp->Name;
             include 'inner_cell_processes_image.php';
            $i++;
         }*/
        if($i < $count)
        {
            $item = $hits[$i];
            if(isset($item->_source->Name) &&
                isset($item->_source->Total) &&
                isset($item->_source->Rep_id))
            {
                include 'inner_cell_processes_image.php';
            }
            $i++;
        }
?>
        </div>
       
        </div>
        <br/>
<?php   
    }
}
?>


    
    
</div> 