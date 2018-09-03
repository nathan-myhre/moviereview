<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MovieController extends Controller
{
    
  /**
  * Finished
  *
  */
    public function findMovies(Request $request)
    {
      if ($request->has('s') && $request->s !== NULL)
      {
        $url = 'http://www.omdbapi.com/?apikey='.env('OMDB_API_KEY')."&s=".$request->s;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if (strpos($data,'False') === false)
        {
          return response()->json(['Response' => 'Success', 'status' => 'Movie found',  'data' => json_decode($data), 'code' => $httpcode], 200);
        }
        return response()->json(['Response' => 'False', 'data' => 'No results found'], 204);
      }
      return response()->json(['Response' => 'False', 'data' => 'Invalid or missing parameters'], 400);
    }
  
  /**
  * Finished
  *
  */
    public function getMovieDetails(Request $request)
    {
      $url = 'http://www.omdbapi.com/?apikey='.env('OMDB_API_KEY')."&i=".$request->id;
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
      curl_setopt($ch, CURLOPT_TIMEOUT, 5);
      $data = curl_exec($ch);
      $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      if (strpos($data,'False') === false)
      {
        return response()->json(['Response' => 'Success', 'status' => 'Movie found',  'data' => json_decode($data), 'code' => $httpcode], 200);
      }
      return response()->json(['Response' => 'False', 'data' => 'IMDb id does not exist'], 400);
    }
    
}
