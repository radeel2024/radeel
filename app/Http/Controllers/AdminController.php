<?php

namespace App\Http\Controllers;

use App\Models\abonnement;
use App\Models\actuilite;
use App\Models\album;
use App\Models\annonce;
use App\Models\article;
use App\Models\appel_offre;
use App\Models\avis_offre;
use App\Models\aviscoupure;
use App\Models\chiffre;
use App\Models\physiqueresiliation;
use App\Models\publication;
use App\Models\racordement;
use App\Models\reclamation;
use App\Models\resultatappeloffer;
use App\Models\rhappele;
use App\Models\RHAvisrec;
use App\Models\RHresultat;
use App\Models\sliders;
use App\Models\sms;
use App\Models\stage;
use App\Models\zonespeciale;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DOMDocument;
use Spatie\Permission\Traits\HasRoles;
use App\Models\role;
use App\Models\vistore;
use Barryvdh\DomPDF\Facade\Pdf;



use Arr;


class AdminController extends Controller
{
    public function Acceuil2()
    {

        $now = now();
        // Get the current timestamp

        $annoncefilter = annonce::where('db', '<=', $now)
            ->where('df', '>=', $now)
            ->get();

        $annonce = annonce::all();
        $statistique = chiffre::all();

        $article = article::all();

        $expire = annonce::value('df');
        $debut = annonce::value('db');

        $pub = publication::all();
        $status = annonce::all();

        $slider = DB::table('sliders')
            ->join('articles', 'sliders.articles_id', '=', 'articles.id')
            ->select('sliders.*', 'articles.title', 'articles.image', 'articles.des')
            ->orderBy('sliders.classment', 'asc')
            ->get();


        return view('admin.acceuil2', ['slider' => $slider, 'article' => $article, 'expire' => $expire, 'debut' => $debut, 'pub' => $pub, 'st' => $statistique, 'annoncefilter' => $annoncefilter, 'status' => $status, 'annonce' => $annonce]);

    }
    public function annonce()
    {
        $article = article::all();
        return view('admin.annonce', compact('article'));
    }
    public function slider()
    {
        $slider = DB::table('sliders')
            ->join('articles', 'sliders.articles_id', '=', 'articles.id')
            ->select('sliders.*', 'articles.title', 'articles.image', 'articles.des')
            ->orderBy('sliders.classment', 'asc')
            ->get();

        $article = article::all();


        return view('admin.slider', compact('slider', 'article'));
    }
    public function chiffre()
    {
        $st = chiffre::all();

        return view('admin.chiffrecles', compact('st'));
    }
    public function reclamation()
    {
        $commu = reclamation::orderby('created_at', 'asc')->get();
        return view('admin.reclamation', compact('commu'));
    }
    public function info()
    {
        $sms = sms::orderby('created_at', 'asc')->get();

        return view('admin.information', compact('sms'));
    }
    public function updatestatus()
    {
        return "hello";
    }
    function __construct()
    {
        $this->middleware(
            'permission:acceuil',
            ['only' => ['acceuil', 'addslide', 'updateannonce', 'addannonce', 'addarticle', 'deletearticle', 'updatearticle']]
        );
        $this->middleware(
            'permission:ressources-humaines',
            ['only' => ['rh', 'statistiquerh']]
        );
        $this->middleware(
            'permission:users',
            ['only' => ['users', 'statistique']]
        );
        $this->middleware(
            'permission:achat-Logistique',
            ['only' => ['achat', 'statistiqueachatlo']]
        );
        $this->middleware(
            'permission:galerie',
            ['only' => ['album']]
        );
        $this->middleware(
            'permission:commerciale',
            ['only' => ['commerciale', 'statistiqueCom']]
        );
        $this->middleware(
            'permission:avis-coupure',
            ['only' => ['avis']]
        );
        $this->middleware(
            'permission:zone-speciale',
            ['only' => ['zone']]
        );
        $this->middleware(
            'permission:communication',
            ['only' => ['communication', 'statistiqueC']]
        );
        $this->middleware(
            'permission:contact',
            ['only' => ['contact']]
        );






    }
    //Statistique Commerciale
    public function statistiqueCom()
    {

        $abonement = abonnement::count();
        $racor = racordement::count();
        $resil = physiqueresiliation::count();

        return view('admin.statistiqueCome', compact('abonement', 'racor', 'resil'));
    }
    //Statistique achat 
    public function statistiqueachatlo()
    {

        $abonement = appel_offre::count();
        $racor = avis_offre::count();
        $resil = resultatappeloffer::count();

        return view('admin.statistiqueachatlo', compact('abonement', 'racor', 'resil'));
    }
    //Statistique RH 
    public function statistiquerh()
    {

        $abonement = RHAvisrec::count();
        $racor = RHresultat::count();
        $resil = stage::count();

        return view('admin.statistiqueaRH', compact('abonement', 'racor', 'resil'));
    }

    //statistique Communication
    public function statistiqueC()
    {

        $visitsByMonth = DB::table('vistores')
            ->select(
                DB::raw('MONTH(date) as month'), // Extract month from the date
                DB::raw('SUM(nbviste) as visits') // Sum of nbviste for each month
            )
            ->groupBy('month') // Group by year and month
            ->orderBy('month') // Optional: Order by month
            ->get();






        /*   $articles = DB::table('articles')
          ->join('articlevisites', 'articlevisites.articles_id', '=', 'articles.id')
          ->select(
              DB::raw('SUM(nbviste) as visits'),
              DB::raw('title as toto'),
          )
          ->groupBy( 'articles.title')
          ->get(); */

        $articles = article::all();


        $annoncecount = annonce::count();
        $articlecount = article::count();
        $reclamationcount = reclamation::count();
        $smscount = sms::count();

        $reclamationtraiter = reclamation::where('status', 'traiter')->count();
        $reclamationencours = reclamation::where('status', 'En cours')->count();



        return view('admin.statistiqueC', compact(
            'visitsByMonth',
            'articles',
            'annoncecount',
            'articlecount',
            'reclamationcount',
            'smscount',
            'reclamationtraiter',
            'reclamationencours'
        ));
    }


    //statistique 
    public function statistique()
    {

        $visitsByMonth = DB::table('vistores')
            ->select(
                DB::raw('MONTH(date) as month'), // Extract month from the date
                DB::raw('SUM(nbviste) as visits') // Sum of nbviste for each month
            )
            ->groupBy('month') // Group by year and month
            ->orderBy('month') // Optional: Order by month
            ->get();

        $device = DB::table('vistores')
            ->select(
                DB::raw('SUM(nbviste) as visits') // Sum of nbviste for each month
            )
            ->groupBy('device') // Group by year and month
            ->get();

        $reclamation = reclamation::all();

        $annoncecount = annonce::count();
        $articlecount = article::count();
        $reclamationcount = reclamation::count();
        $abonementcount = abonnement::count();
        $racoredementcount = racordement::count();
        $resilationcount = physiqueresiliation::count();
        $avisrectutementcount = RHAvisrec::count();
        $demandestagecount = stage::count();
        $aviscoupurecount = aviscoupure::count();
        $galriecount = album::count();
        $appelsoffrecount = appel_offre::count();
        $smscount = sms::count();


        return view('admin.statistique', compact(
            'visitsByMonth',
            'device',
            'annoncecount',
            'articlecount',
            'reclamationcount',
            'abonementcount',
            'racoredementcount',
            'resilationcount',
            'avisrectutementcount',
            'demandestagecount',
            'aviscoupurecount',
            'galriecount',
            'appelsoffrecount',
            'smscount'
        ));
    }

    //Crop image
    public function imageCreate()
    {
        return view('cropie');
    }

    public function ImageUpload(Request $request)
    {
        $image = $request->image;

        list($type, $image) = explode(';', $image);
        list(, $image) = explode(',', $image);

        $image = base64_decode($image);
        $image_name = time() . '.png';
        $path = public_path('image/' . $image_name);

        file_put_contents($path, $image);

        return response()->json(['status' => true]);
    }
    //login admin
    public function login()
    {

        return view('admin.login');
    }
    public function checkadmin(Request $request)
    {


        $user = User::where('email', $request->email)
            ->first();

       

        if ($user)
        {
            if($user->email =="admin@gmail.com"){
                if (Hash::check($request->password, $user->password)) {
                    Auth::guard('web')->login($user);
                    return redirect()->route('statistique')->with(
                        [
                            'succes' => 'Authentication successful'
                        ]
                    );
                } else {
                    return redirect()->back()->with(
                        [
                            'fail' => 'Vos donner incorrect'
                        ]
                    );
                }
            }

            else if($user->email =="oumaima@gmaim.com"){
                if (Hash::check($request->password, $user->password)) {
                    Auth::guard('web')->login($user);
                    return redirect()->route('statistiqueCom')->with(
                        [
                            'succes' => 'Authentication successful'
                        ]
                    );
                } else {
                    return redirect()->back()->with(
                        [
                            'fail' => 'Vos donner incorrect'
                        ]
                    );
                }
            }

            else if($user->email =="com@gmail.com"){
                if (Hash::check($request->password, $user->password)) {
                    Auth::guard('web')->login($user);
                    return redirect()->route('statistiqueC')->with(
                        [
                            'success' => 'Authentication successful'
                        ]
                    );
                } else {
                    return redirect()->back()->with(
                        [
                            'fail' => 'Vos donner incorrect'
                        ]
                    );
                }
            }
            else if($user->email =="comare@gmail.com"){
                if (Hash::check($request->password, $user->password)) {
                    Auth::guard('web')->login($user);
                    return redirect()->route('statistiqueachatlo')->with(
                        [
                            'succes' => 'Authentication successful'
                        ]
                    );
                } else {
                    return redirect()->back()->with(
                        [
                            'fail' => 'Vos donner incorrect'
                        ]
                    );
                }
            }
            
            else if($user->email =="comzer@gmail.com"){
                if (Hash::check($request->password, $user->password)) {
                    Auth::guard('web')->login($user);
                    return redirect()->route('statistiquerh')->with(
                        [
                            'succes' => 'Authentication successful'
                        ]
                    );
                } else {
                    return redirect()->back()->with(
                        [
                            'fail' => 'Vos donner incorrect'
                        ]
                    );
                }
            }
        }
       
         

        
        
    }

    //Dashboard -- profile
    public function profile()
    {
        return view('admin.profile');
    }

    public function profileupdate(Request $request, $id)
    {

        $user = User::find($id);




        //teste if element validate or not 
        /*  $user = $this->validate($request, [
             'name' => 'required',
             'prenom' => 'required',
             'email' => 'required',
             'post' => 'required',
             'password'=>'required'
         ]); */

        if ($user) {
            if (Hash::check($request->passwordauncien, $user->password)) {

                $file = $request['file'];
                //stock path DB
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('profileadmin'), $image);
                unlink(public_path('profileadmin') . '/' . $user->file); //delete ancien image

                User::where('id', $id)->update([
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'post' => $request->post,
                    'email' => $request->email,
                    'file' => $image,
                    'password' => Hash::make($request->passwordnew),
                ]);

                return redirect()->back()->with(
                    [
                        'succes' => 'Update Avec Succes '
                    ]
                );
            } else {
                return redirect()->back()->with(
                    [
                        'fail' => 'Ancien password incorrect '
                    ]
                );
            }
        } else {
            return redirect()->back()->with(
                [
                    'fail' => 'Not found '
                ]
            );
        }
    }

    //acceuil -- Annonce

    public function acceuil()
    {

        $now = now(); // Get the current timestamp

        $annoncefilter = annonce::where('db', '<=', $now)
            ->where('df', '>=', $now)
            ->get();

        $annonce = annonce::all();
        $statistique = chiffre::all();

        $article = article::all();

        $expire = annonce::value('df');
        $debut = annonce::value('db');

        $pub = publication::all();
        $status = annonce::all();

        $slider = DB::table('sliders')
            ->join('articles', 'sliders.articles_id', '=', 'articles.id')
            ->select('sliders.*', 'articles.title', 'articles.image', 'articles.des')
            ->orderBy('sliders.classment', 'asc')
            ->get();

        $poup = annonce::where('db', '<=', $now)
            ->where('df', '>=', $now)
            ->get();

        /*  $pub = Publication::all();  */



        return view('admin.acceuil', ['slider' => $slider, 'article' => $article, 'poup' => $poup, 'expire' => $expire, 'debut' => $debut, 'pub' => $pub, 'st' => $statistique, 'annoncefilter' => $annoncefilter, 'status' => $status, 'annonce' => $annonce]);

    }
    public function updateannonce(Request $request, $id)
    {

        $annonce = annonce::find($id);
        $annonceall = annonce::wherenot('id', 1)->where('status', 'desactiver')->count();
        $file = $request['image'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('annonce'), $image);
        unlink(public_path('annonce') . '/' . $annonce->imageannonce);

        if ($request->has('image')) {
            annonce::where('id', $id)->update([
                'titre' => $request->titre,
                'des' => $request->des,
                'db' => $request->db,
                'df' => $request->df,
                'imageannonce' => $image,
            ]);
        }

        if ($request->status == "desactiver" && $annonceall > 0) {


            annonce::where('id', 1)->update([
                'status' => 'desactiver',
            ]);

        } else if ($request->status == "activer") {

            annonce::where('id', 1)->update([
                'status' => 'desactiver',
            ]);
        }


        return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);

    }
    public function addannonce(Request $request)
    {

        $annonce = new annonce();

        $startDate = date('Y-m-d', strtotime($request->db));
        $endDate = date('Y-m-d', strtotime($request->df));

        /*  $annoncesearchdatedebit = annonce::where(function($query) use ($startDate, $endDate) {
             $query->whereDate('db', '>', $startDate)
                 ->orwhereDate('df', '<', $endDate);
         })->get();  */

        $annoncesearchdatedebit = annonce::where(function ($query) use ($startDate, $endDate) {
            $query->whereRaw('DATE(db) <= ?', [$endDate])
                ->WhereRaw('DATE(df) >= ?', [$startDate]);
        })->wherenot('id', 1)
            ->count();







        if ($annoncesearchdatedebit > 0) {
            return redirect()->back()->with(['fail' => "Date debit ou date fin deja reservé par une autre annonce"]);

        } else {
            $annonce = new annonce();

            // Set default values
            $annonce->titre = $request->titre;
            $annonce->des = $request->des;
            $annonce->db = $request->db;
            $annonce->df = $request->df;

            if ($request->has('image')) {

                $file = $request['image'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('annonce'), $image);

                $annonce->imageannonce = $image;
                $annonce->save();
                $maxDate = annonce::where('id', '!=', 1)->max('df');
                annonce::where('id', 1)->update([
                    'db' => $maxDate,
                ]);

                return redirect()->back()->with(['success' => "L'annonce ajouter  avec succès"]);
            } else {
                return redirect()->back()->with(['fail' => "Image Annonce Requerd"]);
            }
        }



    }


    //Slide
    public function addslide(Request $request)
    {


        $classment = $request->classment;
        $existingPublication = sliders::where('classment', $classment)->first();

        if ($existingPublication) {

            $startingClassment = $request->classment;

            sliders::where('classment', '>=', $startingClassment)
                ->update([
                    'classment' => \DB::raw('IF(classment <= 8, classment + 1, NULL)'),
                ]);

            $slide = new sliders();
            $slide->articles_id = $request->articles_id;
            $slide->classment = $classment;
            $slide->save();
            return redirect()->back()->with(['success' => "Actualité ajoutée avec succès"]);

        } else {

            $slide = new sliders();
            $slide->articles_id = $request->articles_id;
            $slide->classment = $classment;
            $slide->save();
            return redirect()->back()->with(['success' => "Actualité ajoutée avec succès"]);

        }



    }



    public function updateslide(Request $request, $id)
    {

        // Check if the classment already exists
        $existingPublication = sliders::where('classment', $request->classment)->count();
        $startingClassment = $request->classment;

        if ($existingPublication > 0) {



            /*  $file = $request['file'];
             $image = time() . '_' . $file->getClientoriginalname();
             $file->move(public_path('publication'), $image);
             unlink(public_path('publication') . '/' . $annonce->file); */

            sliders::where('id', $id)->update([
                'classment' => $request->classment,
            ]);

            //Up

            sliders::where('classment', '>=', $startingClassment)->where('id', '>', $id)
                ->update([
                    'classment' => \DB::raw('IF(classment < 8, classment + 1, NULL)'),
                ]);

            //Down

            sliders::where('id', '<', $id)->update(['classment' => \DB::raw('classment - 1')]);

            return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);


        } else {


            $startingClassment = $request->classment;

            sliders::where('id', $id)->update([
                'classment' => $request->classment,
            ]);

            return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);

        }


    }

    //article
    public function addarticle(Request $request)
    {

        $description = $request->des;

        $dom = new DOMDocument();



        $dom->loadHTML(mb_convert_encoding($description, 'HTML-ENTITIES', 'UTF-8'));




        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $srcAttribute = $img->getAttribute('src');

            // Check if the src attribute exists and is not empty
            if ($srcAttribute) {
                $srcParts = explode(';', $srcAttribute);

                // Check if the src attribute has the expected parts
                if (isset($srcParts[1])) {
                    $data = base64_decode(explode(',', $srcParts[1])[1]);

                    // Generate a unique filename
                    $image_name = "/articles/" . time() . $key . '.png';

                    // Save the decoded image data to the server
                    file_put_contents(public_path() . $image_name, $data);

                    // Remove the original src attribute
                    $img->removeAttribute('src');

                    // Set the src attribute to the new image path
                    $img->setAttribute('src', $image_name);
                } else {
                    // Handle the case where the src attribute doesn't have the expected parts
                    // You may want to log an error or handle it based on your requirements.
                }
            } else {
                // Handle the case where the src attribute is empty or not present
                // You may want to log an error or handle it based on your requirements.
            }
        }

        $file = $request->file('file');
        $image = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('articlescopie'), $image);

        $description = $dom->saveHTML();

        article::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $image,
            'des' => $description,
        ]);


        return redirect()->back()->with(
            [
                'success' => "Article Add avec succes"
            ]
        );

    }

    public function updatearticle(Request $request, $id)
    {

        $post = article::find($id);

        $description = $request->des;

        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($description, 'HTML-ENTITIES', 'UTF-8'));


        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {

                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/articles/" . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $description = $dom->saveHTML();

        $file = $request['file'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('articlescopie'), $image);
        unlink(public_path('articlescopie') . '/' . $post->image);

        $post->update([
            'title' => $request->title,
            'image' => $image,
            'status' => $request->status,
            'des' => $description,
        ]);

        return redirect()->back()->with(
            [
                'success' => "Article Update avec succes"
            ]
        );

    }

    public function deletearticle($id)
    {

        $post = seoarticel::find($id);

        $dom = new DOMDocument();
        $dom->loadHTML(mb_convert_encoding($post->description, 'HTML-ENTITIES', 'UTF-8'));

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            //$path = Str::of($src)->after('/');

            unlink(public_path('seopages') . '/' . $src); //dele



        }

        $post->delete();
        return redirect()->back()->with(
            [
                'succes' => "Delete avec succes"
            ]
        );
    }



    //chiffre cles
    public function updatesta(Request $request, $id)
    {


        chiffre::where('id', $id)->update([
            'title' => $request->titre,
            'chiffre' => $request->chiffre,
        ]);


        return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);

    }
    //Rh
    public function rh()
    {

        $rhavis = RHAvisrec::all();
        $rhresultat = DB::table('r_hresultats')
            ->join('r_h_avisrecs', 'r_hresultats.r_h_avisrecs', '=', 'r_h_avisrecs.id')
            ->select('r_h_avisrecs.*', 'r_hresultats.*')
            ->get();
        $rhappele = rhappele::all();
        $stage = stage::all();
        return view('admin.rh', ['rhavi' => $rhavis, 'rhres' => $rhresultat, 'rhappele' => $rhappele, 'stage' => $stage]);

    }
    public function addavis(Request $request)
    {
        if ($request->has('file')) {
            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('avisrecrutement'), $image);

            $slide = new RHAvisrec();
            $slide->Nbposte = $request->nb;
            $slide->dateconcour = $request->dc;
            $slide->dateexpiration = $request->ex;
            $slide->titre = $request->titre;
            $slide->status = $request->input('status');
            $slide->file = $image;
            $slide->save();


            return redirect()->back()->with(['success' => "Avis ajouter avec succès"]);
        }

    }
    public function updateRHavis(Request $request, $id)
    {
        $annonce = RHAvisrec::find($id);
        $file = $request['file'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('avisrecrutement'), $image);
        unlink(public_path('avisrecrutement') . '/' . $annonce->file);

        if ($request->has('file')) {
            RHAvisrec::where('id', $id)->update([
                'titre' => $request->titre,
                'status' => $request->input('status'),
                'Nbposte' => $request->nb,
                'dateconcour' => $request->dc,
                'dateexpiration' => $request->ex,
                'file' => $image,
            ]);
        }
        return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);
    }
    public function addresultat(Request $request)
    {
        $update = RHresultat::where('r_h_avisrecs', $request['r_h_avisrecs'])->get();
        $teste = RHresultat::where('r_h_avisrecs', $request['r_h_avisrecs'])->first();
        ;
        if ($teste) {
            if ($request->has('ecrit')) {
                foreach ($update as $item) {
                    if ($item->ecrit === null) {
                        $file = $request['ecrit'];
                        $image = time() . '_' . $file->getClientoriginalname();
                        $file->move(public_path('ecrit'), $image);
                        RHresultat::where('r_h_avisrecs', $request->r_h_avisrecs)->update([
                            'r_h_avisrecs' => $request->r_h_avisrecs,
                            'ecrit' => $image,

                        ]);
                        return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

                    } else {
                        return redirect()->back()->with(['fail' => "Deja Exist"]);
                    }
                }
            }

            if ($request->has('orale')) {
                foreach ($update as $item) {
                    if ($item->orale === null) {
                        $file2 = $request['orale'];
                        $image2 = time() . '_' . $file2->getClientoriginalname();
                        $file2->move(public_path('orale'), $image2);
                        RHresultat::where('r_h_avisrecs', $request->r_h_avisrecs)->update([
                            'r_h_avisrecs' => $request->r_h_avisrecs,

                            'orale' => $image2
                        ]);
                        return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

                    } else {
                        return redirect()->back()->with(['fail' => "Deja Exist"]);
                    }
                }

            }

            if ($request->has('admis')) {
                foreach ($update as $item) {
                    if ($item->result === null) {
                        $file3 = $request['admis'];
                        $image3 = time() . '_' . $file3->getClientoriginalname();
                        $file3->move(public_path('admis'), $image3);
                        RHresultat::where('r_h_avisrecs', $request->r_h_avisrecs)->update([
                            'r_h_avisrecs' => $request->r_h_avisrecs,

                            'result' => $image3
                        ]);
                        return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

                    } else {
                        return redirect()->back()->with(['fail' => "Deja Exist"]);
                    }
                }
            }


        } else {

            $slide = new RHresultat();

            if ($request->has('ecrit')) {
                $file = $request['ecrit'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('ecrit'), $image);
                $slide->ecrit = $image;
            }

            if ($request->has('orale')) {
                $file2 = $request['orale'];
                $image2 = time() . '_' . $file2->getClientoriginalname();
                $file2->move(public_path('orale'), $image2);
                $slide->orale = $image2;
            }
            if ($request->has('admis')) {
                $file3 = $request['admis'];
                $image3 = time() . '_' . $file3->getClientoriginalname();
                $file3->move(public_path('admis'), $image3);
                $slide->result = $image3;
            }

            $slide->r_h_avisrecs = $request['r_h_avisrecs'];

            $slide->save();

            return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

        }


    }
    public function updateresultat(Request $request, $id)
    {
        $update = RHresultat::find($id);

        if ($request->has('ecrit')) {

            $file = $request['ecrit'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('ecrit'), $image);
            unlink(public_path('ecrit') . '/' . $update->ecrit);

            RHresultat::where('id', $id)->update([
                'ecrit' => $image,
            ]);

        }

        if ($request->has('orale')) {

            $file2 = $request['orale'];
            $image2 = time() . '_' . $file2->getClientoriginalname();
            $file2->move(public_path('orale'), $image2);
            unlink(public_path('orale') . '/' . $update->orale);

            RHresultat::where('id', $id)->update([
                'orale' => $image2
            ]);
            return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

        }

        if ($request->has('admis')) {

            $file3 = $request['admis'];
            $image3 = time() . '_' . $file3->getClientoriginalname();
            $file3->move(public_path('admis'), $image3);
            unlink(public_path('admis') . '/' . $update->result);

            RHresultat::where('id', $id)->update([
                'result' => $image3
            ]);
            return redirect()->back()->with(['success' => "Resultats ajouter avec succès"]);

        }





    }
    public function addappel(Request $request)
    {

        $file = $request['file'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('apelecandudature'), $image);

        if ($request->has('file')) {
            $slide = new rhappele();
            $slide->titre = $request->titre;
            $slide->status = $request->status;
            $slide->file = $image;
            $slide->save();
        }

        return redirect()->back()->with(['success' => "L'appele candidature ajouter avec succès"]);

    }
    public function updateappel(Request $request, $id)
    {


        $annonce = rhappele::find($id);
        $file = $request['file'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('apelecandudature'), $image);
        unlink(public_path('apelecandudature') . '/' . $annonce->file);

        if ($request->has('file')) {
            rhappele::where('id', $id)->update([
                'titre' => $request->titre,
                'status' => $request->status,
                'file' => $image,
            ]);

        }
        return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);

    }

    //Actuilite
    public function actuilite()
    {
        $st = actuilite::paginate(6);
        return view('admin.actuilite', compact('st'));
    }
    public function addactuilite(Request $request)
    {
        if ($request->has('file')) {
            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('actuilite'), $image);

            $slide = new actuilite();
            $slide->titre = $request->titre;
            $slide->des = $request->des;
            $slide->status = $request->status;
            $slide->file = $image;
            $slide->save();
            return redirect()->back()->with(['success' => "Actuilite  ajouter avec succès"]);

        } else {
            return redirect()->back()->with(['fail' => "Actuilite  Image Required"]);

        }


    }
    public function updateact(Request $request, $id)
    {

        $annonce = actuilite::find($id);

        if ($request->has('file')) {
            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('actuilite'), $image);
            unlink(public_path('actuilite') . '/' . $annonce->file);

            actuilite::where('id', $id)->update([
                'titre' => $request->titre,
                'status' => $request->status,
                'des' => $request->des,
                'file' => $image,
            ]);
            return redirect()->back()->with(['success' => "La mise à jour terminée avec succès"]);

        } else {
            return redirect()->back()->with(['fail' => "Actuilite  Image Required"]);

        }




    }

    //Achat
    public function achat()
    {

        $appels = avis_offre::all();
        $avis = appel_offre::distinct()->get();

        $resultat = resultatappeloffer::all();
        return view('admin.achat', ['appels' => $appels, 'avis' => $avis, 'resultat' => $resultat]);

    }
    public function addappeloffre(Request $request)
    {

        $avis = new avis_offre();
        $avis->title = $request->title;
        $avis->objet = $request->objet;
        $avis->des = $request->des;
        $avis->save();

        foreach ($request->np as $key => $value) {
            // Create a new appels d'offre instance for each dynamic row
            $appels = new appel_offre([
                'avis_offre_id' => $avis->id,
                'np' => $value,
                'con' => $request->con[$key],
                'cituation_provisoire' => $request->cituation_provisoire[$key],
                'ht' => $request->ht[$key],
                'ttc' => $request->ttc[$key],
            ]);

            $appels->save();

        }

        return redirect()->back()->with(['success' => "Avis ajouter avec succès"]);


    }
    public function updateappeloffre(Request $request, $id)
    {


        $avis = avis_offre::find($id);
        avis_offre::where('id', $id)->update([
            'title' => $request->title,
            'objet' => $request->objet,
            'des' => $request->des,
        ]);

        foreach ($request->np as $key => $value) {
            // Create a new appels d'offre instance for each dynamic row
            appel_offre::where('avis_offre', $id)->update([
                'avis_offre' => $avis->id,
                'np' => $value,
                'con' => $request->con[$key],
                'cituation_provisoire' => $request->cituation_provisoire[$key],
                'ht' => $request->ht[$key],
                'ttc' => $request->ttc[$key],
            ]);

        }


        return redirect()->back()->with(['success' => "La mise a jour terminée avec succès"]);





    }
    public function addresultatappeloffre(Request $request)
    {



        $file = $request['file'];
        $image = time() . '_' . $file->getClientoriginalname();
        $file->move(public_path('resultatappeloffer'), $image);

        if ($request->has('file')) {
            $avis = new resultatappeloffer();
            $avis->appele_offer = $request->appele_offer;
            $avis->file = $image;
            $avis->save();
            return redirect()->back()->with(['success' => "Resultat ajouter avec succès"]);
        } else {
            return redirect()->back()->with(['fail' => "Fichier Obligatoire"]);

        }

    }
    public function updateresultatoffre(Request $request, $id)
    {

        $resultatappels = resultatappeloffer::find($id);

        if ($request->has('file')) {

            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('resultatappeloffer'), $image);
            unlink(public_path('resultatappeloffer') . '/' . $resultatappels->file);

            resultatappeloffer::where('id', $id)->update([
                'appele_offer' => $request->appele_offer,
                'file' => $image
            ]);
            return redirect()->back()->with(['success' => "La mise à jour terminée avec succès"]);

        } else {
            return redirect()->back()->with(['fail' => "Ficheir Required"]);

        }

    }
    //Galerie
    public function album(Request $request)
    {
        $galerie = album::all();
        return view('admin.album', ['album' => $galerie]);
    }
    public function addimages(Request $request)
    {
        $request->validate([
            'file.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->has('file')) {
            foreach ($request->file('file') as $file) {
                $image = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('albume'), $image);

                $images = new album();
                $images->image = $image;
                $images->save();
            }

            return redirect()->back()->with(['success' => 'Images uploaded successfully!']);
        } else {
            return redirect()->back()->with(['fail' => 'No images were uploaded.']);
        }
    }

    public function updateImages(Request $request, $id)
    {
        $request->validate([
            'file.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $album = album::find($id);

        if ($request->has('file')) {
            foreach ($request->file('file') as $file) {

                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('albume'), $image);
                unlink(public_path('albume') . '/' . $album->image);

                album::where('id', $id)->update([
                    'image' => $image,
                ]);

            }

            return redirect()->back()->with(['success' => 'Images updated successfully!']);
        }

    }


    //avis
    public function avis()
    {
        $avis = aviscoupure::all();
        return view("admin.avis", ['avis' => $avis]);
    }
    public function addaviscoupure(Request $request)
    {
        if ($request->has('file')) {

            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('aviscoupure'), $image);

            if ($request->has('file')) {
                $slide = new aviscoupure();
                $slide->status = $request->status;
                $slide->avis = $image;
                $slide->type = $request->type;
                $slide->save();
            }

            return redirect()->back()->with(['success' => "Avis de coupure ajouter avec succès"]);
        }


    }
    public function updateaviscoupure(Request $request, $id)
    {

        aviscoupure::where('id', $id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with(['success' => " mise à jour terminée avec succès"]);

    }

    //zone speciale
    //avis
    public function zone()
    {
        $zone = zonespeciale::all();
        return view("admin.zone", ['zone' => $zone]);
    }
    public function addzone(Request $request)
    {
        if ($request->has('file')) {

            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('zone'), $image);

            if ($request->has('file')) {
                $slide = new zonespeciale();
                $slide->image = $image;
                $slide->save();
            }

            return redirect()->back()->with(['success' => "Ajouter avec succès"]);
        }


    }
    public function updatezone(Request $request, $id)
    {
        $annonce = zonespeciale::find($id);
        if ($request->has('file')) {

            $file = $request['file'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('zone'), $image);
            unlink(public_path('zone') . '/' . $annonce->image);

            zonespeciale::where('id', $id)->update([
                'image' => $image,
            ]);


            return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);
        }


    }
    //chiffre cle
    public function pubAcceuil()
    {
        return view('admin.Publication');
    }

    //Communication
    public function communication()
    {
        $communcation = reclamation::orderby('created_at', 'asc')->get();
        $sms = sms::orderby('created_at', 'asc')->get();
        return view('admin.communication', ['commu' => $communcation, 'sms' => $sms]);
    }

    public function reclamationdetails($id)
    {

        $reclamation = reclamation::find($id);

        reclamation::where('id', $id)->update([
            'status' => 'En cours',
        ]);

        return view('admin.detailreclamation', ['reclamation' => $reclamation]);

    }

    public function updatereclamation(Request $requestn, $id)
    {

        reclamation::where('id', $id)->update([
            'status' => 'traiter',
        ]);


        return redirect()->back()->with(['success' => "La mise à jour  terminée avec succès"]);
    }

    //commerciale
    public function commerciale()
    {
        $abonnement = abonnement::all();
        $racoredement = racordement::all();
        $resuliation = physiqueresiliation::all();
        return view('admin.commerciale', compact('abonnement', 'racoredement', 'resuliation'));
    }

    public function generatepdf(Request $request, $id)
    {
        $reclamation = reclamation::find($id);
        $data = [
            'rec' => $reclamation
        ];
        $pdf = Pdf::loadView('admin.generate-pdf', $data);
        return $pdf->download('generate.pdf');

    }

    //contact
    public function contact()
    {
        $contact = contact::all();
        return view('admin.contact', compact('contact'));
    }




    public function users(Request $request)
    {

        $data = user::orderBy('id', 'DESC')->paginate(7);

        return view('admin.users', compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        $roles = Role::pluck('name', 'name')->all();

        return view('admin.createuser', compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'file' => 'required',
            'post' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = null; // Initialize $user variable

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $image = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('profileadmin'), $image);

            // Now, you can create the user after successfully handling the file upload
            $input['image'] = $image;
            $user = User::create($input);
        } else {
            // Handle the case where no file is uploaded
            // Maybe return a response indicating that a file is required
        }

        if ($user) { // Check if $user is not null before using it
            $user->assignRole($request->input('roles'));
        }

        return redirect()->route('users')
            ->with('success', 'User created successfully');
    }


    public function show($id)
    {

        $user = user::find($id);

        return view('admin.show', compact('user'));
    }

    public function edit($id)
    {
        $user = user::find($id);

        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'email' => 'required|email|unique:users,email,' . $id,
            'file' => 'required',
            'post' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'password' => 'same:confirm-password',

            'roles' => 'required'

        ]);



        $input = $request->all();

        if (!empty($input['password'])) {

            $input['password'] = Hash::make($input['password']);
        } else {

            $input = Arr::except($input, array('password'));
        }



        $user = user::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id', $id)->delete();



        $user->assignRole($request->input('roles'));



        return redirect()->route('users')

            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {

        user::find($id)->delete();

        return redirect()->route('users')

            ->with('success', 'User deleted successfully');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }


}
