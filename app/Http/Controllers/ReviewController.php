<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\ReviewVote;

class ReviewController extends Controller
{
   
  
    /**
    * Get all reviews from DB
    * Parameters: none
    */
    public function getReviews()
    {
        $reviews = Review::all();
        if (!$reviews->isEmpty())
        {
            return response()->json(['Response' => 'Success', 'status' => 'All reviews fetched',  'data' => $reviews], 200);
        }
        return response()->json(['Response' => 'False', 'data' => 'No Reviews found'], 404);
    }
  
  
    /**
    * Get specific review matching review id
    * Parameters: review id
    */
    public function getReview(Request $request)
    {
        $review = Review::where('id', $request->id)->first();
        if (!is_null($review))
        {
            return response()->json(['Response' => 'Success', 'status' => 'Review fetched',  'data' => $review], 200);
        }
        return response()->json(['Response' => 'False', 'data' => 'Review id does not exist'], 400);
    }
  
  
  
    /**
    * Create review for movie based on imdb id
    * Parameters: imdb_id, user_id, content
    */
    public function createReview(Request $request)
    {
        // not working if statement need to verify keys are in request and not empty
        if ($request->has(['imdb_id', 'user_id', 'content']) && $request->imdb_id !== NULL && $request->user_id !== NULL && $request->content !== NULL)
        {
            $review = new Review;
            $review->imdb_id = $request->imdb_id;
            $review->user_id = $request->user_id;
            $review->content = $request->content;
            $review->save();
            return response()->json(['Response' => 'Success', 'status' => 'Review created', 'data' => $review], 201);
        }
        return response()->json(['Response' => 'False', 'data' => 'Invalid or missing parameters'], 400);
    }
  
  
    /**
    * Edit review for movie based on review id
    * Parameters: review id, user_id, content
    */
    public function editReview(Request $request)
    {
        if ($request->has(['user_id', 'content']) && $request->user_id !== NULL && $request->content !== NULL)
        {
            $review = Review::findOrFail($request->id);
            if ($request->user_id === $review->user_id)
            {
                $review->user_id = $request->user_id;
                $review->content = $request->content;
                $review->save();
                return response()->json(['Response' => 'Success', 'status' => 'Review updated',  'data' => $review], 200);
            }
            return response()->json(['Response' => 'False', 'data' => 'Not authorized to edit that review'], 403);

        }
        return response()->json(['Response' => 'False', 'data' => 'Invalid or missing parameters'], 400);
    }
  
  
  
    /**
    * Delete review based on review id
    * Parameters: review id
    */
    public function deleteReview(Request $request)
    {
        $review = Review::where('id', $request->id)->get();
        if (!$review->isEmpty())
        {
            Review::where('id', $request->id)->delete();
            return response()->json(['Response' => 'Success', 'status' => 'Review deleted',  'data' => $review], 200);
        }
        return response()->json(['Response' => 'False', 'data' => 'Review id does not exist'], 404);
    }
  
  
    /**
    * Add vote to review either
    * parameters: review id, user_id, value
    */
    public function addVote(Request $request)
    {
        if ($request->has(['user_id','value']) && $request->user_id !== NULL && $request->value !== NULL)
        {
            if (!in_array($request->value, array("1","-1"), true ))
            {
                return response()->json(['Response' => 'False', 'data' => 'Value must be either 1 or -1'], 400);
            }
            $checkVotes = ReviewVote::where('review_id', $request->id)
                ->where('user_id', $request->user_id)
                ->get();

            if ($checkVotes->isEmpty())
            {
                $reviewVote = new ReviewVote;
                $reviewVote->review_id = $request->id;
                $reviewVote->user_id = $request->user_id;
                $reviewVote->value = $request->value;
                $reviewVote->save();
                return response()->json(['Response' => 'Success', 'status' => 'Vote added',  'data' => $reviewVote], 201);
            }
        //do vote value adjustment logic here
        //if new vote is 1 or -1 and sum of old votes != 0, vote is now 0
        //if sum of old votes is 0 then vote == new vote
           
            return response()->json(['Response' => 'False', 'data' => 'You have already voted on this review'], 400);
        }
        return response()->json(['Response' => 'False', 'data' => 'Invalid or missing parameters'], 400);
    }
}
