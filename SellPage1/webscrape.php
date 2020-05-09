<?php
    include('simple_html_dom.php');
    $website = "https://www.fairprice.com.sg/search?query=noodles";
    $item_des = "noodles";
    $websiteUrl = "https://www.fairprice.com.sg/search?query=".$item_des;
    $html = file_get_html($websiteUrl);
    $mkt_price = '';
    // foreach($html -> find('.sc-1plwklf-9') as $mid){
    //     echo $mid;
    //     foreach($mid -> find('.sc-1bsd7ul-0') as $meow){
    //         $mkt_price = $meow;
    //         //echo $mkt_price;
    //         // if($mkt_price != ''){
    //         //     break;
    //         // }
    //     }
    //     // if($mkt_price != ''){
    //     //     break;
    //     // }
    // }

    // foreach($html -> find('.product-container') as $mid){
    //     foreach($mid -> find('.dQYxgv') as $result){
    //         echo $result;
    //     }
    // }

    $mkt_price = "";
    foreach($html -> find('.sc-1plwklf-9') as $mid){
        // echo '<pre>';
        // die(var_dump($mid));
        $meow = '';
        foreach($mid -> find('.dQYxgv') as $result){
            $meow = $result;
            if($meow != ''){
                echo '<pre>';
                die(var_dump($meow));
            break;
            }
        }
        if($meow != ''){
        break;
        }
        // foreach($mid -> find('.dQYxgv') as $meow){
        //     $mkt_price = $meow[1];
        //     echo $mkt_price;
        //     if($mkt_price != ''){
        //         break;
        //     }
        // }
        // if($mkt_price != ''){
        //     break;
        // }
    }
?>