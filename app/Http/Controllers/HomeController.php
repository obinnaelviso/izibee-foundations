<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function causes() {
        return view('causes');
    }

    public function causesSensitizationCampaign() {
        return view('causes.sensitization-campaign');
    }

    public function causesHelpSchoolChildren() {
        return view('causes.help-school-children');
    }

    public function causesSupportLessPrivileged() {
        return view('causes.support-less-privileged');
    }

    public function causesProvideCleanWater() {
        return view('causes.provide-clean-water');
    }

    public function causesYouthEmpowerment() {
        return view('causes.youth-empowerment');
    }

    public function donation() {
        return view('donation');
    }

    public function volunteer() {
        return view('volunteer');
    }

    public function volunteerCommunityServicePledge() {
        return view('volunteer.community-service-pledge');
    }

    public function stories() {
        return view('stories');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        return redirect('https://blog.izibeehallmarkfoundation.org');
    }

    public function volunteerRegister() {
        return view('volunteer.register');
    }
}
