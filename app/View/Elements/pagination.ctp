<?php
/*
 *  always put this file in the bottom when you want to use ajax pagination
 *
 *
 *
 */
    if(isset($url) && $url != null)
    {
        $a = explode('/', $url);
        for($i=1; $i<count($a); $i++)
        {
           $c = explode(":", $a[$i]);
           $b[$c[0]] = $c[1];
        }
        $url_param = array_merge($this->passedArgs, $b);
    }
    else{
        $url_param = $this->passedArgs;
    }
    
    $this->Paginator->options(array('url' => $url_param));
  

//echo $this->Paginator->first('First',array("class"=>"paginate_link"));
//echo $this->Paginator->prev(__('Previous'),array("class"=>"paginate_link"), null, array('class' => 'prev disabled '));
//echo $this->Paginator->numbers(array('separator'=>''));
////echo $this->paginator->next('NEXT ', array('escape' => false, 'class' => ' paginate_link next disabled', "title" => "NEXT"), null, array());
//echo $this->Paginator->next(__('Next'),array("escape" => false), null, array('class'=>'next  disabled paginate_link'));
//echo $this->Paginator->last('Last',array("class"=>"paginate_link"));
?>

<div class="pagination">
     <?php //echo $this->Html->image('indicator.gif', array('id' => 'busy-indicator')); ?>
<ul class="pagination">
        <li class="paginate_button"><?php  echo $this->Paginator->first('First',array("class"=>"paginate_link ")); ?></li>
        <li class="paginate_button"><?php echo $this->Paginator->prev(__('Previous'),array("class"=>"paginate_link"), null, array('class' => 'prev disabled ')); ?></li>
        <li class="paginate_button"><?php echo $this->Paginator->numbers(array('separator'=>'',"class"=>"paginate_link"));?></li>
        <li class="paginate_button"><?php echo $this->Paginator->next(__('Next'),array("escape" => false), null, array('class'=>'next  disabled paginate_link')); ?></li>
        <li class="paginate_button"><?php echo $this->Paginator->last('Last',array("class"=>"paginate_link")); ?></li>

</ul>
</div>

<style type="text/css">
.paginate_button .current{
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
</style>
