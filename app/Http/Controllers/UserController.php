<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewBlogRequest;
use App\Http\Requests\NewSearchRequest;
use App\Http\Requests\NewPostRequest;
use App\Models\Resources\Blog;
use App\User;
use App\Models\Resources\Post;
use App\Models\Resources\Amicizia;
use App\Models\GestoreAmici;

class userController extends Controller {

    protected $_AmiciModel;

    public function __construct() {
        $this->middleware('auth');
        $this->_AmiciModel = new GestoreAmici;
    }


    public function newBlog(NewBlogRequest $request){ 

        $blog = new Blog;
        $blog->proprietario = auth()->user()->id;
        $blog->tema = $request->tema;
        $blog->save();

        $primoMessaggio = new Post;
        $primoMessaggio->autore = auth()->user()->id;
        $primoMessaggio->blog =$blog->id;
        $primoMessaggio->testo =$request->messaggio;
        $primoMessaggio->save();


        return redirect()->route('home');

              
    }

    public function getMyBlogs(){
        $blogs = Blog::where('proprietario',auth()->user()->id)->get();
        return view('myBlogs')
            ->with('blogs', $blogs);

    }

    public function newPost(NewPostRequest $request , $id){
        $post = new Post;
        $post->autore = auth()->user()->id;
        $post->blog = $id;
        $post->testo = $request->testo;
        $post->save();

        return view('homeUser');

    }

    public function searchFriends(NewSearchRequest $request){

        $users = User::where('role','user')
                        ->where('id','!=',auth()->user()->id)
                        ->where(function ($query) use ($request) {
                                    if(substr($request->name, -1) == '*'){
                                            $name = rtrim($request->name, "*");
                                            $query->orWhereLike('name',$name); 
                                    }
                                    else{
                                        $query->orWhere('name', $request->name);
                                    }
                                    if(substr($request->surname, -1) == '*'){
                                            $surname = rtrim($request->surname, "*");
                                            $query->orWhereLike('surname',$surname); 
                                    }
                                    else{
                                        $query->orWhere('surname', $request->surname);
                                    }

               
                                    })
                                ->get();
        return view('searchResult')
            ->with('users', $users);

    }

    public function getBlog($id){
        $blog = Blog::find($id);

        $proprietario = User::find($blog->proprietario);

        $posts = Post::Where('blog',$id)
                    ->join('users', 'users.id', '=', 'post.autore')
                    ->select('users.*','post.*')
                    ->get();

        return view('blog')
            ->with('blog',$blog)
            ->with('proprietario',$proprietario)
            ->with('posts',$posts);

    }

    public function getProfilo($id){
        $utente = User::find($id);
        $amicizia = Amicizia::where(function ($query)  use ($id){
                                    $query->where('richiedente', $id)
                                            ->where('destinatario',auth()->user()->id);
                                    })
                                ->orWhere(function ($query)  use ($id){
                                    $query->where('richiedente', auth()->user()->id)
                                            ->where('destinatario', $id);
                                    })
                                    ->take(1)
                                    ->get();

        $blogs = Blog::where('proprietario',$id)->get();

        if($utente->visibilita){
            return view('profiloUtente')
                ->with('utente',$utente)
                ->with('amicizia',$amicizia)
                ->with('blogs',$blogs);
        }
        else{
            if(count($amicizia) == 0){
                return view('profiloUtente')
                    ->with('utente',$utente);
            }
            else{
                return view('profiloUtente')
                    ->with('utente',$utente)
                    ->with('amicizia',$amicizia)
                    ->with('blogs',$blogs);;
            }

        }
        

        
    }


    
    public function amicizia($id){
        $amicizia = new Amicizia;
        $amicizia->richiedente = auth()->user()->id;
        $amicizia->destinatario = $id;
        $amicizia->save();

        return view('homeUser');
    }


    public function rispostaAmicizia($id,$risposta){
        $amicizia =  Amicizia::find($id);
        $amicizia->stato = $risposta; 
        $amicizia->visualizzata = true;
        $amicizia->save();

        return view('homeUser');

    }

    public function getAmici(){
        $amici = $this->_AmiciModel->getAmici(auth()->user()->id);
        $amicizie = Amicizia::where('destinatario',auth()->user()->id)
                            ->where('visualizzata',false)
                            ->join('users', 'users.id', '=', 'amicizia.richiedente')
                            ->select('users.*','amicizia.*')
                            ->get();
        $rifiutate = Amicizia::where('destinatario',auth()->user()->id)
                            ->where('visualizzata',true)
                            ->where('stato',false)
                            ->join('users', 'users.id', '=', 'amicizia.richiedente')
                            ->select('users.*','amicizia.*')
                            ->get();
        return view('listaAmici')
                        ->with('amici', $amici)
                        ->with('rifiutate', $rifiutate)
                        ->with('amicizie', $amicizie);

    }
    public function index() {
        return view('user');
    }

}
