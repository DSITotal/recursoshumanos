<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {
  public function getIndex() {
    return view('welcome');
  }

  public function getAbout() {
    $companyName = "Total Petróleo CR";

    return view('pages.about')->with("name", $companyName);
  }

  public function getContact() {
    return view('pages.contact');
  }

  public function getHelp() {
    return view('pages.help');
  }
}