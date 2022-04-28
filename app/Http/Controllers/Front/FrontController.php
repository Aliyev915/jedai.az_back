<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Services\PortCategoryService;
use App\Services\PortContentService;
use App\Services\TeamService;
use App\Models\Partner;
use App\Models\Letter;
use App\Services\PackageCategoryService;
use App\Services\PackageContentService;
use App\Services\PackageFeatureService;
use Illuminate\Support\Facades\Validator;
use App\Models\Arrmail;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    protected $setting, $team, $portcategory, $portcontent, $packcategory, $packcontent, $packfeature;

    public function __construct(
        SettingService $setting,
        TeamService $team,
        PortCategoryService $portcategory,
        PortContentService $portcontent,
        PackageCategoryService $packcategory,
        PackageContentService $packcontent,
        PackageFeatureService $packfeature
    ) {
        $this->setting      = $setting;
        $this->portcategory = $portcategory;
        $this->portcontent  = $portcontent;
        $this->team         = $team;
        $this->packcategory = $packcategory;
        $this->packcontent  = $packcontent;
        $this->packfeature  = $packfeature;
    }

    public function homepage()
    {
        $setting      = $this->setting->getById();
        $portcategory = $this->portcategory->getAll()->where('status', 1);
        $portcontent  = $this->portcontent->takeData(8, 'sort', 'ASC')->where('status', 1);
        $team         = $this->team->getAll('sort', 'ASC')->where('status', 1);
        $partners     = Partner::where('status', 1)->orderBy('sort', 'ASC')->get();
        $letters      = Letter::where('status', 1)->orderBy('sort', 'ASC')->get();
        return view('front.homepage')->with('portcategory', $portcategory)
            ->with('portcontent', $portcontent)
            ->with('team', $team)
            ->with('setting', $setting)
            ->with('partners', $partners)
            ->with('letters', $letters);
    }

    public function portfolio()
    {
        $setting      = $this->setting->getById();
        $portcategory = $this->portcategory->getAll()->where('status', 1);
        $portcontent  = $this->portcontent->takeData(8, 'sort', 'ASC')->where('status', 1);
        return view('front.portfolio')->with('portcategory', $portcategory)
            ->with('portcontent', $portcontent)
            ->with('setting', $setting);
    }

    public function sitePreparation()
    {
        $setting      = $this->setting->getById();
        $portcategory = $this->portcategory->getAll()->where('status', 1);
        $portcontent  = $this->portcontent->getAll('sort', 'ASC')->where('status', 1);
        $team         = $this->team->getAll('sort', 'ASC')->where('status', 1);
        $partners     = Partner::where('status', 1)->orderBy('sort', 'ASC')->get();
        $letters      = Letter::where('status', 1)->orderBy('sort', 'ASC')->get();
        $packcategories = $this->packcategory->getAll()->where('status', 1);
        $packcontent    = $this->packcontent->getAll()->where('status', 1);
        $packfeature    = $this->packfeature->getAll();
        return view('front.site-preparation')->with('portcategory', $portcategory)
            ->with('portcontent', $portcontent)
            ->with('team', $team)
            ->with('setting', $setting)
            ->with('partners', $partners)
            ->with('letters', $letters)
            ->with('packcategories', $packcategories)
            ->with('packcontent', $packcontent)
            ->with('packfeature', $packfeature);
    }

    public function contact()
    {
        $setting      = $this->setting->getById();
        return view('front.contact')->with('setting', $setting);
    }



    public function sendMessage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha',
            'email' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'mesaj' => 'required',
        ]);
        if ($validator->passes()) {
            $to_name = "faxri";
            $to_email = "info@jedai.az";
            $data = array("email" => $request->email, "name" => $request->name, "phone" => $request->tel, "body" => $request->mesaj);
            Mail::send("emails.mail", $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject("Jedai.az Saytindan muraciet gəldi");
                $message->from("gamerpro1188@gmail.com", "Muraciet");
            });

            $arrmail = Arrmail::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->mesaj,
                'phone' => $request->tel,
            ]);
            toastr()->success('Mesajınız Göndərildi');
        } else {
            toastr()->error('Kodu düzgün daxil edin');
        }

        return redirect()->back();
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
