<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

  <div class="post-archive-trigger">
    <div class="post-archive-icon"></div>
  </div>

  <!-- post archive -->
<?php
					$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
				    $year=0; $i=0; $j=0;
				    $output = '<div class="post-archive"><div class="post-archive-iterms">';
				    while($archives->next()){
				        $year_tmp = date('Y',$archives->created);
				        $y=$year;
						
						
						$output .= '<a id="title-iterm" class="post-archive-iterm" onClick="getValue(this)" href="'.$archives->permalink .'" >
       <span class="post-archive-date">'.date('Y-m-d',$archives->created).'</span>
        <span id="ifcheck" class="post-archive-title">'. $archives->title .'</span>
      </a>';	  
 }
 
 $output .='<script>if(document.getElementById("title-iterm").href==window.location.href){var div=document.getElementById("ifcheck");div.className="post-archive-title checked"};</script>';
 
				    $output .= '</div></div>';
				    echo $output;
?>