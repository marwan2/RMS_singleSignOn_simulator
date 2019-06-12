<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function invoicingLogin()
    {
        $cookie_name        = 'pwp_invoicing_ck';
        $expire             = time()+3600; /* expire in 1 hour */
        $ck_path            = '/picwpost_invoicing/public/'; //optional, but I set it, to be able to catch it in Invoicing
        $invoicing_app_url  = 'http://localhost/picwpost_invoicing/public/auth_line';
 
        $token_cookie       = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVmMWIwMTVkZDIxMTYyY2IzOWZjMjQyNjViZmMyZDdmNjJlNDM5ZGJmYTc1ZmY5MzA1YjNmNDM5NzcxMTVkYzc0N2VjNDNhZDA1YjM0MjE5In0.eyJhdWQiOiI0OCIsImp0aSI6IjVmMWIwMTVkZDIxMTYyY2IzOWZjMjQyNjViZmMyZDdmNjJlNDM5ZGJmYTc1ZmY5MzA1YjNmNDM5NzcxMTVkYzc0N2VjNDNhZDA1YjM0MjE5IiwiaWF0IjoxNTYwMzI4ODE5LCJuYmYiOjE1NjAzMjg4MTksImV4cCI6MTU5MTk1MTIxOSwic3ViIjoiMzkiLCJzY29wZXMiOltdfQ.WTCIJ8oG-04AOaTrvoqUXIp8FU9ZcFVaCWHMD9duw47V5hmZhcGkE4k4ltGRBIgXfOcAVu0v7H0mARaZ6mMApJnMB3ov9G5FP2DOAjKhzWKBhBJnUFDuHUegRnSxXjGRxP-BZPdopFnPL4BWIQWQ-YcQAHoFekdJ6uuP4XtMbkMAjUTDWnRHLf_hwqAX4LzvXdfSlIqrbZnRAT4xxP5Prp1hztmX_F-bRdGSvbd-FRHg94hhNbqKiDBtX2_iaba_kha5uFpFAkbgch8bbMjaPLcCp4OG4VsKIxrBPure62ELhja76T_vJ1UsQ88pf2RYM-6NxMJ3EVwUSFvbDRHvadudwnSJtIqaxF1z5dhTkHCcQ_bhb1pP_rUN4oqZP4LP7cgfaJYhid6ysFWMuEoxrmpQpfnwkAc8NS1GDPjY7EztvU7lf8U3lHUaZ0dfqTOgTliOm3fL68MI7T5OySYJ0ONTbW55z9EjpU8-QnWXGqDRrPRDR3coILg-ERnMbIYFB9uDQZ7Kj3NCWbmz9r0iT2vSqN7EVv96xowZJjoy9KWBe6VeVc2vDIRNrG_tS8z2sKtDzD8TJsUR-JhHrKsZ1NIP1VVVxbWhFev0pbWdSsW7Ia_5S6CaSPVwBAPn4HlkVOxMuSpLtgRKQ8skpV-fhcD7kEjNzrAH8ikXNR3hPgk";

        setcookie($cookie_name, $token_cookie, $expire, $ck_path);
        return redirect()->to($invoicing_app_url);
    }
}