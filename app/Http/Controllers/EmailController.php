<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function signup($done)
    {
        if ($done == 0 || $done == 1)
        {
        return view('signup')->with('done', $done);
        }
        else
        {
            abort(404);
        }
    
    }

    public function emailStats()
    {
        if (Auth::check() && Auth::user()->admin ) 
        {
        $email = Email::all();
        
        //email address
        $people = 0;
        // general prgoramming expereience
        $gpe = [0,0,0,0];
        //python  programming expereience
        $ppe = [0,0,0,0];

        // topics array
        $topics = [
                    'python_basic' => 0, 
                    'linux_biasic' => 0,
                    'data_science' => 0,
                    'game_development' => 0,
                    'web_development' => 0,
                    'machine_learning' => 0,
                    'security' => 0
                  ];

        foreach($email as $row)
        {
            $people += 1;

            switch($row->gpe)
            {
                case 0:
                    $gpe[0] +=1;
                break;

                case 1: 
                    $gpe[1] += 1;
                break;

                case 2: 
                    $gpe[2] += 1;
                break;

                case 3:
                    $gpe[3] += 1;
                break;
            }

            switch($row->ppe)
            {
                case 0:
                    $ppe[0] +=1;
                break;

                case 1: 
                    $ppe[1] += 1;
                break;

                case 2: 
                    $ppe[2] += 1;
                break;

                case 3:
                    $ppe[3] += 1;
                break;

            }
            
            $topicarr = explode('|', $row->topics);

            foreach($topicarr as $item)
            {
                switch($item)
                {
                    case 'python_basic':
                        $topics['python_basic'] += 1; 
                    break;
    
                    case 'linux_basics': 
                        $topics['linux_basic'] += 1;
                    break;
    
                    case 'data_science': 
                        $topics['data_science'] += 1;
                    break;
    
                    case 'game_development':
                        $topics['game_development'] += 1;
                    break;

                    case 'web_development':
                        $topics['web_development'] += 1;
                    break;
    
                    case 'machine_learning':
                        $topics['machine_learning'] += 1;
                    break;

                    case 'security':
                        $topics['security'] += 1;
                    break;
   
                }       
            }
        }

        return view('admin.email_stats')->with([
                                                'people' => $people, 
                                                'gpe' => $gpe,
                                                'ppe' => $ppe,
                                                'topics' => $topics
                                                ]);
        }
        else 
        {
            return redirect('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store emails
        $this->validate($request, [
            'email' => 'required',
            'gpe' => 'required',
            'ppe' => 'required',
            'topics' => 'required'
        ]);

        // create email
        $email = new Email;
        $email->email = $request->input('email');
        $email->gpe = $request->input('gpe');
        $email->ppe = $request->input('ppe');

        $arr = implode('|', $request->input('topics'));
        $email->topics = $arr;
        $email->save();
        
        $done = 1;
        return redirect('/signup/1')->with('done', $done);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    // upload csv file
    public function uploadCSV()
    {

    }

    // ultility functions
    public function exportCSV()
    {
        $email = Email::all();

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=emails.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];
    
        //$reviews = Reviews::getReviewExport($this->hw->healthwatchID)->get();
        $columns = ['Email', 'Programming Expereince', 'Python Expereince', 'topics'];
    
        $callback = function() use ($email, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach($email as $row) {
                fputcsv($file, [ $row->email, $row->gpe, $row->ppe, $row->topics ]);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }
}
