<?php
    include('simple_html_dom.php');
    $website = "https://www.fairprice.com.sg/search?query=instant%20noodles";
    $html = file_get_html($website);
    $mkt_price = '';
    foreach($html -> find('.sc-1plwklf-9') as $mid){
        foreach($mid -> find('.sc-1bsd7ul-0') as $meow){
            $mkt_price = $meow;
            break;
        }
    break;
    }
?>