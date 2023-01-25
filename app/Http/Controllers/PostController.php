<?php
    namespace App\Http\Controllers;
    use App\Models\Post;
    use App\Models\Video;
    use App\Models\Tag;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Illuminate\Http\Request;

    use App\Http\Requests\StorePostRequest;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Auth;



    // use Symfony\Component\HttpFoundation\Response;

    class PostController extends Controller {

        public function test(Request $request, $id=1, $name='nurbek'){
            $all = $request -> all();


            if($request -> is('login/1/nurbek*')){
                echo 'есть маска';
            }

        }

        public function form(Request $request){


            return view('post.form');
        }

        public function result(Request $request){
            $sum = array_sum([
                $request -> input('num_1'),
                $request -> input('num_2'),
                $request -> input('num_3'),
            ]);

            return view('post.result',[
                'sum'=> $sum,
            ]);
        }

        public function show(){
            Relation::enforceMorphMap([
                'post'=>'App\Models\Post',
                'video'=>'App\Models\Video',
            ]);
            // И наоборот, вы можете определить полное имя класса, связанное с псевдонимом полиморфного типа
            $alias = Post::find(1)->getMorphClass();
            dump($alias); // post
            $class = Relation::getMorphedModel($alias);
            dump($class); // App\Models\Post

            //все теги которыми пользуются пост с id = 1
            $post = Post::find(1);
            foreach($post -> tags as $tag){
                dump($tag -> name);
            }

            //все теги которыми пользуются видео с id = 1
            $video = Video::find(1);
            foreach($video -> tags as $tag){
                dump($tag -> name);
            }

            //все посты которые пользуются с тегом id = 1
            $tag = Tag::find(1);
            foreach($tag -> posts as $post){
                dump($post -> name);
            }

            //все видео которые пользуются с тегом id = 1
            $tag = Tag::find(1);
            foreach($tag -> videos as $video){
                dump($video -> name);
            }



            // return "pos id = $id";
        }

        public function all(){
            $daysOfMonth = cal_days_in_month(CAL_GREGORIAN, date('d',time()), date('Y',time()));
            return view('post.all',['var1' => '1', 'var2' => '2','className' => 'class1',
                'userData' => [
                    'name'=>'Nurbek',
                    'age'=>'26',
                    'salary'=>'<b>500</b>',
                    // 'position'=> '<b>web dev</b>',
                    'isAuth'=> false,
                    'num'=> -3,
                    'arr'=> [
                        ['name' => 'Nurbek','surname'=>'Kuanish','age'=>'26'],
                        ['name' => 'Seka','surname'=>'Zait','age'=>'30'],
                        ['name' => 'Asem','surname'=>'Tokatamisova','age'=>'31']
                    ],
                    'arrEmpty'=> [],
                    'nums' => [1,2,3,4,5],
                    'today'=>date('d',time()),
                    'daysOfMonth'=>$daysOfMonth,
                ]
            ]);
        }

        public function test2(Request $request){
            // $request -> session() ->flash('status','this is status');
            // $request -> session() -> reflash();
            // $request -> session() -> keep(['status']);
            // $request->session()->now('status', 'Task was successful!');
        }


        public function test3(Request $request){

            return $request -> session() -> get('status');
        }

        public function create() {
            return view('post.create');
        }

        public function store(StorePostRequest $request){

            // $validated = $request -> validateWithBag('post',[
            //     'title' => 'bail|required|unique:posts|max:255',
            //     'body' => 'bail|required',
            //     'birth_date' => 'bail|nullable|date',
            // ]);
            dump(Auth::check());
            // dump(Auth::logout());
            $validated = $request -> validated();


            dump($validated);
        }
    }

?>
