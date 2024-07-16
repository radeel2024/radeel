<?php

namespace App\Http\Controllers;

use App\Models\abonnement;
use App\Models\album;
use App\Models\annonce;
use App\Models\article;
use App\Models\articlevisite;
use App\Models\aviscoupure;
use App\Models\chiffre;
use App\Models\contact;
use App\Models\racordement;
use App\Models\sms;
use App\Models\RHAvisrec;
use App\Models\RHresultat;
use App\Models\rhappele;
use App\Models\stage;
use App\Models\reclamation;
use App\Models\sliders;
use App\Models\vistore;
use App\Models\zonespeciale;
use App\Models\physiqueresiliation;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Mail;
use App\Mail\Myemail;




class sitecontroller extends Controller
{
   /*  public function reloadcaptcha()
    {
        return response()->json(['captcha' => captcha_img('match')]);
    } */
    public function addraccoredement(Request $request)
    {

        $resul = new racordement();
        $resul->gerance = $request['gerance'];
        $resul->typeraccordement = $request['typeraccordement'];
        $resul->adressabonnement = $request['adressabonnement'];
        $resul->province = $request['province'];
        $resul->status = $request['status'];
        $resul->client = $request['client'];
        $resul->namecomplete = $request['namecomplete'];
        $resul->cin = $request['cin'];
        $resul->tele = $request['tele'];
        $resul->email = $request['email'];
        $resul->adresscorresp = $request['adresscorresp'];
        $resul->naturedemandeur = $request['naturedemandeur'];
        $resul->ville = $request['ville'];
        $resul->raisonsociale = $request['raisonsociale'];
        $resul->numeroregister = $request['numeroregister'];

        if ($request->has('cingerantfile')) {
            $cingerantfile = $request['cingerantfile'];
            $filecingerant = time() . '_' . $cingerantfile->getClientoriginalname();
            $cingerantfile->move(public_path('cingerantfile'), $filecingerant);
            $resul->cingerantfile = $filecingerant;
        }
        if ($request->has('justificationoccupationfile')) {
            $justificationoccupationfile = $request['justificationoccupationfile'];
            $justificationoccupationfilee = time() . '_' . $justificationoccupationfile->getClientoriginalname();
            $justificationoccupationfile->move(public_path('justificationoccupationfile'), $justificationoccupationfilee);
            $resul->justificationoccupationfile = $justificationoccupationfilee;
        }
        if ($request->has('Attestationconstruction')) {
            $Attestationconstruction = $request['Attestationconstruction'];
            $Attestationconstructione = time() . '_' . $Attestationconstruction->getClientoriginalname();
            $Attestationconstruction->move(public_path('Attestationconstruction'), $Attestationconstructione);
            $resul->Attestationconstruction = $Attestationconstructione;
        }
        if ($request->has('Attestationmunicipalité')) {
            $Attestationmunicipalité = $request['Attestationmunicipalité'];
            $Attestationmunicipalitée = time() . '_' . $Attestationmunicipalité->getClientoriginalname();
            $Attestationmunicipalité->move(public_path('Attestationmunicipalité'), $Attestationmunicipalitée);
            $resul->Attestationmunicipalité = $Attestationmunicipalitée;
        }
        if ($request->has('statusentitefile')) {
            $statusentitefile = $request['statusentitefile'];
            $statusentitefilee = time() . '_' . $statusentitefile->getClientoriginalname();
            $statusentitefile->move(public_path('statusentitefile'), $statusentitefilee);
            $resul->statusentitefile = $statusentitefilee;
        }
        if ($request->has('registercommercefile')) {
            $registercommercefile = $request['registercommercefile'];
            $registercommercefilee = time() . '_' . $registercommercefile->getClientoriginalname();
            $registercommercefile->move(public_path('registercommercefile'), $registercommercefilee);
            $resul->registercommercefile = $registercommercefilee;
        }

        if ($request->has('recudevisfile')) {
            $recudevisfile = $request['recudevisfile'];
            $recudevisfilee = time() . '_' . $recudevisfile->getClientoriginalname();
            $recudevisfile->move(public_path('recudevisfile'), $recudevisfilee);
            $resul->recudevisfile = $recudevisfilee;
        }

        if ($request->has('cinfile')) {
            $cinfile = $request['cinfile'];
            $cinfilee = time() . '_' . $cinfile->getClientoriginalname();
            $cinfile->move(public_path('cinfile'), $cinfilee);
            $resul->cinfile = $cinfilee;
        }
        if ($request->has('autorisationlegaliseefile')) {
            $autorisationlegaliseefile = $request['autorisationlegaliseefile'];
            $autorisationlegaliseefilee = time() . '_' . $autorisationlegaliseefile->getClientoriginalname();
            $autorisationlegaliseefile->move(public_path('autorisationlegaliseefile'), $autorisationlegaliseefilee);
            $resul->autorisationlegaliseefile = $autorisationlegaliseefilee;
        }
        if ($request->has('croquisfile')) {
            $croquisfile = $request['croquisfile'];
            $filecingerante = time() . '_' . $croquisfile->getClientoriginalname();
            $croquisfile->move(public_path('croquisfile'), $filecingerante);
            $resul->croquisfile = $filecingerante;
        }
        if ($request->has('planapprouvefile')) {
            $planapprouvefile = $request['planapprouvefile'];
            $planapprouvefilee = time() . '_' . $planapprouvefile->getClientoriginalname();
            $planapprouvefile->move(public_path('planapprouvefile'), $planapprouvefilee);
            $resul->planapprouvefile = $planapprouvefile;
        }

        $resul->save();

        return redirect()->back()->with(['success' => "Les documents de raccordement Envoyer avec succès"]);


    }

    public function index()
    {

        $now = now();
        $slider = DB::table('sliders')
            ->join('articles', 'sliders.articles_id', '=', 'articles.id')
            ->select('sliders.*', 'articles.title', 'articles.image as image', 'articles.des', 'articles.id as id')
            ->where('articles.status', 'oui')
            ->orderBy('sliders.classment', 'asc')
            ->get();

        $chiffre1 = chiffre::where('id', 5)->first();
        $chiffre2 = chiffre::where('id', 6)->first();
        $chiffre3 = chiffre::where('id', 7)->first();
        $chiffre4 = chiffre::where('id', 8)->first();

        $zone = zonespeciale::all();

        $modal = annonce::where('db', '<=', $now)
            ->where('df', '>=', $now)
            ->get();


        $articles = article::orderBy('created_at', 'desc')->get();

        $avis = aviscoupure::all();

        $poup = annonce::where('db', '<=', $now)
            ->where('df', '>=', $now)
            ->get();

        $agent = new Agent();
        $deviceType = $agent->isMobile() ? 'Mobile' : 'Desktop'; // Detect device type

        $visit = new vistore();
        $visit->device = $deviceType;
        $visit->nbviste += 1;
        $visit->save();


        return view('index', compact('slider', 'chiffre1', 'chiffre2', 'chiffre3', 'chiffre4', 'zone', 'modal', 'avis', 'articles', 'poup'));
    }


    public function afficher($id)
    {
        $avisrec = RHAvisrec::find($id);
        $resultcon = RHresultat::find($id);
        $appel = rhappele::find($id);
        ;
        return view('Afficher', compact('avisrec', 'resultcon', 'appel'));
    }

    public function coupure()
    {
        $coupure = aviscoupure::where('status', 'oui')->paginate(6);
        return view('coupure', ['coupure' => $coupure]);
    }

    public function Actualite()
    {
        $article = article::paginate(6);
        return view('Actualite', compact('article'));
    }

    public function galerie()
    {
        $galerie = album::all();
        return view('galerie', compact('galerie'));
    }

    public function details(Request $request, $id)
    {
        $details = article::find($id);

        $visit = new articlevisite();
        $visit->articles_id = $id;
        $visit->nbviste += 1;
        $visit->save();
        return view('details', compact('details'));
    }

    public function contact(Request $request)
    {

        $reclamation = new contact();
        $reclamation->name = $request['name'];
        $reclamation->prenom = $request['prenom'];
        $reclamation->email = $request['email'];
        $reclamation->message = $request['message'];
        $reclamation->objet = $request['objet'];
        $reclamation->save();
        return redirect()->back()->with(['success' => "Votre contact ajoutée avec succès"]);
    }


    public function addReclamation(Request $request)
    {

        $reclamation = new reclamation();
        $reclamation->numDossier = $request['numdossier'];
        $reclamation->tele = $request['tele'];
        $reclamation->email = $request['email'];
        $reclamation->nom = $request['nom'];
        $reclamation->objet = $request['objet'];
        $reclamation->des = $request['des'];
        $reclamation->status = "Envoyé";
        $randomNumber = $reclamation->numDossier . Carbon::now()->format('Ymd');
        $reclamation->randomnumber = $randomNumber;
        $reclamation->save();


        // Data for the second email
        $randomNumberdata = [
            'randomNumber' => $reclamation->id,
        ];

        $randomNumberdata2 = [
            'randomNumber2' => ".",
        ];

        // Send first email
        Mail::to($reclamation->email)->send(new Myemail('send', $randomNumberdata2));

        // Send second email
        Mail::to("radeelprojet@gmail.com")->send(new Myemail('send2', $randomNumberdata));


        //Mail::to('radeelreclamation@gmail.com')->send( new Myemail());

        //Redirect back with a success message and the numDossier for modal display
        return redirect()->back()->with(['randomNumber' => $randomNumber, 'showModal' => true, 'success' => "Votre reclamation $randomNumber est ajoutée avec succèss", 'idox' => $reclamation->id]);

    }

    /*   public function searchreacalamtion(Request $request){

          $reclamation = $request->reclamationumero;
          $rec    = reclamation::where('randomnumber',$reclamation)->where('status','traiter')->count();
          $recole = reclamation::where('randomnumber',$reclamation)->where('status','Envoyé')->count();

          $ido = reclamation::where('randomnumber', $reclamation)
          ->where('status', 'traiter')
          ->select('id')
          ->first();



          return redirect()->back()->with(['reco' => $rec,'recole'=>$recole, 'showModale' => true]);
      } */

    /*  public function searchreacalamtion(Request $request){

         $rec    = reclamation::where('randomnumber',$request->randomnumber)->where('status','traiter')->first();
         $recole = reclamation::where('randomnumber',$request->randomnumber)->where('status','Envoyé')->first();

         return redirect()->back()->with(['reco' => $rec,'recole'=>$recole, 'showModale' => true,'numero'=>$rec->id,'numero2'=>$recole->id]);
     } */

    public function searchreacalamtion(Request $request)
    {
        $rec = reclamation::where('randomnumber', $request->randomnumber)
            ->where('status', 'traiter')
            ->first();

        $recole = reclamation::where('randomnumber', $request->randomnumber)
            ->where('status', 'Envoyé')
            ->first();

        $recole1 = reclamation::where('randomnumber', $request->randomnumber)
            ->where('status', 'En cours')
            ->first();

        // Check if $rec and $recole are not null before accessing their properties
        $recId = $rec ? $rec->id : null;
        $recoleId = $recole ? $recole->id : null;
        $recoles= $recole1 ? $recole1->id : null;

        return redirect()->back()->with([
            'reco' => $rec,
            'recole' => $recole,
            'recoles' => $recole1,
            'showModale' => true,
            'numero' => $recId,
            'numero2' => $recoleId,
            'numero3'=>$recoles
        ]);
    }


    //sms
    public function sms()
    {
        return view('SMS');
    }
    public function addsms(Request $request)
    {

        $reclamation = new sms();
        $reclamation->numDossier = $request['numDossier'];
        $reclamation->numtele = $request['tele'];
        $reclamation->email = $request['email'];
        $reclamation->save();
        return redirect()->back()->with(['success' => "SMS ajoutée avec succès"]);

    }

    //stage
    public function stage()
    {
        return view('stage');
    }
    public function addstage(Request $request)
    {

        if ($request->has('cv')) {

            $stage = new stage();
            $stage->name = $request['name'];
            $stage->prenom = $request['prenom'];
            $stage->email = $request['email'];
            $stage->tele = $request['tele'];
            $stage->service = $request['service'];

            $cv = $request['cv'];
            $imagecv = time() . '_' . $cv->getClientoriginalname();
            $cv->move(public_path('cv'), $imagecv);

            $de = $request['demande'];
            $demande = time() . '_' . $de->getClientoriginalname();
            $de->move(public_path('demandestage'), $demande);

            $as = $request['assurance'];
            $assurance = time() . '_' . $as->getClientoriginalname();
            $as->move(public_path('assurance'), $assurance);

            $cin = $request['cin'];
            $imagecin = time() . '_' . $cin->getClientoriginalname();
            $cin->move(public_path('cin'), $imagecin);

            $pass = $request['passsanitaire'];
            $passsanitaire = time() . '_' . $pass->getClientoriginalname();
            $pass->move(public_path('passsanitaire'), $passsanitaire);

            $stage->cv = $imagecv;
            $stage->Dstage = $demande;
            $stage->assurance = $assurance;
            $stage->cin = $imagecin;
            $stage->passsanitaire = $passsanitaire;
            $stage->save();

            return redirect()->back()->with(['success' => "Votre demande ajoutée avec succès"]);

        }


    }

    //resiliation
    public function resiliation(Request $request)
    {

        return view('resiliation');
    }
    public function addresul(Request $request)
    {

        if ($request->status == "physique") {

            $resul = new physiqueresiliation();
            $resul->gerance = $request['gerance'];
            $resul->numPolice = $request['numPolice'];
            $resul->addressRD = $request['addressRD'];
            $resul->province = $request['province'];
            $resul->status = $request['status'];
            $resul->namecomplete = $request['namecomplete'];
            $resul->cingerant = $request['cingerant'];
            $resul->tele = $request['tele'];
            $resul->email = $request['email'];
            $resul->numCB = $request['numCB'];
            $resul->adressCorres = $request['adressCorres'];
            $resul->ville = $request['ville'];

            if ($request['cin']) {
                $cin = $request['cin'];
                $imagecin = time() . '_' . $cin->getClientoriginalname();
                $cin->move(public_path('cinresuluohysique'), $imagecin);
                $resul->cin = $imagecin;
            }

            if ($request['Contrat']) {
                $Contrat = $request['Contrat'];
                $imagecontart = time() . '_' . $Contrat->getClientoriginalname();
                $Contrat->move(public_path('Contratresulu'), $imagecontart);
                $resul->Contrat = $imagecontart;
            }

            if ($request['RIB']) {
                $rib = $request['RIB'];
                $ribdossier = time() . '_' . $rib->getClientoriginalname();
                $rib->move(public_path('RIB'), $ribdossier);
                $resul->RIB = $ribdossier;
            }



            $resul->save();

            return redirect()->back()->with(['success' => "resiliation Envoyer avec succès"]);
        } else {
            if ($request->has('Dresiliation')) {


                $resul = new physiqueresiliation();
                $resul->gerance = $request['gerance'];
                $resul->numPolice = $request['numPolice'];
                $resul->addressRD = $request['addressRD'];
                $resul->province = $request['province'];
                $resul->status = $request['status'];
                $resul->raison = $request['raison'];
                $resul->namecomplete = $request['namecomplete'];
                $resul->cingerant = $request['cingerant'];
                $resul->tele = $request['tele'];
                $resul->email = $request['email'];
                $resul->numCB = $request['numCB'];
                $resul->adressCorres = $request['adressCorres'];
                $resul->ville = $request['ville'];

                if ($request['cin']) {
                    $cin = $request['cin'];
                    $imagecin = time() . '_' . $cin->getClientoriginalname();
                    $cin->move(public_path('cinresuluohysique'), $imagecin);
                    $resul->cin = $imagecin;

                }

                if ($request['Contrat']) {
                    $Contrat = $request['Contrat'];
                    $imagecontart = time() . '_' . $Contrat->getClientoriginalname();
                    $Contrat->move(public_path('Contratresulu'), $imagecontart);
                    $resul->Contrat = $imagecontart;

                }
                if ($request['RIB']) {
                    $rib = $request['RIB'];
                    $ribdossier = time() . '_' . $rib->getClientoriginalname();
                    $rib->move(public_path('RIB'), $ribdossier);
                    $resul->RIB = $ribdossier;

                }

                if ($request['Dresiliation']) {
                    $Dresiliatione = $request['Dresiliation'];
                    $Dresiliationdossier = time() . '_' . $Dresiliatione->getClientoriginalname();
                    $Dresiliatione->move(public_path('Dresiliationdossier'), $Dresiliationdossier);
                    $resul->Dresiliation = $Dresiliationdossier;

                }



                $resul->save();

                return redirect()->back()->with(['success' => "Resiliation Envoyer avec succès"]);
            }
        }



    }
    //abonnement
    public function abonnement()
    {
        return view('abonnement');
    }
    public function addabonnement(Request $request)
    {


        $resul = new abonnement();
        $resul->gerance = $request['gerance'];
        $resul->typeabonnement = $request['typeabonnement'];
        $resul->adressabonnement = $request['adressabonnement'];
        $resul->province = $request['province'];
        $resul->status = $request['status'];
        $resul->client = $request['client'];
        $resul->namecomplete = $request['namecomplete'];
        $resul->cin = $request['cin'];
        $resul->tele = $request['tele'];
        $resul->email = $request['email'];
        $resul->adresscorresp = $request['adresscorresp'];
        $resul->naturedemandeur = $request['naturedemandeur'];
        $resul->ville = $request['ville'];
        $resul->raisonsociale = $request['raisonsociale'];
        $resul->numeroregister = $request['numeroregister'];

        if ($request->has('cingerantfile')) {
            $cingerantfile = $request['cingerantfile'];
            $filecingerant = time() . '_' . $cingerantfile->getClientoriginalname();
            $cingerantfile->move(public_path('cingerantfile'), $filecingerant);
            $resul->cingerantfile = $filecingerant;
        }
        if ($request->has('justificationoccupationfile')) {
            $justificationoccupationfile = $request['justificationoccupationfile'];
            $justificationoccupationfilee = time() . '_' . $justificationoccupationfile->getClientoriginalname();
            $justificationoccupationfile->move(public_path('justificationoccupationfile'), $justificationoccupationfilee);
            $resul->justificationoccupationfile = $justificationoccupationfilee;
        }
        if ($request->has('Quittancepolicefile')) {
            $Quittancepolicefile = $request['Quittancepolicefile'];
            $Quittancepolicefilee = time() . '_' . $Quittancepolicefile->getClientoriginalname();
            $Quittancepolicefile->move(public_path('Quittancepolicefile'), $Quittancepolicefilee);
            $resul->Quittancepolicefile = $Quittancepolicefilee;
        }
        if ($request->has('statusentitefile')) {
            $statusentitefile = $request['statusentitefile'];
            $statusentitefilee = time() . '_' . $statusentitefile->getClientoriginalname();
            $statusentitefile->move(public_path('statusentitefile'), $statusentitefilee);
            $resul->statusentitefile = $statusentitefilee;
        }
        if ($request->has('registercommercefile')) {
            $registercommercefile = $request['registercommercefile'];
            $registercommercefilee = time() . '_' . $registercommercefile->getClientoriginalname();
            $registercommercefile->move(public_path('registercommercefile'), $registercommercefilee);
            $resul->registercommercefile = $registercommercefilee;
        }

        if ($request->has('recudevisfile')) {
            $recudevisfile = $request['recudevisfile'];
            $recudevisfilee = time() . '_' . $recudevisfile->getClientoriginalname();
            $recudevisfile->move(public_path('recudevisfile'), $recudevisfilee);
            $resul->recudevisfile = $recudevisfilee;
        }
        if ($request->has('permihabiterfile')) {
            $permihabiterfile = $request['permihabiterfile'];
            $permihabiterfilee = time() . '_' . $permihabiterfile->getClientoriginalname();
            $permihabiterfile->move(public_path('permihabiterfile'), $permihabiterfilee);
            $resul->permihabiterfile = $permihabiterfilee;
        }
        if ($request->has('cinfile')) {
            $cinfile = $request['cinfile'];
            $cinfilee = time() . '_' . $cinfile->getClientoriginalname();
            $cinfile->move(public_path('cinfile'), $cinfilee);
            $resul->cinfile = $cinfilee;
        }
        if ($request->has('autorisationlegaliseefile')) {
            $autorisationlegaliseefile = $request['autorisationlegaliseefile'];
            $autorisationlegaliseefilee = time() . '_' . $autorisationlegaliseefile->getClientoriginalname();
            $autorisationlegaliseefile->move(public_path('autorisationlegaliseefile'), $autorisationlegaliseefilee);
            $resul->autorisationlegaliseefile = $autorisationlegaliseefilee;
        }

        $resul->save();

        return redirect()->back()->with(['success' => "les document d'abonnement Envoyer avec succès"]);
    }

}
