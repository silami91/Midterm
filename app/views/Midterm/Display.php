<!doctype html>
<html>

<head>
    <title>Yelp Restaurants</title>
</head>
<body>
<h1>Yelp</h1>
    <?php foreach($restaurants as $restaurant): ?>
        <h3><?php echo $restaurant->restaurant_name?> (<?php echo $restaurant->city?>)</h3>
        <?php if($restaurant->facebook_page != null):?>
            <p>Facebook Page:<a href=" http://facebook.com/<?php echo $restaurant->facebook_page?>">here</a> </p>
        <?php endif ?>
        <?php if($restaurant->facebook_page == null):?>
            <p>Facebook page does not exist.</p>
        <?php endif ?>
        <a href="/restaurants/<?php echo $restaurant->id?>/reviews">View Reviews</a>
    <?php endforeach ?>
</body>
</html>