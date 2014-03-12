<?php

class MidtermController extends BaseController
{
    public function display()
    {
        $restaurants = Restaurant::all();
        return View::make('Midterm/display',[
            'restaurants' => $restaurants
        ]);
    }

    public function reviews($id)
    {
        $restaurant =  Restaurant::find($id);
        $reviews = Review::getReviews($id);
        $fBook = "";
        if($restaurant->facebook_page != null)
        {
            $faceBook = new \itp\Facebook\FacebookPage();
            $fBook = $faceBook->get($restaurant->facebook_page);
        }

        return View::make('/Midterm/Reviews',[
            'restaurant' => $restaurant,
            'reviews'=>$reviews,
            'fBook'=>$fBook
        ]);
    }
}

