<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;

class PacketController extends Controller
{
  public function index() {
    $packets = Packet::all();
    return view('packets', compact('packets'));
  }
}
