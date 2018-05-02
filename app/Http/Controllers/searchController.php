<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    function search()
    {
        //$name = $request->input('name');
        return view('main.search');
    }
    function value(Request $request)
    {
        $name = $request->input('title');
    }
    function desc(Request $request, $id)
    {
        // $des = DB::table('book')
        //                     ->join('title','book.title','title.code')->where('title',$id)
        //                     ->get();

        // foreach($des as $d)
        // {
        //     // $title = DB::table('title')->where('code',$d->Title)->get();
        //     // echo $title;
        //     echo $d->Title;
        //     echo "hello\n";
        // }
        // return $des;
        // //

        $des = DB::select("
                    select book.doc_no as Book_No,title.name as Book_name,publisher.name as Publisher_name,edition.version
                    from (((book
                    inner join title
                    on book.title = title.code)
                    inner join publisher
                    on book.publisher = publisher.code)
                    inner join edition 
                    on book.edition = edition.code)
                    where title = $id
                        
        ");
       //return count($des);
       
        foreach($des as $d )
        {
            $data = $d->Book_No;

             $val =DB::select("
                        select author.name
                        from book_author
                        inner join author
                        on book_author.author = author.code
                        where doc_no = $data");  
            foreach($val as $v)
            {
                $d->Author = $v->name;
            }        

        }

        return $des;

    }
}
