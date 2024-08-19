<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\sitecontroller;
use App\Mail\Myemail;
use App\Models\appel_offre;
use App\Models\avis_offre;
use App\Models\resultatappeloffer;
use App\Models\rhappele;
use App\Models\RHAvisrec;
use App\Models\RHresultat;
use Illuminate\Support\Facades\Route;
use App\Models\reclamation;

use App\Http\Controllers\RoleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   

    Route::get('/send', function () {
        Mail::to('radeelprojet@gmail.com')->send( new Myemail("imad"));
    });

    Route::get('/', [sitecontroller::class, 'index'])->name('index');
    //page 2
    Route::get('/index2', [sitecontroller::class, 'index2'])->name('index2');

    // Route::get('/galerieAudiovisual', [sitecontroller::class, 'galerieAudiovisual'])->name('GalerieAudiovusial');
    Route::post('/contact', [sitecontroller::class, 'contact'])->name('addcontact');
    Route::post('/addReclamation', [sitecontroller::class, 'addReclamation'])->name('addReclamation');
    Route::post('/searchreacalamtion', [sitecontroller::class, 'searchreacalamtion'])->name('searchreacalamtion');

    Route::get('/SMS', [sitecontroller::class, 'sms'])->name('sms');
    Route::post('/addsms', [sitecontroller::class, 'addsms'])->name('addsms');

    //captcha
    Route::get('/reload-captcha', [sitecontroller::class, 'reloadcaptcha'])->name('reload-captcha');

    Route::get('/Actualite', [sitecontroller::class, 'Actualite'])->name('Actualite');

    Route::get('/galerie', [sitecontroller::class, 'galerie'])->name('galerie');

    Route::get('/details/{id}', [sitecontroller::class, 'details'])->name('details');

    Route::get('/Afficher/{id}', [sitecontroller::class, 'Afficher'])->name('Afficher');
    
    Route::get('/stage', [sitecontroller::class, 'stage'])->name('stage');
    Route::post('/addstage', [sitecontroller::class, 'addstage'])->name('addstage');

    Route::get('/abonnement', [sitecontroller::class, 'abonnement'])->name('abonnement');

    Route::get('/resiliation', [sitecontroller::class, 'resiliation'])->name('resiliation');
    Route::post('/addresul', [sitecontroller::class, 'addresul'])->name('addresul');

    Route::get('/Abonnement', [sitecontroller::class, 'abonnement'])->name('abonnement');
    Route::post('/addabonnement', [sitecontroller::class, 'addabonnement'])->name('addabonnement');
    Route::post('/addraccoredement', [sitecontroller::class, 'addraccoredement'])->name('addraccoredement');
    Route::get('/coupure', [sitecontroller::class, 'coupure'])->name('coupure');

 
    Route::get('crop-image', [AdminController::class, 'imageCreate']);
    Route::post('crop-image-store', [AdminController::class, 'ImageUpload'])->name('save');
 
     Route::get('/Avis recrutement', function () {

        $rhresult = DB::table('r_h_avisrecs')
        ->join('r_hresultats', 'r_h_avisrecs.id', '=', 'r_hresultats.r_h_avisrecs')
        ->select('r_hresultats.*', 'r_h_avisrecs.*','r_h_avisrecs.created_at as created_at')
        ->get();
     
        return view('avis',compact('rhresult'));

    })->name('avise'); 



    /* Route::get('/loi', function () {
        return view('loiCadre');
    }); */

 

    Route::get('/test', function () {
        return view('text');
    });

    
    Route::get('/teste', function () {
        return view('texte');
    });

    Route::get('/programme', function () {
        return view('Programme');
    });
     
    Route::get('/ActiviteRadeel', function () {
        return view('ActiviteRadeel');
    });
    Route::get('/GrosAbonnee', function () {
        return view('GrosAbonnee');
    });
    Route::get('/reclamation', function () {

       
        return view('reclamation');
    })->name('reclamation');
    
    Route::get('/agences', function () {
        return view('agences');
    });
    Route::get('/bureau', function () {
        return view('bureauordredigitale');
    })->name('bureau');

    Route::get('/MotDirecteur', function () {
        return view('MotDirecteur');
    });
    Route::get('/ResultatOffre', function () {
        $result = resultatappeloffer::all();
        return view('ResultatOffre',['result'=>$result]);
    });
    Route::get('/StructureRadeel', function () {
        return view('StructureRadeel');
    });
    Route::get('/paiement', function () {
        return view('paiement');
    })->name('paiement');
    
    Route::get('/AppelOffre', function () {

        // Equivalent query using the DB facade
        /* $avis = DB::table('avis_offres')
            ->join('appel_offres', 'avis_offres.id', '=', 'appel_offres.avis_offre_id')
            ->select('appel_offres.np as np', 'avis_offres.title as title','avis_offres.des as des','appel_offres.con as con','avis_offres.objet as objet','appel_offres.ht as esh','appel_offres.ttc as  est','appel_offres.cituation_provisoire as ct')
            ->get();  */

        $avis = avis_offre::paginate(6);
        $appels = appel_offre::get();

             
        return view('AppelOffre',compact('avis','appels'));
    });
    Route::get('/Reglement', function () {
        return view('Reglement');
    });
    Route::get('/Autre', function () {
        return view('Autre');
    });

    Route::prefix('admin')->middleware(['guest:web','PreventBackHistory','CheckIp'])->group(function () {
        //check admin
        Route::get('/login',[AdminController::class,'login'])->name('login');
        Route::post('/login',[AdminController::class,'checkadmin'])->name('checkadmin');
    });
    Route::prefix('admin')->middleware(['auth:web', 'PreventBackHistory','CheckIp'])->group(function () {
        //Acceuile v2
        Route::get('/Acceuil2', [AdminController::class, 'Acceuil2'])->name('Acceuil2');
        Route::get('/Annonce', [AdminController::class, 'annonce'])->name('annonce');
        Route::get('/Slider', [AdminController::class, 'slider'])->name('slider');
        Route::get('/Chiffre', [AdminController::class, 'chiffre'])->name('chiffre');
        Route::get('/Reclamation', [AdminController::class, 'reclamation'])->name('reclamation');
        Route::get('/Information', [AdminController::class, 'info'])->name('info');
        //profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile/{id}', [AdminController::class, 'profileupdate'])->name('profileupdate');
        //Acceuil 
            //annonce 
            Route::get('/Acceuil', [AdminController::class, 'acceuil'])->name('Acceuil');
            // Route::get('/teste', [AdminController::class, 'acceuil'])->name('acceuil');
            Route::post('/updateannonce/{id}', [AdminController::class, 'updateannonce'])->name('updateannonce');
            Route::post('/addannonce', [AdminController::class, 'addannonce'])->name('addannonce');
            //publication 
            Route::post('/addslide', [AdminController::class, 'addslide'])->name('addslide');
            Route::post('/updateslide/{id}', [AdminController::class, 'updateslide'])->name('updateslide');
            // chiffre -- service - contact
            Route::post('/updatestatistique/{id}', [AdminController::class, 'updatesta'])->name('updatesta');
            //RH
            Route::get('/RH', [AdminController::class, 'rh'])->name('rh');
            Route::post('/addavis', [AdminController::class, 'addavis'])->name('addavis');
            Route::post('/updateRHavis/{id}', [AdminController::class, 'updateRHavis'])->name('updateRHavis');
            Route::post('/addresultat', [AdminController::class, 'addresultat'])->name('addresultat');
            Route::post('/updateresultat/{id}', [AdminController::class, 'updateresultat'])->name('updateresultat');
            Route::post('/addappel', [AdminController::class, 'addappel'])->name('addappel');
            Route::post('/updateappel/{id}', [AdminController::class, 'updateappel'])->name('updateappel');
            //Actuilite
            Route::get('/actualités', [AdminController::class, 'actuilite'])->name('actuilite');
            Route::post('/addactuilite', [AdminController::class, 'addactuilite'])->name('addactuilite');
            Route::post('/updateact/{id}', [AdminController::class, 'updateact'])->name('updateact');
            //Achat et logistique
            Route::get('/Achat', [AdminController::class, 'achat'])->name('achat');
            Route::post('/addappeloffre', [AdminController::class, 'addappeloffre'])->name('addappeloffre');
            Route::post('/updateappeloffre/{id}', [AdminController::class, 'updateappeloffre'])->name('updateappeloffre');
            Route::post('/addresultatappeloffre', [AdminController::class, 'addresultatappeloffre'])->name('addresultatappeloffre');
            Route::post('/updateresultatoffre/{id}', [AdminController::class, 'updateresultatoffre'])->name('updateresultatoffre');
            //Galerie
            Route::get('/album', [AdminController::class, 'album'])->name('album');
            Route::post('/album', [AdminController::class, 'addimages'])->name('addimages');
            Route::post('/updateImages/{id}', [AdminController::class, 'updateImages'])->name('updateImages');
            //Avis de coupure
            Route::get('/avis', [AdminController::class, 'avis'])->name('avis');
            Route::post('/addaviscoupure', [AdminController::class, 'addaviscoupure'])->name('addaviscoupure');
            Route::post('/updateaviscoupure/{id}', [AdminController::class, 'updateaviscoupure'])->name('updateaviscoupure');
            //Articles
            Route::post('/addarticle', [AdminController::class, 'addarticle'])->name('addarticle');
            Route::post('/updatearticle/{id}', [AdminController::class, 'updatearticle'])->name('updatearticle');
            Route::post('/updatestatus/{article}', [AdminController::class, 'updatestatus'])->name('updatestatus');

            //zone
            Route::get('/zonespeciale', [AdminController::class, 'zone'])->name('zone');
            Route::post('/addzone', [AdminController::class, 'addzone'])->name('addzone');
            Route::post('/updatezone/{id}', [AdminController::class, 'updatezone'])->name('updatezone');
            //controle
            Route::get('/roles', [RoleController::class, 'index'])->name('roles');
            Route::get('/createrole', [RoleController::class, 'create'])->name('createrole');
            Route::post('/createrole', [RoleController::class, 'store'])->name('storerole');
            Route::get('/showrole/{id}', [RoleController::class, 'show'])->name('showrole');
            Route::get('/editrole/{id}', [RoleController::class, 'edit'])->name('editrole');
            Route::post('/editrole/{id}', [RoleController::class, 'update'])->name('roleupdate');
            Route::delete('/editrole/{id}', [RoleController::class, 'destroy'])->name('roledelete');
            
            Route::get('/users', [adminController::class, 'users'])->name('users');
            Route::get('/create', [adminController::class, 'create'])->name('create');
            Route::post('/create', [adminController::class, 'store'])->name('store');
            Route::get('/show/{id}', [adminController::class, 'show'])->name('show');
            Route::get('/edit/{id}', [adminController::class, 'edit'])->name('edit');
            Route::post('/edit/{id}', [adminController::class, 'update'])->name('update');
            Route::delete('/edit/{id}', [adminController::class, 'destroy'])->name('delete');
            //acceuil(chiffre cle)
            Route::get('/chiffre', [AdminController::class, 'chiffreCle'])->name('chiffrecle');

            //Espace client communication
            Route::get('/communication', [AdminController::class, 'communication'])->name('communication');
            Route::post('/updatereclamation/{id}', [AdminController::class, 'updatereclamation'])->name('updatereclamation');
            Route::get('/reclamationdetails/{id}', [AdminController::class, 'reclamationdetails'])->name('reclamationdetails');



            //Espace client commercial
            Route::get('/commercial', [AdminController::class, 'commerciale'])->name('commercial');

            //contact
            Route::get('/contact', [AdminController::class, 'contact'])->name('contact');

            //statistique
            Route::get('/statistique', [AdminController::class, 'statistique'])->name('statistique');
            Route::get('/statistique Communication', [AdminController::class, 'statistiqueC'])->name('statistiqueC');
            Route::get('/statistique Commerciale', [AdminController::class, 'statistiqueCom'])->name('statistiqueCom');
            Route::get('/statistique Achat logistique', [AdminController::class, 'statistiqueachatlo'])->name('statistiqueachatlo');
            Route::get('/statistique Ressources humaines', [AdminController::class, 'statistiquerh'])->name('statistiquerh');

            //generate pdf
            Route::get('/generate/{id}', [AdminController::class,'generatepdf'])->name('generatepdf');


            //logout
            Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    });

